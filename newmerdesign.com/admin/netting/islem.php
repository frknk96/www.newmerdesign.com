
<?php 
include 'baglan.php';

if(isset($_POST['ayarkaydet'])) 
{

 $id=1;

    $ayarkaydet=mysql_query("update ayarlar set ayar_title='".$_POST['ayar_title']."',ayar_description='".$_POST['ayar_description']."',ayar_keywords='".$_POST['ayar_keywords']."',ayar_mail='".$_POST['ayar_mail']."',ayar_adres='".$_POST['ayar_adres']."',ayar_telefon='".$_POST['ayar_telefon']."',ayar_twitter='".$_POST['ayar_twitter']."',ayar_facebook='".$_POST['ayar_facebook']."',ayar_instagram='".$_POST['ayar_instagram']."',ayar_hakkimizda='".$_POST['ayar_hakkimizda']."' where ayar_id='$id'");

	if(mysql_affected_rows())

	{
 		header("Location:../ayarlar.php?durum=oldu");

	}
	else 
	{

 		header("Location:../ayarlar.php?durum=olmadi");

	}
}

if(isset($_POST['login']))
{
	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=$_POST['admin_sifre'];
	

	if($admin_kadi && $admin_sifre)
	{
		$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
		$verisay=mysql_num_rows($sorgula);

		if($verisay>0)
		{
			$_SESSION['admin_kadi']=$admin_kadi;

			header('Location:../adminIndex.php');
		}

		else
		{
			header('Location:../login.php?login=no');
		}
	}
}

if(isset($_POST['urunekle']))
{
	
	$uploads_dir='../uploads';

	@$tmp_name=$_FILES['urungorsel']["tmp_name"];
	@$name=$_FILES['urungorsel']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");



	$urunekle=mysql_query("insert into urunler (urun_resim,urun_fiyati,urun_aciklamasi,urun_adi,fotograf_adi) VALUES ('".$refimgyol."','".$_POST['urun_fiyati']."','".$_POST['urun_aciklamasi']."','".$_POST['urun_adi']."','".$_POST['fotograf_adi']."')");

	if(mysql_affected_rows())
	{
		header("Location:../urun-ekle.php?durum=ok");
	}

	else
	{
		header("Location:../urun-ekle.php?durum=no");
	}
}


if(isset($_POST['urunduzenle'])) 
{

 	$urun_id=$_POST['urun_id'];

    $menuduzenle=mysql_query("update urunler set urun_adi='".$_POST['urun_adi']."',urun_fiyati='".$_POST['urun_fiyati']."',urun_aciklamasi='".$_POST['urun_aciklamasi']."',urun_resim='".$_POST['urun_resim']."',fotograf_adi='".$_POST['fotograf_adi']."' where urun_id='$urun_id'");

	if(mysql_affected_rows())

	{
 		header("Location:../urun-duzenle.php?durum=ok&urun_id=$urun_id");

	}
	else 
	{

 		header("Location:../urun-duzenle.php?durum=no&urun_id=$urun_id");

	}
}

if($_GET['urunsil']=="ok")
{
	$urunsil=mysql_query("delete from urunler where urun_id='".$_GET['urun_id']."'");

	if(mysql_affected_rows())
	{
		header('Location:../fotograf.php?durum=ok');
	}

	else
	{
		header('Location:../fotograf.php?durum=no');
	}
}




 ?>

