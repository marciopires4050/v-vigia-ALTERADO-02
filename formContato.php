<?php
$headers = "From: envio@eletroarbm.com.br\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$myfile = fopen("mail_contato.html", "r") or die("Unable to open file!");
$msg = fread($myfile,filesize("mail_contato.html"));
fclose($myfile);

$uploaddir = __DIR__ . DIRECTORY_SEPARATOR . 'curriculos' . DIRECTORY_SEPARATOR;

if (!empty($_FILES['contatoArquivo'])){
    $nomeFoto = date("dmYGi") . basename($_FILES['contatoArquivo']['name']);
    $uploadfile = $uploaddir . $nomeFoto;
    if (move_uploaded_file($_FILES['contatoArquivo']['tmp_name'], $uploadfile)) {
        $msg = str_replace("##mensagem##", "<a href='../curriculos/".$nomeFoto."'>".$nomeFoto."</a>", $msg);
    }
}  

$msg = str_replace("##nome##", $_POST["contatoNome"], $msg);
$msg = str_replace("##email##", $_POST["contatoEmail"], $msg);
$msg = str_replace("##assunto##", $_POST["contatoAssunto"], $msg);
$msg = str_replace("##mensagem##", $_POST["contatoMensagem"], $msg);
$msg = str_replace("../", "http://clientes.agenciacolor.com.br/eletroar/", $msg);

mail("mp10br@gmail.com","Novo Contato",$msg, $headers);
echo("ok");
?>
