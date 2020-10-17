# INSTALL
composer require phpunit/phpunit
./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
./vendor/bin/phpunit --bootstrap vendor/autoload.php UtilsTest.php --log-junit report.xml
./vendor/bin/phpunit --bootstrap vendor/autoload.php UtilsTest.php --testdox-html report.html

# REPORTING
php -S localhost:8080
phpunit --log-junit report.xml
sudo apt-get install php-mbstring
