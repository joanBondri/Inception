FROM debian:buster

MAINTAINER JoanBondri

RUN		apt update -y

RUN		apt-get update -y

RUN		apt-get install nginx -y \
		&& apt-get install vim -y \
		&& apt-get install wget -y \
		&& apt-get clean \
 		&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN		mkdir -p /buff/nginx/

WORKDIR		/buff/nginx/

ADD		./requirements/nginx.conf /etc/nginx/nginx.conf 

ADD		./requirements/config.sh /buff/nginx/config.sh

RUN		mv /var/www/html/index.nginx-debian.html /var/www/html/index.html
RUN		sh /buff/nginx/config.sh

EXPOSE 8080

CMD ["nginx", "-g" ,"daemon off;"]
