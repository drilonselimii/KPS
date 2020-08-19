<?php 
ini_set('mysql.connect_timeout',300);
ini_set('default_socket_timeout',300);

  if(isset($_POST['upload'])){
	  
	  if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
		  
		  echo "Please select an image";
	  }
	  else{
		  $image= addslashes($_FILES['image']['tmp_name']);
		  $name= addslashes($_FILES['image']['name']);
		  $image= file_get_contents($image);
		  $image= base64_encode($image);
		  
	  }
	  function saveimage()
	  {
		  $con=mysql_connect("localhost","root","blend.mehani261195");
		  mysql_select_db("kps",$con);
		  $qry="insert into images (name, image) values ('$name','$image')";
		  $result=mysql_query($qry,$con);
	  }
	  saveimage($name,$image);	
	  
  }

?>