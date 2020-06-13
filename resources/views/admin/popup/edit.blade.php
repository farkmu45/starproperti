@extends('admin.templates.layout')

@section('content')
<div class="container-fluid">
    
    @include('admin.templates.heading')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card card-outline-info">
                <div class="card-header">
                <h4 class="m-b-0 text-white">Form {{$title}}</h4>
                </div>
                <div class="card-body">
                    <form action="/admin/popups/{{$popup->id}}" enctype="multipart/form-data" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group @error('title') has-danger @enderror">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="firstName" name="title" class="form-control @error('title') form-control-danger @enderror" placeholder="Title Popup" value="{{ $popup->title }}">
                                        @error('title')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="input-file-now">Image Popup</label>
                                            <input type="file" id="input-file-now" name="photo" class="dropify" data-default-file={{asset($popup->photo)}} />
                                            @error('photo')
                                                <small class="form-control-feedback text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> {{$title}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection