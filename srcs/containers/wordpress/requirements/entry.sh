wp-cli config create --dbname=wordpress --dbuser=jbondri --dbpass=MDPJ --dbhost=mariadb:330      6 --dbcharset=utf8 --path=/var/www/wordpress --allow-root --skip-check
wp-cli core install --url=jbondri.42.fr --title=Jbond --admin_user=jbondri --admin_password=MDPJ --admin_email=jbondri@student.42.fr --path=/var/www/wordpress --allow-root --skip-email;
/usr/sbin/php-fpm7.3 -R -F;
