CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'jbondri'@'%' IDENTIFIED BY 'MDPJ';
GRANT ALL PRIVILEGES ON *.* TO 'jbondri'@'%';
GRANT ALL ON *.* to 'jbondri'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'newpass';
FLUSH PRIVILEGES;
