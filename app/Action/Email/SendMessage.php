<?php

namespace App\Action\Email;

class SendMessage
{

    public static function execute(string $messages, string $email): void
    {
        //Отправка email может быть реализована как угодно
        echo 'Сообщение отправленно на адресс ' . $email . PHP_EOL;
        echo 'Текст:' . PHP_EOL . $messages . PHP_EOL . PHP_EOL;
    }

}
