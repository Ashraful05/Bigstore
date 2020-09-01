<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    public function manageBrand(){
        $brands=Brand::all();
        return view('admin.brand.manage-brand',['brands'=>$brands]);
    }

    public function saveBrand(Request $request){
        $this->validate($request,[
            'brand_name'=>'required',
            'brand_description'=>'required'

        ]);
        $brand=new Brand();
        $brand->brand_name=$request->brand_name;
        $brand->brand_description=$request->brand_description;
        $brand->publication_status=$request->publication_status;
        $brand->save();

        return redirect('/brand/add')->with('message','Brand Info added successfully');
    }

    public function publishedBrandInfo($id){
        $brand=Brand::find($id);
        $brand->publication_status=1;
        $brand->save();

        return redirect('/brand/manage')->with('message','Brand Info Published');
    }
    public  function unpublishedBrandInfo($id){
        $brand=Brand::find($id);
        $brand->publication_status=0;
        $brand->save();
        return redirect('/brand/manage')->with('message','Brand Info Unpublished');
    }
    public function editBrandInfo($id){
        $brand=Brand::find($id);
        return view('admin.brand.edit-brand',['brand'=>$brand]);
    }

    public function updateBrandInfo(Request $request){
        $brand=Brand::find($request->brand_id);
        $brand->brand_name=$request->brand_name;
        $brand->brand_description=$request->brand_description;
        $brand->publication_status=$request->publication_status;

        $brand->save();
        return redirect('/brand/manage')->with('message','Brand Info Updated Successfully');
    }

    public function deleteBrandInfo($id){
        $brand=Brand::find($id);
        $brand->delete();

        return redirect('/brand/manage')->with('message','Brand Info deleted successfully');
    }
}
