<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
	public function index() {
		return view('frontend.contact.contact');
	}

	public function send(Request $req) {
		$req->validate([
			'nom'=>'required',
			'service'=>'required',
			'email'=>'required',
			'phone'=>'required',
			'subject'=>'required',
			'message'=>'required'
		]);
		$data =[
			'nom'=>$req->nom,
			'service'=>$req->service,
			'email'=>$req->email,
			'phone'=>$req->phone,
			'company'=>$req->company,
			'subject'=>$req->subject,
			'message'=>$req->message
        ];
        
		$emails = ['damaniamine00@gmail.com'];
		Mail::send('frontend.mail.mail', array('data' => $data), function($message) use ($data, $emails){
			$message->from($data['email'],$data['nom']);
			$message->to($emails);
			$message->subject($data['subject']);
		});
		return response(['message' => 'Merci pour votre intérêt. Nous avons bien reçu votre demande.', 'alert' => 'success'],200);
	}
}