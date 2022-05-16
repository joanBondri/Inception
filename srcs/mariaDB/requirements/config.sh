service mysql start;
yes n | mysql_secure_installation;
#mysql -u root -p << EOF

#CREATE DATABASE IF NOT EXISTS wordpress;
#CREATE USER '$USER_NAME_MARIADB'@'localhost';
#SET PASSWORD FOR '$USER_NAME_MARIADB'@'localhost' = PASSWORD('$USER_PASSWORD_MARIADB');
#GRANT ALL PRIVILEGES ON wordpress.* TO '$USER_NAME_MARIADB'@'localhost' IDENTIFIED BY '$USER_PASSWORD_MARIADB';
#GRANT ALL ON wordpress.* to '$USER_NAME_MARIADB'@'%' IDENTIFIED BY '$USER_PASSWORD_MARIADB';

#FLUSH PRIVILEGES;

#CREATE USER 'superuser'@'localhost' IDENTIFIED BY 'password';
#GRANT ALL PRIVILEGES ON *.* TO 'superuser'@'localhost' WITH GRANT OPTION;
#FLUSH PRIVILEGES;

#CREATE USER 'superuser'@'%' IDENTIFIED BY 'password';
#GRANT ALL PRIVILEGES ON *.* TO 'superuser'@'%' WITH GRANT OPTION;
#FLUSH PRIVILEGES;

#ALTER USER 'root'@'localhost' IDENTIFIED BY 'newpass';
#FLUSH PRIVILEGES;
#EOF
