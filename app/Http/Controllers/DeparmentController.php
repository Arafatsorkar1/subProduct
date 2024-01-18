<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hospitals;
use Illuminate\Http\Request;

class DeparmentController extends Controller
{



//deparments
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Department::with('hospital')->get();
        return view('Department.index',compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hospitals = Hospitals::all();
        return view('Department.create',compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      Department::create([
          'hospital_id'=> $request->input('hospital_id'),
          'department'=> $request->input('department'),
      ]);
      return redirect()->back()->with('msg','Department Create Successfully');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Department::find($id);
        $category->delete();
        return redirect()->back()->with('noti' , 'Department Delete Successfully');
    }
}
