@extends('admin.layout.app')
@section('heading','Create Amenity')
@section('content')
<div class="section-body">
    <form action="{{ route('admin_amenity_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Create Amenity</h4>
                        @csrf
                        <div class="form-group mb-3">
                            <label>Amenity Name</label>
                            <input type="text" class="form-control" name="name" placeholder="enter amenity name">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_amenity_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
    </div>
@endsection