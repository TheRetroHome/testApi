<?php

namespace Database\Factories;

use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeskList>
 */
class DeskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = DeskList::class;

    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'desk_id'=>$this->faker->numberBetween(1,10),
        ];
    }

}
