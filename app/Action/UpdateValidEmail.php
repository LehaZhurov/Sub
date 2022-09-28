<?php

namespace App\Action\Email;

use App\Models\Email;

class UpdateValidEmail
{

    public static function execute(int $id): Email
    {
        $email = Email::find($id)->first();
        $email->is_checked = 1;
        $email->is_valid = 1;
        $email->save();
        return $email;
    }

}
