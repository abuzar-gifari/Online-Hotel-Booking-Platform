@extends('admin.layout.app')
@section('heading','Room Gallery of '.$room->name)
@section('content')
<div class="section-body">
    <form action="{{ route('admin_room_gallery_store',$room->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Create Room Gallery</h4>
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Photo Gallery</button>
        </div>
    </form>
</div>




<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($room_photos as $room_photo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img style="width:200px; height:150px;" src="{{ asset('uploads/'.$room_photo->photo) }}" alt="No Image">
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_room_gallery_delete',$room_photo->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_room_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Back to previous</a>
    </div>
@endsection