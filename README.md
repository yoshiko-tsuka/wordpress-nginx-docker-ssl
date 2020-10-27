# wordpress-nginx-docker-ssh
docker-compose WP + nginx + ssh + mailhog

Requirements
Docker
Openssl for creatng the SSL cert. Install using Homebrew brew install openssl

* APP_NAME
Invalid container name (-mysql), only [a-zA-Z0-9][a-zA-Z0-9_.-] are allowed

cd /docker/cli

/bin/bash create-cert.sh 
Generating a 2048 bit RSA private key
....................................+++
......................................+++
writing new private key to 'localhost.key'
-----
Cert created in /cert! 

/bin/bash trust-cert.sh 
Password: ログインしているMacのユーザーのパスワード
The cert should now be trusted in macOS System Keychain. Trusted in Chrome and Safari. (Not Firefox since it's using its own keychain manager) 

cd ../../
docker-compose run composer create-project
これでvendorフォルダが作成される

docker-compose up -d

mysqldump -u root -p -h localhost -P 3306 --protocol=tcp local-new > ./docker/initdb/backup.sql
Enter password: password