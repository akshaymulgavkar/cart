<?php
require_once("dbconfig.php");
class PRODUCT extends dbconfig {
 
   public static $data;
 
   function __construct() {
     parent::__construct();
   }
 
 // ADD PRODUCT
   public static function addNewProduct($productData) {
     try {
       $query = "INSERT INTO products (name, price, size, disc, stock, category) ";
       $query .= "VALUES ('".$productData['product_name']."', '".$productData['price']."', '".$productData['size']."', '".$productData['disc']."', '".$productData['stock']."', '".$productData['category']."')";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Unable to add new product");
       }       
       $data = array('status'=>'success', 'msg'=>"New Product successfully added", 'result'=>'');
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }
  // Get All Product information 
   public static function getAllProductDetails() {
     try {
       $query = "SELECT * FROM products order by updated desc";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Error");
       }
       //$datas = array();
       if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)) {
       $datas[]  = $row;
       $data = array('status'=>'success','result'=>$datas);
        }
       }
     } catch (Exception $e) {
       $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

   // Get Product information by id
   public static function getProductDetailsById($deleteProductDetailsId) {
     try {
       $query = "SELECT * FROM products WHERE id = '".$deleteProductDetailsId."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Query Not Set");
       }
       //$datas = array();
       if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)) {
        extract($row);
        $data = array('status'=>'success','result'=>$row);
        }
       }
     } catch (Exception $e) {
       $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

    // Delete PRODUCT
   public static function deleteProductById($deleteProduct) {
     try {
       $query = "DELETE FROM products WHERE id = '".$deleteProduct."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Query not set");
       }       
       $data = array('status'=>'success', 'msg'=>"Product successfully deleted", 'result'=>'');
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

   // // Edit Category
   // public static function editProduct() {
   //   try {
   //     $query = "SELECT * FROM products WHERE id='$datas[id]'";
   //     $result = dbconfig::run($query);
   //     if(!$result) {
   //       throw new exception("Unable to Edit product!!!!");
   //     }       
   //     $data = array('status'=>'success', 'msg'=>"successful", 'result'=>'');
   //   } catch (Exception $e) {
   //     $data = array('status'=>'error', 'msg'=>$e->getMessage());
   //   } finally {
   //      return $data;
   //   }
   // }
   /**
    * 
    */
   public static function uploadImage($file){
    if (is_array($file)) {
      move_uploaded_file($file['temp_name'],'../images/'.$file['name']);
      echo "File has beenn uploded";
    }else{
          die('No file was uploaded!');
      }
    }
 }