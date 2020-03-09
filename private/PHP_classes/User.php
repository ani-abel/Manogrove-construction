<?php

/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 6/5/2018
 * Time: 8:05 PM
 */
require_once("initialize.php");
require_once("database.php");

class User extends databaseobject
{
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function isActivated($username, $password){
        global $database;
        $database->escape_value($username);
        $database->escape_value($password);

        $sql = "SELECT * FROM ".self::$table_name." WHERE(username='{$username}' AND password='{$password}' ";
        $sql .= "AND isBlocked=1) LIMIT 1";
        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public function full_name(){
        return (isset($this->first_name, $this->last_name)) ? $this->first_name ." ". $this->last_name :  "";
    }

    /**
     * @param $username
     * @param $password
     * @param $usernamePasswordList[]
     * @return boolean
    */
    public static function authenticateUsingArray( $username="", $password="", Array $usernamePasswordList=null ){
        $isMatchFound = false;
        if( !($usernamePasswordList == null) ){
            /**
             * array format: Array(
             *   0=>Array("username"=>"justin_bieber", "password"=>"rex4456"),
             *   1=>Array("username"=>"jim_reynolds", "password"=>"rex4456")
             * );
             */
            foreach($usernamePasswordList as $key=>$value){
                if( ($username == $value["username"] && $password == $value["password"]) ){
                    //if the above condition returns 'true', register the user's token & allow access
                    $isMatchFound = true;
                    break;
                }
            }
        }
        return (boolean)$isMatchFound;
    }

}