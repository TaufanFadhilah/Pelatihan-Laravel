<?php

use Illuminate\Database\Seeder;
use App\Homestay;
class HomestaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homestays')->delete();
        Homestay::create([
          'nama' => 'Anugerah',
          'alamat' => 'Bandung',
          'no_telp' => '087781884330',
          'deskripsi' => 'Anugerah hotel ready',
          'harga' => '120000',
          'status' => 'Ready',
        ]);
    }
}
