<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use \Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S9',
            'description' => 'Samsung Galaxy S9+ merupakan telepon pintar berbasis Android yang diproduksi oleh Samsung Electronics. Ponsel ini dirilis pada 25 Februari 2018 lalu.',
            'photo' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 'Rp 6.599.000'
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iPhone X',
            'description' => 'iPhone menggunakan sistem operasi telepon genggam iOS Apple yang dikenal dengan nama "iPhone OS" sampai pertengahan 2010, sesaat setelah peluncuran iPad. iPhone pertama diluncurkan tanggal 29 Juni 2007',
            'photo' => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1',
            'price' => 'Rp 4.890.000'
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 2 XL',
            'description' => 'Google Pixel adalah sebuah merek perangkat elektronik konsumen yang dikembangkan oleh Google serta dijalankan Chrome OS atau sistem operasi Android. Merek Pixel diperkenalkan pada Februari 2013',
            'photo' => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1',
            'price' => 'Rp 3.090.000'
        ]);

        DB::table('products')->insert([
            'name' => 'LG V10 H900',
            'description' => 'Chipset Qualcomm MSM8992 Snapdragon 808 (20 nm)
            Prosesor Inti Hexa Core
            Sistem Operasi Android
            Versi OS Android 5.1.1 (Lollipop)',
            'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price' => 'Rp 9.300.000'
        ]);

        DB::table('products')->insert([
            'name' => 'Huawei Elate',
            'description' => ' Huawei Elate Unlocked perangkat Android ini menggunakan prosesor octa-core dan RAM 2GB untuk peluncuran dan penggunaan aplikasi yang cepat, dan penyimpanan internal 16GB.',
            'photo' => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg',
            'price' => 'Rp 5.300.000'
        ]);

        DB::table('products')->insert([
            'name' => 'HTC One M10',
            'description' => 'Spesifikasi HTC One M10 di sektor mesin dibekali CPU dengan kekuatan RAM sebesar 4 GB. Spek HTC One M10 memiliki layar berukuran 5.1 inci serta kamera belakang dengan resolusi 12 MP.',
            'photo' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
            'price' => 'Rp 1.860.175'
        ]);
    }
}
