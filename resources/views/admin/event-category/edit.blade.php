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
                    <form action="/admin/events-categories/{{ $events_category->id }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="control-label">Name</label>
                                        <input type="text" id="firstName" name="name" class="form-control @error('name') form-control-danger @enderror" placeholder="Name Event Category" value="{{ $events_category->name }}">
                                        @error('name')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
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