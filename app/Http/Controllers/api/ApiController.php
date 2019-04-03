<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use File;
use Image;
class ApiController extends Controller
{
    public function getservices()
    {
    	$services = Service::orderBy('id','desc')->take(5)->get();
    	if($services){
            return response()->json($services);
    		// return response()->json([
	    	// 	'success' => true,
	    	// 	'data'    => $services,
	    	// 	'message' => 'Services Retrieved'
	    	// ], 200);
    	}
    	else
    	{
    		return response()->json([
	    		'success' => false,
	    		'data'    => array(),
	    		'message' => 'No Service Found'
	    	], 200);
    	}
    	
    }
    public function postservice(Request $request){
    	$obj = new Service();
    	$obj->title = $request->title;
    	$obj->description = $request->description;
    	$obj->status = $request->status;
    	$obj->sort_order = $request->sort_order;

		if ($request->hasFile('image_url')) 
		{
		    $originalImage = $request->file('image_url');
		    $obj->image_url = $this->uploadImage($originalImage);
		}
		else
		{
			$obj->image_url = "";
		}

		if($obj->save())
		{
			return response(array(
		        'error'    => false,
		        'data'=>$obj,
		        'message'  => 'Successfully Inserted'
		    ),200); 
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
        $path           = public_path().'/uploads/service/'; 
        // deployment
        //$path          = base_path().'/../'.'uploads/banner/';
        //$image->resize(1600,600);
        $image->save($path.$imagename);
        return $imagename;
    }
}
