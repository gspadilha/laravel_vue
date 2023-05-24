<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imoveis>
 */
class ImoveisFactory extends Factory
{
    const LOCALE = 'pt_BR';

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quartos' => fake(self::LOCALE)->numberBetween(1, 7),
            'banheiros' => fake(self::LOCALE)->numberBetween(1, 3),
            'area' => fake(self::LOCALE)->numberBetween(50, 1000),
            'cidade' => fake(self::LOCALE)->city(),
            //'cep' => fake(self::LOCALE)->postcode(),
            'cep' => sprintf(
                '%s%s',
                fake(self::LOCALE)->numberBetween(11111, 99999),
                fake(self::LOCALE)->numberBetween(000, 999)
            ),
            'endereco' => fake(self::LOCALE)->streetAddress(),
            'endereco_numero' => fake(self::LOCALE)->numberBetween(20, 660),
            'endereco_complemento' => sprintf(
                'AP %s',
                fake(self::LOCALE)->numberBetween(101, 909)
            ),
            'price' => fake(self::LOCALE)->numberBetween(50_000, 1_000_000),
        ];
    }
}
