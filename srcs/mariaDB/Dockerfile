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

RUN		service mysql start; cat setup.sql | mariadb -u root;

CMD		mysqld
EXPOSE	3307

