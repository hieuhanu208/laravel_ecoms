<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        $admin_records = [[
        'id'=>1, 'name'=>'admins', 'type'=>'admin', 'mobile' => '342424242432',
        'email'=> 'admin@cmc.com.vn', 'password'=>'123456789','image'=>'', 'status'=>1
        ]];

        DB::table('admins')->insert($admin_records);

        // foreach ($admin_records as $key => $record) {
        //     Admin::create($record);
        // }
    }
}
