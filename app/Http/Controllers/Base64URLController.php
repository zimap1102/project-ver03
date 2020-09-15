<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Base64URLController extends Controller
{
    function base64_encode_url($string) {
    	return str_replace(['+','/','='], ['-','_',''], base64_encode($string));
	}

	function base64_decode_url($string) {
	    return base64_decode(str_replace(['-','_'], ['+','/'], $string));
	}
    //ma hoa
    public function encode(Request $request){
    	$string_decode = $request->string_decode;
        if(empty($string_decode))
            return \redirect('base64-url/encode') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        if(filter_var($string_decode, FILTER_VALIDATE_URL))
	       	return \redirect('base64-url/encode') -> with(
	       		[
		            'mess' => 'Mã hóa dữ liệu thành công !',
		            'value_encode' => $this->base64_encode_url($string_decode),
		            'value_decode' => $string_decode 
	            ]
	       	);
        return \redirect('base64-url/encode') -> with('bug','Bạn cần nhập thông tin là 1 url để mã hóa !');
    }




    // giai ma
    public function decode(Request $request){
    	$string_encode = $request->string_encode;
        if(empty($string_encode))
            return \redirect('base64-url/decode') -> with('bug','Bạn cần nhập thông tin để giải  mã  !');
        if(filter_var(base64_decode($string_encode), FILTER_VALIDATE_URL))
	       	return \redirect('base64-url/decode') -> with(
	       		[
		            'mess' => 'Giải mã dữ liệu thành công !',
		            'value_encode' => $string_encode ,
		            'value_decode' => $this->base64_decode_url($string_encode)
	            ]
	       	);
        return \redirect('base64-url/decode') -> with('bug','Bạn cần nhập thông tin đúng để giải mã !');
    }
}
