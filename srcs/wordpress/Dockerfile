FROM debian:buster

MAINTAINER JoanBondri
RUN		apt update -y;
RUN		apt-get update -y;
RUN		apt install -y curl;
RUN		apt install -y tar;
RUN		apt install -y php7.3-fpm php7.3-mysql
RUN		apt install -y php7.3-curl
RUN		apt install -y php7.3-gd
RUN		apt install -y php7.3-bcmath
RUN		apt install -y php7.3-cgi
RUN		apt install -y php7.3-ldap
RUN		apt install -y php7.3-mbstring
RUN		apt install -y php7.3-xml
RUN		apt install -y php7.3-soap
RUN		apt install -y php7.3-xsl
RUN		apt install -y php7.3-zip
WORKDIR		/tmp
RUN		curl -O https://wordpress.org/latest.tar.gz
RUN		tar xzvf latest.tar.gz
RUN		mkdir -p /run/php /var/www/wordpress/
RUN		sed 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 0.0.0.0:9000/' -i /etc/php/7.3/fpm/pool.d/www.conf
RUN		cp -Rp /tmp/wordpress/. /var/www/wordpress

#ADD		requirements/wp-config.php /var/www/wordpress/
#RUN		cp /var/www/wordpress/wp-config-sample.php /var/www/wordpress/wp-config.php
RUN		chmod -R 777 /var/www/wordpress
ADD		requirements/wordpress.conf /etc/

RUN		curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
		chmod +x wp-cli.phar && \
		mv wp-cli.phar /usr/local/bin/wp-cli
RUN		wp-cli config create --dbname=wordpress --dbuser=jbondri --dbpass=MDPJ --dbhost=mariadb:3307 --dbcharset=utf8 --path=/var/www/wordpress --allow-root --skip-check #--extra-php <<php
#define ('WP_DEBOG', true);
#define ('WP_DEBOG_LOG', true);
#pdp
#RUN		wp-cli core install --url=localhost --title=Jbond --admin_user=jbondri --admin_password=MDPJ --admin_email=jbondri@student.42.fr --path=/var/www/wordpress --allow-root
EXPOSE	9000
CMD /usr/sbin/php-fpm7.3 -R -F
