<?php
if(isset($_POST['send'])){
    // Get the submitted form data
    $email = htmlentities($_POST['email']);
    $name = htmlentities($_POST['name']);
    $subject = 'Customer';
    $message = htmlentities($_POST['message']);
    $fromMail = 'admin@purecianjur.com';
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        	echo "<script type='text/javascript'>alert('Alamat email salah!');history.back(self);</script>";
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'pure.cianjur@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2> via Form Kontak Website</h2>
                <h4>Name : '.$name.'</h4>
                <h4>Email : '.$email.'</h4>
                <h4>Subject : '.$subject.'</h4>
                <h4>Message</h4><p>'.$message.'</p>';
            
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Header tambahan
            $headers .= 'From: admin <'.$fromMail.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                echo "<script type='text/javascript'>alert('Pesan terkirim!');
                window.location.assign('http://purecianjur.com');</script>";
            }else{
            	echo "<script type='text/javascript'> alert('Pesan tidak terkirim!');history.back(self);</script>";
            }
        }
    }else{
    	echo "<script type='text/javascript'>alert('Isikan semua data!');history.back(self);</script>";
    }
}

?>