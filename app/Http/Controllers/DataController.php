<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $datas = Data::all();
        } catch(\Exception $exception){
            return response()->json(['error'=>$exception->getMessage()], 422);
        }

        return response()->json($datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            $this->validate($request,[
                'num_of_current_patient'=>'required|numeric',
                'num_of_discharge'=>'required|numeric',
                'num_of_admits'=>'required|numeric',
                'num_of_total_patient'=>'required|numeric',
                'cardiology_patient_count'=>'required|numeric',
                'telemetry_patient_count'=>'required|numeric',
                'oncology_patient_count'=>'required|numeric',
                'emergency_patient_count'=>'required|numeric',
                'orthopedic_patient_count'=>'required|numeric',
                'ob_patient_count'=>'required|numeric',
                'ob_er_patient_count'=>'required|numeric',
                'other_division_count'=>'required|numeric',
                'num_of_new_covid_cases'=>'required|numeric',
                'num_of_active_cases'=>'required|numeric',
                'num_of_covid_recovery'=>'required|numeric',
                'num_of_covid_deaths'=>'required|numeric',
                'num_of_total_covid_cases'=>'required|numeric',
                'percent_of_icu_bed_used'=>'required|numeric',
                'percent_of_isolation_bed_used'=>'required|numeric',
                'percent_of_wards_bed_used'=>'required|numeric',
                'total_icu_bed'=>'required|numeric',
                'total_isolation_bed'=>'required|numeric',
                'total_wards_bed'=>'required|numeric',
                'total_num_of_beds'=>'required|numeric',
            ]);

            $data = new Data();

            $data->num_of_current_patient = $request->num_of_current_patient;
            $data->num_of_discharge = $request->num_of_discharge;
            $data->num_of_admits = $request->num_of_admits;
            $data->num_of_total_patient = $request->num_of_total_patient;
            $data->cardiology_patient_count = $request->cardiology_patient_count;
            $data->telemetry_patient_count = $request->telemetry_patient_count;
            $data->oncology_patient_count = $request->oncology_patient_count;
            $data->emergency_patient_count = $request->emergency_patient_count;
            $data->orthopedic_patient_count = $request->orthopedic_patient_count;
            $data->ob_patient_count = $request->ob_patient_count;
            $data->ob_er_patient_count = $request->ob_er_patient_count;
            $data->other_division_count = $request->other_division_count;
            $data->num_of_new_covid_cases = $request->num_of_new_covid_cases;
            $data->num_of_active_cases = $request->num_of_active_cases;
            $data->num_of_covid_recovery = $request->num_of_covid_recovery;
            $data->num_of_covid_deaths = $request->num_of_covid_deaths;
            $data->num_of_total_covid_cases = $request->num_of_total_covid_cases;
            $data->percent_of_icu_bed_used = $request->percent_of_icu_bed_used;
            $data->percent_of_isolation_bed_used = $request->percent_of_isolation_bed_used;
            $data->percent_of_wards_bed_used = $request->percent_of_wards_bed_used;
            $data->total_icu_bed = $request->total_icu_bed;
            $data->total_isolation_bed = $request->total_isolation_bed;
            $data->total_wards_bed = $request->total_wards_bed;
            $data->total_num_of_beds = $request->total_num_of_beds;

            $data->save();
            return response()->json('Article Added',200);
        } catch(\Exception $exception){
            return response()->json(['error'=>$exception->getMessage()], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{

            $this->validate($request,[
                'num_of_current_patient'=>'required|numeric',
                'num_of_discharge'=>'required|numeric',
                'num_of_admits'=>'required|numeric',
                'num_of_total_patient'=>'required|numeric',
                'cardiology_patient_count'=>'required|numeric',
                'telemetry_patient_count'=>'required|numeric',
                'oncology_patient_count'=>'required|numeric',
                'emergency_patient_count'=>'required|numeric',
                'orthopedic_patient_count'=>'required|numeric',
                'ob_patient_count'=>'required|numeric',
                'ob_er_patient_count'=>'required|numeric',
                'other_division_count'=>'required|numeric',
                'num_of_new_covid_cases'=>'required|numeric',
                'num_of_active_cases'=>'required|numeric',
                'num_of_covid_recovery'=>'required|numeric',
                'num_of_covid_deaths'=>'required|numeric',
                'num_of_total_covid_cases'=>'required|numeric',
                'percent_of_icu_bed_used'=>'required|numeric',
                'percent_of_isolation_bed_used'=>'required|numeric',
                'percent_of_wards_bed_used'=>'required|numeric',
                'total_icu_bed'=>'required|numeric',
                'total_isolation_bed'=>'required|numeric',
                'total_wards_bed'=>'required|numeric',
                'total_num_of_beds'=>'required|numeric',
            ]);


            $data = Data::find($id);

            $data->num_of_current_patient = $request->num_of_current_patient;
            $data->num_of_discharge = $request->num_of_discharge;
            $data->num_of_admits = $request->num_of_admits;
            $data->num_of_total_patient = $request->num_of_total_patient;
            $data->cardiology_patient_count = $request->cardiology_patient_count;
            $data->telemetry_patient_count = $request->telemetry_patient_count;
            $data->oncology_patient_count = $request->oncology_patient_count;
            $data->emergency_patient_count = $request->emergency_patient_count;
            $data->orthopedic_patient_count = $request->orthopedic_patient_count;
            $data->ob_patient_count = $request->ob_patient_count;
            $data->ob_er_patient_count = $request->ob_er_patient_count;
            $data->other_division_count = $request->other_division_count;
            $data->num_of_new_covid_cases = $request->num_of_new_covid_cases;
            $data->num_of_active_cases = $request->num_of_active_cases;
            $data->num_of_covid_recovery = $request->num_of_covid_recovery;
            $data->num_of_covid_deaths = $request->num_of_covid_deaths;
            $data->num_of_total_covid_cases = $request->num_of_total_covid_cases;
            $data->percent_of_icu_bed_used = $request->percent_of_icu_bed_used;
            $data->percent_of_isolation_bed_used = $request->percent_of_isolation_bed_used;
            $data->percent_of_wards_bed_used = $request->percent_of_wards_bed_used;
            $data->total_icu_bed = $request->total_icu_bed;
            $data->total_isolation_bed = $request->total_isolation_bed;
            $data->total_wards_bed = $request->total_wards_bed;
            $data->total_num_of_beds = $request->total_num_of_beds;

            $data->save();
            return response()->json('Hospital Data is Updated',200);
        } catch(\Exception $exception){
            return response()->json(['error'=>$exception->getMessage()], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
