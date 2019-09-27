<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use App\Appraisal;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/Dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // REGISTER FORM
    public function store(Request $request)
    {     
        $store = Register::create($request->all());
        return redirect('/Register');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function employee(Register $register)
    {
        $employee = DB::table('registers')->get();
        return view('/Employees', ['employees' => $employee]);
    }


    // APPRAISAL FORM
    public function appraise($id)
    {
        $appraise = Appraisal::find($id);
        return view('/Appraisal', ['appraise'=>$appraise]);
    }

    public function saveData(Request $request)
    {     
        Appraisal::create($request->all());
        return redirect('/Employees');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
