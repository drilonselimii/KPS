<html>
<?php
session_start();
$_SESSION['message'] ='';
$mysqli = new mysqli('localhost','root','blend.mehani261195','kps');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
   if($_POST['fjalekalimi'] == $_POST['konfirmofjalekalimin']){
	   
	   $id = $mysqli->real_escape_string($_POST['id']);
	   $emri = $mysqli->real_escape_string($_POST['emri']);
	   $mbiemri = $mysqli->real_escape_string($_POST['mbiemri']);
	   $email = $mysqli->real_escape_string($_POST['email']);
	   $fjalekalimi = $mysqli->real_escape_string($_POST['fjalekalimi']);
	   $ditelindja = $mysqli->real_escape_string($_POST['ditelindja']);
	   $gjinia = $mysqli->real_escape_string($_POST['gjinia']);
	   
	   
	   $_SESSION['emri']=$emri;
	   $_SESSION['mbiemri']=$mbiemri;
	   
	   
	   $sql = "INSERT INTO users (id,emri,mbiemri,email,fjalekalimi,ditelindja,gjinia)". "VALUES ('$id','$emri','$mbiemri','$email','$fjalekalimi','$ditelindja','$gjinia' )";
	   
	   if($mysqli->query($sql)===true){
	       $_SESSION['message'] = "Regjistrimi juaj eshte bere me sukses!";
		   header("location: miresevini.php");
	   }
	   else{
		   $_SESSION['message']= "Regjistrimi deshtoi, ju lutem shkruani te dhenat edhe njehere me kujdes.";
	   }
   }
   else{
	   $_SESSION['message']= "Regjistrimi deshtoi, ju lutem konfirmoni fjalekalimin tuaj!";
   }

}


?>
 <head>
  <title>KPS</title>
  <link rel="stylesheet" href="stilizimi.css">
 </head>
 <body>

 <div id=shtitulli>
 <p id="titulli">Faqja Zyrtare Per Komunikim Profesor-Student</p>
 <form id=forma action="login.php" method="POST" >

    <input class="logini" type="text" name="id" placeholder="Shkruaj ID-ne"   
             onkeypress="return (event.charCode >= 48 && event.charCode <= 57) " maxlength="10" minlength="6" required>
	 <input class="logini" type="password" placeholder="Shkruaj Fjalekalimin" name="fjalekalimi" required>
	 <input id="kycu" type="submit" name="login" value="Kycu">
	

 </form>
 
 </div><hr>
 
 <div id="asd">
<img id="iko" src="ikona.png"></img> 
<pre id="parag">Kjo faqe mundeson komunikimin online ndermjet profesoreve
     dhe studenteve te Universitetit te Prishtines.
         Te gjithe profesoret dhe studentet duhet
	   te kene nje llogari permes se ciles
    	       mund te informohen dhe
		    komunikojne.
 </pre>
 </div>

 <form id=forma2 action="KPS.php" method="post" enctype="multipart/form-data" autocomplete="off" >
 <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <h1 id="knl">Krijoni Llogarine Tuaj</h1>
      <p id="knl1" >Si student i Universitetit te Prishtines.</p>
      <input class="textet" type="text" name="id" placeholder="Shkruaj ID-ne"   
             onkeypress="return (event.charCode >= 48 && event.charCode <= 57) " maxlength="10" minlength="10" required  > <br><br>
      <input class="textet" type="text" style="text-transform: capitalize;" name="emri" placeholder="Shkruaj Emrin" required minlength="2"><br><br>
      <input class="textet" type="text" name="mbiemri" style="text-transform: capitalize;" placeholder="Shkruaj Mbiemrin" required minlength="2"><br><br>
      <input class="textet" type="email" name="email" placeholder="Shkruaj Adresen Elektronike" required ><br><br>
      <input class="textet" type="password" name="fjalekalimi" placeholder="Shkruaj Fjalekalimin" required minlength="8"><br><br>
	  <input class="textet" type="password" name="konfirmofjalekalimin" placeholder="Konfirmo Fjalekalimin" required><br>
	  <h2 id="ditelindja" >Ditelindja:</h2>
	  <input id="data" type="date" name="ditelindja"  max="2001-01-01" required><br><br><br>
	  <div id="radiobtn"><input type="radio" name="gjinia" value="Mashkull" required>Mashkull&emsp;
	  <input type="radio" name="gjinia" value="Femer" required>Femer</div>
      <input id="submiti" type="submit" value="Regjistrohu" name="regjistrohu" >
 
 
 
 </form>
 
 
 
 </body>
</html>
