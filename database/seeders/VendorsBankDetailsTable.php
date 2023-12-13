<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBankDetail;


class VendorsBankDetailsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $vendorRecords = [
            ['id'=>1,'vendor_id'=>1, 'account_holder_name'=>'Herry Mshihiri', 
            'bank_name'=>'CRDB', 'account_number'=>'12389232323', 'bank_ifsc_code'=>'3143555',],
        ];

        VendorsBankDetail::insert($vendorRecords);
    }
}
