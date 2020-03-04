<?php 

include 'header.php';
include 'sidebar.php';

if(!isset($_SESSION['admin_kadi']))
{
	header('Location:login.php');
}

 ?>

 <div id="page-wrapper">
 	<div id="page-inner">
 		<div class="row">
 			<div class="col-md-12">
 				<h1 class="page-head-line">Fotoğraflar</h1>
 				<h1 class="page-subhead-line">Fotoğrafları burdan ayarlarsın.</h1>
 			</div>

 			<div class="col-md-12">
 				<a href="urun-ekle.php"><button class="btn btn-success">Ekle</button></a>
				<hr>
 			</div>
 			 <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hover Rows
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Fotoğraf Adı</th>
                                            <th>Fotoğraf Açıklaması</th>
                                            <th>Fotoğraf Fiyatı</th>
                                            <th>Fotoğraf</th>
                                            <th>Fotoğraf Numarası</th>
                                            
                                            <th></th><th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php 
                                    		$urunsor=mysql_query("select * from urunler");

                                    		while($uruncek=mysql_fetch_assoc($urunsor))

                                    		{  ?>

                                    		  

                                    	 
                                        <tr>
                                            <td><?php echo $uruncek['urun_id']; ?></td>
                                            <td><?php echo $uruncek['urun_adi']; ?></td>
                                            <td><?php echo $uruncek['urun_aciklamasi']; ?></td>
                                            <td><?php echo $uruncek['urun_fiyati']; ?></td>
                                            <td>
                                                <img width="225" src="<?php echo $uruncek['urun_resim']; ?>">
                                                    
                                            </td>
                                            <td><?php echo $uruncek['fotograf_adi']; ?></td>
                                            <td><a href="urun-duzenle.php?urun_id=<?php echo $uruncek['urun_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                            <td><a href="netting/islem.php?urun_id=<?php echo $uruncek['urun_id']; ?>&urunsil=ok"><button class="btn btn-danger">Sil</button></a></td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
 		</div>
 	</div>
 </div>