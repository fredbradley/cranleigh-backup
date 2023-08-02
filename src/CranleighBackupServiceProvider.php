<?php

namespace FredBradley\CranleighBackup;

use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class CranleighBackupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->addStorageDisk();
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'cranleigh-backup');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'cranleigh-backup');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('cranleigh-backup.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/cranleigh-backup'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/cranleigh-backup'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/cranleigh-backup'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'cranleigh-backup');

        // Register the main class to use with the facade
        $this->app->singleton('cranleigh-backup', function () {
            return new CranleighBackup;
        });
    }

    /**
     * @throws Exception
     */
    private function addStorageDisk(): void
    {
        Config::set('filesystems.disks.cranleigh-backup', [
            'driver' => 'sftp',
            'host' => 'cswebbackup01.cranleigh.org',
            'username' => 'backups',
            'password' => config('cranleigh-backup.password', env('CRANLEIGH_BACKUP_PASSWORD')),
            'port' => 22,
            'root' => self::getHostname(),
        ]);
    }

    /**
     * @throws Exception
     */
    public static function getHostname(): string
    {
        if (! is_string(config('app.url'))) {
            throw new Exception('No Hostname set in config/app.php');
        }
        $url = parse_url(config('app.url'));
        if (isset($url['host'])) {
            return $url['host'];
        }
        throw new Exception('No Hostname set in config/app.php');
    }
}
