<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            "Acordar cedo",
            "Beber água",
            "Praticar exercícios",
            "Ler diariamente",
            "Meditar",
            "Planejar o dia",
            "Dormir cedo",
            "Manter a organização",
            "Alimentar-se bem",
            "Evitar redes sociais em excesso",
            "Economizar dinheiro",
            "Praticar gratidão",
            "Estudar algo novo",
            "Cuidar da saúde mental",
            "Focar em uma tarefa por vez"
        ];

        return [
            'user_id' => User::factory(),
            'uuid' => fake()->uuid(),
            'title' => fake()->randomElement($habits)
        ];
    }
}
