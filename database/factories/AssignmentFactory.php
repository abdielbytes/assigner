<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $assignmentOptions = [  "Bible Reading",
                                "Initial call",
                                "Return Visit",
                                "Bible Study",
                                "Talk"
        ];
        return [
            'week' => $this->faker->date(),
            'name' => $this->faker->name(),
            'assistant' =>$this->faker->name(),
            'assignment' =>$this->faker->randomElement($assignmentOptions),

        ];
    }
}
