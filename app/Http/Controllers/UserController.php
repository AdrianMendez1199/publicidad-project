<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

// use Exception;

class UserController extends Controller
{
    /**
     * Reference to user Model
     * @var [type]
     */
    private $userRepo;
    
    public function __construct(User $user)
    {
        $this->userRepo = $user;
    }
    /**
     * function create user into db
     *
     * @param Request $request
     * @return void
     */
    public function save(Request $request){

      try {  
      
        DB::beginTransaction();

        // Check if email exist
       $emailExists = $this
              ->userRepo::where('email', $request->email)
              ->first();

        if ($emailExists) {
           return response('El email ya esta registrado', 409);
        }

        $this->userRepo->name = $request->name;
        $this->userRepo->email = $request->email;
        $this->userRepo->password = $request->password;
        $this->userRepo->whatsapp = $request->whatsapp;
        $this->userRepo->save();

         DB::commit();
      } catch(\Exception $e) {
         echo "Error".$e->getMessage();
         DB::rollback();
      }
    }

    public function update(Request $request) {

    }

    public function delete(int $id) {

    }

    public function details(int $userId) {}
}
