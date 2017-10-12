<?php

use Illuminate\Database\Seeder;
use App\Saldo;
class SaldosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saldos')->delete();
        Saldo::create([
          'user_id' => '1',
          'tipe_transaksi' => 'Homestay',
          'total' => '240000',
        ]);
    }
}
