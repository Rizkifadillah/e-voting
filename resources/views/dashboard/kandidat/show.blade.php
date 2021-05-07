@extends('dashboard.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile No Urut : {{ $dt->no_urut }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset($dt->nama_calon_ketua->photo) ?? ''}}"
                       alt="User profile picture"
                       style="width: 200px; height:200px;">
                </div>

                <h3 class="profile-username text-center">{{$dt->nama_calon_ketua->nama}}</h3>

                <h2 class="text-muted text-center">No Urut : {{ $dt->no_urut }}</h2>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>NIK</b> <a class="float-right">{{$dt->nama_calon_ketua->nik}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Telp.</b> <a class="float-right">{{$dt->nama_calon_ketua->no_telpon}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{{$dt->nama_calon_ketua->alamat}}</a>
                  </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>

          </div>

          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset($dt->nama_calon_wakil->photo) ?? ''}}"
                       alt="User profile picture"
                       style="width: 200px; height:200px;">
                </div>

                <h3 class="profile-username text-center">{{$dt->nama_calon_wakil->nama}}</h3>

                <h2 class="text-muted text-center">No Urut : {{ $dt->no_urut }}</h2>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>NIK</b> <a class="float-right">{{$dt->nama_calon_wakil->nik}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Telp.</b> <a class="float-right">{{$dt->nama_calon_wakil->no_telpon}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{{$dt->nama_calon_wakil->alamat}}</a>
                  </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Visi & Misi</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <!-- <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image"> -->
                        <span class="username">
                          <a href="#">Visi</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <!-- <span class="description">Shared publicly - 7:30 PM today</span> -->
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{ $dt->visi}}
                      </p>

                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <!-- <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image"> -->
                        <span class="username">
                          <a href="#">Misi</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <!-- <span class="description">Sent you a message - 3 days ago</span> -->
                      </div>
                      <!-- /.user-block -->
                      <p>
                      {{ $dt->misi}}

                      </p>

                      
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- /.content -->
  </div>
 
</div>
@endsection

