<?php
namespace Database\Seeders;

use Support\DBseeder\DBseeder;
use Database\Factory\UserFactory;
use Database\Factory\EmailFactory;
use Illuminate\Database\QueryException;

return new class implements DBseeder
{
    public function run(){
        $userCount = 1000;
        for($i = 0; $i < $userCount; $i++){
            $userFactory = new UserFactory;
            $emailFactory = new EmailFactory();
            $createdUser = $userFactory->create();
            $cratedEmail = $emailFactory
            ->state([
                'email' => $createdUser->email,
                'user_id' => $createdUser->id
            ])
            ->create();
            echo 'Ползователь:'.$createdUser->name.PHP_EOL;
            echo 'Email:'.$cratedEmail->email.PHP_EOL.PHP_EOL;
        }
    }
};