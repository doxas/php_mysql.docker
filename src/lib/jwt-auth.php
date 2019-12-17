<?php
require('vendor/autoload.php');

use \Firebase\JWT\JWT;

// header('Content-Type: application/json; charset=UTF-8');

/**
 * @param {number} timeOffset - units is seconds
 */
function getClaims(/* $timeOffset */){
    $current_time = time();
    $expiry = $current_time + (30 * 24 * 60 * 60); // 有効期限として30日後を指定
    $claims = array(
        'iat' => $current_time,
        'exp' => $expiry,
        'user_id' => 'user-id',
        'foo' => 'bar'
    );
    return $claims;
}

function getJwt(){
    $claims = getClaims();
    $path = realpath(dirname(__FILE__).'/../keys/id_rsa_jwt.pem');
    $private_key = file_get_contents($path);
    $jwt = JWT::encode($claims, $private_key, 'RS256');
    return json_encode(array(
        'message' => 'Success.',
        'jwt' => $jwt
    ));
}

