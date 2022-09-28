<?php
namespace Database\Factory;

use App\Models\User;
use Support\Factory\Factory;
use DateTime;
class UserFactory extends Factory
{

    public $model = User::class;

    public function definition(): array
    {
        $daysForEnd = rand(3,4);
        return [
            'name' => $this->fake->name(),
            'email' => $this->fake->safeEmail(),
            'validts' => date('Y-m-d H:i:s',strtotime("+".$daysForEnd." day")),
            'confirmed' => $this->fake->randomElement([0,1]),
        ];
    }
    
    

}
