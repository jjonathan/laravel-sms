<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\NexmoMessage;

class SmsController extends Controller
{
	public $request;
	public $nexmo;

	public function __construct(Request $request, \Nexmo\Client $nexmo){
		$this->request = $request;
		$this->nexmo = $nexmo;
	}

	public function send(){
		$to = $this->request->get('to') ? $this->request->get('to') : '5548998403692';
		$message = $this->nexmo->message()->send([
			'to' => $to,
			'from' => '@leggetter',
			'text' => 'Testando a budega'
		]);
		return "SMS enviado para: $to";
	}
}
