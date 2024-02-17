@extends('layouts.master')

@section('title', 'Arsip Chevalier')

@section('content')
<section id="dosen-hero">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 py-5 col-lg-12 p-lg-5 text-center">
            <h1 class="fw-bold d-inline-block" style="border-bottom: 1px solid #000000;">ARSIP</h1>
         </div>
         @foreach($arsip as $key => $value)
         <div class="col-6 text-center pb-3">
            <img src="{{assets_url('images/arsip/')}}{{$value->foto}}" width="250" height="250" alt="">
            <h3 class=" pt-3 fw-bold">{{$value->title}}</h3>
            <p class="">{{$value->isi_arsip}}</p>
            <a class="px-3 btn btn-custom-primary" href="">READ MORE</a>
         </div>
         @endforeach
      </div>
   </div>
</section>
@endsection