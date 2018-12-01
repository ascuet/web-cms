<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use File;
use Image;
class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

    	return view('backend.pages.service.list',['data'=>$services]);
    }
    public function add()
    {
    	return view('backend.pages.service.add');
    }
    public function store(Request $request)
    {
    	$obj = new Service();
    	$obj->title = $request->title;
    	$obj->description = $request->description;
    	$obj->status = ($request->status === 'on') ? true:false;
    	$obj->sort_order = $request->sort_order;
        if ($request->file('filename'))
        {
            $originalImage  = $request->file('filename');
            $image_url     = $this->uploadImage($originalImage);
        }
        else
        {
            $image_url = "";
        }
        $obj->image_url = $image_url;
    	if($obj->save())
    	{
    		return redirect()->to('/services');
    	}
    }

    private function uploadImage($originalImage)
    {
        $image     = Image::make($originalImage);

        $tmp            = $originalImage->getClientOriginalName();
        $ext2           = explode(".", $tmp);
        $ext            = end($ext2);
        $imagename      = time().'.'.$ext;
        // local
        $path            = public_path().'/uploads/service/'; 
        // deployment
        //$path          = base_path().'/../'.'uploads/banner/';
        //$image->resize(1600,600);
        $image->save($path.$imagename);
        return $imagename;
    }
}
