<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Latihan
        $students = Student::all();
        // $students = Student::where('gender', 'P')->get();
        // $students = Student::where('gender', 'P')->orWhere('birth_place', 'Bandung')->get();
        // $students = Student::orderBy('name', 'desc')->get();

        // Tugas
        // $students = Student::where('birth_place', 'Jakarta')->Where('gender', 'W')->get();
        // $students = Student::where('code', 'like', '%6%')->get();
        // $students = Student::whereMonth('birth_date', '=', '08')->get();
        // $students = Student::where(function ($query) {
        //     $query->where('code', 'like', '$2$')->where('birth_place', 'Jakarta');
        // })->orWhere(function ($query) {
        //     $query->where('birth_place', 'like', '%u%')->where('gender', 'W');
        // })->get();
        // $students = Student::orderBy('code', 'DESC')->limit(4)->get();
        return view('student.index', ['students' => $students]);
    }

    public function create()
    {
        $faculties = Faculty::pluck('name', 'id');
        return view('student.create', compact('faculties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'faculty_id' => 'required'
        ]);

        Student::create($request->all());
        return redirect('/student')->with('success', 'Student saved!');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
        ]);

        $student->update($request->all());
        return redirect('/student')->with('success', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/student')->with('success', 'Student deleted');
    }
}
