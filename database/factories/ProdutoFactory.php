<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categoria;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //A variavel nome foi definida dessa forma para gerar a URL(slug) com base no nome do produto,

        //'Pluck' é um metodo do eloquent que pega uma informação de um model, nesse caso estamos pegando o ID de cada tabela, por conta
        //da tabela 'produtos' possuir chave estrangeira

        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'description' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(400,400),
            'id_user' => User::pluck('id')->random(),
            'id_categoria' => Categoria::pluck('id')->random(),
        ];
    }
}
