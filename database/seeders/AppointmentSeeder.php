<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appointment::truncate();
        Appointment::create([
            'name'=>'john doe',
            'contact_number'=>'09384756812',
            'address'=>'Carmen',
            'date'=>'2022-03-20',
            'time'=>'08:00:00'
        ]);
    }
}
