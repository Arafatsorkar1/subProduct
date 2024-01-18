<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hospitals;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public  function home()
    {
        $hospitals = Hospitals::all();
        return  view('hospital.create', compact('hospitals'));
    }

    public function index()
    {
        $hospitals = Hospitals::all();
        return  view('hospital.show',compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return $request->all();
       Hospitals::create([
           'name' => $request->input('name')
       ]);
       return redirect()->back()->with('msg','Hospital Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hospital = Hospitals::find($id);
        $departments = Department::where('hospital_id',$id)->get();
        return view('hospital.ShowDetails',compact('hospital','departments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hospital = Hospitals::find($id);
        return view('hospital.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $hospital = Hospitals::find($id);
       $hospital->update([
           'name'=> $request->name
       ]);
       return redirect()->route('home')->with('msg','Hospital Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {



        $category = Hospitals::find($id);
        if ($category) {
            $category->departments()->delete();

        }

        $category->delete();



        return redirect()->back()->with('noti' , 'Subscription Category Delete Successfully');
    }
}
