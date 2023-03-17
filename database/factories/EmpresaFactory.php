<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cif' => $this->faker->unique()->randomNumber(8),
            'denominacion' => $this->faker->company,
            'direccion' => $this->faker->address,
            'localidad' => $this->faker->city,
            'provincia' => $this->faker->city,
            'telefono' => $this->faker->phoneNumber,
            'pagina_web' => $this->faker->url,
            'email' => $this->faker->unique()->safeEmail,
            'antiguedad' => $this->faker->numberBetween(1, 100),
            'actividad_cnae' => $this->faker->name,
            'forma_juridica' => $this->faker->name,
            'fecha_constitucion' => $this->faker->date(),
            'objeto_social' => $this->faker->text,

        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function run(): void
    {
        \App\Models\Empresa::factory(10)->create();
    }
}
