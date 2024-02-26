@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content tbl">
                    <div class="row" style="text-align: right;">
                        <div class="col s12">                        
                            <a href="#"><button type="button" class="btn  teal mb-3">Tambah Item</button></a>                                               
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
                                        <tr>
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
                                        </tr>
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