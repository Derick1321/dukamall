<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminRecords = [
            ['id'=>2,'name'=>'Herry','type'=>'vendor','vendor_id'=>1,'mobile'=>'+255655415216',
            'email'=>'herry@admin.com','password'=>'$2y$10$wjAM4R1kEMbF2Tlbv8sIxe9Z2bTjjTl1RowaqD9cKfQqoOL3NVj/e','image'=>'','status'=>0],

            // ['id'=>2,'name'=>'Herry','type'=>'Super Admin','vendor_id'=>0,'mobile'=>'+255655415216',
            // 'email'=>'admin@admin.com','password'=>'$2y$10$wjAM4R1kEMbF2Tlbv8sIxe9Z2bTjjTl1RowaqD9cKfQqoOL3NVj/e','image'=>'','status'=>0],
        ];
        Admin::insert($adminRecords);
    }
}
