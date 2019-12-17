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
    </body>
</html>
