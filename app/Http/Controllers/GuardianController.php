<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardianRequest;
use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guardians = Guardian::all();
        return view('guardians.index', compact('guardians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guardians.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardianRequest $request)
    {
        Guardian::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'nic' => $request->input('nic'),
            'address' => $request->input('address'),
            'contact_person' => $request->input('contact_person'),
        ]);

        return redirect()->route('guardians.index')->with('success', 'Parent Created Successfully');
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
    public function edit(Guardian $guardian)
    {
        return view('guardians.edit', compact('guardian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guardian $guardian)
    {
        Guardian::where('id', $guardian->id)->update([


            'name' => $request->name,
            'email' => $request->email,
            'nic' => $request->nic,
            'phone' => $request->phone,
            'address' => $request->address,


        ]);

        return to_route('guardians.index')->with('success', 'Parent Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guardian $guardian)
    {
        if ($guardian) {
            $guardian->delete();
        }

        return to_route('guardians.index')->with('success', 'Parent Deleted Successfully');
    }
}
