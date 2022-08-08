# apt install -y apache2 mariadb-server mariadb-client php php-mysql

[ -d /var/www/html ] && [ ! -L /var/www/html ] && mv /var/www/html /var/www/html.old
[ ! -L /var/www/html ] && ln -s /home/fly/shopping-list/ /var/www/html
