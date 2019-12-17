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
include_once(dirname(__FILE__).'/lib/lib.php');
include_once(dirname(__FILE__).'/lib/jwt-auth.php');

echo '<pre class="log">';
var_dump(getFromMySQL());
echo '</pre>';

echo exec('whoami');

echo '<pre class="jwt">';
var_dump(getJwt());
echo '</pre>';

phpinfo();
?>
    <script type="text/javascript" src="./js/main-2b6d23c3142bdca92eae.js"></script><script type="text/javascript" src="./js/script-2b6d23c3142bdca92eae.js"></script></body>
</html>
