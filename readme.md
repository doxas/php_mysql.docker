
# php_mysql.docker

php and mysql with docker.

## generate keys


```
$ mkdir ./public/keys
$ cd ./public/keys

$ openssl genrsa -out id_rsa_jwt.pem 2048
$ openssl rsa -in id_rsa_jwt.pem -pubout > id_rsa_jwt.pub
```

