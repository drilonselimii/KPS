<?php
if(isset($_POST['login'])){

session_start();


$id = $_POST['id'];
$fjalekalimi = $_POST['fjalekalimi'];

$con=mysqli_connect("localhost","root","blend.mehani261195","kps");
$id = stripcslashes($id);
$fjalekalimi = stripcslashes($fjalekalimi);
$id = mysqli_real_escape_string($con,$id);
$fjalekalimi = mysqli_real_escape_string($con,$fjalekalimi);




$result = mysqli_query($con,"select * from users where id = '$id' and fjalekalimi = '$fjalekalimi'")
          or die("Failed to query database ".mysqli_error($con));
$row = mysqli_fetch_array($result);

$id_length =strlen((string)$id);


$_SESSION['id1']=$row['id'];
$_SESSION['emri1']=$row['emri'];
$_SESSION['mbiemri1']=$row['mbiemri'];
$_SESSION['email1']=$row['email'];
$_SESSION['ditelindja1']=$row['ditelindja'];
$_SESSION['gjinia1']=$row['gjinia'];

if( $row['id'] == $id && $row['fjalekalimi'] == $fjalekalimi)
{
    if( $id_length == 6 )
	{
		header("location: Pprofili.php");
	}
	else
		header("location: Sprofili.php");


}
else
{
	header("location: KPS.php");
	
} mysqli_close($con);
}

else{
	header("location: KPS.php");
}
?>
