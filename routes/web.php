<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home

Route::get('/', function () {
    return view('home');
});

//MD5
Route::view('/md5/encode','md5.encode');
Route::view('/md5/decode','md5.decode');
Route::post('/md5/encode','MD5Controller@encode');
Route::post('/md5/decode','MD5Controller@decode');

//BASE-64
Route::view('/base64/encode','base64.encode');
Route::view('/base64/decode','base64.decode');
Route::post('/base64/encode','Base64Controller@encode');
Route::post('/base64/decode','Base64Controller@decode');


//BASE-64-URL
Route::view('/base64-url/encode','base64-url.encode');
Route::view('/base64-url/decode','base64-url.decode');
Route::post('/base64-url/encode','Base64URLController@encode');
Route::post('/base64-url/decode','Base64URLController@decode');



//URL
Route::view('/url/encode','url.encode');
Route::view('/url/decode','url.decode');
Route::post('/url/encode','URLController@encode');
Route::post('/url/decode','URLController@decode');



//SHA
Route::view('/sha/encode','sha.encode');
Route::view('/sha/decode','sha.decode');
Route::post('/sha/encode','SHAController@encode');
Route::post('/sha/decode','SHAController@decode');

//SHA1
Route::view('/sha1/encode','sha1.encode');
Route::view('/sha1/decode','sha1.decode');
Route::post('/sha1/encode','SHA1Controller@encode');
Route::post('/sha1/decode','SHA1Controller@decode');


//SHA256
Route::view('/sha256/encode','sha256.encode');
Route::view('/sha256/decode','sha256.decode');
Route::post('/sha256/encode','SHA256Controller@encode');
Route::post('/sha256/decode','SHA256Controller@decode');


//JSON
Route::view('/json/encode','json.encode');
Route::view('/json/decode','json.decode');
Route::post('/json/encode','JsonController@encode');
Route::post('/json/decode','JsonController@decode');


//DEC-HEX-OCT-BIN
Route::view('/dec','DEC-HEX-OCT-BIN.dec');
Route::post('/dec','DEC_HEX_OCT_BINController@dec');
Route::view('/hex','DEC-HEX-OCT-BIN.hex');
Route::post('/hex','DEC_HEX_OCT_BINController@hex');
Route::view('/oct','DEC-HEX-OCT-BIN.oct');
Route::post('/oct','DEC_HEX_OCT_BINController@oct');
Route::view('/bin','DEC-HEX-OCT-BIN.bin');
Route::post('/bin','DEC_HEX_OCT_BINController@bin');


//Barcode
//128
Route::view('/barcode/DNS1D/C128A/encode','barcode.DNS1D.C128A.encode');
Route::post('/barcode/DNS1D/C128A/encode','CodeController@encode');

//KIX
Route::view('/barcode/DNS1D/KIX/encode','barcode.DNS1D.KIX.encode');
Route::post('/barcode/DNS1D/KIX/encode','CodeController@encodeKIX');
//c39
Route::view('/barcode/DNS1D/C39/encode','barcode.DNS1D.C39.encode');
Route::post('/barcode/DNS1D/C39/encode','CodeController@encodeC39');
//PDF417
Route::view('/barcode/DNS2D/PDF417/encode','barcode.DNS2D.PDF417.encode');
Route::post('/barcode/DNS2D/PDF417/encode','CodeController@encodePDF417');
//QRCODE
Route::view('/barcode/DNS2D/QRCODE/encode','barcode.DNS2D.QRCODE.encode');
Route::post('/barcode/DNS2D/QRCODE/encode','CodeController@encodeQRCODE');