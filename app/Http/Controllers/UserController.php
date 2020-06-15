<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetail;
use App\UserImages;
use Illuminate\Support\Facades\DB;

// use Exception;

class UserController extends Controller
{
 
  /**
   * function create user into db
   *
   * @param Request $request
   * @return void
   */
  public function save(Request $request)
  {

    try {
      DB::beginTransaction();

      // Check if email exist
      $emailExists = $this
      ->userRepo::where('email', $request->email)
      ->first();

       if ($emailExists) {
        return redirect()
         ->back()
         ->with('error', 'Su registro a sido compleado con exito');
       }

      // create user
      $user = User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'whatsapp' => $request->whatsapp,
        'password' => bcrypt($request->password),
      ]);

      // create user details
      UserDetail::create([
        'height'      => $request->height,
        'hair_color'  => $request->hair_color,
        'ethnicity'   => $request->ethnicity,
        'description' => $request->description,
        'bust'        => $request->bust,
        'waist'       => $request->waist,
        'eye_color'   => $request->eye_color,
        'hip'         => $request->hip,
        'user_id'     => $user->id
      ]);



      if ($request->hasfile('filename1')) {

        foreach ($request->allFiles() as $file) {
          $name = $file->getClientOriginalName();
          $imgPath = public_path() . "/files/{$user->id}";
          $file->move($imgPath, $name);

          UserImages::create([
            'user_id' => $user->id,
            'ruta' => "$imgPath/$name"
          ]);
        }
      }

      DB::commit();
      return redirect()
       ->back()
       ->with('message', 'Su registro a sido compleado con exito');

    } catch (\Exception $e) {
      echo "Error" . $e->getMessage();
      DB::rollback();
    }
  }

  public function update(Request $request)
  {
  }

  public function delete(int $id)
  {
  }

  public function details(int $userId)
  {
  }
}
