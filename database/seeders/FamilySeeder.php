<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Family;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $families = [
            'Tecnología' => [
                'Televisores' => [
                    'Accesorios para TV',
                    'LED',
                    'OLED',
                    'Otros',
                    'Proyectores',
                    'Insumos para TV',
                    'Televisores LGS'
                ],
                'Celulares' => [
                    'Accesorios',
                    'Audífonos'
                ]
            ],
            'Deportes' => [
                'Suplementos' => [
                    'Aminoácidos',
                    'Creatina',
                    'Proteínas',
                    'Otros'
                ],
                'Bicicletas' => [
                    'Bicicletas',
                    'Repuestos',
                    'Otros'
                ],
                'Fitness' => [
                    'Caminadoras',
                    'Pesas',
                    'Mancuernas'
                ]
            ]
        ];

        foreach($families as $family => $categories){
            $family = Family::create([
                'name' => $family
            ]);

            foreach ($categories as $category => $subcategories) {
                $category = Category::create([
                    'name' => $category,
                    'family_id' => $family->id
                ]);

                foreach ($subcategories as $subcategory) {
                    Subcategory::create([
                        'name' => $subcategory,
                        'category_id' => $category->id
                    ]);
                }
            }
        }
    }
}
