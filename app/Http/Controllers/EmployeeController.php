<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Yajra\DataTables\DataTables;

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
            $empRel = Employee::all();
            return DataTables::of($empRel)
            ->addColumn('action', function ($empRel) {
                $button = $empRel->firstname;
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }



        return view('modules.employee');
    }
}
