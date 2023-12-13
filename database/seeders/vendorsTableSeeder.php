<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendors;

class vendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $vendorRecords = [
            ['id'=>1, 'name'=>'Herry', 'address'=>'p.o.box 131882', 'city'=>'Dar Es Salaam', 
            'state'=>'Tanzania', 'country'=>'Tanzania', 'pincode'=>'110001', 
            'mobile'=>'+255655415216', 'email'=>'herry@admin.com', 'status'=>0]
        ];
        Vendors::insert($vendorRecords);
    }
}
