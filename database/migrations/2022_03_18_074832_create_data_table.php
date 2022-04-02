<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->integer('num_of_current_patient');
            $table->integer('num_of_discharge');
            $table->integer('num_of_admits');
            $table->integer('num_of_total_patient');
            $table->integer('cardiology_patient_count');
            $table->integer('telemetry_patient_count');
            $table->integer('oncology_patient_count');
            $table->integer('emergency_patient_count');
            $table->integer('orthopedic_patient_count');
            $table->integer('ob_patient_count');
            $table->integer('ob_er_patient_count');
            $table->integer('other_division_count');
            $table->integer('num_of_new_covid_cases');
            $table->integer('num_of_active_cases');
            $table->integer('num_of_covid_recovery');
            $table->integer('num_of_covid_deaths');
            $table->integer('num_of_total_covid_cases');
            $table->integer('percent_of_icu_bed_used');
            $table->integer('percent_of_isolation_bed_used');
            $table->integer('percent_of_wards_bed_used');
            $table->integer('total_icu_bed');
            $table->integer('total_isolation_bed');
            $table->integer('total_wards_bed');
            $table->integer('total_num_of_beds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
