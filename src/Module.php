<?php

namespace Modules\OAuthServer;

use Miny\Application\BaseApplication;

class Module extends \Miny\Modules\Module
{
    public function defaultConfiguration()
    {
        return [
            'url_base' => 'oauth',
            'versioned' => true,
            'versions' => ['1.0a']
        ];
    }


    public function init(BaseApplication $app)
    {
    }
}
