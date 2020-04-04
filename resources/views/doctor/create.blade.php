@extends('layouts.adminMaster')


@section("links")
    <link rel="stylesheet" href="{{ url('/css/dropify.min.css') }}">
@endsection

@section("content")
    <form action="/doctor" method="POST" class="p-xs-3">
        @csrf
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
        <div class="form-group">
            <input type="submit" class="form-control">
        </div>

    </form>
@endsection


@section("scripts")
    <script src="{{ url('/js/dropify.min.js') }}"></script>
    <script src="{{ url('/js/addDoctor.js') }}"></script>
@endsection
