<?php

namespace indiboy\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package think\captcha\facade
 * @mixin \indiboy\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \indiboy\captcha\Captcha::class;
    }
}
