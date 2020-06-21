<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetail;
use App\UserImages;
use App\Payment;
use App\Plan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
      $emailExists = User::where('email', $request->email)
      ->first();

       if ($emailExists) {
          return response()
            ->json([ 
              'status' => 'NOK',
              'message' => 'El email que intenta registrar ya existe' 
            ], 409);
          
       }

      // create user
      $user = User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
      ]);

      // create user details
      UserDetail::create([
        'height'        => $request->height,
        'hair_color'    => $request->hair_color,
        'ethnicity'     => $request->ethnicity,
        'description'   => $request->description,
        'bust'          => $request->bust,
        'waist'         => $request->waist,
        'eye_color'     => $request->eye_color,
        'hip'           => $request->hip,
        'user_id'       => $user->id,
        'phone'         => $request->whatsapp,
        'travels'       => $request->travels,
        'date_of_birth' => Carbon::parse($request->date_of_birth)->format('y/m/d')
      ]);

 

      if ($request->hasfile('filename1')) {

        foreach ($request->allFiles()  as $key => $file) {
          $name = $file->getClientOriginalName();
          $imgPath = "storage/{$user->id}";
          $file->move($imgPath, $name);

          // create user img
          UserImages::create([
            'filename' => "img{$key}",
            'user_id' => $user->id,
            'file' => "$imgPath/$name"
          ]);
        }

      }
       // find plans
       $plan = Plan::where('plan', $request->plan)
            ->first();
       
       if (!$plan) {
         return 'Plan not found';
       }
       // Try Payment 
       
       if($request->pago === 'paypal') {
         $payment = new PaymentController();
         $response = $payment->payWithpaypal($plan);
       }else{
         // TODO pago con tarjeta
         $payment = new PaymentController();
         $response = $payment->payWithpaypal($plan);
       }
      
       if(strtoupper($response['ACK']) == 'SUCCESS'){

         Payment::create([
             'payment_request_token' => $response['TOKEN'],
             'user_id' => $user->id,
             'plan_id'   => $plan->id,
             'status' => 'PENDING'
         ]);

         // Commit to save transacction information
         DB::commit();

         return response()
         ->json([ 
           'status' => 'OK',
           'message' => 'Su registro a sido compleado con exito',
           'paypal_link' => $response['paypal_link']
        ]);
       }
  
    } catch (\Exception $e) {
      echo "Error" . $e->getMessage();
      DB::rollback();
    }
  }

  public function update(Request $request)
  {
    // create user
     return User::update([
      'name'     => $request->name,
      'email'    => $request->email,
      'whatsapp' => $request->whatsapp,
      'password' => bcrypt($request->password),
    ]);

  }

  public function delete(int $id)
  {
  }

  public function details(int $id)
  {
     $user = User::findOrFail($id);
     return view('user.details', [ 'user' => $user ]);
  }

}
