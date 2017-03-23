<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'LOUIS VUITTON',
            'Paul Smith',
            'Bvlgari',
            'BOTTEGA VENETA',
            'PRADA',
            'GUCCI',
            'COACH',
            'dunhill',
            'PORTER',
            'CHROME HEARTS',
            'Cartier',
            'BURBERRY',
            'Hermes',
            'DIESEL',
            'Christian Louboutin',
            'WHITE HOUSE COX',
            'Dolce&Gabbana',
            'Calvin Klein',
            'Vivienne Westwood',
            'LOEWE',
        ];

        $datas = [];

        $date = new DateTime();

        for ($i = 1; $i <= count($names); $i++) {
            $datas[] = [
                'id'            => $i,
                'name'          => $names[$i - 1],
                'store_id'      => rand(1, 16),
                'created_at'    => $date->format('Y-m-d H:i:s'),
                'updated_at'    => $date->format('Y-m-d H:i:s'),
            ];
        }

        DB::table('brands')->insert($datas);
    }
}
