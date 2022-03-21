<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_of_current_patient',
        'num_of_discharge',
        'num_of_admits',
        'num_of_total_patient',
        'cardiology_patient_count',
        'telemetry_patient_count',
        'oncology_patient_count',
        'emergency_patient_count',
        'orthopedic_patient_count',
        'other_division_count',
        'num_of_new_covid_cases',
        'num_of_active_cases',
        'num_of_covid_recovery',
        'num_of_covid_deaths',
        'num_of_total_covid_cases',
        'percent_of_icu_bed_used',
        'percent_of_isolation_bed_used',
        'percent_of_wards_bed_used',
        'total_icu_bed',
        'total_isolation_bed',
        'total_wards_bed',
        'total_num_of_beds'
    ];
}
