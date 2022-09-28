<?php

namespace App\Task;

use App\Action\Email\CheckEmail;
use App\Action\Email\UpdateValidEmail;
use App\Queries\Email\GetNotValidEmailQuery;

class CheckingEmailsTask
{

    public static function start()
    {
        $emails = GetNotValidEmailQuery::find();
        foreach ($emails as $email) {
            $checkResult = CheckEmail::execute($email->email);
            if ($checkResult) {
                UpdateValidEmail::execute($email->id);
                echo $email->email . '-валидный' . PHP_EOL . PHP_EOL;
                return;
            }
            echo $email->email . '-НЕвалидный' . PHP_EOL . PHP_EOL;
        }

    }

}
