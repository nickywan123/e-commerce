<?php

use App\Models\Users\Dealers\Statement;
use Illuminate\Database\Seeder;

class StatementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statement = new Statement;
        $statement->account_id = 1911000001;
        $statement->month = 'May';
        $statement->category = 'Bed & Mattresses';
        $statement->quantity = 2;
        $statement->amount = 200;
        $statement->purchase_date = '16/05/2020';
        $statement->invoice_no = "BJS1232323";
        $statement->description = "Bed Pillow Red";
        $statement->unit_price = "100";
        $statement->save();
    }
}
