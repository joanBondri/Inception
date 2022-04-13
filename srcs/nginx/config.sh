openssl req -new -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out MyCertificate.crt -keyout MyKey.key;
mv ./MyCertificate.crt /var/www/html/cert.crt;
mv ./MyKey /var/www/html/Key.key;
chmod 666 /var/wwwhtml/Key.key
