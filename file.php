<?php
$c_pwd = str_replace(' ', '', file_get_contents('pwd.html'));
$u_pwd = str_replace(' ', '', $_GET['pwd']);
if($c_pwd != $u_pwd){
	die("Incorrect Password");
}
$file = 'file.pdf';
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>