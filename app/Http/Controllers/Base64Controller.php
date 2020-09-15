<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Base64Controller extends Controller
{
    public function encode(Request $request){
    	$string_decode = $request->string_decode;
        if(empty($string_decode))
            return \redirect('base64/encode') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
       	return \redirect('base64/encode') -> with(
       		[
	            'mess' => 'Mã hóa dữ liệu thành công !',
	            'value_encode' => base64_encode($string_decode),
	            'value_decode' => $string_decode 
            ]
       	);
    }




    //giai ma
    public function decode(Request $request){
    	 $string_encode = $request->string_encode;
        if(empty($string_encode))
            return \redirect('base64/decode') -> with('bug','Bạn cần nhập thông tin để giải mã !');
        return \redirect('base64/decode') -> with(
        	[
	            'mess' => 'Giải mã dữ liệu thành công !',
	            'value_encode' => $string_encode ,
	            'value_decode' => base64_decode($string_encode)
            ]
        );
    }
}
