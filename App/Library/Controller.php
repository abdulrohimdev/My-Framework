<?php
namespace App\Library;
use Jenssegers\Blade\Blade;

class Controller{

    public $view_directory = false;

    public function view($content,$variable= []){
        global $config;
        $app_dir = $config['app_namespace'];
        $app_dir = str_replace("\\","/",$app_dir);
        if($this->view_directory !== false)
        {
            $views = __DIR__ . './../../'.$app_dir.'/'.$this->view_directory;
            $cache = __DIR__ . './../../'.$config['cache_view'];
            $blade = new Blade($views, $cache);
            echo $blade->make($content,$variable)->render();
        }
        else
        {
            $views = __DIR__ . './../../'.$app_dir;
            $cache = __DIR__ . './../../'.$config['cache_view'];
            $blade = new Blade($views, $cache);
            echo $blade->make($content,$variable)->render();

        }
    }

    
}

?>