@extends('layouts.master')

@section('title', 'Data Dosen')

@section('content')
<section id="dosen-hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-5 col-lg-12 p-lg-5">
                <h1 class="fw-bold d-inline-block" style="border-bottom: 1px solid #000000;">KAPRODI D3 RPLA TELKOM UNIVERSITY</h1>
                <div class="container-fluid px-0">
                    <div class="row">
                        @foreach($kaprodi as $key => $value)
                        <div class="col-12">
                            <!-- <img src="{{$value->imageUrl}}" alt=""> -->
                            <h3>{{$value->name}}</h3>
                            <h5 class="fw-bold">Riwayat Pendidikan</h5>
                            <ul>
                            <li>{{$value->pendidikan1}}</li>
                            <li>{{$value->pendidikan2}}</li>
                            </ul>
                           
                            <p>Email : {{$value->email}}</p>
                            <p>Status : <span class="text-success">{{$value->status}}</span></p>
                            <p>NIP : {{$value->nip}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-12 py-5 col-lg-12 p-lg-5">
                <h2 class="fw-bold d-inline-block mb-3" style="border-bottom: 1px solid #000000;">DATA DOSEN D3 RPLA TELKOM UNIVERSITY</h2>

                <div class="container-fluid px-0">
                    <div class="row">
                        @foreach($dosens as $key => $value)
                        <div class="col-12">
                            <!-- <img src="{{$value->imageUrl}}" alt=""> -->
                            <h3>{{$value->name}}</h3>
                            <h5 class="fw-bold">Riwayat Pendidikan</h5>
                            <ul>
                            <li>{{$value->pendidikan1}}</li>
                            <li>{{$value->pendidikan2}}</li>
                            </ul>
                           
                            <p>Email : {{$value->email}}</p>
                            <p>Status : <span class="text-success">{{$value->status}}</span></p>
                            <p>NIP : {{$value->nip}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection