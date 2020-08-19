<link rel="stylesheet" href="stilizimi.css">

<?php session_start(); ?>
<div id="miresevini" >Miresevini ne faqen tone <br><br><?=$_SESSION['emri'] ?> <?=$_SESSION['mbiemri'] ?> </div>
<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
