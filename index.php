<?php
include('connect.php');

$url = false;
if (isset($_POST['url'])) {
    //função php para gerar um id Hash
    $hash = uniqid();
    $url = $mysqli->real_escape_string($_POST['url']);
    $views = 0;
    $url_prefix = 'http://localhost?urlshort/r.php?h=';

    $mysqli->query("INSERT INTO urls (id, url, views) VALUES('$hash', '$url', '$views')") or die($mysqli->connection_error);
    $url = $url_prefix . $hash;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url Shortner</title>
</head>
<body>
    <form method="POST">
        <input type="url" name="url" placeholder="Type your URL here">
        <button>Shorten</button>
    </form>
    <?php if($url !== false) { ?>
    <p>
        URL encurta<br>
        <input type="text" readonly value="<?php echo $url; ?>">
    </p>
    <?php } ?>
</body>
</html>