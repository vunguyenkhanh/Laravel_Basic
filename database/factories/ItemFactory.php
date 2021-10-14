<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Item;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id');
        $cates = Category::pluck('id');
        
        return [
            "name" => $this->faker->name(),
            "user_id" => $this->faker->randomElement($users),
            "cate_id" => $this->faker->randomElement($cates)
        ];
    }
}
