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
              <form  method="POST" action="{{ url('kandidat/add') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Urut</label>
                                <input type="number" name="no_urut" class="form-control" id="exampleInputEmail1" placeholder="Enter NIK">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Calon Ketua</label>
                                <select name="calon_ketua" class="form-control select2" id="">
                                    <option value="#">Pilih Ketua</option>
                                    @foreach($mahasiswa as $mhs)
                                    <option value="{{ $mhs->id }}">{{ $mhs->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Calon Wakil</label>
                                <select name="calon_wakil" class="form-control select2" id="">
                                    <option value="#">Pilih Wakil</option>
                                    @foreach($mahasiswa as $mhs)
                                    <option value="{{ $mhs->id }}">{{ $mhs->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Visi </label>
                                <textarea name="visi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label> Misi</label>
                                <textarea name="misi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
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
