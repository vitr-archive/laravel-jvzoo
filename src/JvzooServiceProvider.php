<?php namespace Vitr\Jvzoo;

//  use \Illuminate\Support\ServiceProvider;
  use Illuminate\Support\ServiceProvider;

  class JvzooServiceProvider extends ServiceProvider {

   /**
     * Bootstrap the application services.
     *
     * @return void
    */
  public function boot()
  {

  }

  /**
    * Register the application services.
    *
    * @return void
  */
  public function register()
  {
    include __DIR__.'/routes.php';
//    $this->app->make('JvzooController');
  }

}