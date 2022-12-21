<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;//Response API

class AuthController extends Controller
{
    public function register(Request $request){
      //Validacion de los datos
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'lastName'=>'required|max:50|string',
        'DUI'=>'required|max:50|string',
        'phoneNumber'=>'required|max:50',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'imgProfile'=>'required|max:50|string',
        'gender'=>'required|max:50|string',
        'dateOfBirth'=>'required|max:50|string',
        'idSelectProfile'=>'required|max:50'        
      ]);

      if ($validator->fails()) {
        return response()->json($validator->errors());
      }
      
      //Alta del usuario
      $user = new User();
      $user->name = $request->name;
      $user->lastName = $request->lastName;
      $user->DUI = $request->DUI;
      $user->phoneNumber = $request->phoneNumber;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->imgProfile = $request->imgProfile;
      $user->gender = $request->gender;
      $user->dateOfBirth = $request->dateOfBirth;
      $user->idSelectProfile = $request->idSelectProfile;
      
      $user->save();
      
      //Respuesta
      return response()->json([
          "message" => "Usuario creado con exito!!!!"
      ]);

      //Otro tipo de respuesta con la API
      /* return response($user, Response::HTTP_CREATED); */

    }

    public function login(Request $request){
      
      //Validacion de los datos
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required'
      ]);

      if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        $cookie = cookie('cookie_token', $token, 60 * 24);
        return response(["token"=>$token], Response::HTTP_OK)->withoutCookie($cookie);
      }else{
        return response(["message"=>"Credenciales invalidas"], Response::HTTP_UNAUTHORIZED);
      }
    }
    
    public function userProfile(Request $request){

      return response()->json([
          "message" => "userProfile OK",
          "userData" => auth()->user()
      ], Response::HTTP_OK);
    }
    
    public function logout(){
      //delete token of user
      $user = Auth::user();
      $user->Tokens()->delete();

      //delete token of the cookie
      $cookie = Cookie::forget('cookie_token');
      
      //Response
      return response(["message"=>"Cierre de sesion ok"], Response::HTTP_OK)->withCookie($cookie);
      /* $cookie = Cookie::forget('cookie_token');      
      return response(["message"=>"Cierre de sesion ok"], Response::HTTP_OK)->withCookie($cookie); */
    }
    
    public function allUsers(){
      return response()->json([
          "message" => "Metodo ALLUSER ok"
      ]);
    }
}