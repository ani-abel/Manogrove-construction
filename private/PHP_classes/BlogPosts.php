<?php

/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 11/2/2018
 * Time: 7:20 AM
 */
require_once("initialize.php");

final class BlogPosts
{

    public static function addPost( $post_title, $post_body ){
        global $db;
        if( isset( $post_title, $post_body ) ){
            $post_title = $db->escape_value($post_title);
            $post_body = $db->escape_value($post_body);
            $date_of_entry = time();

            if( static::doesPostExist($post_title, $post_body) ){
                die(
                    output_err_message("Similar post already exists")
                );
            }
            else {
                //Insert into DB table
                $query = INS." blog_posts(post_title, post_body, date_of_entry)";
                $query .= "VALUES('{$post_title}', '{$post_body}', '{$date_of_entry}')";

                if( $db->query($query) ){
                    die(
                        output_success_message("Post added")
                    );
                }
            }
        }
    }//End of method: addPost()

    public static function getABlogPost($post_id=0){
        global $db;
        $rs_arr = [];
        $query = SEL_ALL." blog_posts WHERE(post_id='{$post_id}') ORDER BY post_id DESC LIMIT 1";
        $rs = $db->query($query);
        if($rs && $db->num_rows($rs) > 0){
            $rs_arr = $db->fetch_array($rs);
        }
        return ($rs_arr == null) ? null : $rs_arr;
    }//End of method: getABlogPost()

    public static function createARandomTitleImage(){
        $images_arr = [
            "../images/325b558aed167f0.jpeg",
            "../images/325b558b4b04f9b.jpeg",
            "../images/325b558eb0134e4.jpeg",
            "../images/325b558fb5cf471.jpeg"
        ];
        $rand = mt_rand(0, count($images_arr) - 1);
        return $images_arr[$rand];
    }//End of method: createARandomTitleImage()

    //get all blogPosts()
    public static function getAllPosts($st_limit=0, $end_limit=10){
        global $db;
        $rs_arr = [];
        $query = SEL_ALL." blog_posts ORDER BY post_id DESC LIMIT {$st_limit}, {$end_limit}";
        $rs = $db->query($query);
        if( $db->num_rows($rs) > 0){
            while($row = $db->fetch_array($rs)){
                array_push($rs_arr, array(
                    "post_id"=>$row["post_id"],
                    "post_title"=>$row["post_title"],
                    "post_body"=>$row["post_body"],
                    "date_of_entry"=>dateToString($row["date_of_entry"])
                ));
            }
        }
        return ($rs_arr == null) ? null : $rs_arr;
    }//End of method: getAllPosts()

    private static function doesPostExist($post_title, $post_body){
        global $db;
        $query = SEL_ALL." blog_posts WHERE(post_title = '{$post_title}' OR post_body = '{$post_body}')";
        $rs = $db->query($query);
        return ( $db->num_rows($rs) > 0 ? true : false );
    }//End of method: doesPostExist()

}//End of class: BlogPosts