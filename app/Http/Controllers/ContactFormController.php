<?php
namespace App\Http\Controllers;


use App\Mail\FowardContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class ContactFormController extends Controller {

  public function send(Request $request)
  {
//    validate
    $rules = [
      'name' => 'required|max:50',
      'message' => 'required|max:400',
      'subject' => 'required|max:50',
      'email' => 'email|required|max:50',
    ];
    $this->validate($request,$rules);

//    send
    Mail::to('test@gmail.com')
      ->send(new FowardContactMessage($request));
    Session::flash('success','The message was send');
    return redirect('/#contact');
  }
}
