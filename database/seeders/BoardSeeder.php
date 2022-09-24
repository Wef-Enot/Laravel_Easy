<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $nameData =['Диски колесные алюминиевые R17-20', 'Haval Jolion 2021'];
        $priceData =[39000, 1899000];
        $catData = [31, 31];
        
        for($i=0; $i < count($nameData); $i++) {
            $randArr = [
                'title' => $nameData[$i],
                'id_category' => $catData[$i],
                'price' => $priceData[$i]];
                array_push($data, $randArr);
        }
        
        DB::table('boards')->insertOrIgnore($data);
    }
}