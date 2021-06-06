<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perfil;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $perfil=Perfil::all('id');
        return [
            'nomusu'=>$this->faker->unique()->userName(),
            'email'=>$this->faker->unique()->freeEmail,
            'localidad'=>$this->faker->city(),
            'perfil_id'=>$perfil->get(rand(0, count($perfil)-1))
        ];
    }
}
