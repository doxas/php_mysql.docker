<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <title>demo</title>
    </head>
    <body>
        <div id="globalwrap">
            <p>php_mysql</p>
        </div>
<?php
    $mysql = new mysqli(
        $_ENV['DATABASE_HOST'],
        $_ENV['MYSQL_USER'],
        $_ENV['MYSQL_PASSWORD'],
        $_ENV['MYSQL_DATABASE']
    );
    if(!$mysql){
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    $sql = "INSERT INTO hoges(created_at) VALUES('" . date('Y-m-d H:i:s') . "')";
    $result = $mysql->query($sql);
    $sql = "SELECT * FROM hoges ORDER BY hoge_id desc limit 1";
    $result = $mysql->query($sql)->fetch_row();
    echo '<pre class="log">';
    var_dump($result);
    echo '</pre>';
    mysqli_close($mysql);

    phpinfo();
?>
    <script type="text/javascript" src="./js/main-2eebbe26b63374646402.js"></script><script type="text/javascript" src="./js/script-2eebbe26b63374646402.js"></script></body>
</html>
