<?php
namespace abovesky\anticaptcha\helper;

use abovesky\anticaptcha\CaptchaService;

class Captcha
{
    const MATCH_RECAPTCHA = 'g-recaptcha-response';

    public static function isCaptcha($html)
    {
        $result = false;

        if (strpos($html, self::MATCH_RECAPTCHA)) {
            $result = CaptchaService::TYPE_NO_CAPTCHA_PROXYLESS;
        }

        return $result;
    }
}