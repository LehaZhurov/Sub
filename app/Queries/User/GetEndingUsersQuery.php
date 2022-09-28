<?php

namespace App\Queries\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class GetEndingUsersQuery
{
    public static function find($daysForEnd = 3): Collection
    {
        $endDay = date('Y-m-d H:i:s', strtotime("+" . $daysForEnd . " day"));
        $today = date('Y-m-d H:i:s');
        $users = User::query()
            ->where('validts', '<', $endDay)
            ->where('validts', '>', $today)
            ->where('confirmed', 1)
            ->join('emails', 'users.id', '=', 'emails.user_id')
            ->get();
        return $users;
    }
}
