<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'ProductName'=>'Dell',
            'ProductBrand'=>'5634',
            'Ram'=>'4',
            'Hard'=>'256',
            'HardDiskType'=>'SSD',
            'ProductPrice'=>'10000',
            'ProductDescription'=>'sdfhdbjkhsbdhjhdhjhdjhjhd',
            'ProductImage'=>'sododjgdskj'
        ]);
        Products::create([
            'ProductName'=>'HP',
            'ProductBrand'=>'1242',
            'Ram'=>'6',
            'Hard'=>'128',
            'HardDiskType'=>'HDD',
            'ProductPrice'=>'120000',
            'ProductDescription'=>'fwhsdfsdjjdjjd',
            'ProductImage'=>'sdfnkjsdsdbskjdkjs'
        ]);
        Products::create([
            'ProductName'=>'lenovo ',
            'ProductBrand'=>'2353',
            'Ram'=>'8',
            'Hard'=>'500',
            'HardDiskType'=>'HDD',
            'ProductPrice'=>'120000',
            'ProductDescription'=>'Desffdfdgll',
            'ProductImage'=>'dfsdkjfkjsddjh'
        ]);
    }
}
