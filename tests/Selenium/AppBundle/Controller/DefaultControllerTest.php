<?php

namespace tests\Selenium\AppBundle\Controller;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testIndex()
    {
        $seleniumServerUrl = "http://localhost:8001";
        $webDriver = RemoteWebDriver::create($seleniumServerUrl, DesiredCapabilities::phantomjs());

        $webDriver->get("http://localhost/php-selenium-unit/web/app_dev.php");

        $this->assertEquals("Welcome!", $webDriver->getTitle());
    }
}
