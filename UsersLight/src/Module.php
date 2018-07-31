<?php
namespace Users;

use Dframe\Modules\ManagerModule;

class Module extends ManagerModule
{

    public function boot()
    {
        // $this->loadModels(array(__DIR__ . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR));
        // $this->loadControllers(array(__DIR__ . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR));
        $this->loadRoutes(__DIR__ . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'router.php');
    }


    public function register()
    {

    }

}
