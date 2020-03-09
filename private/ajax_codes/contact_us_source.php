<?php
/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 3/31/2019
 * Time: 7:51 PM
 */
require_once("../PHP_classes/initialize.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get the form fields
    $contact_name = (!empty($_POST["contact_name"]) ? sanitizeLowercase($_POST["contact_name"]) :
        die(
            output_err_message("Name is required")
        ));

    $contact_email = (!empty($_POST["contact_email"]) ? sanitizeLowercase($_POST["contact_email"]) :
        die(
            output_err_message("Email is required")
        ));

    $contact_tel = (!empty($_POST["contact_phone"]) ? sanitizeLowercase($_POST["contact_phone"]) :
        die(
            output_err_message("Phone is required")
        ));

    $contact_inquiry = (!empty($_POST["contact_inquiry"]) ? sanitizeLowercase($_POST["contact_inquiry"]) :
        die(
            output_err_message("Inquiry is required")
        ));

    //Check for valid Email validity
    if( !filter_var($contact_email, FILTER_VALIDATE_EMAIL) ){
        die(
            output_err_message("Invalid email address")
        );
    }

    if( isset($contact_name, $contact_email, $contact_inquiry) ){
        //compose message
        $message = "{$contact_inquiry}\n\nContact Information:\nEmail: {$contact_email}\n";
        $message .= (empty($contact_tel) ? "" : "Phone No: {$contact_tel}\n");

        //compose subject
        $subject = "Inquiry from: {$contact_inquiry}";

        if( @mail("abelanico6@gmail.com", $subject, $message) )
            die(
                output_success_message("Thanks. will send you a reply soon")
            );
        else
            die(
                output_err_message("Message was not sent. Try again")
            );
    }
}