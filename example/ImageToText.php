<?php
require_once __DIR__.'/../vendor/autoload.php';

use abovesky\anticaptcha\CaptchaService;

$apiKey = "12345678901234567890123456789012";

$resCaptcha = new CaptchaService(
    $apiKey, // your apiKey from anti-captcha.com
    CaptchaService::TYPE_IMAGE_TO_TEXT,
    [
	    'imgPath' => '/path/example.png', // path to captcha image
	    'isBase64' => false
    ]
);

echo $resCaptcha->check(); // text-result

// or

$resCaptcha->check();
echo $resCaptcha->hashResult; // text-result