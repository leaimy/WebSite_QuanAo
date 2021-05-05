<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;

class AdminWebsiteController extends Controller
{
    public function index(){
        $data = Website::all();

        $shop_name= $this->laygiatri($data,'SHOP_NAME');
        $logo_image=$this->laygiatri($data,'LOGO_IMAGE');
        $address=$this->laygiatri($data,'ADDRESS');
        $phone_number=$this->laygiatri($data,'PHONE_NUMBER');
        $email=$this->laygiatri($data,'EMAIL');
        $facebook=$this->laygiatri($data,'FACEBOOK');
        $youtube=$this->laygiatri($data,'YOUTUBE');
        $instagram=$this->laygiatri($data,'INSTAGRAM');


        return view('Backend.Website.index',[
            'shop_name'=>$shop_name,
            'logo_image'=>$logo_image,
            'address'=>$address,
            'phone_number'=>$phone_number,
            'email'=>$email,
            'facebook'=>$facebook,
            'youtube'=>$youtube,
            'instagram'=>$instagram
            ]);
    }

    public function update(Request $request){
dd($request);
    }

    public function laygiatri($data,$key){
        foreach ($data as $item) {
            if ($item->config_key == $key) {
                return $item->config_value;
            }
        }
        return null;
    }
}
