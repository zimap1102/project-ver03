<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DEC_HEX_OCT_BINController extends Controller
{
    // chuyen doi Decimal thanh Hexadecimal, Octal, Binary
    public function dec(Request $request){
    	$dec = $request ->dec;
    	if(empty($dec))
            return \redirect('dec') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        if(dechex($dec) && decoct($dec) && decbin($dec))
	        return \redirect('dec') -> with([
	        	'mess'=>'Chuyển đổi thành công!',
	        	'dec' =>$dec,
	        	'hex' =>dechex($dec),
	        	'oct' =>decoct($dec),
	          	'bin' =>decbin($dec)

	        ]);
	    return \redirect('dec') -> with('bug','Bạn cần nhập thông tin đúng để mã hóa !');
    }



    // chuyen doi Hexadecimal thanh Decimal, Octal, Binary
    //
    public function hex(Request $request){
    	$hex = $request ->hex;
    	if(empty($hex))
            return \redirect('hex') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        if( base_convert($hex, 16, 10) && base_convert($hex, 16, 8) && base_convert($hex, 16, 2))
	        return \redirect('hex') -> with([
	        	'mess'=>'Chuyển đổi thành công!',
	        	'hex' =>$hex,
	        	'dec' =>base_convert($hex, 16, 10),
	        	'oct' =>base_convert($hex, 16, 8),
	          	'bin' =>base_convert($hex, 16, 2)

	        ]);
	    return \redirect('hex') -> with('bug','Bạn cần nhập thông tin đúng để mã hóa !');
    }




    // chuyen doi Octal thanh Hexadecimal,Decimal  , Binary
    //
    public function oct(Request $request){
    	$oct = $request ->oct;
    	if(empty($oct))
            return \redirect('oct') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        if(octdec($oct) && base_convert($oct, 8, 16) && base_convert($oct, 8, 2))
	        return \redirect('oct') -> with([
	        	'mess'=>'Chuyển đổi thành công!',
	        	'dec' =>octdec($oct),
	        	'hex' =>base_convert($oct, 8, 16),
	        	'oct' =>$oct,
	          	'bin' =>base_convert($oct, 8, 2)

	        ]);
	    return \redirect('oct') -> with('bug','Bạn cần nhập thông tin đúng để mã hóa !');
    }




    // chuyen doi Binary thanh Hexadecimal, Octal, Decimal
    public function bin(Request $request){
    	$bin = $request ->bin;
    	if(empty($bin))
            return \redirect('bin') -> with('bug','Bạn cần nhập thông tin để mã hóa !');
        if(base_convert($bin, 2, 10) && base_convert($bin, 2, 16) && base_convert($bin, 2, 8))
	        return \redirect('bin') -> with([
	        	'mess'=>'Chuyển đổi thành công !',
	        	'dec' =>base_convert($bin, 2, 10),
	        	'hex' =>base_convert($bin, 2, 16),
	        	'oct' =>base_convert($bin, 2, 8),
	          	'bin' =>$bin

	        ]);
	    return \redirect('bin') -> with('bug','Bạn cần nhập thông tin đúng để mã hóa !');
    }
}
