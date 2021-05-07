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
              <form  method="POST" action="{{ url('periode') }}" >
                @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                        <label for="exampleInputEmail1">Periode Pemilihan</label>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Dari Tanggal</label>
                                <input type="date" value="{{ $dari->tanggal ?? '' }}" name="dari" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Dari">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sampai Tanggal</label>
                                <input type="date" value="{{ $sampai->tanggal ?? '' }}" name="sampai" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Sampai">
                            </div>

                        </div>
                        <div class="col-md-6">
                        <br>
                        <hr>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tanggal</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Tanggal Awal</th>
                                        <th>Tanggal Akhir</th>
                                        <th style="width: 40px">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="nav-icon fas fa-calendar-alt"></i>
                                            </td>
                                            <td>{{ date('Y-M-d',strtotime($dari->tanggal ?? ''))}}</td>
                                            <td> {{ date('Y-M-d',strtotime($sampai->tanggal ?? ''))}}</td>
                                            <td>
                                                <span class="badge bg-danger">{{ $total ?? '' }} Hari</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            <!-- /.card-body -->
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
