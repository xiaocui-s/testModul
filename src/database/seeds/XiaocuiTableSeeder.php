<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class XiaocuiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(config('xiaocui.personnel_table'))->insert([
            [
                'name' => str_random(10),
                'email' => str_random(10).'@sina.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => str_random(10),
                'email' => str_random(10).'@qq.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => str_random(10),
                'email' => str_random(10).'@126.com',
                'password' => bcrypt('secret'),
            ],
        ]);

//        DB::table(config('xiaocui/xiaocui.permissions_table'))->insert([
//            [
//                'id'          => 35,
//                'name'        => '浏览',
//                'description' => '人员管理的浏览',
//                'method'      => 'GET',
//                'uri'         => 'personnel',
//                'module_id'   => 25,
//                'group_id'    => 15,
//                'icon'        => null,
//                'is_visible'  => 1,
//                'created_at'  => Carbon::now(),
//                'updated_at'  => Carbon::now(),
//            ],
//        ]);
//
//        DB::table(config('xiaocui/xiaocui.modules_table'))->insert([
//            [
//                'id'          => 25,
//                'name'        => '人员管理',
//                'description' => '人员管理',
//                'icon'        => 'fa fa-sun-o',
//                'group_id'    => 15,
//                'created_at'  => Carbon::now(),
//                'updated_at'  => Carbon::now(),
//            ],
//        ]);
//
//        DB::table(config('xiaocui/xiaocui.groups_table'))->insert([
//            [
//                'id'          => 15,
//                'name'        => '人员管理',
//                'description' => '人员管理',
//                'order'       => 3,
//                'created_at'  => Carbon::now(),
//                'updated_at'  => Carbon::now(),
//            ],
//        ]);
    }
}
