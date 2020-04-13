@extends('layouts.master')

@section("links")
 <link rel="stylesheet" href="{{ url('/css/doctor.css') }}">
@endsection

@section("content")
<div class="container doctor-avatar">
            <h2 class="col-sm-2 col-md-4 col-lg-4 float- nav-link">دکتر علیرضا ابیانه</h2>
            <h5 class="col-sm-2 col-md-4 col-lg-4 float-  doctor-speciality">فوق تخصص گوش حلق بینی</h5>
            <img src="{{url('/img/doctor.jpg')}}" class="rounded float-right " alt="Cinque Terre" width="250" height="250"> 

    </div>


</div>
@endsection

@section("scripts")

@endsection
