<html>
<head>
<?php

session_start();

?>

<title>Profili i studentit</title>
<link rel="stylesheet" href="stilizimi1.css">
</head>
<body>
<div id="skorniza" >
<p id="studenti" >Student</p>
<p id="id" ><?= $_SESSION['id1'] ?><br></p>
<img id="ikona" src="pr1.png" >
<p id="emri" ><?= $_SESSION['emri1'] ?><br></p>
<p id="mbiemri" ><?= $_SESSION['mbiemri1'] ?><br></p>
<p id="email" ><?= $_SESSION['email1'] ?><br></p>
<p id="ditelindja" ><?= $_SESSION['ditelindja1'] ?><br></p>
<p id="gjinia" ><?= $_SESSION['gjinia1'] ?><br></p>


</div>
<div id="njoftimet">
<p id="terejat">Njoftimet</p>


</div>

<div id="tjerat" >
<form action="logout.php"   method="POST" >
<input id="dalja" type="submit" value="Logout" name="logout"   >
</form>
<a  href="Game.php"><img id="gamephp" src="loja.png" ></a>

</div>


<div id="content"  >
<form method="post" action="ngarkimi.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
	<div>
	    <input type="file" name="image">
	</div>
	<div>
	    <textarea name="text" cols="45" rows="8" placeholder="Shkruaj njoftimin..."></textarea>
	</div>
	<div>
	    <input type="submit" name="upload" value="Posto">
	</div>
</div>


</body>

</html>
