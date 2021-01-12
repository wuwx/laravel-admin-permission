<?php

namespace Wuwx\LaravelAdminPermission;

use Encore\Admin\Extension;

class Permission extends Extension
{
    public $name = 'laravel-admin-permission';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Laraveladminpermission',
        'path'  => 'laravel-admin-permission',
        'icon'  => 'fa-gears',
    ];
}
