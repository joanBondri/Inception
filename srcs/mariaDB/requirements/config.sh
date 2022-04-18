service mysql start;
yes n | mysql_secure_installation;
echo $1 et $2;
mysql -u root -p << EOF

GRANT ALL ON *.* TO '$1'@'localhost' IDENTIFIED BY '$2' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF
