<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::truncate();

        Data::create([
            'num_of_current_patient'=>1000,
            'num_of_discharge'=>300,
            'num_of_admits'=>1300,
            'num_of_total_patient'=>3000,
            'cardiology_patient_count'=>300,
            'telemetry_patient_count'=>200,
            'oncology_patient_count'=>100,
            'emergency_patient_count'=>200,
            'orthopedic_patient_count'=>200,
            'other_division_count'=>50,
            'num_of_new_covid_cases'=>500,
            'num_of_active_cases'=>1000,
            'num_of_covid_recovery'=>400,
            'num_of_covid_deaths'=>100,
            'num_of_total_covid_cases'=>2000,
            'percent_of_icu_bed_used'=>60,
            'percent_of_isolation_bed_used'=>75,
            'percent_of_wards_bed_used'=>55,
            'total_icu_bed'=>100,
            'total_isolation_bed'=>100,
            'total_wards_bed'=>100,
            'total_num_of_beds'=>300,
        ]);
    }
}
