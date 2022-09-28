<?php 

namespace Support\Action\Migration;


class DownMigration{

    public static function execute(array $migrations) : bool
    {
        foreach ($migrations as $migration){
            $migration->down();
        }
        return true;
    }

}