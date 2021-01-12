<?php

namespace Wuwx\LaravelAdminPermission;

use Encore\Admin\Extension;

class Permission extends Extension
{
    public $name = 'laravel-admin-permission';

    public $views = __DIR__.'/../resources/views';
    
    public $migrations = __DIR__ . '/../database/migrations';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Laraveladminpermission',
        'path'  => 'laravel-admin-permission',
        'icon'  => 'fa-gears',
    ];
}
