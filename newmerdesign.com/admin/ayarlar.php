<?php 
		include 'header.php';
 ?>
 <?php include 'sidebar.php' ?>

 <div id="page-wrapper">
 	<div id="page-inner">
 		<div class="row">
 			<div class="col-md-12">
 				<h1 class="page-head-line">BURASI ADMİN PANELİ KEKO :D</h1>

 				<?php 
 					if($_GET['durum']=="oldu")
 					{  ?>
 						<h1 style="color:green;" class="page-subhead-line">Kayıtlar başarıyla güncellendi.</h1>
 						<?php
 					}
 				
 				 
 					elseif($_GET['durum']=="olmadi")
 					{ ?>
 						<h1 style="color:red;" class="page-subhead-line">!Değişiklik yapmadığın için kayıtlar güncellenmedi.</h1>
 						<?php
 					}
 				 else
 					{  ?>
 						<h1 class="page-subhead-line">Ayarları bu sayfadan düzenleyebilirsin.</h1>
 						<?php
 					}
 				?>
 			</div>
 		</div>
 		<form action="netting/islem.php" method="POST">
 		
 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Site Başlığı</label>
 				<input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Site Açıklaması</label>
 				<input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Site Anahtar Kelimeleri</label>
 				<input class="form-control" type="text" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ?>">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Mail Adresi</label>
 				<input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-12">
 				<label>Adresiniz</label>
 				<input class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres']; ?>">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-3">
 				<label>Telefon Numarası</label>
 				<input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon']; ?>">
 			</div>

 			<div class="form-group col-md-3">
 				<label>Twitter Adresi</label>
 				<input class="form-control" type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']; ?>">
 			</div>

 			<div class="form-group col-md-3">
 				<label>Facebook Adresi</label>
 				<input class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>">
 			</div>

 			<div class="form-group col-md-3">
 				<label>Instagram Adresi</label>
 				<input class="form-control" type="text" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram']; ?>">
 			</div>

 			<div class="form-group col-md-3">
 				<label>Hakkımızda Yazısı</label>
 				<input class="form-control" type="text" name="ayar_hakkimizda" value="<?php echo $ayarcek['ayar_hakkimizda']; ?>">
 				
 			</div>


 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-12">
 				
 				<input style="width:100%;" class="btn btn-success" type="submit" name="ayarkaydet" value="Kaydet Keko">
 			</div>
 		</div>


 		</form>
 	</div>
 </div>