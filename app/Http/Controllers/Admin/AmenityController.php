<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    // show amenities page
    public function show(){
        $amenities = Amenity::get();
        return view('admin.amenity_view',compact('amenities'));
    }
    
    // show create amenities page
    public function create(){
        return view('admin.amenity_create');
    }

    // amenities store / submit
    public function store(Request $request){
        $amenity = new Amenity();
        // validation
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Amenity name is required',
        ]);
        // send data to the database
        $amenity->name = $request->name;
        // store in the table
        $amenity->save();
        return redirect()->route('admin_amenity_show')->with('success_message','Amenity Created Successfully');
    }

    
    // amenities edit
    public function edit($id){
        $amenity = Amenity::where('id',$id)->first();
        return view('admin.amenity_edit',compact('amenity'));
    }
    
    // amenities update
    public function update(Request $request,$id){
        $amenity = Amenity::where('id',$id)->first();
        // validation
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'SubCategory name is required'
        ]);
        // send data to the database
        $amenity->name = $request->name;
        // update the table
        $amenity->update();
        return redirect()->route('admin_amenity_show')->with('success_message','Amenity Updated Successfully');
    }

    // amenities delete
    public function delete($id){
        $amenity = Amenity::where('id',$id)->first();
        $amenity->delete();
        return redirect()->route('admin_amenity_show')->with('success_message','Amenity Deleted Successfully');
    }
}
