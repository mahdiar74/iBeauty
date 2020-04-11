@extends('layouts.adminMaster')


@section("links")
    <link rel="stylesheet" href="{{ url('/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ url('/css/addDoctor.css') }}">

@endsection

@section("content")
    <form action="/admin/doctor" method="POST" class="p-xs-3" id="create-doctor" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="imageGalleryId" id="imageGalleryId">
        <input type="hidden" name="videoGalleryId" id="videoGalleryId">

        <div class="form-group">
            <input type="text" name="name" placeholder="name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="lastName" placeholder="lastName" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="gender" placeholder="gender" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="age" placeholder="age" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="phone" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="address" placeholder="address" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="birthDay" placeholder="birthDay" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="field" placeholder="field" class="form-control">
        </div>
        <div class="form-group">
            <input type="file" name="avatar" class="form-control" data-max-file-size="3M" data-allowed-file-extensions="jpeg png jpg" data-max-height="1200" data-max-width="1200" >
        </div>
        <div class="form-group">
            <input type="text" name="englishName" placeholder="نام انگلیسی پزشک" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="medicalNumber" placeholder="medicalNumber" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="activeDays" placeholder="activeDays" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="city" placeholder="city" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="province" placeholder="province" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="phone" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="telegram" placeholder="telegram" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="site" placeholder="site" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="instagram" placeholder="instagram" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="address" placeholder="address" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="region" placeholder="region" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="degree" placeholder="degree" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="startWork" placeholder="startWork" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="prizes" placeholder="prizes" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="services" placeholder="services" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="hospitals" placeholder="hospitals" class="form-control">
        </div>


    </form>
    <form action="/admin/doctor/uploadImage" enctype="multipart/form-data" method="POST" class="dropzone m-xs-3" id="dropZone">
        @csrf
        <input type="hidden" name="imgGalleryId" id="imgGalleryId">
    </form>
    <form action="/admin/doctor/uploadVideo" enctype="multipart/form-data" method="POST" class="dropzone m-xs-3" id="dropZoneVideo">
        @csrf
        <input type="hidden" name="vidGalleryId" id="vidGalleryId">
    </form>
    <br>
    <br>
    <br>
    <div class="form-group">
        <button class="form-control" id="submit">Submit</button>
    </div>
<br><br>
@endsection


@section("scripts")
    <script src="{{ url('/js/dropify.min.js') }}"></script>
    <script src="{{ url('/js/dropzone.js') }}"></script>
    <script src="{{ url('/js/addDoctor.js') }}"></script>
@endsection
