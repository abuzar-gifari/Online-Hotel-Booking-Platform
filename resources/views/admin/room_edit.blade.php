@extends('admin.layout.app')
@section('heading','Edit Room')
@section('content')
<div class="section-body">
    <form action="{{ route('admin_room_update',$room->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Existing Photo</label>
                            <img style="width: 30%; height:30%;" src="{{ asset('uploads/'.$room->featured_photo) }}" alt="No Image">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Change Photo</label>
                            <input type="file" class="form-control" name="featured_photo">
                        </div>
                        <div class="form-group mb-3">
                            <label>Room Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $room->name }}">
                        </div>
                         <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control snote" cols="30" rows="10">{{ $room->description }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $room->price }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Total Rooms</label>
                            <input type="text" class="form-control" name="total_rooms" value="{{ $room->total_rooms }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Amenities</label>
                            @php $i=0; @endphp
                            @foreach ($amenities as $amenity)


                                @if (in_array($amenity->id,$existing_amenities))
                                @php $checked_type = "checked"; @endphp
                                @else 
                                @php $checked_type = ""; @endphp
                                @endif

                                @php $i++; @endphp

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $amenity->id }}" id="defaultCheck{{ $i }}" name="arr_amenities[]" {{ $checked_type }}>
                                    <label class="form-check-label" for="defaultCheck{{ $i }}">
                                        {{ $amenity->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group mb-3">
                            <label>Size</label>
                            <input type="text" class="form-control" name="size" value="{{ $room->size }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Beds</label>
                            <input type="text" class="form-control" name="total_beds" value="{{ $room->total_beds }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Bathrooms</label>
                            <input type="text" class="form-control" name="total_bathrooms" value="{{ $room->total_bathrooms }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Balconies</label>
                            <input type="text" class="form-control" name="total_balconies" value="{{ $room->total_balconies }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Guests</label>
                            <input type="text" class="form-control" name="total_guests" value="{{ $room->total_guests }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Video ID</label>
                            <input type="text" class="form-control" name="video_id" value="{{ $room->video_id }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Video Preview</label>
                            <div class="iframe-container1">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $room->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Information</button>
        </div>
    </form>
</div>
@endsection

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_room_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
    </div>
@endsection