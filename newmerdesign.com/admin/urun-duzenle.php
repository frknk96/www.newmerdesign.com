<?php 
		include 'header.php';
		include 'sidebar.php';

		$urun_id=$_GET['urun_id'];
		$urunsor=mysql_query("select * from urunler where urun_id='$urun_id'");
		$uruncek=mysql_fetch_assoc($urunsor);
 ?>
 

 <div id="page-wrapper">
 	<div id="page-inner">
 		<div class="row">
 			<div class="col-md-12">
 				<h1 class="page-head-line">Şu an foto düzenliyosun</h1>

 				<?php 
 					if($_GET['durum']=="ok")
 					{  ?>
 						<h1 style="color:green;" class="page-subhead-line">Fotoğraf düzenlendi.</h1>
 						<?php
 					}
 				
 				 
 					elseif($_GET['durum']=="no")
 					{ ?>
 						<h1 style="color:red;" class="page-subhead-line">!Fotoğraf düzenlenemedi.</h1>
 						<?php
 					}
 				 else
 					{  ?>
 						<h1 class="page-subhead-line">Fotoğrafları bu sayfadan düzenleyebilirsin.</h1>
 						<?php
 					}
 				?>
 			</div>
 		</div>
 		<form action="netting/islem.php" method="POST">

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-12">
 				
 				<input style="width:100%" class="btn btn-success" type="submit" name="urunduzenle" value="Düzenle Keko">
 			</div>
 		</div>

 		<input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id']; ?>">
 		
 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Fotonun Adı</label>
 				<input class="form-control" type="text" name="urun_adi" value="<?php echo $uruncek['urun_adi']?>">
 			</div>
 		</div>

 		

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Açıklama</label>
 				<input class="form-control" type="text" name="urun_aciklamasi" value="<?php echo $uruncek['urun_aciklamasi']?>">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Fiyatı</label>
 				<input class="form-control" type="text" name="urun_fiyati" value="<?php echo $uruncek['urun_fiyati']?>">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Fotoğraf numarası</label>
 				<input class="form-control" type="text" name="fotograf_adi" value="<?php echo $uruncek['fotograf_adi']?>">
 			</div>
 		</div>

 		
 		


 		</form>
 	</div>
 </div>