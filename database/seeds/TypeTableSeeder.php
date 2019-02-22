<?php

use App\Type;
use Illuminate\Database\Seeder;
use IvanLemeshev\Laravel5CyrillicSlug\Slug;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Холодные закуски',
            'slug' => str_slug('Холодные закуски'),
        ]);
        Type::create([
            'name' => 'Горячие закуски',
            'slug' => str_slug('Горячие закуски'),
        ]);
        Type::create([
            'name' => 'Салаты',
            'slug' => str_slug('Салаты'),
        ]);
        Type::create([
            'name' => 'Супы',
            'slug' => str_slug('Супы'),
        ]);
        Type::create([
            'name' => 'Вторые блюда',
            'slug' => str_slug('Вторые блюда'),
        ]);
        Type::create([
            'name' => 'Горячее ассорти',
            'slug' => str_slug('Горячее ассорти'),
        ]);
        Type::create([
            'name' => 'Стейки',
            'slug' => str_slug('Стейки'),
        ]);
        Type::create([
            'name' => 'Роллы',
            'slug' => str_slug('Роллы'),
        ]);
        Type::create([
            'name' => 'Мини роллы',
            'slug' => str_slug('Мини роллы'),
        ]);
        Type::create([
            'name' => 'Биг роллы',
            'slug' => str_slug('Биг роллы'),
        ]);
        Type::create([
            'name' => 'Жареные роллы',
            'slug' => str_slug('Жареные роллы'),
        ]);
        Type::create([
            'name' => 'Запеченые роллы',
            'slug' => str_slug('Запеченые роллы'),
        ]);
        Type::create([
            'name' => 'Суши',
            'slug' => str_slug('Суши'),
        ]);
        Type::create([
            'name' => 'Ассорти',
            'slug' => str_slug('Ассорти'),
        ]);
        Type::create([
            'name' => 'Гарниры',
            'slug' => str_slug('Гарниры'),
        ]);
        Type::create([
            'name' => 'Десерты',
            'slug' => str_slug('Десерты'),
        ]);
    }
}
