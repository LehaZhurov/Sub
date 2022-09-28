<?php
namespace Database\Factory;

use App\Models\Email;
use Support\Factory\Factory;

class EmailFactory extends Factory
{

    public $model = Email::class;

    public function definition(): array
    {
        return [
            'email' => $this->fake->safeEmail(),
            'user_id' => $this->fake->randomNumber(5, false),
            'is_checked' => $this->fake->randomElement([0, 1]),
            'is_valid' => $this->fake->randomElement([0, 1]),
        ];
    }

}
