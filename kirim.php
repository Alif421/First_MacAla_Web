<?php
if($_POST['kirim']){
	$admin = 'alif.naufal.a1@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['Nama Lengkap']);
	$email	= htmlentities($_POST['Email address']);
	$pesan	= htmlentities($_POST['Pesan']);
	
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
	
	if(mail($admin, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	header("Location: index.html");
}
?>