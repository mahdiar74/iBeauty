@extends('layouts.adminMaster')

@section("links")
    <link rel="stylesheet" href="{{ url('/css/doctorList.css') }}">
@endsection

@section("content")
    @php
        $doctors = $doctors->toArray();
    @endphp

    <div class="row px-xs-4">
        @foreach ($doctors as $doctor)
            <div class="col-xs-12 col-sm-6 col-md-4 p-xs-3">
                <div class="doctor-wrapper">
                    <h4>Name : {{ $doctor['profile']['name'] }}</h4>
                    <h4>Family : {{ $doctor['profile']['lastName'] }}</h4>
                    <h4>Medical Number : {{ $doctor['medicalNumber'] }}</h4>
                    <h4>Phone : {{ $doctor['contact']['phone'] }}</h4>
                    <img class="img-responsive" src="{{ asset("uploads/".$doctor['profile']['avatar']) }}" alt="">
                </div>
            </div>
        @endforeach
    </div>
@endsection
