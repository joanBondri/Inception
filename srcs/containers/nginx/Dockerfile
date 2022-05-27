FROM debian:buster

MAINTAINER JoanBondri

RUN		apt update -y

RUN		apt-get update -y

RUN		apt-get install nginx -y \
		&& apt-get install vim -y \
		&& apt-get install wget -y \
		&& apt-get clean \
 		&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN		mkdir -p /buff/nginx/ /var/www/wordpress/

WORKDIR		/buff/nginx/

ADD		./requirements/nginx.conf /etc/nginx/nginx.conf 

ADD		./requirements/config.sh /buff/nginx/config.sh

RUN		sh /buff/nginx/config.sh

EXPOSE 443

CMD ["nginx", "-g" ,"daemon off;"]
