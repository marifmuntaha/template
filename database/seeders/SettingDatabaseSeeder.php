<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = [
            ['appname', 'Tagihan RTWNet'],
            ['favicon','/storage/images/favicon.png'],
            ['logo','/storage/images/logo.png'],
            ['logoIcon','/storage/images/logoIcon.png']
        ];
        for ($i=0;$i<count($setting);$i++){
            DB::table('settings')->insert([
                'name' => $setting[$i][0],
                'content' => $setting[$i][1]
            ]);
        }
    }
}
