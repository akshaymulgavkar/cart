<?php
require_once("dbconfig.php");
class CATEGORY extends dbconfig {
 
   public static $data;
 
   function __construct() {
     parent::__construct();
   }
 
    // ADD Category
   public static function addNewCategory($categoryData) {
     try {
       $query = "INSERT INTO categories (name,type) ";
       $query .= "VALUES ('".$categoryData['name']."', '".$categoryData['type']."')";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Unable to add new category!!!!");
       }       
       $data = array('status'=>'success', 'msg'=>"New Category successfully added", 'result'=>'');
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

  // Get category information by catid
   public static function getCategoryById() {
     try {
       $query = "SELECT * FROM categories order by updated desc";
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

   // Get Category information by catid
   public static function getCategoryDetails() {
     try {
       $query = "SELECT * FROM categories WHERE id = '$datas[id]'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Query Not Set");
       }
       //$datas = array();
       // if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)) {
        // $datas[]  = $row;
        $data = array('status'=>'success','result'=>$row);
        // }
       }
     } catch (Exception $e) {
       $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

  // delete Category
   public static function deleteCategory($categoryData) {
     try {
       $query = "DELETE FROM categories WHERE id='$datas[id]'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Unable to delete category!!!!");
       }       
       $data = array('status'=>'success', 'msg'=>"Category successfully deleted", 'result'=>'');
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

   // Edit Category
   public static function editCategory() {
     try {
       $query = "SELECT * FROM categories WHERE id='$datas[id]'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Unable to Edit category!!!!");
       }       
       $data = array('status'=>'success', 'msg'=>"successful", 'result'=>'');
     } catch (Exception $e) {
       $data = array('status'=>'error', 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

}