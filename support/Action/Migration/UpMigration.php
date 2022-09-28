<?php 

namespace Support\Action\Migration;


class UpMigration{

    public static function execute(array $migrations) : bool
    {
        foreach ($migrations as $migration){
            $migration->up();
        }
        return true;
    }

}