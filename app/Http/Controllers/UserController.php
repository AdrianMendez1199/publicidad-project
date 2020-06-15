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
   * Reference to user Model
   * @var [type]
   */
  protected $userRepo;

  /**
   * Reference to Userdetail Model
   *
   * @var [type]
   */
  protected $userDetailts;


  /**
   * Reference to userImages Model
   *
   * @var [type]
   */
  protected $UserImages;


  public function __construct(User $user, UserDetail $userDetails,  UserImages $UserImages)
  {
    $this->userRepo = $user;
    $this->userDetailts = $userDetails;
    $this->UserImages = $UserImages;
  }
  /**
   * function create user into db
   *
   * @param Request $request
   * @return void
   */
  public function save(Request $request)
  {

    try {
      // print_r($request->all());
      // die;
      DB::beginTransaction();

      // Check if email exist
      // $emailExists = $this
      // ->userRepo::where('email', $request->email)
      // ->first();

      //  if ($emailExists) {
      //      return response('El email ya esta registrado', 409);
      //  }

      // create user
      $user = $this->userRepo::create([
        'name'     => $request->name,
        'email'    => 'test2@gmail.com', #$request->email,
        'whatsapp' => '80930237224',
        'password' => bcrypt($request->password),
      ]);

      // create user details
      $this->userDetailts::create([
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

          $this->UserImages::create([
            'user_id' => $user->id,
            'ruta' => "$imgPath/$name"
          ]);
        }
      }

      DB::commit();
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
