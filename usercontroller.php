<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
  public function register(Request $request)
  {
      $this->validate($request, [
          'id' => 'required|min:5'
          'username' => 'required|min:5'
          'password' => 'required|min:6'
          'email' => 'required|unique:user|email',
          'phone' => 'required|min:11'
          'address' => 'required|min:10'
          'city' => 'required|min:4'
          'country' => 'required|min:5'
          'name' => 'required|min:3'
          'postcode' => 'required|min:4'

      ]);
      $id = $request->input('id');
      $username = $request->input('username');
      $password = Hash::make($request->input('password'));
      $email = $request->input('email');
      $phone = $request->input('phone');
      $address = $request->input('address');
      $city = $request->input('city');
      $country = $request->input('country');
      $name = $request->input('name');
      $postcode = $request->input('postcode');
      

      $user = User::create([
          'id' => $id,
          'username' => $username,
          'password' => $password
          'email' => $email,
          'phone' => $email,
          'address' => $email,
          'city' => $email,
          'country' => $email,
          'name' => $email,
          'postcode' => $email,
      ]);

      return response()->json(['message' => 'Data added successfully'], 201);
  }
} 