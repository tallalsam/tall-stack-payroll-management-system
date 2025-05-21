<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PayrollPeriod;

class PayrollPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_bmo = new PayrollPeriod;
        $new_bmo->frequency_id= 1;
        $new_bmo->year = 2025;
        $new_bmo->period_start = "2025-01-01";
        $new_bmo->period_end = "2025-01-31";
        $new_bmo->payout_date = "2025-02-01";
        $new_bmo->cutoff_order = 1;
        $new_bmo->is_payroll_generated = 0;
        $new_bmo->save();
    }
}
