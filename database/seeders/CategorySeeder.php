<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $nameData =['Автотранспорт', 'Работа', 'Мебель, интерьер', 'Товары', 'Музыка, искусство', 'Бизнес', 'Телефоны', 'Оргтехника', 'Недвижимость', 'Личные вещи', 'Знакомства', 'Животные', 'Бытовая техника', 'Услуги',  'Строй материалы'];
        $imgData = ['avto-cat', 'obr-cat', 'meb-cat', 'tovar-cat', 'music-cat', 'bis-cat', 'tel-cat', 'org-cat', 'nedv-cat', 'od-cat', 'snak-cat', 'anim-cat', 'el-cat', 'ycl-cat', 'mat-cat'];
        for($i=0; $i < count($nameData); $i++) {
            $randArr = [
                'name' => $nameData[$i],
                'img' => $imgData[$i].'.png'];
                array_push($data, $randArr);
        }
        
        DB::table('categories')->insertOrIgnore($data);
    }
}