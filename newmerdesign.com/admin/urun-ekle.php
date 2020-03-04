<?php 
		include 'header.php';
 ?>
 <?php include 'sidebar.php' ?>

 <div id="page-wrapper">
 	<div id="page-inner">
 		<div class="row">
 			<div class="col-md-12">
 				<h1 class="page-head-line">Şu an foto ekliyosun</h1>

 				<?php 
 					if($_GET['durum']=="ok")
 					{  ?>
 						<h1 style="color:green;" class="page-subhead-line">Fotoğraf eklendi.</h1>
 						<?php
 					}
 				
 				 
 					elseif($_GET['durum']=="no")
 					{ ?>
 						<h1 style="color:red;" class="page-subhead-line">!Fotoğraf eklenemedi.</h1>
 						<?php
 					}
 				 else
 					{  ?>
 						<h1 class="page-subhead-line">Fotoğrafları bu sayfadan ekleyebilirsin.</h1>
 						<?php
 					}
 				?>
 			</div>
 		</div>
 		<form action="netting/islem.php" method="POST" enctype="multipart/form-data">

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-12">
 				
 				<input style="width:100%" class="btn btn-success" type="submit" name="urunekle" value="Ekle Keko">
 			</div>
 		</div>

 		<div class="col-md-6">

 			<div class="form-group">
 				<label class="control-label col-lg-4">Resim Yükle</label>
 				<div class="">
 					<div class="fileupload fileupload-new" data-provides="fileupload">
 						<div class="fileupload-preview thumbnail" style="width:200px; height: 150px;">
 						</div>
 						<div>
 							<span class="btn btn-file btn-success"><span class="fileupload-new">Resim Seç</span><span class="fileupload-exists">Change</span><input type="file" name="urungorsel"></span>

 							<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Sil</a>
 						</div>
 					</div>

 				</div>

 			</div>
 		</div>
 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Fotonun Adı</label>
 				<input class="form-control" type="text" name="urun_adi" placeholder="Ürün Adı">
 			</div>
 		</div>

 		

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Açıklama</label>
 				<input class="form-control" type="text" name="urun_aciklamasi" placeholder="Ürün Açıklaması">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Fiyatı</label>
 				<input class="form-control" type="text" name="urun_fiyati" placeholder="Ürün Fiyatı">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Fotoğraf numarası</label>
 				<input class="form-control" type="text" name="fotograf_adi" placeholder="Ürün Numarası">
 			</div>
 		</div>

 		<div class="form-group col-md-12">
 			<div class="form-group col-md-6">
 				<label>Fotoğraf linki</label>
 				<input class="form-control" type="text" name="fotograf_link" placeholder="Foto Linki">
 			</div>
 		</div>

 		
 		


 		</form>
 	</div>
 </div>