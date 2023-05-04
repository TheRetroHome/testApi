<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Card;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Card::class;
    public function definition(): array
    {
        return [
            'name'=>$this->faker->text(30),
            'desk_list_id'=>$this->faker->numberBetween(1,10),
        ];
    }

}
