<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class EmployeeIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $users = Employee::all();

        return response()->json([
            "status" => "success",
            "data" => $users
        ]);
    }
    public function store(Request $request)
    {

        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'number' => 'required'
        ]);
        if ($validator->passes()) {
            //save data

            $intern = new Employee();
            $intern->name = $request->name;
            $intern->email = $request->position;
            $intern->field = $request->address;
            $intern->address = $request->number;
            // $student->name = $request->name;

            $intern->save();

        }
    }
}
