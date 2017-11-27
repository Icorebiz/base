<?php

namespace Icorebiz\Base;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Support\Facades\View;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'base');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'base');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->insertViews();
        $this->loadBreadcrumbs();
    }

    public function insertViews()
    {
        view()->composer('main_layout', function ($view) {
            View::make('base::header')->render();
            View::make('base::left_panel')->render();
            View::make('base::menu')->render();
            View::make('base::breadcrumb')->render();
        });
    }

    public function loadBreadcrumbs()
    {
        if (file_exists($file = __DIR__.'/routes/breadcrumbs.php'))
        {
            require $file;
        }
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->registerConfig();
    }

    public function registerConfig()
    {
        config([
            'notification_enum' => [
                'notification_channel' => [
                    'email' => 'notifications::messages.notification_enum.notification_channel.email'
                ],
                'command_name' => 'dms-notifications',
                'notification_model_name' => 'Icorebiz\\Notifications\\DMS\\Models\\Notification'
            ]
        ]);
    }
}
