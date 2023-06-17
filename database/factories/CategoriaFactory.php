<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Faker -> gera um texto aleatorio
        //Para lançar um seeder em massa precisamos ter os campos dentro da propriedade $fillable no model
        return [
            'name' => $this->faker->unique()->word,
            'descricao' => $this->faker->text,
        ];
    }
}

//Aula 27
