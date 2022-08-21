<?php

include "header.php"; 

ob_start();
session_start();

$email = $_POST['email'];
$sifre = $_POST['sifre'];

if ($email=="b181200552@sakarya.edu.tr" && $sifre=="1234") {
	$_SESSION["login"] = "true";
	$_SESSION["email"] = $email;
	$_SESSION["sifre"] = $sifre;
	header("Location:admin.php");
}
else{
	header("Refresh: 4; url=login.php");
}

ob_end_flush();

?>
<center>
<div class="jumbotron mb-0">
	<div id="adminSayfasi" class="container shadow-lg col-md-4 text-center text-white"><br>
		Email yada şifreyi yanlış girdiniz giriş sayfasına yönlendiriliyorsunuz...<br><br>
	</div><br><br><br><br><br><br><br>
</div>
</center>
<?php include "footer.php"; ?>