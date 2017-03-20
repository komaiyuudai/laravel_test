<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();

        $dates = [];

        $names = [
            'ABCMart',
            'YDK',
            'POs-Ca',
            'CHECK',
            'BORDER',
            'Test',
            'Hello',
            'Tropicana',
            'V.A',
            'ODBC',
            'PPP',
            'XXX',
            'CHA-CHA',
            'HOWRE',
            'MK.DDD',
            'BUN',
        ];

        for ($i = 1; $i <= count($names); $i++) {
            $datas[] = [
                'id'            => $i,
                'name'          => $names[$i - 1],
                'created_at'    => $date->format('Y-m-d H:i:s'),
                'updated_at'    => $date->format('Y-m-d H:i:s'),
            ];
        }

        DB::table('stores')->insert($datas);
    }
}
