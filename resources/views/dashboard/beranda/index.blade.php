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

      <div class="row">
        <div class="col-md-8">
          <figure class="highcharts-figure">
            <div id="container"></div>
            <p class="highcharts-description">
                Pie charts are very popular for showing a compact overview of a
                composition or comparison. While they can be harder to read than
                column charts, they remain a popular choice for small datasets.
            </p>
          </figure>
        </div>
        <div class="col-md-4">

            


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Voting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Paslon</th>
                      <th style="width: 40px">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($hasil as $e=>$hs)
                    <tr>
                      <td>{{ $e+1 }}</td>
                      <td>{{ $hs['name']}}</td>
                     
                      <td><span class="badge bg-danger">{{ $hs['y']}} Pemilih</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>

      </div>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('footer')

  
<script type="text/javascript">
    $(document).ready(function(){

      Highcharts.chart('container', {
          chart: {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Hasil Voting'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          accessibility: {
              point: {
                  valueSuffix: '%'
              }
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                  }
              }
          },
          series: [{
              name: 'Brands',
              colorByPoint: true,
              data: {!! json_encode($hasil) !!}
          }]
      });
    })
</script>

@endsection
