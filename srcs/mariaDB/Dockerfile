ARG user_name
ARG user_password

FROM debian:buster

MAINTAINER JoanBondri

RUN		apt-get update -y \
		&& apt-get install mariadb-server -y \
		&& apt-get install vim -y \
		&& apt-get install wget -y \
		&& echo $USER_NAME livre
	
ADD		./requirements/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN		mysqld

CMD		service mysql start; yes n | mysql_secure_installation;
EXPOSE	3307

