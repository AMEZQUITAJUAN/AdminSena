<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Computers;
use Illuminate\Http\Request;

class OrmController extends Controller
{

    public function consultas(){


        // $profile=Profile::find(2);
        // return $profile->user;
    
            $computer = Computers::find(1);
            return $computer;
        }        

        // $post=Post::find(3);
        // return $post->category;





        // return $users->profile;

        // $role = Role::find(1);


        //  $user = User::find(1);
        //  $user->roles()->detach(1);
        //  return $user;



        //  $role = Role::find(3);
        //  $role->users()->attach(2);
        //  return $role;




    }


