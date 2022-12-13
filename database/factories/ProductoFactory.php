<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\productos;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'nombre' => $this->faker->name(),
            'url_imagen'=>$this->faker->imageUrl($width = 640, $height = 480),
            'descripcion' =>$this->faker->text($maxNbChars = 20),
            'precio' =>$this->faker->numberBetween(500, 2000),
            'iva' => 16,
            'precio_neto' =>$this->faker->numberBetween(500, 2000),
            'existencia'=>$this->faker->numberBetween(20, 100),
            'proveedor_id'=>$this->faker->numberBetween(1, 20),
            'categoria_id'=>$this->faker->numberBetween(1, 15),
            'marca_id'=>$this->faker->numberBetween(1, 20),
        ];
    }
}
