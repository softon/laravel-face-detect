<?php namespace Softon\LaravelFaceDetect;

use Illuminate\Support\Facades\Config;
use Intervention\Image\ImageServiceProviderLaravel5 as BaseServiceProvider;

class FaceDetectServiceProvider extends BaseServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('FaceDetect', '\Softon\LaravelFaceDetect\FaceDetect');
        
	}


    public function boot(){
		
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [

        ];
	}

}
