@extends('layouts.master')
@include('simple.modal.modal')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content tbl">
                    <div class="row" style="text-align: right;">
                        <div class="col s12">                        
                            <a href="{{ route('simple.create') }}"><button type="button" class="btn  teal mb-3">Tambah Item</button></a>                                               
                        </div>
                    </div>

                    <div class="row mt-3" style="margin-top: 10px">
                        <div class="col s12">
                            <div class="table-responsive m-t-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $key => $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td style="text-align: center;">
                                                    <a href="{{ route('simple.edit', $item->id) }}">
                                                        <button type="button" class="btn btn-warning btn-sm amber inline">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                    </a>
                                                    <a href="#modal-{{ $item->id }}" data-id="{{ $item->id }}" class="btn btn-danger btn-sm red modal-trigger">                                    
                                                        <i class="material-icons">delete</i>                                  
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" style="text-align: center" class="text-center">Tidak ada data tersedia</td>
                                            </tr>
                                        @endforelse
                                        {{-- <tr>
                                            <td>1</td>
                                            <td>Item 1</td>
                                            <td>Deskripsi Item 1</td>
                                            <td style="text-align: center;">
                                                <a href="">
                                                    <button type="button" class="btn btn-warning btn-sm amber inline">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm red modal-trigger">                                    
                                                    <i class="material-icons">delete</i>                                  
                                                </a>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('extra-script')
@endpush