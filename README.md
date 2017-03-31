php-selenium-unit
=================

A Symfony project combining PHPUnit and Selenium, with a little help of phantomjs ;)

## Istallation
1. clone the repository `git clone git@github.com:zelazowy/php-selenium-unit.git`
2. install php dependencies `composer install`
3. install npm packages (phantomjs in fact) `npm install`

## Running tests
1. start phantomjs server `node_modules/.bin/phantomjs --webdriver=8001`
2. if you want to use https use `node_modules/.bin/phantomjs --ignore-ssl-errors=yes`
3. run tests `vendor/phpunit/phpunit/phpunit tests/Selenium`
