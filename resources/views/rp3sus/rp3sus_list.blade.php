@extends('layouts.penyidikan_template')

@section('title', 'Legal IT')

@section('stylesheet')

@endsection

@section('maintitle', 'TAHAP PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR PERKARA PENYIDIKAN khusus')

@section('materi')




   <div class="col-md-12">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Kasus</th>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3susa')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3susb')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3susc')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3susd')
                  </td>
                </tr>
              </tbody></table>
            </div>
    






@stop

@section('script')

  <!-- Form Kasus Posisi -->
  <script src='{{ asset('js/kasus_posisi.js') }}'></script>

@endsection