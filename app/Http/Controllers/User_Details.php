<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Http;

class User_Details extends Controller
{
    public function fetchAllUsers($limit = null)
    {
        $response = Http::get('https://dummyjson.com/users');
        $userDetailsArr = json_decode($response->body());
        
        foreach($userDetailsArr as $userDetails){     
            
            foreach($userDetails as $user){
                
                $userInfo = new UserDetails();            
                $userInfo->firstname = $user->firstName;
                $userInfo->lastname = $user->lastName;
                $userInfo->email = $user->email;
                $userInfo->phone = $user->phone;
                $userInfo->username = $user->username;
                $userInfo->birthDate = $user->birthDate;
                $userInfo->bank = json_encode($user->bank);
                $userInfo->hair = $user->hair->color;
                $userInfo->height = $user->height;
                $userInfo->weight = $user->weight;
                $userAddress = $user->address->address.', '.$user->address->city.', '.$user->address->state.', '.$user->address->postalCode;
                $userInfo->address = $userAddress;
                $userInfo->save();           
            }
            break;            
        }
        return response()->json([
            "success" => true,
            "message" => "Users added successfully.",
            ]);
    }

    public function fetchSingleUser($id,$limit = null)
    {
        $response = Http::get('https://dummyjson.com/users/'.$id);
        $user = json_decode($response->body());
          
        $userInfo = new UserDetails();            
        $userInfo->firstname = $user->firstName;
        $userInfo->lastname = $user->lastName;
        $userInfo->email = $user->email;
        $userInfo->phone = $user->phone;
        $userInfo->username = $user->username;
        $userInfo->birthDate = $user->birthDate;
        $userInfo->bank = json_encode($user->bank);
        $userInfo->hair = $user->hair->color;
        $userInfo->height = $user->height;
        $userInfo->weight = $user->weight;
        $userAddress = $user->address->address.', '.$user->address->city.', '.$user->address->state.', '.$user->address->postalCode;
        $userInfo->address = $userAddress;
        $userInfo->save();      
    
        return response()->json([
            "success" => true,
            "message" => "Users added successfully.",
            ]);
    }

}
