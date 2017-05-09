notes:

updated PHP service to install composer and run composer install automatically
apt-get update -y
apt-get install -y wget git

`php composer.phar install --ansi --profile --prefer-source -o -vvv`
`php ./vendor/codeception/codeception/codecept`

export PATH=$PATH:/app/vendor/bin