<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DriverLicense; use App\OwnerLicense;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){


        return view('dashboard', compact('menuname'));
    }


    public function vehiclelicense(){


        return view('vehicle');
    }

    public function vehiclelicense_post(Request $request){

        $bn= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        $en= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        $lastslno = DriverLicense::where('type', '=', $request->license_type)->orderBy('id', 'desc')->first();
        if(empty($lastslno)){ $lastslno=1;}else{ $lastslno = (int)$lastslno->slno + 1; }

        $slno = str_pad($lastslno,5,"0",STR_PAD_LEFT);

        $vehicle = new DriverLicense;
        $vehicle->type = $request->license_type;
        $vehicle->slno = $slno;
        $vehicle->year = $request->year;
        $vehicle->name = $request->chalokname;
        $vehicle->fname = $request->fname;
        $vehicle->mname = $request->mname;
        $vehicle->age = str_replace($bn, $en, $request->age);
        $vehicle->nid = $request->nid;
        $vehicle->address = $request->address;
        $vehicle->upjela = $request->upjela;
        $vehicle->post = $request->post;
        $vehicle->licenseno = str_replace($bn, $en, $request->licenseno);
        $vehicle->licensefee =  str_replace($bn, $en, $request->licencesfee);
        $vehicle->issuedate = date('Y-m-d');
        $vehicle->save();


        $lastslicense = DriverLicense::where('id', $vehicle->id)->first();

        return view('vehicle_licence_print', compact('lastslicense'));
    }


    public function allvehiclelicense(Request $request){
        $vehicle_type=$request->vehicle_type;
        $alldriver=array();
		if ($vehicle_type!=''){
            $alldriver = DriverLicense::where('type',$vehicle_type)->get();


        }else{
            $alldriver = DriverLicense::all();
        }

        return view('allvehicle', compact('alldriver'));
    }

    public function vehiclelicenseprint($id){


        $lastslicense = DriverLicense::where('id', $id)->first();

        return view('vehicle_licence_print', compact('lastslicense'));

    }


    public function ownerlicense(){


        return view('owner');
    }


    public function ownerlicense_post(Request $request){

        $bn= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        $en= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        $lastslno = OwnerLicense::where('type', '=', $request->license_type)->orderBy('id', 'desc')->first();
        if(empty($lastslno)){ $lastslno=1;}else{ $lastslno = (int)$lastslno->slno + 1; }

        $slno = str_pad($lastslno,5,"0",STR_PAD_LEFT);




        $vehicle = new OwnerLicense;
        $vehicle->type = $request->license_type;
        $vehicle->slno = $slno;
        $vehicle->year = $request->year;
        $vehicle->name = $request->chalokname;
        $vehicle->fname = $request->fname;
        $vehicle->mname = $request->mname;
        $vehicle->modelno = str_replace($bn, $en, $request->modelno);
        $vehicle->nid = $request->nid;
        $vehicle->address = $request->address;
        $vehicle->upjela = $request->upjela;
        $vehicle->post = $request->post;
        $vehicle->licenseno = str_replace($bn, $en, $request->licenseno);
        $vehicle->licensefee =  str_replace($bn, $en, $request->licencesfee);
        $vehicle->tinplate =  str_replace($bn, $en, $request->tinplate);
        $vehicle->registerfee = str_replace($bn, $en, $request->registerfee);
        $vehicle->incotax = str_replace($bn, $en, $request->incotax);
        $vehicle->vat =  str_replace($bn, $en, $request->vat);
        $vehicle->issuedate = date('Y-m-d');
        $vehicle->save();

        $lastslicense = OwnerLicense::where('id', $vehicle->id)->first();

        return view('owner_licence_print', compact('lastslicense'));
    }

    public function allownerlicense(Request $request){
        $vehicle_type=$request->vehicle_type;
        $allowner=array();
        if ($vehicle_type!=''){
            $allowner = OwnerLicense::where('type',$vehicle_type)->get();

        }else{
            $allowner = OwnerLicense::all();
        }

        return view('allowner', compact('allowner'));
    }

    public function ownerlicenseprint($id){

        $lastslicense = OwnerLicense::where('id', $id)->first();

        return view('owner_licence_print', compact('lastslicense'));

    }

    public function getownerdetals(Request $request){
        $id            =   $request->id;
        $ownerdetaild  =  OwnerLicense::find($id);
        return view('update_owner', compact('ownerdetaild'));

    }
    public function update_owner(Request $request,$id){


        $bn= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        $en= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        $this->validate($request, [
            'licenseno'        => 'required|unique:owner_licenses,licenseno,'.$id,

        ], [
            'licenseno.unique' => "লাইসেন্স নাম্বারটি আছে, নতুন লাইসেন্স নাম্বার দিন"
        ]);




        $vehicle=OwnerLicense::find($id);


        $vehicle->type = $request->license_type;
        $vehicle->slno = $request->slno;
        $vehicle->year = $request->year;
        $vehicle->name = $request->chalokname;
        $vehicle->fname = $request->fname;
        $vehicle->mname = $request->mname;
        $vehicle->modelno = str_replace($bn, $en, $request->modelno);
        $vehicle->nid = $request->nid;
        $vehicle->address = $request->address;
        $vehicle->upjela = $request->upjela;
        $vehicle->post = $request->post;
        $vehicle->licenseno = str_replace($bn, $en, $request->licenseno);
        $vehicle->licensefee =  str_replace($bn, $en, $request->licencesfee);
        $vehicle->tinplate =  str_replace($bn, $en, $request->tinplate);
        $vehicle->registerfee = str_replace($bn, $en, $request->registerfee);
        $vehicle->incotax = str_replace($bn, $en, $request->incotax);
        $vehicle->vat =  str_replace($bn, $en, $request->vat);
        $vehicle->issuedate = date('Y-m-d');
        $vehicle->save();

        //$lastslicense = OwnerLicense::where('id', $vehicle->id)->first();
        return back()->with('message',' যানবাহন মালিকের লাইসেন্স হালনাগাদ সফল হয়েছে');
        //return view('owner_licence_print', compact('lastslicense'));
    }

    public function licence_update(Request $request){
        $id=$request->id;
        $licencedetails=DriverLicense::find($id);
        return view('update_vehicle', compact('licencedetails'));
    }


    public function vehiclelicense_update(Request $request,$id){

        $bn= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        $en= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        $this->validate($request, [
            'licenseno'        => 'required|unique:driver_licenses,licenseno,'.$id,

        ], [
            'licenseno.unique' => "লাইসেন্স নাম্বারটি আছে, নতুন লাইসেন্স নাম্বার দিন"
        ]);


        $vehicle=DriverLicense::find($id);


        $vehicle->type = $request->license_type;
        $vehicle->slno = $request->slno ;
        $vehicle->year = $request->year;
        $vehicle->name = $request->chalokname;
        $vehicle->fname = $request->fname;
        $vehicle->mname = $request->mname;
        $vehicle->age   = str_replace($bn, $en, $request->age);
        $vehicle->nid = $request->nid;
        $vehicle->address = $request->address;
        $vehicle->upjela = $request->upjela;
        $vehicle->post = $request->post;
        $vehicle->licenseno = str_replace($bn, $en, $request->licenseno);
        $vehicle->licensefee =  str_replace($bn, $en, $request->licencesfee);
        $vehicle->issuedate = date('Y-m-d');
        $vehicle->save();


       // $lastslicense = DriverLicense::where('id', $vehicle->id)->first();

        return back()->with('message',' যানবাহন চালকের লাইসেন্স হালনাগাদ সফল হয়েছে');

        //return view('vehicle_licence_print', compact('lastslicense'));
    }
}
