ARG user_name
ARG user_password

FROM debian:buster

MAINTAINER JoanBondri

RUN		apt-get update -y \
		&& apt-get install mariadb-server -y \
		&& apt-get install vim -y \
		&& apt-get install wget -y \
		&& echo $USER_NAME livre
	
ADD		./requirements/config.sh /config.sh

RUN		chmod 777 /config.sh;

EXPOSE	3306

CMD		["sh","/config.sh"]
