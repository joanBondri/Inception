FROM debian:buster

MAINTAINER JoanBondri
RUN		apt update -y;
RUN		apt-get update -y;
RUN		apt install -y curl;
RUN		apt install -y tar;
RUN		apt install -y php7.3-fpm php7.3-mysqli
#RUN		apt install -y mariadb
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
RUN	    apt install -y \
				 ghostscript \
				 php-mbstring php-gettext \
				 php7.3\
                 php7.3-bcmath \
                 php7.3-curl \
                 php7.3-imagick \
                 php7.3-intl \
                 php7.3-json \
                 php7.3-mbstring \
                 php7.3-xml \
                 php7.3-zip
WORKDIR		/tmp
RUN		curl -O https://fr.wordpress.org/latest-fr_FR.tar.gz
RUN 	ls
RUN		tar xzvf *.gz
RUN		mkdir -p /run/php /var/www/wordpress/
RUN		sed 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 0.0.0.0:9000/' -i /etc/php/7.3/fpm/pool.d/www.conf
RUN		cp -Rp /tmp/wordpress/. /var/www/wordpress
RUN		chmod -R 777 /var/www/wordpress
ADD		requirements/wordpress.conf /etc/

RUN		curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
		chmod +x wp-cli.phar && \
		mv wp-cli.phar /usr/local/bin/wp-cli
#RUN		wp-cli config create --dbname=wordpress --dbuser=jbondri --dbpass=MDPJ --dbhost=mariadb:3306 --dbcharset=utf8 --path=/var/www/wordpress --allow-root --skip-check
ADD		requirements/entry.sh ./
RUN		chmod +x entry.sh
EXPOSE	9000
