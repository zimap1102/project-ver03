<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    // 
    //ma hoa ||chưa chạy
    public function encode(Request $request){
        $array_decode = ['a'=>1,'b'=>2,'c'=>2];
        if(empty($array_decode))
            return \redirect('json/encode') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        return json_encode($array_decode);
        if(is_array($array_decode))
           	return \redirect('json/encode') -> with(
           		[
    	            'mess' => 'Mã hóa dữ liệu thành công !',
    	            'value_encode' => json_encode($array_decode),
    	            'value_decode' => $array_decode 
                ]
           	);
       return \redirect('json/encode') -> with('bug','Bạn cần nhập thông tin đúng định dạng để mã hóa !');
    }




    //giai ma
    public function decode(Request $request){
        $string_encode = $request->string_encode;
        if(empty($string_encode))
            return \redirect('json/decode') -> with('bug','Bạn cần nhập thông tin để giải mã !');
        $array = json_decode($string_encode, TRUE);
        if(is_array($array))
                return \redirect('json/decode') -> with(
                    [
                        'mess' => 'Giải mã dữ liệu thành công !',
                        'value_encode' => $string_encode ,
                        'value_decode' => $string_encode
                    ]
                );
        return \redirect('json/decode') -> with('bug','Bạn cần nhập thông tin đúng định dạng để giải mã !');
    }
}
