<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

require __DIR__ . '/../../../vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\TwiML\MessagingResponse;


class smsController extends Controller
{


public function replySms(Request $request)
    {

	// Set the content-type to XML to send back TwiML from the PHP Helper Library
			header("content-type: text/xml");

			$response = new MessagingResponse();
			$response->message(
			    "Thank you for contacting us, we would get back to you shortly"
			);

			echo $response;
    }



}
