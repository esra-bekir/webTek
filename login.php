
<?php 

include "header.php"; 
ob_start();
session_start();

if(isset($_SESSION["login"]))
	header("Location:admin.php");

?>
<br>
<center>
 <div class="jumbotron" >

    <div id="loginSayfasi" class="container shadow-lg col-md-4 text-white">
        <div calss="renk">
            <form action="kontrol.php" method="POST">
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Adresi:</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="b181200552@sakarya.edu.tr" required="">
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputPassword1">Şifre: </label>
                    <input type="password" name="sifre" class="form-control" id="exampleInputPassword1"
                        placeholder="1234" required="">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
		
    </div>

    <p>Email:b181200552@sakarya.edu.tr</p>
    <p>Şifre: 1234</p><br>
</div>
</center>
<br>
<br>

</div>
</div>
<?php include "footer.php"; ?>