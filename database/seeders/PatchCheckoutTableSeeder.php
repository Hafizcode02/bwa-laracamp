<?php

namespace Database\Seeders;

use App\Models\Checkout;
use Illuminate\Database\Seeder;

class PatchCheckoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $checkouts = Checkout::whereTotal(0)->get();

        foreach ($checkouts as $key => $checkout) {
            $checkout->update([
                'total' => $checkout->Camp->price * 1000
            ]);
        }
    }
}
