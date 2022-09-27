<?php
define("SERVIDOR", "br356.hostgator.com.br");
define("USUARIO", "vegasvig_2022");
define("SENHA", "BBE7Lyhc?VSS");
define("BANCO","vegasvig_2022");
session_name('eletroar');
session_start([
    'cookie_lifetime' => 86400,
]);

setlocale(LC_MONETARY, 'pt_BR');
function abre_conexao() {
  $conexao = @mysql_connect(SERVIDOR, USUARIO, SENHA);
  //conectando ao servidor de mysql
  if(!($conexao))
  {
    echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
    exit;
  }
  //seleciona o banco de dados
  if(!(@mysql_select_db(BANCO,$conexao)))
  {
    echo "Não foi possível encontrar o banco de dados. Favor Contactar o Administrador.";
    exit;
  }
}

function executa($sql){
  // echo $sql;
  $conexao = @mysql_connect(SERVIDOR, USUARIO, SENHA);
  if(@mysql_query($sql,$conexao))
  {
    return true;
  } else{
    return false;
  }
}


function fecha_conexao(){
  $conexao = @mysql_connect(SERVIDOR, USUARIO, SENHA);
  mysql_close($conexao);
}

function consulta($sql) {
  $conexao = @mysql_connect(SERVIDOR, USUARIO, SENHA);
  $resul = @mysql_query($sql,$conexao);
  return $resul;
}

function execute_scalar($sql,$def="") {
    $rs = mysql_query($sql) or die("bad query");
    if (mysql_num_rows($rs)) {
        $r = mysql_fetch_row($rs);
        mysql_free_result($rs);
        return $r[0];
        mysql_free_result($rs);
    }
    return $def;
}

function execute_row($sql) {
    $rs = mysql_query($sql) or die("bad query");
    if (mysql_num_rows($rs)) {
        $r = mysql_fetch_array($rs);
        mysql_free_result($rs);
        return $r;
    }
    mysql_free_result($rs);
    return "";
}

$meses = array(1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro');

?>
