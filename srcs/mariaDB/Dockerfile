ARG user_name
ARG user_password

FROM debian:buster

MAINTAINER JoanBondri

WORKDIR		/

RUN		apt-get update -y \
		&& apt-get install mariadb-server -y \
		&& apt-get install vim -y \
		&& apt-get install wget -y \
		&& echo $USER_NAME livre
	
ADD		./requirements/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
ADD		./requirements/setup.sql /

RUN		service mysql start && mysql -u root < setup.sql;

CMD		mysqld
EXPOSE	3307

