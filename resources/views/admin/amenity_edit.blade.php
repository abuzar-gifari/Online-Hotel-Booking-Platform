@extends('admin.layout.app')
@section('heading','Edit Amenity')
@section('content')
<div class="section-body">
    <form action="{{ route('admin_amenity_update',$amenity->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Edit Amenity</h4>
                        @csrf
                        <div class="form-group mb-3">
                            <label>Amenity Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $amenity->name }}">
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
        <a href="{{ route('admin_amenity_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
    </div>
@endsection