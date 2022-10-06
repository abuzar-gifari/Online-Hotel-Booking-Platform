<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Room;

class AdminRoomController extends Controller
{
    
    public function show(){
        $rooms = Room::get();
        return view('admin.room_view',compact('rooms'));
    }

    
    public function create(){
        $amenities = Amenity::get();
        return view('admin.room_create',compact('amenities'));
    }

    
    public function store(Request $request){
        

        $request->validate([
            'featured_photo' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'total_rooms' => 'required',
        ],[
            'featured_photo.required' => 'Photo is required',
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'price.required' => 'Price is required',
            'total_rooms.required' => 'Total Room Number is required'
        ]);




        /*check IF amenities exist or not*/
        $amenities = "";
        $i=0;
        if (isset($request->arr_amenities)) 
        {
            foreach($request->arr_amenities as $item){
                if ($i == 0) 
                {
                    $amenities .= $item;
                }
                else 
                {
                    $amenities .= ','.$item;
                }
                $i++;
            }
        }

      
        // Featured Photo Upload
        $ext = $request->file('featured_photo')->extension();
        $final_name = 'featured_photo_'.time().'.'.$ext;
        $request->file('featured_photo')->move(public_path('uploads/'),$final_name);

        $room = new Room();
        $room->name = $request->name;
        $room->description = $request->description;
        $room->price = $request->price;
        $room->total_rooms = $request->total_rooms;
        $room->amenities = $amenities;
        $room->size = $request->size;
        $room->total_beds = $request->total_beds;
        $room->total_bathrooms = $request->total_bathrooms;
        $room->total_beds = $request->total_beds;
        $room->total_balconies = $request->total_balconies;
        $room->total_guests = $request->total_guests;
        $room->featured_photo = $final_name;
        $room->video_id = $request->video_id;
        $room->save();
        return redirect()->route('admin_room_show')->with('success_message','Room Created Successfully');
    }



    public function edit($id){
        $amenities = Amenity::get();
        $room = Room::where('id',$id)->first();

        $existing_amenities = array();
        if ($room->amenities != "") 
        {
            $existing_amenities = explode(',',$room->amenities);
        }

        return view('admin.room_edit',compact('amenities','room','existing_amenities'));
    }


    // post update
    public function update(Request $request,$id){

        $request->validate([
            'featured_photo' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'total_rooms' => 'required',
        ],[
            'featured_photo.required' => 'Photo is required',
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'price.required' => 'Price is required',
            'total_rooms.required' => 'Total Room Number is required'
        ]);

        $room = Room::where('id',$id)->first();

        // featured photo upload
        if ($request->hasFile('featured_photo')) {
            $request->validate([
                'featured_photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);
            unlink(public_path('uploads/'.$room->featured_photo));
            $ext = $request->file('featured_photo')->extension();
            $final_name = 'featured_photo'.time().'.'.$ext;
            $request->file('featured_photo')->move(public_path('uploads/'),$final_name);
            $room->featured_photo = $final_name;
        }

        

        /*check IF amenities exist or not*/
        $amenities = "";
        $i=0;
        if (isset($request->arr_amenities)) 
        {
            foreach($request->arr_amenities as $item){
                if ($i == 0) 
                {
                    $amenities .= $item;
                }
                else 
                {
                    $amenities .= ','.$item;
                }
                $i++;
            }
        }

        $room->name = $request->name;
        $room->description = $request->description;
        $room->price = $request->price;
        $room->total_rooms = $request->total_rooms;
        $room->amenities = $amenities;
        $room->size = $request->size;
        $room->total_beds = $request->total_beds;
        $room->total_bathrooms = $request->total_bathrooms;
        $room->total_beds = $request->total_beds;
        $room->total_balconies = $request->total_balconies;
        $room->total_guests = $request->total_guests;
        $room->video_id = $request->video_id;
        $room->update();
        return redirect()->route('admin_room_show')->with('success_message','Room Information Updated Successfully');
    
    }


    // Room delete
    public function delete($id){
        $room = Room::where('id',$id)->first();
        // unlink the photo
        unlink(public_path('uploads/'.$room->featured_photo));
        $room->delete();
        return redirect()->route('admin_room_show')->with('success_message','Data is Deleted Successfully');
    }


}
