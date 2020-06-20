@extends('admin.templates.layout')

@section('content')
<div class="container-fluid">

    @include('admin.templates.heading')

    <form action="/admin/events" enctype="multipart/form-data" method="POST">
        <div class="row">
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
                                        <label class="control-label">Judul</label>
                                        <input type="text" id="firstName" name="title" class="form-control @error('title') form-control-danger @enderror" placeholder="Judul Property" value="{{ old('title') }}">
                                        @error('title')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('surface_area') has-danger @enderror">
                                        <label class="control-label">Luas Tanah</label>
                                        <input type="number" id="firstName" name="surface_area" class="form-control @error('surface_area') form-control-danger @enderror" placeholder="Dalam satuan meter persegi" value="{{ old('surface_area') }}">
                                        @error('surface_area')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('building_area') has-danger @enderror">
                                        <label class="control-label">Luas Bangunan</label>
                                        <input type="number" id="firstName" name="building_area" class="form-control @error('building_area') form-control-danger @enderror" placeholder="Dalam satuan meter persegi" value="{{ old('building_area') }}">
                                        @error('building_area')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('location') has-danger @enderror">
                                        <label class="control-label">Lokasi</label>
                                        <input type="text" id="firstName" name="location" class="form-control @error('location') form-control-danger @enderror" placeholder="" value="{{ old('location') }}">
                                        @error('location')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('direction') has-danger @enderror">
                                        <label class="control-label">Arah Hadap</label>
                                        <input type="number" id="firstName" name="direction" class="form-control @error('direction') form-control-danger @enderror" placeholder="Barat,timur dll" value="{{ old('direction') }}">
                                        @error('direction')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('bedroom') has-danger @enderror">
                                        <label class="control-label">Kamar Tidur</label>
                                        <input type="text" id="firstName" name="bedroom" class="form-control @error('bedroom') form-control-danger @enderror" placeholder="Date Event Event" value="{{ old('bedroom') }}">
                                        @error('bedroom')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('bathroom') has-danger @enderror">
                                        <label class="control-label">Kamar Mandi</label>
                                        <input type="number" id="firstName" name="bathroom" class="form-control @error('bathroom') form-control-danger @enderror" placeholder="" value="{{ old('bathroom') }}">
                                        @error('bathroom')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('price') has-danger @enderror">
                                        <label class="control-label">Harga</label>
                                        <input type="number" id="firstName" name="price" class="form-control @error('price') form-control-danger @enderror" placeholder="Date Event Event" value="{{ old('price') }}">
                                        @error('price')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('value') has-danger @enderror">
                                        <label class="control-label">Satuan Harga</label>
                                        <select class="form-control custom-select" name="value">
                                            <option value=""> --Select Satuan Harga-- </option>
                                            <option value="JT" {{old('value') == "JT" ? 'selected' : ''}}>Juta</option>
                                            <option value="M" {{old('value') == "M" ? 'selected' : ''}}>Miliar</option>
                                        </select>
                                        @error('value')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('electricity') has-danger @enderror">
                                        <label class="control-label">Listrik</label>
                                        <input type="number" id="firstName" name="electricity" class="form-control @error('electricity') form-control-danger @enderror" placeholder="Dalam satuan watt" value="{{ old('electricity') }}">
                                        @error('electricity')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('water') has-danger @enderror">
                                        <label class="control-label">Sumber Air</label>
                                        <input type="text" id="firstName" name="water" class="form-control @error('water') form-control-danger @enderror" placeholder="" value="{{ old('water') }}">
                                        @error('water')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('legality') has-danger @enderror">
                                        <label class="control-label">Legalitas</label>
                                        <input type="text" id="firstName" name="legality" class="form-control @error('legality') form-control-danger @enderror" placeholder="" value="{{ old('legality') }}">
                                        @error('legality')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('garage') has-danger @enderror">
                                        <label class="control-label">Garasi</label>
                                        <input type="number" id="firstName" name="garage" class="form-control @error('garage') form-control-danger @enderror" value="{{ old('garage') }}">
                                        @error('garage')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="control-label">Nama Pemilik</label>
                                        <input type="text" id="firstName" name="name" class="form-control @error('name') form-control-danger @enderror" placeholder="" value="{{ old('name') }}">
                                        @error('name')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('phone_number') has-danger @enderror">
                                        <label class="control-label">Nomor Telepon Pemilik</label>
                                        <input type="text" id="firstName" name="phone_number" class="form-control @error('phone_number') form-control-danger @enderror" placeholder="Date Event Event" value="{{ old('phone_number') }}">
                                        @error('phone_number')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group @error('description') has-danger @enderror">
                                        <label class="control-label">Description</label>
                                        <textarea id="mymce" name="description" class="form-control @error('description') form-control-danger @enderror">{{old('description')}}</textarea>
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
                                    <div class="form-group @error('type_id') has-danger @enderror">
                                        <label class="control-label">Type Property</label>
                                        <select class="form-control custom-select" name="type_id">
                                            <option value=""> --Select Type Property-- </option>
                                            @foreach ($types as $type)
                                                <option value="{{$type->id}}" {{old('type_id') == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('type_id')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group @error('status_id') has-danger @enderror">
                                        <label class="control-label">Status Property</label>
                                        <select class="form-control custom-select" name="status_id">
                                            <option value=""> --Select Status Property-- </option>
                                            @foreach ($status as $s)
                                                <option value="{{$s->id}}" {{old('status_id') == $s->id ? 'selected' : ''}}>{{$s->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('status_id')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="input-file-now">Foto 1</label>
                                            <input type="file" id="input-file-now" name="photo[]" data-max-file-size="2M" class="dropify" />
                                            @error('photo')
                                                <small class="form-control-feedback text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="input-file-now">Foto 2</label>
                                            <input type="file" id="input-file-now" name="photo[]" class="dropify" />
                                            @error('photo')
                                            <small class="form-control-feedback text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="input-file-now">Foto 3</label>
                                            <input type="file" id="input-file-now" name="photo[]" class="dropify" />
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