<?php
include ('connection.php');

if(!isset($_GET['h'])) {
    die('URL inválida');
}

$hash = $mysqli->real_escape_string($_GET['h']);
$sql_url_query = "SELECT * FROM urls WHERE id = ''$hash";
$sql_url_query_exect = $mysqli->query($sql_url_query) o die($mysqli->error);

$row = $sql_url_query_exect->fetch_assoc();

if(!row){
    die('URL inválida');
}

$mysqli->query("UPDATE urls SET views = views + 1 WHERE id = '$hash'") or die($mysqli->error);

header('Location: ' . $row['url']);
?>