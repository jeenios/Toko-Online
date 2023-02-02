<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'CHELSEA AWAY 3RD 2018-2019',
            'liga_id' => 2,
            'gambar' => 'chelsea.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'LEICESTER CITY HOME 2018-2019',
            'liga_id' => 2,
            'gambar' => 'leicester.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'MAN. UNITED AWAY 2018-2019',
            'liga_id' => 2,
            'gambar' => 'mu.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'MAN. UNITED AWAY 2018-2019',
            'liga_id' => 2,
            'gambar' => 'mu1.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'LIVERPOOL AWAY 2018-2019',
            'liga_id' => 2,
            'gambar' => 'liverpool.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'TOTTENHAM 3RD 2018-2019',
            'liga_id' => 2,
            'gambar' => 'tottenham.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'ARSENAL HOME 2018-2019',
            'liga_id' => 2,
            'gambar' => 'arsenal.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'EVERTON HOME 2018-2019',
            'liga_id' => 2,
            'gambar' => 'everton.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'DORTMUND AWAY 2018-2019',
            'liga_id' => 1,
            'gambar' => 'dortmund.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'DORTMUND HOME 2018-2019',
            'liga_id' => 1,
            'gambar' => 'dortmund1.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'BAYERN MUNCHEN 3RD 2018 2019',
            'liga_id' => 1,
            'gambar' => 'munchen.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'JUVENTUS AWAY 2018-2019',
            'liga_id' => 4,
            'gambar' => 'juve.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'JUVENTUS HOME 2018-2019',
            'liga_id' => 4,
            'gambar' => 'juve1.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'AS ROMA HOME 2018-2019',
            'liga_id' => 4,
            'gambar' => 'asroma.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'AC MILAN HOME 2018 2019',
            'liga_id' => 4,
            'gambar' => 'acmilan.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'INTER MILAN HOME 2018 2019',
            'liga_id' => 4,
            'gambar' => 'intmilan.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'LAZIO FC HOME 2018-2019',
            'liga_id' => 4,
            'gambar' => 'lazio.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'REAL MADRID 3RD 2018-2019',
            'liga_id' => 3,
            'gambar' => 'madrid.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'REAL MADRID 1RD 2018-2019',
            'liga_id' => 3,
            'gambar' => 'madrid1.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'BARCELONA HOME 2018-2019',
            'liga_id' => 3,
            'gambar' => 'barcelona.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'ATLETICO MADRID HOME 2018-2019',
            'liga_id' => 3,
            'gambar' => 'atl.png'
        ]);
    }
}
