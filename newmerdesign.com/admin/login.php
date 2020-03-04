<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Bootstrap Advance Admin Template</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
  body{
  	background-image: url("assets/img/black.jpg");

  	background-attachment: fixed;
  	-moz-background-size:100% 100%;
  	-o-background-size:100% 100%;
  	-webkit-background-size:100% 100%;
  	background-size:100% 100%;
  }
  </style>
</head>
<body >
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div style="background-color: grey; opacity: 0.8; margin-top: 40px;" class="panel-body">
                    <form action="netting/islem.php" method="POST">
                        <hr />
                        <center><h3><b>Admin Girişi</b></h3></center>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input type="text" class="form-control" name="admin_kadi" placeholder="Kullanıcı Adı " />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password" class="form-control" name="admin_sifre" placeholder="Şifre" />
                        </div>
                        

                     
                     <button style="width:100%;" type="submit" name="login" class="btn btn-primary">Giriş Yap</button>
                    
                 </form>
             </div>

         </div>


     </div>
 </div>

</body>
</html>
