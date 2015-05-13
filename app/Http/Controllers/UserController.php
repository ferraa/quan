<?php

namespace App\Http\Controllers;


use App\User;
use Carbon\Carbon;

class UserController extends Controller{

    public function getOrm(){
        $users = User::with('profile')->get();
        dd($users->toArray());

       // return $result;
    }
    public function getIndex(){

        $date = Carbon::now();
        $result = \DB::table('users')
            ->select('name','email')
            ->where('name','<>','Matias')
            ->orderBy('name','ASC')
            ->get();

        dd($result);
        return $result;

    }

}