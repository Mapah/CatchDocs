<?php

use App\Models\Administration;
use App\Models\Advert;
use App\Models\Bureau;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\CompanyGallery;
use App\Models\Document;
use App\Models\Faq;
use App\Models\News;
use App\Models\Package;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use App\Models\Review;
use App\Models\Session;
use App\Models\Setting;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

function cities()
{
    return City::orderBy('name','asc')->get();
}

function categories($in_random_order = false,$type = null)
{
    if ($type == null) {
        if ($in_random_order) {
            return Category::inRandomOrder()->limit(4)->get();
        } else {
            return Category::all();
        }
    }else {
        if ($in_random_order) {
            return Category::where('type',$type)->inRandomOrder()->limit(4)->get();
        } else {
            return Category::where('type',$type)->get();
        }
    }

}


function randomString($val = null)
{
    if ($val==1) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }else{
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_-+=';
    }
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function services($limit = 4)
{
    return Product::where('type','SERVICE')->inRandomOrder()->limit($limit)->get();
}


function active_setting()
{
    return Setting::with('city')->where('status',1)->first();
}



function pages($name)
{

    return Page::where('name',$name)->where('setting_id',active_setting()->id)->first();

}

function dashboard()
{
    $administrations = Administration::count();
    $bureaux = Bureau::count();
    $documents = Document::count();
    $users = User::count();

    return [
        'administrations' => $administrations,
        'bureaux' => $bureaux,
        'documents' => $documents,
        'users' => $users,
    ];

}

function resizeImg($img_name,$path,$width,$height,$ext)
{
    $img_info = getimagesize(public_path($path).'/'.$img_name);
        $width_orig = $img_info[0];
        $height_orig = $img_info[1];
        if ($width_orig != $width || $height_orig != $height) {
            if ($ext == 'png' || $ext == 'PNG') {
                $orig_img = imagecreatefrompng(public_path($path).'/'.$img_name);
            }else{
                $orig_img = imagecreatefromjpeg(public_path($path).'/'.$img_name);
            }
            // $width = 900;
            // $height = 750;
            $destination_img = imagecreatetruecolor($width,$height);
            imagecopyresampled($destination_img,$orig_img,0,0,0,0,$width,$height,$width_orig,$height_orig);
            if ($ext == 'png' || $ext == 'PNG') {
                imagepng($destination_img,public_path($path).'/'.$img_name,9);
            }else{
                imagejpeg($destination_img,public_path($path).'/'.$img_name,100);
            }
        }
        return $img_name;
}


