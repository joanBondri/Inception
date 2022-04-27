FROM debian:buster

MAINTAINER JoanBondri
RUN apt update -y;
RUN apt-get update -y;
RUN apt install -y php7.3-fpm php7.3-mysql
RUN apt install -y php7.3-curl
RUN apt install -y php7.3-gd
RUN apt install -y php7.3-bcmath
RUN apt install -y php7.3-cgi
RUN apt install -y php7.3-ldap
RUN apt install -y php7.3-mbstring
RUN apt install -y php7.3-xml
RUN apt install -y php7.3-soap
RUN apt install -y php7.3-xsl
RUN apt install -y php7.3-zip

ADD		requirements/wordpress.conf /etc/

EXPOSE	9000
CMD /usr/sbin/php7.3-fpm -R -F
