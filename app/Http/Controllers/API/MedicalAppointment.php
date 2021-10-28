<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\MedicalAppointment;


class ClinicAppointmentsAPI extends Controller
{
    public function index()
    {
        $appointments = MedicalAppointment::all();

        return response()->json(['appointments'=>$appointments],200);
    }
}
