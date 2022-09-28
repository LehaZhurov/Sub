<?php 

require '../vendor/autoload.php';

use GO\Scheduler;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => $_ENV['DB_CONNECTION'],
    'host'      => $_ENV['DB_HOST'],
    'port'      => $_ENV['DB_PORT'],
    'database'  => $_ENV['DB_DATABASE'],
    'username'  => $_ENV['DB_USER'],
    'password'  => $_ENV['DB_PASSWORD'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

// Create a new scheduler
$scheduler = new Scheduler();

// ... configure the scheduled jobs (see below) ...

// Let the scheduler execute jobs which are due.
$scheduler->run();