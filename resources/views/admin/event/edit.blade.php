@extends('admin.templates.layout')

@section('content')
<div class="container-fluid">

    @include('admin.templates.heading')

    <form action="/admin/events/{{$event->id}}" enctype="multipart/form-data" method="POST">
        <div class="row">
            @method('patch')
            @csrf
            <div class="col-lg-8">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Form {{$title}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group @error('title') has-danger @enderror">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="firstName" name="title" class="form-control @error('title') form-control-danger @enderror" placeholder="Title Event" value="{{ $event->title }}">
                                        @error('title')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('location') has-danger @enderror">
                                        <label class="control-label">Location</label>
                                        <input type="text" id="firstName" name="location" class="form-control @error('location') form-control-danger @enderror" placeholder="Location Event" value="{{ $event->location }}">
                                        @error('location')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('event_date') has-danger @enderror">
                                        <label class="control-label">Date Event</label>
                                        <input type="date" id="firstName" name="event_date" class="form-control @error('event_date') form-control-danger @enderror" placeholder="Date Event Event" value="{{ $event->event_date }}">
                                        @error('event_date')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group @error('description') has-danger @enderror">
                                        <label class="control-label">Description</label>
                                        <textarea id="mymce" name="description" class="form-control @error('description') form-control-danger @enderror">{{ $event->description }}</textarea>
                                        @error('description')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Form {{$title}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group @error('category_id') has-danger @enderror">
                                        <select class="form-control custom-select" name="category_id">
                                            <option value=""> --Select Event Category-- </option>
                                            @foreach ($eventCategory as $s)
                                                @if ($event->category_id == $s->id)
                                                    <option value="{{$s->id}}" selected>{{$s->name}}</option>
                                                @else
                                                    <option value="{{$s->id}}">{{$s->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="input-file-now">Image Event</label>
                                            <input type="file" id="input-file-now" name="photo" class="dropify" data-default-file={{asset($event->photo)}} />
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
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection