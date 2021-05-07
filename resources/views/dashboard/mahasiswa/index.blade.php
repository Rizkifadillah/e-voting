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
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid ">
        <a href="{{ url('mahasiswa')}}" class="btn btn-outline-primary">Semua Mahasiswa</a>
        <a href="{{ url('mahasiswa/add')}}" class="btn btn-outline-warning">Tambah Mahasiswa</a>
        <!-- <a href="{{ url('peserta/belum-verifikasi')}}" class="btn btn-danger">Belum Verifikasi</a> -->
      </div>
      <br>

      <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nik</th>
                            <th>Photo</th>
                            <th>Nama</th>
                            <th>No. Telephone</th>
                            <th>Alamat</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->nik}}</td>
                            <td>
                                <img class="direct-chat-img" src="{{ $dt->photo ?? ''}}" alt="User Image">
                            </td>
                            <td>{{ $dt->nama}}</td>
                            <td>{{ $dt->no_telpon}}</td>
                            <td>{{ $dt->alamat}}</td>
                            <td>
                                <a href="{{ url('mahasiswa/'. $dt->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                <a href=""></a>
                                <a href="#" class="btn btn-outline-danger btn-sm delete" mahasiswa-id="{{$dt->id}}" >Delete</a>
                                <!-- <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ url('mahasiswa/'.$dt->id)}}" class="btn btn-outline-danger btn-sm btn-modal">Delete</a> -->
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                                </button> -->
                            </td>
                            
                        </tr>
                    @endforeach
                       
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
</div>
@endsection

@section('footer')
  <script>
    $('.delete').click(function(){
      var mahasiswa_id = $(this).attr('mahasiswa-id');
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        console.log(willDelete);
        if (willDelete) {
            window.location = "mahasiswa/"+mahasiswa_id+"/delete";
        }
      });
    });
  </script>
@endsection

@section('scripts')


<script type="text/javascript">



    $(document).ready(function(){
        $(.btn-refresh).click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
    })

</script>
