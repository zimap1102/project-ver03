<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SHA1;

class SHA1Controller extends Controller
{
    //ma hoa
    public function encode(Request $request){
    	$string_decode = $request->string_decode;
        if(empty($string_decode))
            return \redirect('sha1/encode') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        $decode = SHA1::where('string_encode',sha1($string_decode)) ->first();
        if(!$decode){
            SHA1::create([
                'string_encode' => sha1($string_decode),
                'string_decode' => $string_decode
            ]);
            return \redirect('sha1/encode') -> with([
                'mess' => 'Mã hóa dữ liệu thành công !',
                'value_encode' => sha1($string_decode),
                'value_decode' => $string_decode 
                ]);
        }
        return \redirect('sha1/encode') -> with([
            'mess' => 'Mã hóa dữ liệu thành công !',
            'value_encode' => $decode ->string_encode,
            'value_decode' => $string_decode 
            ]);
    }




    // giai ma
    public function decode(Request $request){
    	$string_encode = $request->string_encode; 
        if(empty($string_encode))
            return \redirect('sha1/decode') -> with('bug','Bạn cần nhập thông tin để giải mã !');
        $encode = SHA1::where('string_encode',$string_encode) ->first();
        if(!$encode)
            return \redirect('sha1/decode') -> with(['bug' => 'Dữ liệu cần giải mã chưa có dữ liệu !']);
        return \redirect('sha1/decode') -> with([
            'mess' => 'Giải mã dữ liệu thành công !',
            'value_encode' => $string_encode,
            'value_decode' => $encode ->string_decode 
            ]);
    }
}
