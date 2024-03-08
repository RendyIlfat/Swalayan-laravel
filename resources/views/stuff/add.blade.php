@extends('template.index')

@section('title', 'Home')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Customer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Customer</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                 <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/stuffs/{{ @$data->id }}" method="POST">
                        @if (@$data)
                            @method('PUT')
                        @endif

                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">Kode</label>
                                <input type="text" class="form-control" name="id" placeholder="Kode" value="{{ @$data->id }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ @$data->name }}">
                            </div>        
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="text" class="form-control" name="price" placeholder="Harga" value="{{ @$data->price }}">
                            </div>
                            <div class="form-group">
                                <label for="unit">Unit</label>
                                <input type="text" class="form-control" name="unit" placeholder="Unit" value="{{ @$data->unit }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Status</label>
                                <select name="status" class="custom-select rounded-0">
                                    <option value="1" {{ @$data->status == 1 ? 'selected' : '' }}>Tersedia</option>
                                    <option value="0" {{ @$data->status == 0 ? 'selected' : '' }}>Sold Out</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_category">Kode_Kategori</label>
                                <input type="text" class="form-control" name="id_category" placeholder="Kode_Kategori" value="{{ @$data->id_category }}">
                            </div>
                        </div>
                    <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
  
@endsection
