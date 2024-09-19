<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
            'name' => 'Удобное кресло',
            'slug' => 'удобное кресло',
            'description' => 'Легкое, мягкое, удобное кресло хорошо впишется в любой интерьер.',
            'image_name' => 'armchair.jpeg',
            'price' => 15.000,
            'sale_price' => 20.000,
            'demand' => 0,
            ]
            );

            Product::create(
                [
                'name' => 'Кровать',
                'slug' => 'кровать',
                'description' => 'Новое дизайнерское решение, для вашей спальни в виде нашей кровати, придется по душе любому',
                'image_name' => 'bed.jpeg',
                'price' => 30.000,
                'sale_price' => 35.000,
                'demand' => 1,
                ]
                );

                Product::create(
                    [
                    'name' => 'Небольшое кресло',
                    'slug' => 'небольшое кресло',
                    'description' => 'Вариант специально для тех, кто любит посидеть с комфортом',
                    'image_name' => 'chairmini.jpeg',
                    'price' => 40.000,
                    'sale_price' => 43.000,
                    'demand' => 1,
                    ]
                    );

                    Product::create(
                        [
                        'name' => 'Тахта',
                        'slug' => 'небольшое кресло',
                        'description' => 'Отличное решение если вы любите принимать много гостей',
                        'image_name' => 'ottoman.jpeg',
                        'price' => 200.000,
                        'sale_price' => 200.000,
                        'demand' => 1,
                        ]
                        );

                        Product::create(
                            [
                            'name' => 'Комод',
                            'slug' => 'комод',
                            'description' => 'Этот мини-комод придется по душе любому, кто хочет обновить свой интерьер',
                            'image_name' => 'dresser.jpeg',
                            'price' => 40.000,
                            'sale_price' => 43.000,
                            'demand' => 0,
                            ]
                            );

                            Product::create(
                                [
                                'name' => 'Столик',
                                'slug' => 'столик',
                                'description' => 'Не покупайте комоды! Покупайте столы!!',
                                'image_name' => 'table.jpeg',
                                'price' => 100.000,
                                'sale_price' => 110.000,
                                'demand' => 0,
                                ]
                                );

                    
    }
}
