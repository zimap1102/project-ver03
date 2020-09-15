<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MD5;

class MD5Controller extends Controller
{
    //ma hoa
    public function encode(Request $request){
    	$string_decode = $request->string_decode;
        if(empty($string_decode))
            return \redirect('md5/encode') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        $decode = MD5::where('string_encode',md5($string_decode)) ->first();
        if(!$decode){
            MD5::create([
                'string_encode' => md5($string_decode),
                'string_decode' => $string_decode
            ]);
            return \redirect('md5/encode') -> with([
                'mess' => 'Mã hóa dữ liệu thành công !',
                'value_encode' => md5($string_decode),
                'value_decode' => $string_decode 
                ]);
        }
        return \redirect('md5/encode') -> with([
            'mess' => 'Mã hóa dữ liệu thành công !',
            'value_encode' => $decode ->string_encode,
            'value_decode' => $string_decode 
            ]);
    }




    // giai ma
    public function decode(Request $request){
    	$string_encode = $request->string_encode; 
        if(empty($string_encode))
            return \redirect('md5/decode') -> with('bug','Bạn cần nhập thông tin để giải mã !');
        $encode = MD5::where('string_encode',$string_encode) ->first();
        if(!$encode)
            return \redirect('md5/decode') -> with(['bug' => 'Dữ liệu cần giải mã chưa có dữ liệu !']);
        return \redirect('md5/decode') -> with([
            'mess' => 'Giải mã dữ liệu thành công !',
            'value_encode' => $string_encode,
            'value_decode' => $encode ->string_decode 
            ]);
    }
}
