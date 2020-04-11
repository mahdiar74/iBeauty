<?php

namespace App\Http\Controllers\admin;

use App\models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FileManagement;
use Illuminate\Support\Facades\Storage;
use App\Models\ImageGallery;
use App\Models\VideoGallery;
use App\Models\Profile;
use App\Models\Contact;
use App\Models\Popularity;
use App\Models\Resume;
use Exception;
use App\Models\Image;
use App\Models\Video;
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
        return view("admin.doctor.index",compact("doctors"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.doctor.create");
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
        Storage::disk("uploads")->put($path,file_get_contents($avatar));


        $profile = Profile::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'enName' => $request->englishName,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthDay' => $request->birthDay,
            'avatar' => $path,
            'fullName' => $request->name.$request->lastName
        ]);
        $profileId = $profile->profileId;

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
            'imageGalleryId' => $request->imageGalleryId ,
            'contactId' => $contactId ,
            'popularityId' => $popularityId ,
            'profileId' => $profileId ,
            'resumeId' => $resumeId ,
            'videoGalleryId' => $request->videoGalleryId
        ]);
        if($doctor != null){
            return redirect("/admin/doctor");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $doctors = Doctor::with("profile","contact","resume","videoGalleries","imageGalleries")->where("doctorId",$doctor->doctorId)->get();
        return view("admin.doctor.edit",compact("doctor"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $doc = $doctor->findOrFail($doctor->doctorId);
        $avatar = $request->file("avatar");
        if($request->avatarChanged == 1)
        {
            Storage::disk("uploads")->delete($request->oldAvatar);
            $folder = "/doctors/".date('y-m');
            $filename = $request->englishName.date("H-i").".".$avatar->getClientOriginalExtension();
            $path = $folder . "/" . $filename ;
            Storage::disk("uploads")->put($path,file_get_contents($avatar));
        }
        else{
            $path = $request->$oldAvatar;
        }


        $profile = Profile::make([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'enName' => $request->englishName,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthDay' => $request->birthDay,
            'avatar' => $path,
            'fullName' => $request->name.$request->lastName
        ]);

        $doc->profile()->update($profile->toArray());

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

    public function createGallery(Request $request){
        if($request->type == "image"){
            $gallery = ImageGallery::create();
            $galleryId = $gallery->imageGalleryId;
        }else if($request->type == "video"){
            $gallery = VideoGallery::create();
            $galleryId = $gallery->videoGalleryId;
        }
        return $galleryId;
    }

    public function uploadImage(Request $request){
        $avatar = $request->file('file');
        $folder = "/doctor-images/".date('y-m')."/";
        $filename = "img".rand(1,100)."-".date("H_i_s").".".$avatar->getClientOriginalExtension();
        $path = $folder.$filename;
        try{
            FileManagement::store($avatar,$path);

            $galleryId = $request->imgGalleryId;
            $imageGallery = ImageGallery::find($galleryId);
            $imageGallery->images()->save(
                Image::create([
                    'src' => $path,
                    'imageGalleryId' => $galleryId
                ])
            );
        }catch(Exception $e){
            return $e;
        }
    }
    public function uploadVideo(Request $request){
        $video = $request->file('file');
        $folder = "/doctor-videos/".date('y-m')."/";
        $filename = "vid".rand(1,100)."-".date("H_i_s").".".$video->getClientOriginalExtension();
        $path = $folder.$filename;
        try{
            FileManagement::store($video,$path);

            $galleryId = $request->vidGalleryId;
            $videoGallery = VideoGallery::find($galleryId);
            $videoGallery->videos()->save(
                Video::create([
                    'src' => $path,
                    'videoGalleryId' => $galleryId
                ])
            );

        }catch(Exception $e){
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
