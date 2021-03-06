@extends('admin.templates.layout')

@section('content')
<div class="container-fluid">
    
    @include('admin.templates.heading')

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data {{$title}}</h4>
                    <div class="table-responsive m-t-5">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Event</th>
                                    <th>Event Category</th>
                                    <th>Location</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($events as $s)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img width="60" src="{{asset($s->photo)}}" alt=""></td>
                                        <td>{{$s->title}}</td>
                                        <td>{{ Str::limit($s->description)}}</td>
                                        <td>{{$s->event_date}}</td>
                                        <td>{{$s->category->name}}</td>
                                        <td>{{$s->location}}</td>
                                        <td class="d-inline-flex">
                                            <a href="/admin/events/{{$s->id}}/edit" class="btn btn-info"><i class="ti-pencil"></i></a>
                                            <form action="/admin/events/{{$s->id}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i class="ti-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection