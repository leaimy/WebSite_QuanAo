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

        // Tat ca file anh, phai luu o thu muc public
        // Lay file
        $file = $request->file('logo_image');

        // Lay ten file => Luu vao CSDL
        $file_name = $file->getClientOriginalName();

        // Luu anh
        // public/logo/logo.png
        $duong_dan_luu_anh = public_path('logo');
        $file->move($duong_dan_luu_anh, $file_name);

        // Trong CSDL, minh chi luu duong dan chi toi file
        $file_path = 'logo/' . $file_name;

        // Tach du lieu tu POST request
        $name = $request['name_store'];
        $email = $request['email'];
        $phonenumber = $request['phone_number'];
        $address = $request['address'];
        $facebook = $request['facebook'];
        $youtube = $request['youtube'];
        $instagram = $request['instagram'];

        $data_keys = ['SHOP_NAME','LOGO_IMAGE','ADDRESS','PHONE_NUMBER','EMAIL','FACEBOOK','YOUTUBE','INSTAGRAM'];

        $values = [$name,$file_path,$address,$phonenumber, $email,    $facebook, $youtube, $instagram];

        // $i = 0
        // keys[0] = 'shop_name'
        // values[0] = $name

        // $i = 1
        // keys[1] = 'shop_email'
        // values[1] = $email

        // $i = 2
        // keys[2] = 'shop_phonenumber'
        // values[2] = $phonenumber

        for ($i = 0; $i < count($data_keys); $i++) {
            $key = $data_keys[$i];
            $value = $values[$i];

            // Tim hang trong CSDL
            $row = Website::where('config_key', '=', $key);

            // Cap nhat gia tri moi
            $row->update([
                'config_value' => $value
            ]);
        }

        // Chuyen huong ve trang chu
        return redirect()->route('AdminWebsite.index');
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
