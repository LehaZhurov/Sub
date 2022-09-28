<?php 

namespace Support\Action\Seeders;


class ExecuteSeeders{

    public static function start(array $seeders) : bool
    {
        foreach ($seeders as $seeder){
            $seeder->run();
        }
        return true;
    }

}