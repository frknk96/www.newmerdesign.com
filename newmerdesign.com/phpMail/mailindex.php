<?php 
	ob_start();
	session_start();



	$smptuser="test@newmarbledesign.com";
	$smtphost="mail.newmarbledesign.com";
	$smtpport="25";
	$smtppass="sorceym3";

	if(isset($_POST['iletisimForm']))
	{
		$adsoyad=htmlspecialchars(trim($_POST['isim']));
		$email=htmlspecialchars(trim($_POST['email']));
		$telefon=htmlspecialchars(trim($_POST['telefon']));
		$mesaj=htmlspecialchars(trim($_POST['mesaj']));
		$ip=htmlspecialchars(trim($_POST['iletisim_ip']));
		$konu=htmlspecialchars(trim($_POST['konu']));


		include 'class.phpmailer.php';
		$epostal=$smtpuser;
		$mail=new PHPMailer();
		$mail->IsSMPTP();
		$mail->SMTPAuth=false;
		$mail->Host=$smtphost;
		$mail->Port=$smtpport;
		$mail->SMTPSecure='tls';
		$mail->Username=$smtpuser;
		$mail->Password=$smtppass;
		$mail->SetForm($mail->Username,$isim);
		$mail->AddAddress($epostal,$isim);
		$mail->AddAddress($email,$isim);
		$mail->CharSet='UTF-8';
		$mail->Subject='İletişim Formu';
		$content='<b>Websitenizden gelen iletişim maili</b><br>
		<table align="left" class"tg" style="undefined;table-layout: fixed; width:535px">

				<tr>
					<td class="tg-031e">Ad Soyad</td>
					<td class="tg-031e">:</td>
					<td class="tg-031e">'.$isim.'</td>
				</tr>

				<tr>
					<td class="tg-031e">Ad Soyad</td>
					<td class="tg-031e">:</td>
					<td class="tg-031e">'.$email.'</td>
				</tr>

				<tr>
					<td class="tg-031e">Ad Soyad</td>
					<td class="tg-031e">:</td>
					<td class="tg-031e">'.$telefon.'</td>
				</tr>

				<tr>
					<td class="tg-031e">Ad Soyad</td>
					<td class="tg-031e">:</td>
					<td class="tg-031e">'.$mesaj.'</td>
				</tr>

				<tr>
					<td class="tg-031e">Ad Soyad</td>
					<td class="tg-031e">:</td>
					<td class="tg-031e">'.$ip.'</td>
				</tr>

				<tr>
					<td class="tg-031e">Ad Soyad</td>
					<td class="tg-031e">:</td>
					<td class="tg-031e">'.$konu.'</td>
				</tr>


		</table>';
		
	}

 ?>