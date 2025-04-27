apt update
apt install curl php-cli php-mbstring git unzip
curl -sS https://getcomposer.org/installer -o composer-setup.php
HASH=`curl -sS https://composer.github.io/installer.sig`
/opt/lampp/bin/php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
/opt/lampp/bin/php composer-setup.php --install-dir=/usr/local/bin --filename=composer
rm composer-setup.php
/opt/lampp/bin/php /usr/local/bin/composer update
/opt/lampp/bin/php /usr/local/bin/composer install
npm install
/opt/lampp/bin/php artisan migrate
