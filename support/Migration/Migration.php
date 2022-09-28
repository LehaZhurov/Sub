<?php
namespace Support\Migration;

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

class Migration
{

    public function __construct()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => $_ENV['DB_CONNECTION'],
            'host' => $_ENV['DB_HOST'],
            'port' => $_ENV['DB_PORT'],
            'database' => $_ENV['DB_DATABASE'],
            'username' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        $this->schema = $capsule->schema();
    }

}
