<?php

namespace Support\Action\Seeders;

class GetSeeders
{

    public static function execute(): array
    {
        $dir = './database/seeders';
        $files = scandir($dir);
        $step = 0;
        foreach ($files as $file) {
            $step++;
            if ($step > 2) {
                $seeders[] = require $dir . '/' . $file;
            }
        }
        return $seeders;
    }

}
