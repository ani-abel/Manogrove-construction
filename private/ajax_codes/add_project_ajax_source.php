<?php
/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 3/29/2019
 * Time: 8:12 PM
 */
require_once ("../PHP_classes/initialize.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get the form fields
    $project_name = (!empty($_POST["project_name"]) ? sanitizeLowercase($_POST["project_name"]) :
        die(
            output_err_message("Project name is required")
        ));

    $project_desc = (!empty($_POST["project_desc"]) ? sanitizeLowercase($_POST["project_desc"]) :
        die(
            output_err_message("Project desc is required")
        ));

    $project_images = $_FILES["project_images"];

    if( isset( $project_desc, $project_name ) && !empty($project_images["name"]) )
        Project::addProject($project_name, $project_desc, $project_images);

}