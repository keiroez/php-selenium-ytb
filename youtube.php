<?php

namespace Facebook\WebDriver;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

require_once('vendor/autoload.php');

// Chromedriver (if started using --port=4444 as above)
$serverUrl = 'http://localhost:9515'; // where the chromedriver is located
$driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::chrome());

// Control your browser as you like
// Go to Wikipedia URL
$driver->get('https://www.youtube.com/');
// Find search element by its id, write 'PHP' inside and submit
$driver->findElement(WebDriverBy::id('search')) // find search input element
->sendKeys('php vs java'); // fill the search box

$driver->findElement(WebDriverBy::id('search-icon-legacy')) // find search input element
->click(); // fill the search box

sleep(2);

$driver->findElement(WebDriverBy::id('video-title')) // find search input element
->click(); // fill the search box

 // submit the whole form
// Find element of 'History' item in menu by its css selector
//$historyButton = $driver->findElement(
//    WebDriverBy::cssSelector('#ca-history a')
//);
// Read text of the element and print it to output
//echo 'About to click to a button with text: ' . $historyButton->getText();
// Click the element to navigate to revision history page
//$historyButton->click();