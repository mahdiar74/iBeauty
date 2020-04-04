<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImageGallery;
use App\Models\VideoGallery;
use App\Models\Profile;
use App\Models\Contact;
use App\Models\Popularity;
use App\Models\Resume;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("doctor.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("doctor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avatar = $request->file("avatar");

        $profile = Profile::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthDay' => $request->birthDay,
            'avatar' => "",
            'fullName' => $request->name.$request->lastName
        ]);
        $profileId = $profile->profileId;
        // $profile->name = $request->name;
        // $profile->lastName = $request->lastName;
        // $profile->age = $request->age;
        // $profile->gender = $request->gender;
        // $profile->phone = $request->phone;
        // $profile->address = $request->address;
        // $profile->birthDay = $request->birthDay;
        // $profile->avatar = $request->avatar;
        // $profile->fullName = $request->name.$request->lastName;
        // $profile = $profile->save();
        // $profileId = DB::table('profiles')->insertGetId($profile->toArray());



        $imageGallery = ImageGallery::create([
            "name" => $request->name
        ]);
        $imageGalleryId = $imageGallery->imageGalleryId;

        $videoGallery = VideoGallery::create([
            "name" => $request->name
        ]);
        $videoGalleryId = $videoGallery->videoGalleryId;

        $contact = Contact::create([
            "city" => $request->city ,
            "province" => $request->province ,
            "phone" => $request->phone ,
            "telegram" => $request->telegram ,
            "site" => $request->site ,
            "instagram" => $request->instagram ,
            "email" => $request->email ,
            "address" => $request->address ,
            "region" => $request->region
        ]);
        $contactId = $contact->contactId;
        // $contact->city = $request->city;
        // $contact->province = $request->province;
        // $contact->phone = $request->phone;
        // $contact->telegram = $request->telegram;
        // $contact->site = $request->site;
        // $contact->instagram = $request->instagram;
        // $contact->email = $request->email;
        // $contact->address = $request->address;
        // $contact->region = $request->region;
        // $contact = $contact->save();

        $popularity = Popularity::create([
            "like" => 0,
            "view" => 0,
            "bookmark" => 0
        ]);
        $popularityId = $popularity->popularityId;
        // $popularity = $popularity->save();

        $resume = Resume::create([
            "degree" => $request->degree ,
            "startWork" => $request->startWork ,
            "prizes" => $request->prizes ,
            "services" => $request->services ,
            "hospitals" => $request->hospitals
        ]);
        // $resume->degree = $request->degree;
        // $resume->startWork = $request->startWork;
        // $resume->prizes = $request->prizes;
        // $resume->services = $request->services;
        // $resume->hospitals = $request->hospitals;
        // $resume = $resume->save();
        $resumeId = $resume->resumeId;

        $doctor = Doctor::create([
            'activeDays' => $request->activeDays ,
            'field' => $request->field ,
            'medicalNumber' => $request->medicalNumber ,
            'imageGalleryId' => $imageGalleryId ,
            'contactId' => $contactId ,
            'popularityId' => $popularityId ,
            'profileId' => $profileId ,
            'resumeId' => $resumeId ,
            'videoGalleryId' => $videoGalleryId
        ]);
        // $doctor->activeDays = $request->activeDays;
        // $doctor->field = $request->field;
        // $doctor->medicalNumber = $request->medicalNumber;
        // $doctor->imageGalleryId = $imageGalleryId;
        // $doctor->contactId = $contactId;
        // $doctor->popularityId = $popularityId;
        // $doctor->profileId = $profileId;
        // $doctor->resumeId = $resumeId;
        // $doctor->videoGalleryId = $videoGalleryId;

        // $doctor = $doctor->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {;
        //
    }
}
