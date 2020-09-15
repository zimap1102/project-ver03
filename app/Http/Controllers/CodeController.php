<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeController extends Controller
{
    //ma hoa string
    public function encode(Request $request){

    	$str = trim($request->string_en);
    	if(empty($str)) return redirect('barcode/DNS1D/C128A/encode')->with('bug','bạn cần nhập nội dung để mã hóa');
        
    	return redirect('barcode/DNS1D/C128A/encode')->with(['mess'=>'thành công','value_en'=>$str]);  
    }

     public function encodeKIX(Request $request){

    	$str = trim($request->string_en);
    	if(empty($str)) return redirect('barcode/DNS1D/KIX/encode')->with('bug','bạn cần nhập nội dung để mã hóa');
        
    	return redirect('barcode/DNS1D/KIX/encode')->with(['mess'=>'thành công','value_en'=>$str]);  
    }

     public function encodeC39(Request $request){

    	$str = trim($request->string_en);
    	if(empty($str)) return redirect('barcode/DNS1D/C39/encode')->with('bug','bạn cần nhập nội dung để mã hóa');
        
    	return redirect('barcode/DNS1D/C39/encode')->with(['mess'=>'thành công','value_en'=>$str]);  
    }

     public function encodePDF417(Request $request){

    	$str = trim($request->string_en);
    	if(empty($str)) return redirect('barcode/DNS2D/PDF417/encode')->with('bug','bạn cần nhập nội dung để mã hóa');
        
    	return redirect('barcode/DNS2D/PDF417/encode')->with(['mess'=>'thành công','value_en'=>$str]);  
    }

     public function encodeQRCODE(Request $request){

    	$str = trim($request->string_en);
    	if(empty($str)) return redirect('barcode/DNS2D/QRCODE/encode')->with('bug','bạn cần nhập nội dung để mã hóa');
        
    	return redirect('barcode/DNS2D/QRCODE/encode')->with(['mess'=>'thành công','value_en'=>$str]);  
    }
}
