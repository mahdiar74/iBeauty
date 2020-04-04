<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
        $doctors = Doctor::with("profile","contact")->get();
        return view("doctor.index",compact("doctors"));
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
        $folder = "/doctors/".date('y-m');
        $filename = $request->englishName.date("H-i").".".$avatar->getClientOriginalExtension();
        $path = $folder . "/" . $filename ;
        Storage::disk("uploads")->put($folder,$avatar);
        // dd($folder."/".$avatar->getClientOriginalName());


        $profile = Profile::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthDay' => $request->birthDay,
            'avatar' => $path,
            'fullName' => $request->name.$request->lastName
        ]);
        $profileId = $profile->profileId;


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

        $popularity = Popularity::create([
            "like" => 0,
            "view" => 0,
            "bookmark" => 0
        ]);
        $popularityId = $popularity->popularityId;

        $resume = Resume::create([
            "degree" => $request->degree ,
            "startWork" => $request->startWork ,
            "prizes" => $request->prizes ,
            "services" => $request->services ,
            "hospitals" => $request->hospitals
        ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view("doctor.doctor");
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
