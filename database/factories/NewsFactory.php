<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = \App\Models\Users::pluck('id')->toArray();
        return [
            'title' => $this->faker -> sentence,
            'content' => $this->faker -> paragraph,
            'posted_date' => $this->faker->date,
            'user_id' => $this->faker -> randomElement($userIds)
        ];
    }
}
