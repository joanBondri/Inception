yes | service mysql start;
yes n | mysql_secure_installation;
mysql -u root -p << EOF

GRANT ALL ON *.* TO '$USER_NAME_MARIADB'@'localhost' IDENTIFIED BY '$USER_PASSWORD_MARIADB' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF
