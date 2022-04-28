openssl req -x509 -nodes -subj '/CN=localhost' -newkey rsa:4096 -keyout key.key -out cert.crt -sha256 -days 365
mv ./cert.crt /etc/nginx/cert.crt;
mv ./key.key /etc/nginx/key.key;
