<?php

namespace App\Queries\Email;

use App\Models\Email;
use Illuminate\Database\Eloquent\Collection;

class GetNotValidEmailQuery
{
    //Метод возврощает по умолчанию не валидные и не провереные emails
    public static function find(bool $notChecked = false): Collection
    {
        $emails = Email::query()
            ->where('is_valid', 0);
        if ($notChecked == true) {
            $emails->where('is_checked', 0);
        }
        $emails = $emails->get();
        return $emails;
    }
}
