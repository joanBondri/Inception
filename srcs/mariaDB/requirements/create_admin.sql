CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'jbondri'@'localhost';
SET PASSWORD FOR 'jbondri'@'localhost' = PASSWORD('MDPJ');
GRANT ALL PRIVILEGES ON wordpress.* TO 'jbondri'@'localhost' IDENTIFIED BY 'MDPJ';
GRANT ALL ON wordpress.* to 'jbondri'@'%' IDENTIFIED BY 'MDPJ';

FLUSH PRIVILEGES;

CREATE USER 'superuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'superuser'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

CREATE USER 'superuser'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'superuser'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'newpass';
FLUSH PRIVILEGES;
