<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class URLController extends Controller
{
    //ma hoa
    public function encode(Request $request){
    	$string_decode = $request->string_decode;
        if(empty($string_decode))
            return \redirect('url/encode') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        if(filter_var($string_decode, FILTER_VALIDATE_URL))
	       	return \redirect('url/encode') -> with(
	       		[
		            'mess' => 'Mã hóa dữ liệu thành công !',
		            'value_encode' => $data = urlencode($string_decode),
		            'value_decode' => $string_decode 
	            ]
	       	);
        return \redirect('url/encode') -> with('bug','Bạn cần nhập thông tin là 1 url để mã hóa !');
    }




    // giai ma
    public function decode(Request $request){
    	$string_encode = $request->string_encode;
        if(empty($string_encode))
            return \redirect('url/decode') -> with('bug','Bạn cần nhập thông tin để giải  mã  !');
        if(filter_var(urldecode($string_encode), FILTER_VALIDATE_URL))
	       	return \redirect('url/decode') -> with(
	       		[
		            'mess' => 'Giải mã dữ liệu thành công !',
		            'value_encode' => $string_encode ,
		            'value_decode' => urldecode($string_encode)
	            ]
	       	);
        return \redirect('url/decode') -> with('bug','Bạn cần nhập thông tin đúng để giải mã !');
    }
}
