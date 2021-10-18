<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        /**
         * Server-side Process (DataTables)
         */
        if ($request->ajax()) {
            $emp_rel = Employee::all();
            return DataTables::of($emp_rel)
            ->addColumn(‘action’, function ($emp_rel) {
                $name = "name";
                return $name;
            })
            ->rawColumns([‘action’])
            ->make(true);
        }



        return view('modules.employee');
    }
}
