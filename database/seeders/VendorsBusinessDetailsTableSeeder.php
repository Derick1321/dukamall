<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBusinessDetail;

class VendorsBusinessDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $vendorRecords = [
            ['id'=>1,'vendor_id'=>1, 'shop_name'=>'Herry Electronics Store', 
            'shop_address'=>'1234-PBX', 'shop_city'=>'Dar Es Salaam', 'shop_country'=>'Tanzania', 'shop_pincode'=>'110001',
            'shop_mobile'=>'255655415216', 'shop_website'=>'peachtechcorp.com', 'shop_email'=>'herry@admin.com', 'address_proof'=>'Passport', 'address_proof_image'=>'test.jpg',
            'business_licence_number'=>'132435355', 'gst_number'=>'446466446', 'pan_number'=>'242355346'],
        ];

        VendorsBusinessDetail::insert($vendorRecords);

    }
}
