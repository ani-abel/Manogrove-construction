<?php

/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 3/30/2019
 * Time: 7:44 AM
 */
require_once("initialize.php");

final class Project
{
    public static function addProject($project_name, $project_desc, Array $project_images){
        global $db;

        if( strlen($project_name) > 150 ){
            die(
                output_err_message("Project name is too long")
            );
        }
        else{
            $uploaded_files = static::uploadProjectImages($project_images);
            if( !$uploaded_files == null ){
                $project_name = $db->escape_value($project_name);
                $project_desc = $db->escape_value($project_desc);
                $project_img = static::createImageString($uploaded_files);
                $date_of_entry = time();

                if( static::doesProjectExist($project_name, $project_desc) ){
                    die(
                        output_err_message("Similar project already exists")
                    );
                }
                else {
                    $query = INS." projects(project_name, project_desc, project_images, date_of_entry)";
                    $query .= "VALUES('{$project_name}', '{$project_desc}', '{$project_img}', '{$date_of_entry}')";

                    if( $db->query($query) )
                        die(
                        output_success_message("Project added")
                        );
                }
            }
        }
    }//End of method: addProject()

    //Returns an array of
    private static function uploadProjectImages(Array $images){
        $rs_arr = [];
        //create directories to store the images
        makeMyDir("../project_images");
        makeMyDir("../project_images/copies");

        //validate images
        if( static::validateProjectImages($images) ){

            for( $i = 0; $i < count($images["name"]); $i++ ){
                $tmp_path = $images["tmp_name"][$i];
                $image_type = $images["type"][$i];

                //generate a random name for the uploaded image
                $new_name = static::generateRandomImageName($image_type);
                $path = "../project_images/".basename($new_name);
                //move the file
                move_uploaded_file($tmp_path, $path);
                array_push($rs_arr, $path);

                //make a copy
                static::cropImage($path);
            }
        }
        return $rs_arr;
    }//End of method: uploadProjectImages()

    private static function cropImage($image_path){
        $imageObject = new imageLib($image_path);
        $imageObject->resizeImage(300, 300);
        $new_name = "../project_images/copies/".basename($image_path);
        $imageObject->saveImage($new_name, 100);

        return $new_name;
    }//End of method: cropImage()

    //Returns a formatted string: "img.jpg*img.png*utp_image.gif" after generating a random image name
    private static function createImageString(Array $image_paths){
        $final_string = "";
        //for-each
        foreach($image_paths as $key => $value){
            $final_string .= ($key == (count($image_paths) - 1) ? "{$value}" : "{$value}*");
        }
        return $final_string;
    }//End of method: createImageString()

    private static function generateRandomImageName($image_type){
        $split_type = explode("/", $image_type);
        $ext = strtolower(end($split_type));
        $new_name = basename("image-".time().".{$ext}");

        return $new_name;
    }//End of method:generateRandomImageName()

    private static function validateProjectImages(Array $images){
        $are_images_valid = false;

        if( !($images == null) ){
            for( $i = 0; $i < count($images["name"]); $i++ ){
                $image_type = $images["type"][$i];
                $image_name = $images["name"][$i];
                $image_error = $images["error"][$i];
                $image_size = $images["size"][$i];

                //Check for error
                if( $image_error <= 0 ){
                    //Check for image size
                    if( $image_size <= DEFAULT_IMAGE_SIZE  ){
                        //Check for file-type
                        if( preg_match("/(jpe?g|png|gif)$/i", $image_type) ){
                            $are_images_valid = true;
                        }
                        else die(
                            output_err_message("Wrong file format")
                        );
                    }
                    else die(
                        output_err_message("File exceeds limit of ".DEFAULT_IMAGE_SIZE." bytes")
                    );
                }
                else die(
                    output_err_message("File: {$image_name} has an error")
                );
            }
        }
        return $are_images_valid;
    }//End of method: validateProjectImages()

    /**
     * @param $image
     * @return boolean | string
    */
    private static function validateSingleProjectImage(Array $image){
        $is_image_valid = false;
        $file_name = $image["name"];

        if( !empty($image["name"]) ){
            //check the size
            if( $image["size"] <= DEFAULT_IMAGE_SIZE ){
                //check file type
                if( preg_match("/(jpe?g|png|gif)$/i", $image["type"]) ){
                    $is_image_valid = true;
                }
            }
        }
        return ($is_image_valid ? $is_image_valid : die(
            output_err_message("File: {$file_name} is invalid")
        ));
    }//End of method: validateSingleProjectImage()

    public static function getAllProjects($st_limit=0, $end_limit=10){
        global $db;
        $rs_arr = [];
        $query = SEL_ALL." projects ORDER BY project_id DESC LIMIT {$st_limit}, {$end_limit}";
        $rs = $db->query($query);

        if($db->num_rows($rs) > 0){
            while( $row = $db->fetch_array($rs) ){
                array_push($rs_arr, array(
                    "project_id"=> $row["project_id"],
                    "project_name"=>$row["project_name"],
                    "project_desc"=>$row["project_desc"],
                    "date_of_entry"=>dateToString($row["date_of_entry"]),
                    "project_images"=>explode("*", $row["project_images"])
                ));
            }
        }
        return ($rs_arr == null ? null : $rs_arr);
    }//End of method: getALlProjects()

    public static function getSixProjects(){
        global $db;
        $rs_arr = [];
        $query = SEL_ALL." projects ORDER BY project_id DESC LIMIT 6";
        $rs = $db->query($query);
        if( $db->num_rows($rs) > 0 ){
            while( $row = $db->fetch_array($rs) ){
                array_push($rs_arr, array(
                    "project_id"=> $row["project_id"],
                    "project_name"=>$row["project_name"],
                    "project_desc"=>$row["project_desc"],
                    "date_of_entry"=>dateToString($row["date_of_entry"]),
                    "project_images"=>explode("*", $row["project_images"])
                ));
            }
        }
        return ($rs_arr == null ? null : $rs_arr);
    }//End of method: getSixProjects()

    public static function getAProject($project_id=0){
        global $db;
        $rs_arr = [];
        $query = SEL_ALL." projects WHERE(project_id='{$project_id}')";
        $rs = $db->query($query);

        if( $db->num_rows($rs) > 0 ){
            $row = $db->fetch_array($rs);
            array_push($rs_arr, array(
                "project_id"=> $row["project_id"],
                "project_name"=>$row["project_name"],
                "project_desc"=>$row["project_desc"],
                "date_of_entry"=>dateToString($row["date_of_entry"]),
                "project_images"=>explode("*", $row["project_images"])
            ));
        }
        return ($rs_arr == null ? null : $rs_arr[0]);
    }//End of method: getAProject()

    private static function doesProjectExist($project_name, $project_desc){
        global $db;
        $query = SEL_ALL." projects WHERE(project_name = '{$project_name}' OR project_desc = '{$project_desc}')";
        $rs = $db->query($query);
        return ( $db->num_rows($rs) > 0 ? true : false );
    }

}//End of class: Projects