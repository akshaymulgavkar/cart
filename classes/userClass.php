<?php
require_once("dbconfig.php");
class USER extends dbconfig {
 
   public static $data;
 
   function __construct() {
     parent::__construct();
   }
 
 // signup
   public static function addNewUser($userData) {
     try {
       $check = self::checkUserExist($userData['email']);
       if($check['status'] == 'error') {
       $data = $check;
       } else {
       $query = "INSERT INTO users (first_name, last_name, gender, email, hno, street, city, state, zipcode, country, telephone, fax, password) ";
       $query .= "VALUES ('".$userData['first_name']."', '".$userData['last_name']."', '".$userData['gender']."', '".$userData['email']."', '".$userData['hno']."', '".$userData['street']."', '".$userData['city']."', '".$userData['state']."', '".$userData['zipcode']."', '".$userData['country']."', '".$userData['telephone']."', '".$userData['fax']."', '".md5($userData['password'])."')";
       $check = self::checkUserExist($userData['email']);
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Error");
       }       
       $data = array('status'=>'success', 'msg'=>"You have been registered successfully login now.", 'result'=>'');
      }
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }
 
  // Check if user already exist
   public static function checkUserExist($email) {
     try {
       $query = "SELECT email FROM users WHERE email = '".$email."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Error");
       }
       $count = mysqli_num_rows($result); 
       if($count>0) {
          throw new exception("Email ID already registered");
       }       
       $data = array('status'=>'success', 'msg'=>"", 'result'=>'');
     } catch (Exception $e) {
      echo  $data = array('status'=>'error', 'msg'=>$e->getMessage()); 
     } finally {
        return $data;
     }
   }
 
// Check if email/password is incorrect
   public static function checkUser($email, $password) {
     try {
       $query = "SELECT email FROM users WHERE email = '".$email."' and password = '".md5($password)."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Error in query!");
       }
       $count = mysqli_num_rows($result); 
       if($count == 0) {
          throw new exception("Username/Password is incorrect.");
       }        
       $data = array('status'=>'success', 'msg'=>"", 'result'=>'');
     } catch (Exception $e) {
      echo  $data = array('status'=>'error', 'msg'=>$e->getMessage()); 
     } finally {
        return $data;
     }
   }
 
  // login 
   public static function login($email, $password) {
     try {
        $check = self::checkUser($email, $password);
       if($check['status'] == 'error') {
       $data = $check;
       } else {
       $query = "SELECT id FROM users WHERE email = '".$email."' AND password = '".md5($password)."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Error");
       }
       $resultSet = mysqli_fetch_assoc($result);         
       $data = array('status'=>'success', 'msg'=>"Logged in successfully .", 'result'=>$resultSet);
      }
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

  //Admin login 
   public static function adminlogin($email, $password) {
     try {
        $check = self::checkUser($email, $password);
       if($check['status'] == 'error') {
       $data = $check;
       } else {
       $query = "SELECT id FROM users WHERE email = '".$email."' AND password = '".md5($password)."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Error");
       }
       $resultSet = mysqli_fetch_assoc($result);         
       $data = array('status'=>'success', 'msg'=>"Logged in successfully .", 'result'=>$resultSet);
      }
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

  // Get user information by userid
  public static function getUserById($id) {
     try {
       $query = "SELECT * FROM users WHERE id='".$id."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Error");
       }
       $resultSet = mysqli_fetch_assoc($result); 
       $data = array('status'=>'success',  'msg'=>"User detail fetched successfully", 'result'=>$resultSet);
     } catch (Exception $e) {
       $data = array('status'=>'error',  'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

   // // Check if email/password is incorrect
   // public static function checkUserForgot($email) {
   //   try {
   //     $query = "SELECT email FROM users WHERE email = '".$email."'";
   //     $result = dbconfig::run($query);
   //     if(!$result) {
   //       throw new exception("Error in query!");
   //     }
   //     $count = mysqli_num_rows($result); 
   //     if($count == 0) {
   //        throw new exception("Email not registered.");
   //     }        
   //     $data = array('status'=>'success', 'msg'=>"", 'result'=>'');
   //   } catch (Exception $e) {
   //    echo  $data = array('status'=>'error', 'msg'=>$e->getMessage()); 
   //   } finally {
   //      return $data;
   //   }
   // }
}