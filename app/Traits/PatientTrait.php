<?php

namespace App\Traits;

use App\Http\Controllers\WebController as WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Models\Patient;

trait PatientTrait {

    public function patient_index()
    {

        return \view('patient.index');
    }
    public function get_patients(Request $request)
    {

        $patient = (isset($request->delete)? Patient::onlyTrashed()->get() : Patient::get() );
        return response()->json([
            'data' => $patient
       ]);
    }
    public function patient_store(Request $request)
    {

       $request['password'] = bcrypt($request['password']);
       $request['user_id'] = Auth::user()->id;
       $patient = Patient::create($request->all());
       return \response()->json(['data' => $patient]);
    }

    public function get_patient(Request $request)
    {
        $patient = Patient::findOrFail($request->id);
        return \response()->json([
            'data' => $patient
        ]);
    }

    public function update_patient(Request $request)
     {
       Patient::find($request->id)->update($request->all());
       return response()->json(['message' => 'Great!'], 200);

     }

     public function patient_delete(Request $request)
     {
         Patient::findOrFail($request->id)->delete();
         return response()->json(['message' => 'Great!'], 200);
     }

     public function gets_patients(Request $request)
     {

         $patient = (isset($request->delete)? Patient::onlyTrashed()->get() :Patient::get());
         return \response()->json([
             'data' => $patient
           ]);
     }
     public function get_patient_delete(Request $request)
     {
         $patient_delete = Patient::onlyTrashed()->get();
         return \response()->json([
             'data' => $patient_delete
           ]);
     }

     public function restore_patients(Request $request)
     {
       Patient::onlyTrashed()->find($request->id)->restore();
       return response()->json(['message' => 'Great!'], 200);

     }
}
