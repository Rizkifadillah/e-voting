@extends('dashboard.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Beranda</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="POST" action="{{ url('mahasiswa/'. $data->id) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label for="exampleInputEmail1">NIK</label> -->
                                <input type="number" value="{{$data->nik}}" name="nik" class="form-control" id="exampleInputEmail1" placeholder="Enter NIK">
                            </div>

                            <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Name</label> -->
                                <input type="text" value="{{$data->nama}}" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                            </div>
                  
                            <div class="form-group">
                                <!-- <label for="exampleInputEmail1">No. Telephone</label> -->
                                <input type="number" value="{{$data->no_telpon}}" name="no_telpon" class="form-control" id="exampleInputEmail1" placeholder="Enter No.telephone">
                            </div>
                            <div class="form-group">
                                <!-- <label>Alamat</label> -->
                                <textarea name="alamat"  class="form-control" rows="3" placeholder="Enter ..."> {{$data->alamat}} </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="input-group mb-3">
                              <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Email">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-envelope"></span>
                                </div>
                              </div>
                            </div>
                            <div class="input-group mb-3">
                              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-lock"></span>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="col-md-6 form-group">
                                    <input type="file" name="photo"  >
                                    <img class="direct-chat-img" src="{{ $data->photo }}" alt="User Image">

                                <!-- <div class="validate"></div> -->
                                </div>
                            </div>
                        </div>
                    </div>


                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
