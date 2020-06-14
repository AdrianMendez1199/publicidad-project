<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
      echo "<pre>";
      print_r($request->all());
    }

    public function update(Request $request) {

    }

    public function delete(int $id) {

    }

    public function details(int $userId) {}
}
