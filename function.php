<?php
require_once('classes/userClass.php'); 
require_once('classes/productClass.php'); 
require_once('classes/categoryClass.php');
require_once('classes/contactusClass.php'); 

$userObj = new USER(); 
$productObj = new PRODUCT(); 
$categoryObj = new CATEGORY();
$contactusObj = new CONTACTUS(); 
session_start();
$type = $_GET['type'];

if(empty($type) || !isset($type)) 
  {
    echo 'Type not set';
  } 
  

  //////////////////// SIGN UP ////////////////////////////////////
  else if($type == 'signup') 
  {
   $data =  USER::addNewUser($_REQUEST);
   $_SESSION = $data;
   if($data['status'] == 'error') {
     header("location:signup.php");
   } 
   else {
     header("location:login.php");
   }
  } 

  //////////////////// USER LOGIN ////////////////////////////////////
  else if($type == 'login') 
  {
   $email = addslashes($_REQUEST['email']);
   $password = addslashes($_REQUEST['password']);
   $_SESSION =  USER::login($email, $password);
   if($_SESSION['status'] == 'error') {
     header("location:login.php");
   } else {
     header("location:user_home.php");
   }
  }
  
  //////////////////// ADMIN LOGIN ////////////////////////////////////
  else if($type == 'adminlogin') 
  {
   $email = addslashes($_REQUEST['email']);
   $password = addslashes($_REQUEST['password']);
   $_SESSION =  USER::adminlogin($email, $password);
   if($_SESSION['status'] == 'error') {
     header("location:admin_login.php");
   } else {
     header("location:admin_home.php");
   }
  }
  
  //////////////////// CATEGORY ////////////////////////////////////
  else if($type == 'addCategory') 
    {
     $data =  CATEGORY::addNewCategory($_REQUEST);
     $_SESSION = $data;
     if($data['status'] == 'Error') {
       header("location:addCategory.php");
     } 
     else 
     {
       header("location:admin_home.php");
     }
    } 

    else if($type == 'viewCategory') 
    {
       $data =  CATEGORY::getCategoryById($_REQUEST);
       //exit();
       $_SESSION = $data;
       if($data['status'] == 'success') {
         header("location:viewCategory.php");
       }
       else{
           header("location:admin_home.php");
       } 
    } 

    else if($type == 'deleteCategory') 
    {
     $data =  CATEGORY::deleteCategory($_REQUEST);
     //exit();
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:admin_home.php");
     }
     else {
         header("location:admin_home.php");
     } 
    } 

    else if($type == 'deleteCategoryDetails') 
    {
     $ids = $datas['id'];
     $data =  CATEGORY::getCategoryDetails($ids);
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:deleteCategory.php");
     }
     else {
         header("location:deleteCategory.php");
     } 
    } 

    else if($type == 'editCategoryDetails') 
    {
     $data =  CATEGORY::getCategoryDetails($_REQUEST);
     //exit();
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:editCategory.php");
     }
     else {
         header("location:editCategory.php");
     } 
    } 
    

    //////////////////// PRODUCT ////////////////////////////////////
    else if($type == 'addProduct') 
    {
     $data =  PRODUCT::addNewProduct($_REQUEST);
     $_SESSION = $data;
     if($data['status'] == 'Error') {
       header("location:addProduct.php");
     } 
     else {
       header("location:admin_home.php");
     }
    } 
    
    else if($type == 'viewProduct') 
    {
     $data =  PRODUCT::getAllProductDetails($_REQUEST);
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:viewProduct.php");
     } 
     else {
       header("location:admin_home.php");
     }
    }

    else if($type == 'getProductById_delete') 
    {
     $data =  PRODUCT::getProductDetailsById($_REQUEST);
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:admin_home.php");
     }
     else {
         header("location:deleteProduct.php");
     } 
    } 

    else if($type == 'getProductById_edit') 
    {
     $data =  PRODUCT::getProductDetailsById($_REQUEST);
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:admin_home.php");
     }
     else {
         header("location:editProduct.php");
     } 
    } 

    else if($type == 'getProductById_addImage') 
    {
     $data =  PRODUCT::getProductDetailsById($_REQUEST);
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:admin_home.php");
     }
     else {
         header("location:addProductImage.php");
     } 
    } 

    else if($type == 'deleteProductbyId') 
    {
     $data =  PRODUCT::deleteProductById($_REQUEST);
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:deleteProduct.php");
     }
     else {
         header("location:admin_home.php");
     } 
    } 

///////////////////////////IMage////////////////////////////////

    else if($type == 'addImage') 
    {
     $data =  PRODUCT::uploadImage($_REQUEST);
     $_SESSION = $data;
     if($data['status'] == 'success') {
       header("location:addProductImage.php");
     }
     else {
         header("location:addProductImage.php");
     } 
    } 

//////////////////// Contact US ////////////////////////////////////
  else if($type == 'contactUsMessage') 
  {
   $data = CONTACTUS::sendMessage($_REQUEST);
   $_SESSION = $data;
   if($data['status'] == 'error') {
     header("location:contact.php");
   } 
   else {
     header("location:contact.php");
   }
  } 

//////////////////// LOGOUT ////////////////////////////////////
    else if($type == 'logout') 
    {
     unset($_SESSION);
     session_destroy();
     header("location:login.php");
    }
?>