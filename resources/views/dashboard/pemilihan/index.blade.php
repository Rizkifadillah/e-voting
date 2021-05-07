@extends('dashboard.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$title}}</h1>
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
    @foreach($data as $dt)
    
    <div class="row mt-4 " align="center">
        <h3 class="m-4">No Urut {{ $dt->no_urut}}</h3>
        <a url="{{ url('pemilihan/get-visi/'.$dt->id)}}" class="btn btn-primary m-4 btn-visimisi">Lihat Visi Misi {{ $dt->no_urut}}</a>
        <a href="{{ url('pemilihan/vote/'.$dt->id)}}" class="btn btn-success m-4">Pilih No Urut {{ $dt->no_urut}}</a>
    </div>
    <div class="row">
        <!-- <div class="col-md-12"> -->
            <div class="col-md-6">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                    <h3 class="widget-user-username">{{$dt->nama_calon_ketua->nama}}</h3>
                    <h5 class="widget-user-desc">Calon &amp; Ketua</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" style="width: 100px; height:100px;" src="{{ asset($dt->nama_calon_ketua->photo) ?? ''}}" alt="User Avatar">
                </div>
                <div class="card-footer">
                    <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">NIK</h5>
                        <span class="description-text">{{$dt->nama_calon_ketua->nik}}</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">NAMA</h5>
                        <span class="description-text">{{$dt->nama_calon_ketua->nama}}</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                        <h5 class="description-header">No. Telephone</h5>
                        <span class="description-text">{{$dt->nama_calon_ketua->no_telpon}}</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                </div>
                <!-- /.widget-user -->
            </div>
            <div class="col-md-6">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                    <h3 class="widget-user-username">{{$dt->nama_calon_wakil->nama}}</h3>
                    <h5 class="widget-user-desc">Calon &amp; Wakil</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" style="width: 100px; height:100px;" src="{{ asset($dt->nama_calon_wakil->photo)}}" alt="User Avatar">
                </div>
                <div class="card-footer">
                    <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">NIK</h5>
                        <span class="description-text">{{$dt->nama_calon_wakil->nik}}</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">NAMA</h5>
                        <span class="description-text">{{$dt->nama_calon_wakil->nama}}</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                        <h5 class="description-header">No. Telephone</h5>
                        <span class="description-text">{{$dt->nama_calon_wakil->no_telpon}}</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                </div>
                <!-- /.widget-user -->
            </div>
        <!-- </div> -->
    </div>
    
    @endforeach

    </section>
    <!-- /.content -->
  </div>
 
</div>


<div class = "modal fade" id = "modal-visimisi" role = "dialog">
    <div class = "modal-dialog modal-lg">
     <div class = "modal-content">
      <div class = "modal-header">      
       <h4 class = "modal-title">Visi Misi</h4>
       <button type = "button" class="close" data-dismiss = "modal">×</button>
     </div>
     <div class = "modal-body">
            <div class="content">
            <h2>Visi</h2>
            <div class = "modal-body-visi">

            </div>  
            <h2>Misi</h2>
            <div class = "modal-body-misi">

            </div>
            </div>
     </div>
     <div class = "modal-footer">
       <button type = "button" class = "btn btn-primary" data-dismiss = "modal">Close</button>
     </div>
   </div>
 </div>
</div>
@endsection

@section('footer')

<script type="text/javascript">
    $(document).ready(function(){
        $('.btn-visimisi').click(function(e){
            // preventDefault tidak melakukan sesuatu ketika melakukan click diatas
            e.preventDefault();
            var url = $(this).attr('url');

            $.ajax({
                type:'get',
                dataType: 'json',
                url: url,
                success:function(data){
                    // console.log(data.hasil.visi);
                    $('#modal-visimisi').find('.modal-body-visi').html(data.hasil.visi);
                    $('#modal-visimisi').find('.modal-body-misi').html(data.hasil.misi);
                    $('#modal-visimisi').modal();
                }
            })
            //setelah preventDefault (tidak ngapa"in)
            //lalu panggil modal dengan memanggil id modal dan fungsi .modal();
        })
    })
</script>

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
