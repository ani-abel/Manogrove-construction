<?php
/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 3/29/2019
 * Time: 8:34 PM
 */

require_once("../PHP_classes/initialize.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get form fields here
    $username = (!empty($_POST["username"]) ? sanitizeLowercase($_POST["username"]) :
    die(
        output_err_message("Username is required")
    ));

    $password = (!empty($_POST["password"]) ? sanitizeLowercase($_POST["password"]) :
        die(
        output_err_message("Password is required")
        ));

    $valid_credentials = Array(
                0 => Array("username"=>"justin_bieber", "password"=>"rex4456"),
                1 => Array("username"=>"jim_reynolds", "password"=>"rex4456")
     );

    if( User::authenticateUsingArray($username, $password, $valid_credentials) ){
        global $session;
        $session->loginUsingVirtualDB();
        if( isset($session->user_id) )
            die(
                "Log user in"
            );
    }
    else die(
        output_err_message("Match not found")
    );
}