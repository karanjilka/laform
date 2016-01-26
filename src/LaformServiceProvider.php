<?php

namespace Karan\Laform;

use Illuminate\Foundation\AliasLoader;
use Collective\Html\FormBuilder as LaravelForm;
use Collective\Html\HtmlBuilder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

class LaformServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'laform');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/laform'),
            __DIR__.'/config/config.php' => config_path('laform.php'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'laform');

        $this->app->bind('laform', 'Karan\Laform\Laform');

        if (!$this->app->offsetExists('form')) {
            $this->app->singleton('form', function ($app) {

                // LaravelCollective\HtmlBuilder 5.2 is not backward compatible and will throw an exeption
                // https://github.com/kristijanhusak/laravel-form-builder/commit/a36c4b9fbc2047e81a79ac8950d734e37cd7bfb0
                if (substr(Application::VERSION, 0, 3) == '5.2') {
                    $form = new LaravelForm($app['html'], $app['url'], $app['view'], $app['session.store']->getToken());
                } else {
                    $form = new LaravelForm($app['html'], $app['url'], $app['session.store']->getToken());
                }

                return $form->setSessionStore($app['session.store']);
            });

            if (!$this->aliasExists('Form')) {
                AliasLoader::getInstance()->alias(
                    'Form',
                    'Collective\Html\FormFacade'
                );
            }
        }

        if (!$this->app->offsetExists('html')) {
            $this->app->singleton('html', function ($app) {
                return new HtmlBuilder($app['url'], $app['view']);
            });

            if (!$this->aliasExists('Html')) {
                AliasLoader::getInstance()->alias(
                    'Html',
                    'Collective\Html\HtmlFacade'
                );
            }
        }
    }

    /**
     * Check if an alias already exists in the IOC.
     *
     * @param $alias
     *
     * @return bool
     */
    private function aliasExists($alias)
    {
        return array_key_exists($alias, AliasLoader::getInstance()->getAliases());
    }
}
