<?php
require_once("dbconfig.php");
class CONTACTUS extends dbconfig {
 
   public static $data;
 
   function __construct() {
     parent::__construct();
   }
 
 // Contact us
   public static function sendMessage($cdata) {
     try {
       $query = "INSERT INTO contact (name, email, message) ";
       $query .= "VALUES ('".$cdata['name']."', '".$cdata['email']."', '".$cdata['message']."')";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Error");
       }       
       $data = array('status'=>'success', 'msg'=>"Message Sent to ADMIN", 'result'=>'');
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }
 }
 