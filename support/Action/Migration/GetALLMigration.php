<?php 

namespace Support\Action\Migration;


class GetALLMigration{

    public static function execute() : array
    {
        $dir  = './database/migrations';
        $files = scandir($dir);
        $step = 0;
        foreach ($files as $file){
            $step++;
            if($step > 2){
                $migrations[] = require($dir.'/'.$file);             
            }
        }
        return $migrations;
    }

}