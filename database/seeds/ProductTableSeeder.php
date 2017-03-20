<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();

        $datas = [
            [
                'name'      => 'M32837',
                'brand_id'  => 1,
                'price'     => 150000,
            ],
            [
                'name' => 'N62665',
                'brand_id' => 1,
                'price'     => 100000,
            ],
            [
                'name' => 'ZX1234',
                'brand_id' => 2,
                'price'     => 50000,
            ],
            [
                'name' => 'ZX1284',
                'brand_id' => 2,
                'price'     => 40000,
            ],
            [
                'name' => 'FFF778',
                'brand_id' => 3,
                'price'     => 48000,
            ],
            [
                'name' => 'FFF758',
                'brand_id' => 3,
                'price'     => 38000,
            ],
            [
                'name' => '114075-V001N/4321',
                'brand_id' => 4,
                'price'     => 138000,
            ],
            [
                'name' => '193642-V4651/2006',
                'brand_id' => 4,
                'price'     => 128000,
            ],
            [
                'name' => '2MO738_2EGO_F0UDO',
                'brand_id' => 5,
                'price'     => 28000,
            ],
            [
                'name' => '2MV836_2EGO_F0UDN',
                'brand_id' => 5,
                'price'     => 88000,
            ],
            [
                'name' => '428740 DJ20T 2145',
                'brand_id' => 6,
                'price'     => 98000,
            ],
            [
                'name' => '459133 DJ20T 1000',
                'brand_id' => 6,
                'price'     => 56000,
            ],
            [
                'name' => '74237 KH/MA',
                'brand_id' => 7,
                'price'     => 56000,
            ],
            [
                'name' => 'F52588 SVDMS',
                'brand_id' => 7,
                'price'     => 50000,
            ],
            [
                'name' => 'L2W218N',
                'brand_id' => 8,
                'price'     => 60000,
            ],
            [
                'name' => 'L2PA80A',
                'brand_id' => 8,
                'price'     => 80000,
            ],
            [
                'name' => '052-02214',
                'brand_id' => 9,
                'price'     => 180000,
            ],
            [
                'name' => '341-01319',
                'brand_id' => 9,
                'price'     => 280000,
            ],
            [
                'name' => 'REC F ZIP',
                'brand_id' => 10,
                'price'     => 80000,
            ],
            [
                'name' => 'WAVE WALLET',
                'brand_id' => 10,
                'price'     => 50000,
            ],
            [
                'name' => 'L3000942',
                'brand_id' => 11,
                'price'     => 45000,
            ],
            [
                'name' => 'L3001285',
                'brand_id' => 11,
                'price'     => 65000,
            ],
            [
                'name' => '3996684',
                'brand_id' => 12,
                'price'     => 55000,
            ],
            [
                'name' => '3975334',
                'brand_id' => 12,
                'price'     => 56000,
            ],
            [
                'name' => '10000001',
                'brand_id' => 13,
                'price'     => 76000,
            ],
            [
                'name' => '10000002',
                'brand_id' => 13,
                'price'     => 96000,
            ],
            [
                'name' => 'FRESH STARTER 24 ZIP',
                'brand_id' => 14,
                'price'     => 6000,
            ],
            [
                'name' => 'X03928 PR271 T8013',
                'brand_id' => 14,
                'price'     => 16000,
            ],
            [
                'name' => '1165065 B078',
                'brand_id' => 15,
                'price'     => 46000,
            ],
            [
                'name' => '1165065 A078',
                'brand_id' => 15,
                'price'     => 65000,
            ],
            [
                'name' => 'S1090',
                'brand_id' => 16,
                'price'     => 25000,
            ],
            [
                'name' => 'S1091',
                'brand_id' => 16,
                'price'     => 18000,
            ],
            [
                'name' => 'BP1672-A1001-80999',
                'brand_id' => 17,
                'price'     => 118000,
            ],
            [
                'name' => 'BP1672-A1001-77999',
                'brand_id' => 17,
                'price'     => 158000,
            ],
            [
                'name' => 'PVC1HW0125',
                'brand_id' => 18,
                'price'     => 58000,
            ],
            [
                'name' => 'PVC1HW0144',
                'brand_id' => 18,
                'price'     => 48000,
            ],
            [
                'name' => '060416',
                'brand_id' => 19,
                'price'     => 64000,
            ],
            [
                'name' => '065416',
                'brand_id' => 19,
                'price'     => 164000,
            ],
            [
                'name' => '4512145',
                'brand_id' => 20,
                'price'     => 14000,
            ],
            [
                'name' => '4512454',
                'brand_id' => 20,
                'price'     => 30000,
            ],
        ];

        $i = 1;
        foreach ($datas as $key => &$val) {
            $val['id'] = $i;
            $val['store_id'] = rand(1, 16);
            $val['created_at'] = $date->format('Y-m-d H:i:s');
            $val['updated_at'] = $date->format('Y-m-d H:i:s');
            $i++;
        }

        DB::table('products')->insert($datas);
    }
}
