<?php namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\User;
	use Validator;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	// by prem kumar singh @ 2015/10/29
	public function contact(Request $request){
		if($request['submit']){
			// multiple recipients
			$to  = 'premsingh57@gmail.com' . ', '; // note the comma
			$to .= 'info@omnitextsolution.com';

			// subject
			$subject = 'Omni Text Solution Contact';

			// message
			$message = "
			<html>
			<head>
			  <title>Omni Text Solution Contact</title>
			</head>
			<body>
			  
			  <table>
			    
			    <tr>
			      <td><b>Name:</b></td><td>{$request['fName']} {$request['lName']}</td>
			    </tr>
			    <tr>
			      <td><b>Email:</b></td><td>{$request['email']}</td>
			    </tr>
			    <tr>
			      <td><b>Message:</b></td><td>{$request['message']}</td>
			    </tr>
			  </table>
			</body>
			</html>
			";

			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			 $headers .= "From: {$request['email']}" . "\r\n";
			mail($to, $subject, $message, $headers);
			return view('contact')->with('sent',1);
		}
		return view('contact')->with('sent',0);
	}
	public function register(){
		return view('auth.register');
	}
	public function create(Request $data)
	{
		$validator = Validator::make($data->all(), [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);

		if ($validator->fails())
		{
			$this->throwValidationException(
				$data, $validator
			);
		}
		$user = new User;
		$activation_code = str_random(60) . $data['email'];
		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->password = bcrypt($data['password']);
		$user->how_know = $data['how_know'];
		$user->activation_code = $activation_code;
		if($user->save()){
			$to  = $data['email'];

			// subject
			$subject = 'Verification Required';

			// message

			$message = "
				<div style='line-height:1'>
					<div style='width:700px;margin:0 auto;margin-top:20px;padding:0px;background:#f5f5f5;border:1px solid #d2d2d2;border-radius:5px;font-family:Arial,Helvetica,sans-serif'>
					<div style='width:700px;margin:0px;padding:20px 0px 20px 0px;background:url(https://ci4.googleusercontent.com/proxy/U9DVvzyQQifr6SPalG_Od_DoppU3VoTGQ_PsL0zGu6CNvmYzsnGQ6kaGbuRdwluMALk7IZCWqMOxM-XtCO772qA7_Zqx=s0-d-e1-ft#{{url('images/logo.png')}}) top left repeat;border-radius:5px 5px 0px 0px;text-align:center'><img src='{{url('images/logo.png')}}' ></div>
					    <div style='width:660px;margin:10px 0px 0px 0px;padding:20px;font-size:12px;color:#262626;line-height:18px'>
					    	<p>Dear  <a href='mailto:premsingh57@gmail.com' target='_blank'>premsingh57@gmail.com</a>,</p>
					        <p>You are receiving this email because you are requested to  create new account on Omni Text Solution. Please click on the link below to complete your confirmation.</p>

							<div style='text-align:center;padding:10px 0px'><a style='font-size:14px;font-weight:bold;color:#fff;background:#2dcc70;text-decoration:none;border-radius:5px;padding:8px 15px' target='_blank'>Confirm</a></div>

							<p>If you think that you shouldn't have received this email, you can safely ignore it.</p>

							<p>Thank you,</p>
							<p>Omni Text Solution</p><div></div><div >
					    	
					    </div></div></div>
				</div>
			";
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			 $headers .= "From: donotreply@omnitext.com" . "\r\n";
			mail($to, $subject, $message, $headers);

			\Session::flash('success_message',"Activation link is send to {$data['email']}. Please activite your account");
			return view('auth.register');
		}
		
	}
	
	

}
