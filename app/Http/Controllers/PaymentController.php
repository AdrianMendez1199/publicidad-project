<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Plan;
use App\Payment;
use App\Subscription;
use Carbon\Carbon;


class PaymentController extends Controller
{

    protected $provider;
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function payWithpaypal(object $plan)
    {
        $data = [];
        $data['items'] = [
            [
                'name' => $plan->name,
                'price' => $plan->price,
                'desc'  => $plan->name,
                'qty' => 1
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('home');
        $data['total'] = $plan->price;

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($data);
        return $response;
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $provider = new ExpressCheckout();

        $response = $provider->getExpressCheckoutDetails($request->token);  

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            $userPayment = Payment::where('payment_request_token', $response['TOKEN'])
                  ->first();

            $userPayment->status = 'APROVED';
            $userPayment->save();

            Subscription::create([
                'plan_id' => $userPayment->plan_id, 
                'user_id' => $userPayment->user_id, 
                'start_date' => Carbon::now(),
                'expired_at' => Carbon::now()->addDays(30)
            ]);

           return redirect('/')
            ->with('success', 'El usuario, se creo correctamente');
        }

        dd('Something is wrong.');
    }
}