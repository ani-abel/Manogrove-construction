<?php
/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 3/30/2019
 * Time: 7:16 AM
 */
require_once("initialize.php");

global $session;
if( $session->is_logged_in() ){
    $session->logout();
    redirect_to("../login.php");
}