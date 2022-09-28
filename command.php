<?php
require 'index.php';

use Support\Action\Migration\DownMigration;
use Support\Action\Migration\GetALLMigration;
use Support\Action\Migration\UpMigration;
use Support\Action\Seeders\ExecuteSeeders;
use Support\Action\Seeders\GetSeeders;
use App\Action\User\GetEndingUsersAction;
$command = @$argv[1];
$postfix = @$argv[2];

if ($command == 'migrate') {
    $migration = GetALLMigration::execute();
    if ($postfix == 'up') {
        UpMigration::execute($migration);
        echo 'Таблицы созданы';
    } elseif ($postfix == 'down') {
        DownMigration::execute($migration);
        echo 'Таблицы удалены';
    } elseif ($postfix == 'refresh') {
        DownMigration::execute($migration);
        UpMigration::execute($migration);
        echo 'Таблицы пересозданы';
    } else {
        echo "У комманды migrate принимает up,down или refresh";
    }
}
if ($command == 'seed') {
    $seeders = GetSeeders::execute();
    ExecuteSeeders::start($seeders);
    echo "База заполнена";
}