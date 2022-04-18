FROM debian:buster

MAINTAINER JoanBondri

RUN		apt-get update -y \
		&& apt-get install nginx -y \
		&& apt-get install mariadb-server -y \
		&& apt-get install vim -y \
		&& apt-get install wget -y \
		&& apt-get clean \
 		&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
ADD		./nginx.conf /etc/nginx/nginx.conf 
ADD		./index.html /var/www/html/
ADD		./config.sh /

RUN		sh /config.sh

EXPOSE 8080

CMD ["nginx", "-g" ,"daemon off;"]
