@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('simple.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">  
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" id="" class="form-control" placeholder="Masukkan Nama" value="{{ $data->nama }}">
                                    <div class=" materialize-red-text">
                                        @error('nama')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="" placeholder="Masukkan deskripsi">{{ $data->deskripsi }}</textarea>
                                    <div class=" materialize-red-text">
                                        @error('deskripsi')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s5">
                                <button class="btn teal" type="submit" name="submit">Tambah Peserta</button>
                            </div>                
                        </div>
                    </div>
                </form>           
            </div>                               
        </div>
    </div>
@endsection