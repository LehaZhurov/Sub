<?php

namespace App\Task;

use App\Action\Email\SendMessage;
use App\Queries\User\GetEndingUsersQuery;

class NewsletterEndSubscriptionTask
{

    public static function start()
    {
        $users = GetEndingUsersQuery::find();
        foreach ($users as $user) {
            $text = "{$user->name}, your subscription is expiring soon";
            $email = $user->email;
            SendMessage::execute($text, $email);
        }
    }

}
