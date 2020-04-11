@extends('layouts.adminMaster')

@section("links")
    <link rel="stylesheet" href="{{ url('/css/dropify.min.css') }}">
@endsection


@section("content")
    <form action="/admin/doctor/{{$doctor['doctorId']}}" method="POST" class="p-xs-3" enctype="multipart/form-data">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
            <input type="text" name="name" placeholder="name" class="form-control" value="{{ $doctor['profile']['name']}}">
        </div>
        <div class="form-group">
            <input type="text" name="lastName" placeholder="lastName" class="form-control" value="{{ $doctor['profile']['lastName']}}">
        </div>
        <div class="form-group">
            <input type="text" name="gender" placeholder="gender" class="form-control" value="{{ $doctor['profile']['gender']}}">
        </div>
        <div class="form-group">
            <input type="text" name="age" placeholder="age" class="form-control" value="{{ $doctor['profile']['age']}}">
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="phone" class="form-control" value="{{ $doctor['profile']['phone']}}">
        </div>
        <div class="form-group">
            <input type="text" name="address" placeholder="address" class="form-control" value="{{ $doctor['profile']['address']}}">
        </div>
        <div class="form-group">
            <input type="text" name="birthDay" placeholder="birthDay" class="form-control" value="{{ $doctor['profile']['birthDay']}}">
        </div>
        <div class="form-group">
            <input type="text" name="field" placeholder="field" class="form-control" value="{{ $doctor['field']}}">
        </div>
        <div class="form-group">
            <input type="file" name="avatar" id="avatar" class="form-control" data-max-file-size="3M" data-allowed-file-extensions="jpeg png jpg" data-max-height="1200" data-max-width="1200"  data-default-file="{{ asset('uploads'.$doctor['profile']['avatar']) }}">
            <input type="hidden" name="oldAvatar" id="oldAvatar" value="{{ $doctor['profile']['avatar'] }}">
            <input type="hidden" name="avatarChanged" id="avatarChanged" value="0">
        </div>
        <div class="form-group">
            <input type="text" name="englishName" placeholder="نام انگلیسی پزشک" class="form-control" value="{{ $doctor['profile']['enName']}}">
        </div>
        <div class="form-group">
            <input type="text" name="medicalNumber" placeholder="medicalNumber" class="form-control" value="{{ $doctor['medicalNumber']}}">
        </div>
        <div class="form-group">
            <input type="text" name="activeDays" placeholder="activeDays" class="form-control" value="{{ $doctor['activeDays']}}">
        </div>
        <div class="form-group">
            <input type="text" name="city" placeholder="city" class="form-control" value="{{ $doctor['contact']['city']}}">
        </div>
        <div class="form-group">
            <input type="text" name="province" placeholder="province" class="form-control" value="{{ $doctor['contact']['province']}}">
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="phone" class="form-control" value="{{ $doctor['contact']['phone']}}">
        </div>
        <div class="form-group">
            <input type="text" name="telegram" placeholder="telegram" class="form-control" value="{{ $doctor['contact']['telegram']}}">
        </div>
        <div class="form-group">
            <input type="text" name="site" placeholder="site" class="form-control" value="{{ $doctor['contact']['site']}}">
        </div>
        <div class="form-group">
            <input type="text" name="instagram" placeholder="instagram" class="form-control" value="{{ $doctor['contact']['instagram']}}">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="email" class="form-control" value="{{ $doctor['contact']['email']}}">
        </div>
        <div class="form-group">
            <input type="text" name="address" placeholder="address" class="form-control" value="{{ $doctor['contact']['address']}}">
        </div>
        <div class="form-group">
            <input type="text" name="region" placeholder="region" class="form-control" value="{{ $doctor['contact']['region']}}">
        </div>
        <div class="form-group">
            <input type="text" name="degree" placeholder="degree" class="form-control" value="{{ $doctor['resume']['degree']}}">
        </div>
        <div class="form-group">
            <input type="text" name="startWork" placeholder="startWork" class="form-control" value="{{ $doctor['resume']['startWork']}}">
        </div>
        <div class="form-group">
            <input type="text" name="prizes" placeholder="prizes" class="form-control" value="{{ $doctor['resume']['prizes']}}">
        </div>
        <div class="form-group">
            <input type="text" name="services" placeholder="services" class="form-control" value="{{ $doctor['resume']['services']}}">
        </div>
        <div class="form-group">
            <input type="text" name="hospitals" placeholder="hospitals" class="form-control" value="{{ $doctor['resume']['hospitals']}}">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control">
        </div>

    </form>
@endsection



@section("scripts")
    <script src="{{ url('/js/dropify.min.js') }}"></script>
    <script src="{{ url('/js/editDoctor.js') }}"></script>
@endsection
