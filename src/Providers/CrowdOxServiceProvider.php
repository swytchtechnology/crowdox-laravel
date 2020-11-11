<?php namespace edh649\CrowdOxLaravel\Providers;

use edh649\CrowdOxLaravel\Services\NullService;
use edh649\CrowdOxLaravel\Services\CrowdOxService;
use Illuminate\Support\ServiceProvider;

class CrowdOxServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider and merge config.
     *
     * @return void
     */
    public function register()
    {
        $packageName = 'crowdox-laravel';
        $configPath = __DIR__.'/../../config/crowdox-laravel.php';

        $this->mergeConfigFrom(
            $configPath, $packageName
        );

        $this->publishes([
            $configPath => config_path(sprintf('%s.php', $packageName)),
        ]);
    }

    /**
     * Bind service to 'crowdox' for use with Facade.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('crowdox', function () {
            $driver = config('crowdox-laravel.driver', 'api');
            if (is_null($driver) || $driver === 'log') {
                return new NullService($driver === 'log');
            }

            return new CrowdOxService;
        });
    }
}
