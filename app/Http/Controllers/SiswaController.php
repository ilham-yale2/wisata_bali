<?php

namespace App\Http\Controllers;

use App\Student;
use App\Jurusan;
use Illuminate\Http\Request;
use App\Http\Requests\ErrorFormRequest;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('siswa.index',compact('jurusan'));
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
    public function store(ErrorFormRequest $request)
    {
       Student::create($request->all());
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
        $student = Student::find($id);
        return compact('student') ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ErrorFormRequest $request,Student $student)
    {
        Student::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'nisn' => $request->nisn,
                'jurusan' => $request->jurusan,
                'email' => $request->email,
            ]);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
    }

    // load data 
    public function dataStudents(){
        
        $students = Student::all();
        return view('siswa.dataStudents',compact('students'));
    }   
}
