@extends('adminlte::page')

  @section('title', 'Legal IT')

  @section('css')

  @endsection

    @section('content_header')
      <div>
        
        <h3><a href='home' ><img class="push-left" src="dist/img/openlaw-dark.png" height="50"></a>
          Legal IT
          <small> Law Office Software</small>
        </h3>
        </div>                            
    @stop

@section('content')

<div class="box">
            <div class="box-header">
              <h3 class="box-title text-uppercase">Daftar Penyidikan Umum [rp3mum]</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
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
          </div>
@endsection
