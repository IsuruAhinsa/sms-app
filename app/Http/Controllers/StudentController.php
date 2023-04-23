<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Mail\StudentCreated;
use App\Models\Guardian;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guardians = Guardian::all();
        $districts = DB::table('districts')->get();
        return view('students.create', [
            'guardians' => $guardians,
            'districts' => $districts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {
        // calculate age
        if ($request->has('birthday')) {
            $birthday = $request->input('birthday');
            $years = Carbon::parse($birthday)->diff(Carbon::parse('2023-01-01'))->format('%y');
        }

        // upload image
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $filename = date('Y_m_d_h_i_s') . "." . $extension;
                Storage::disk('public')->put('img/students/' . $filename, file_get_contents($image));
            }
        }

        $student = Student::Create([
            'image' => $filename,
            'guardian_id' => $request->input('guardian'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'birthday' => $request->input('birthday'),
            'age' => $years,
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'district' => $request->input('district'),
        ]);

        if ($student) {
            Mail::to($student->guardian->email)->send(new StudentCreated($student));
        }

        return redirect()->route('students.index')->with('success', 'Student Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $guardians = Guardian::all();
        return view('students.edit', compact('student', 'guardians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $filename = date('Y_m_d_h_i_s') . "." . $extension;
                Storage::disk('public')->put('img/students/' . $filename, file_get_contents($image));
            }

            if (Storage::disk('public')->exists('img/students/' . $student->image)) {
                Storage::disk('public')->delete('img/students/' . $student->image);
            }
        }

        // calculate age
        if ($request->has('birthday')) {
            $birthday = $request->input('birthday');
            $years = Carbon::parse($birthday)->diff(Carbon::parse('2023-01-01'))->format('%y');
        }


        Student::where('id', $student->id)->update([
            'image' => isset($filename) ? $filename : $student->image,
            'guardian_id' => $request->input('guardian'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'birthday' => $request->input('birthday'),
            'age' => $years,
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'district' => $request->input('district'),
        ]);

        return to_route('students.index')->with('success', 'Student Updated Successfully');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if ($student) {
            $student->delete();
        }

        return to_route('students.index')->with('success', 'Student Deleted Successfully');;
    }
}
