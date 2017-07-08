@extends('layouts.penyidikan_template')

@section('title', 'Legal IT')

@section('stylesheet')

@endsection

@section('maintitle', 'TAHAP PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR PERKARA PENYIDIKAN UMUM')

@section('materi')





            <!-- /.box-header -->
   <div class="col-md-12">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Kasus</th>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3muma')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3mumb')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3mumc')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3mumd')
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
    






@stop

@section('script')

@endsection