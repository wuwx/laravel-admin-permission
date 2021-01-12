<?php

namespace Wuwx\LaravelAdminPermission;

use Encore\Admin\Facades\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Permission $extension)
    {
        if (! Permission::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-permission');
        }

        if ($this->app->runningInConsole() && $migrations = $extension->migrations()) {
            $this->loadMigrationsFrom($migrations);
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/wuwx/laravel-admin-permission')],
                'laravel-admin-permission'
            );
        }

        $this->app->booted(function () {
            Permission::routes(__DIR__.'/../routes/web.php');
        });

    }
}
