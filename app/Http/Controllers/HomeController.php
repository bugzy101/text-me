<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

require __DIR__ . '/../../../vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\TwiML\MessagingResponse;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


 public function sendSms(Request $request)
    {

		// Your Account SID and Auth Token from twilio.com/console
		$account_sid = $_ENV["ACCOUNT_SID"];
		$auth_token = $_ENV["TWILIO_AUTH_TOKEN"];

 	    $to = $request->input('to');
            $from = $request->input('from');
            $body = $request->input('body');


		$twilio = new Client($account_sid, $auth_token);

		$message = 
		$twilio->messages
                  ->create(
		    // Where to send a text message (your cell phone?)
		    	$to,
		    array(
			"body" => $body
                        "messagingServiceSid" => "MG3eca1606d7df3ac0012f161b62ec03e2"
		    )
		);



	return back()->with('success',$message->sid);
    }


 public function messageLog(Request $request)
    {

	return back()->with('info', $request->input);
    }





}
