<?php
/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 3/29/2019
 * Time: 8:19 PM
 */
require_once("../PHP_classes/initialize.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get the form fields
    $post_title = (!empty($_POST["post_title"]) ? sanitizeLowercase($_POST["post_title"]) :
        die(
            output_err_message("Post title is required")
        ));

    $post_body = (!empty($_POST["body"]) ? $_POST["body"] :
        die(
            output_err_message("Post body is required")
        ));

    if( isset( $post_title, $post_body ) )
        BlogPosts::addPost($post_title, $post_body);
}