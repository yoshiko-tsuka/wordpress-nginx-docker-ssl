# wordpress-nginx-docker-ssh for macOS
docker-compose:

nginx(latest) + PHP(7.4-fpm) with wordpress files + mysql(5.7.26) + ssh + mailhog + phpmyadmin

this docker files are based on

[https://github.com/urre/wordpress-nginx-docker-compose](https://github.com/urre/wordpress-nginx-docker-compose)

and

[https://github.com/urre/wordpress-nginx-docker-compose-image](https://github.com/urre/wordpress-nginx-docker-compose-image)

My deepest thanks to Developer [Urban Sandén](https://github.com/urre) !!

## Setup

### Requirements
+ [Docker](https://www.docker.com/get-started)
+ Openssl for creatng the SSL cert. Install using Homebrew `brew install openssl`

### Setup environment variables
edit `.env` your preferences.(APP_NAME: only [a-zA-Z0-9][a-zA-Z0-9_.-] are allowed)

Example:

```dotenv
IP=127.0.0.1
APP_NAME=appname
DOMAIN=localhost
DB_HOST=mysql
DB_NAME=local-new
DB_PASSWORD=password
DB_TABLE_PREFIX=wp_
DB_USER=db_user

```

### Setup wp-config.php
edit `wp-config.php` your preferences.

Example:

```wp-config.php
/** db name must be the same as DB_NAME in .env */
define( 'DB_NAME', 'local-new' );

/** MySQL database username */
/** user name must be 'root' */
define( 'DB_USER', 'root' );

/** MySQL database password */
/** db name must be the same as DB_PASSWORD in .env */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
/** db name must be the same as DB_HOST in .env */
define( 'DB_HOST', 'mysql' );

# Generate your keys here: https://roots.io/salts.html
define( 'AUTH_KEY',         'generate me !!' );
define( 'SECURE_AUTH_KEY',  'generate me !!' );
define( 'LOGGED_IN_KEY',    'generate me !!' );
define( 'NONCE_KEY',        'generate me !!' );
define( 'AUTH_SALT',        'generate me !!' );
define( 'SECURE_AUTH_SALT', 'generate me !!' );
define( 'LOGGED_IN_SALT',   'generate me !!' );
define( 'NONCE_SALT',       'generate me !!' );

```

### Setup SSL cert
certs folder will be created in docker folder when you execute commands below.

```shell
cd /docker/cli
/bin/bash create-cert.sh
/bin/bash trust-cert.sh
> Password: enter your Mac password
cd ../../
```

## Install
vendor folder and composer.lock will be created.

```shell
docker-compose run composer create-project
```

## Run

```shell
docker-compose up -d
```

> -d is for detached mode, this will run containers in the background.

Docker Compose will now start all the services for you:

```shell
Starting appname-mysql    ... done
Starting appname-composer ... done
Starting appname-phpmyadmin ... done
Starting appname-wordpress  ... done
Starting appname-nginx      ... done
Starting appname-mailhog    ... done
```

🚀 Open [https://localhost:8000](https://localhost:8000) in your browser

## PhpMyAdmin

PhpMyAdmin comes installed as a service in docker-compose.

🚀 Open [http://127.0.0.1:8080/](http://127.0.0.1:8080/) in your browser

login info ID:root Password: DB_PASSWORD (in .env)

> you can get a sql backup file on this PhpMyAdmin page!

> put the sql backup file to docker/initdb to set the same data in database next time!!

## MailHog

MailHog comes installed as a service in docker-compose.

🚀 Open [http://127.0.0.1:8025/](http://127.0.0.1:8025/) in your browser


