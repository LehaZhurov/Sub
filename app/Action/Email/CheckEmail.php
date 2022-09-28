<?php

namespace App\Action\Email;

class CheckEmail
{

    public static function execute(string $email): bool
    {
        //Попытка имитации логики функции проверки $email
        sleep(rand(1, 60));
        return rand(0, 1);
    }

}
