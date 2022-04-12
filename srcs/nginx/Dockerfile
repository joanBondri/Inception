FROM debian:buster

MAINTAINER JoanBondri

RUN		apt-get update -y \
		&& apt-get install nginx -y \
		&& apt-get clean \
 		&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
  	 	&& echo "daemon off;" >> /etc/nginx/nginx.conf

EXPOSE 8080

CMD ["nginx", "-g", "daemon off;"]
