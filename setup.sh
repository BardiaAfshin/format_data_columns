pear config-set auto_discover 1
pear install pear.phpunit.de/PHPUnit
apt-get install git
git clone https://github.com/sebastianbergmann/phpunit.git

sudo pear channel-discover pear.phpunit.de
sudo pear channel-discover components.ez.no
sudo pear channel-discover pear.symfony-project.com
sudo pear install phpunit/PHP_CodeCoverage
sudo pear install phpunit/PHPUnit
