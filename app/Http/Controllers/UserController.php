<?php

namespace App\Http\Controllers;

use App\UsernameTest;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $results = app('db')->select("SELECT * FROM test WHERE user='david'");
        return $results;
    }
    public function loginTest(Request $request){
         // grab credentials from the request
         $credentials = $request->only('name', 'password');
         $user = new UsernameTest();
         $user->name = $credentials['name'];
                 try {
                     // attempt to verify the credentials and create a token for the user
                     if (! $token = JWTAuth::attempt($credentials)) {
                         return response()->json(['error' => 'invalid_credentials'], 401);
                     }
                 } catch (JWTException $e) {
                     // something went wrong whilst attempting to encode the token
                     return response()->json(['error' => 'could_not_create_token'], 500);
                 }
                 $user->token = JWTAuth::fromUser($user);
                 // all good so return the token
                 return response()->json($user);
    }
}
?>