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
        <a href="{{ url('kandidat')}}" class="btn btn-outline-primary">Semua Kandidat</a>
        <a href="{{ url('kandidat/add')}}" class="btn btn-outline-warning">Tambah Kandidat</a>
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
                            <th>No Urut</th>
                            <th>Calon Ketua</th>
                            <th>Calon Ketua</th>
                            <th>Visi dan Misi</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->no_urut}}</td>
                            <td>{{ $dt->nama_calon_ketua->nama}} - {{ $dt->nama_calon_ketua->nik}}</td>
                            <td>{{ $dt->nama_calon_wakil->nama}} - {{ $dt->nama_calon_wakil->nik}}</td>
                            <td>
                                <a href="{{ url('kandidat/view/'. $dt->id)}}" class="btn btn-outline-success btn-sm">Lihat</a>
                            </td>
                            <td>
                                <a href="{{ url('kandidat/'. $dt->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                <a href=""></a>
                                <a href="#" class="btn btn-outline-danger btn-sm delete" kandidat-id="{{$dt->id}}" >Delete</a>
                                <!-- <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ url('kandidat/'.$dt->id)}}" class="btn btn-outline-danger btn-sm btn-modal">Delete</a> -->
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
      var kandidat_id = $(this).attr('kandidat-id');
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
            window.location = "kandidat/"+kandidat_id+"/delete";
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
