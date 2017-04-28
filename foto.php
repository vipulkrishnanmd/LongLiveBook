<?php
   if(isset($_FILES['image'])){
      $errors= array();
      
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	  $file_name = $_GET['id'].".".$file_ext;
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"fotos/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
  
   header('Location: /index.php' . $_SERVER["REQUEST_URI"]);
?>



