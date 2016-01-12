<?php namespace LinkThrow\Ffmpeg;

use Illuminate\Support\ServiceProvider;

class FfmpegServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('linkthrow/ffmpeg');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['ffmpeg'] = $this->app->share(function($app)
        {
            return new ffmpeg;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('ffmpeg');
    }

}
