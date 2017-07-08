@extends('layouts.penyidikan_template')

@section('title', 'Legal IT')

@section('stylesheet')

@endsection

@section('maintitle', 'TAHAP PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR benda sitaan')

@section('materi')




    <div class="box-body">
					@include('partials._bendasitaan')
				</div>
    






@stop

@section('script')

@endsection