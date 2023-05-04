<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Desk;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Desk>
 */
class DeskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        ];
    }
    public function createWithSequentialIds(){
        $desks = [];
        for($id = 1;$id <= 10;$id++){
            $desk = $this->create(['id'=>$id]);
            $desks[]=$desk;
        }
        return $desks;
    }
}
