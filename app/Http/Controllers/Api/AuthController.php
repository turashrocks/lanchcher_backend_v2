<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;
use GuzzleHttp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\Http\Resources\Login as LoginResource;
// use App\Http\Resources\LoginCollection as LoginResourceCollection;


class AuthController extends Controller
{
	use AuthenticatesUsers;
	
	// public function register(Request $request){

	// 	$request->validate([
	// 		'email'=>'required',
	// 		'name'=>'required',
	// 		'password'=>'required'
	// 	]);

	// 	$user=new User();
	// 	$user->email=$request->email;
	// 	$user->name=$request->name;
	// 	$user->email=$request->email;
	// 	$user->password=bcrypt($request->password);
	// 	$user->save();


	// 	$http = new Client;

	// 	$response = $http->post(url('oauth/token'), [
	// 	    'form_params' => [
	// 	        'grant_type' => 'password',
	// 	        'client_id' => '2',
	// 	        'client_secret' => 'XlNTbVUYBxDyyvj8woPiZEkL4D5Ei7un1hSU3VBV',
	// 	        'username' => $request->email,
	// 	        'password' => $request->password,
	// 	        'scope' => '',
	// 	    ],
	// 	]);


	// 	return response(['auth'=>json_decode((string) $response->getBody(), true),'user'=>$user]);
		
	// }

	public function login(Request $request){

		$client = new GuzzleHttp\Client();
		$res = $client->request('POST', 'https://localhost:8000/api/user',[
			'headers' => [
				'Accept', 'application/json',
				'Content-Type', 'application/json',
				'Authorization', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjNkM2U2ZWMwZDVjZTlmODA3NjNiODAxZjY3MGYyNDg0NjRmNmMwYTViM2E1ZTM0MTYxY2ZiNTdlMmU2MzRiMDFmNWZmNmNjOGZhNWMwY2RhIn0.eyJhdWQiOiIyIiwianRpIjoiM2QzZTZlYzBkNWNlOWY4MDc2M2I4MDFmNjcwZjI0ODQ2NGY2YzBhNWIzYTVlMzQxNjFjZmI1N2UyZTYzNGIwMWY1ZmY2Y2M4ZmE1YzBjZGEiLCJpYXQiOjE1NTMzNDY2MjEsIm5iZiI6MTU1MzM0NjYyMSwiZXhwIjoxNTg0OTY5MDIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.nj1VT9Q-SqqorYxqMD63s-upsq2kxk6tBF1QUM9dlQvOw-iOZZkiHCUgbXtpERqjXegUlQ9FraH7qV_PuahwN6F6-FulZ292Tzd328fTE8zDn-VNO5iQYpnuENNpNGchpF3qX8dA8_Rc7bY8G0r595OXb7QNPmh1NOdNDgx1ljOM73WXh0VUjEPsAfXNrqUt2hngDDYUvLgibEsq6O_qcH3nQr13_s5kFKa0UytD7Fgn9qmIw528rEPm9db_89AQMLU_9YvM0hi0YWIX3nE67VktuDtwqhz64GmSN0IecvgazQHSvrYEGJUJLPuWomEb4vXQ3deshuKEJQNlIVLpVatawrXJjkcG03HZf2n4XL1qh6nqow6OJQ8Ux8PO5_WE7budf2y7Mi4IIhj8RmPuFWSebjTzax6LXFoQ6WDuuOh5OHV4um7mMzfBuNWER-8ji49CT5ueC9Yqcz2l0n_YVB-wrqskVf6PJoLHthZg3S3-L7itFShTMsC44u74MJilYG7kXmZKFIHJeN-hq-qP0W1g7JFcT98B4MeCgKnq_QD0pJeYuyi1lXYG3yMguNRpb5y16xK7wkAXzZAxyamMDPbKOhwjp9GqwrsFM_roRFnSZ7aNT7rm2lidi7f92nAFtbSG04Rsa75oi8ox9NfMe2gEiVdivt1eN2iQaYc2U6A',]
		]);

		return json_decode((string) $res->getBody(), true);
		
		// $request->validate([
		// 	'email'=>'required',
		// 	'password'=>'required'
		// ]);

		// $user= User::where('email',$request->email)->first();

		// if(!$user){
		// 	return response(['status'=>'error','message'=>'User not found']);
		// }

		// if(Hash::check($request->password, $user->password)){

		// 		$http = new Client;

		// 	$response = $http->post(url('oauth/token'), [
		// 		'form_params' => [
		// 			'grant_type' => 'password',
		// 			'client_id' => '2',
		// 			'client_secret' => 'XlNTbVUYBxDyyvj8woPiZEkL4D5Ei7un1hSU3VBV',
		// 			'username' => $request->email,
		// 			'password' => $request->password,
		// 			'scope' => '',
		// 		],
		// 	]);
		// 	//return response(['auth' => json_decode((string)$response->getBody(), true), 'user' => $user]);
		// }else{
		// 	return response(['message'=>'password not match','status'=>'error']);
		// }
	}

	// public function refreshToken() {

	// 	$http = new Client;

	// 	$response = $http->post(url('oauth/token'), [
	// 	    'form_params' => [
	// 	        'grant_type' => 'refresh_token',
	// 	        'refresh_token' => request('refresh_token'),
	// 	        'client_id' => '2',
	// 	        'client_secret' => 'cK13jXYdcIjETs7yKO8wpkvFGoZhN6WgEex9eCbB',
	// 	        'scope' => '',
	// 	    ],
	// 	]);

	// 	return json_decode((string) $response->getBody(), true);

	// }

}