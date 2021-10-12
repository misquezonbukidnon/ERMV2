<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
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
            $emp_rel = EmployeeRelationship::with('employees', 'offices', 'positions', 'classifications', 'employment_statuses')->get();
            return DataTables::of($emp_rel)->make(true);
        }

        return view('modules.employee');
    }
}
