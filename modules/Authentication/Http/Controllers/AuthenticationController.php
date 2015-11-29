<?php namespace Modules\Authentication\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class AuthenticationController extends Controller {
	
	public function index()
	{
		return view('authentication::index');
	}
	public function register(){
		return view('authentication::register');
	}
	public function create(Request $data)
	{
		$validator = Validator::make($data->all(), [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'mobile' => 'required|min:13|max:13',
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
		$user->mobile = $data['mobile'];
		
		if($user->save()){
			
			$to  = $data['email'];

			// subject
			$subject = 'Verification Required';

			// message
			$message = "
				<div style='line-height:1'>
					<div style='width:700px;margin:0 auto;margin-top:20px;padding:0px;background:#f5f5f5;border:1px solid #d2d2d2;border-radius:5px;font-family:Arial,Helvetica,sans-serif'>
					
					    <div style='width:660px;margin:10px 0px 0px 0px;padding:20px;font-size:12px;color:#262626;line-height:18px'>
					    	<p>Dear  <a href='mailto:{$user->email}' target='_blank'>{$user->name}</a>,</p>
					        <p>Thank you very much for signing up with Omni Text Solution. Click the button below to confirm your account.</p>

							<div style='text-align:center;padding:10px 0px'><a href='".url("authentication/activate/".$activation_code)."' style='font-size:14px;font-weight:bold;color:#fff;background:#2dcc70;text-decoration:none;border-radius:5px;padding:8px 15px' target='_blank'>Confirm</a></div>

							<p>If you think that you shouldn't have received this email, you can safely ignore it.</p>

							<p>Thank you,</p>
							<p>Omni Text Solution</p><div></div><div >
					    	
					    </div></div></div>
				</div>
			";	
			// To send HTML mail, the Content-type header must be set
			//echo $message;
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From: verification@omnitext.com" . "\r\n";
			mail($to, $subject, $message, $headers);

			\Session::flash('success_message',"Activation link is send to {$data['email']}.Just to be sure, please check your spam folder and activate your account");
			return view('auth.register');
		}
		
	}
	public function activateAccount($code){
		if($user = User::where('activation_code',$code)->first()){
			if($user->active == 0){
				$user->active = 1;
				$user->save();
				\Session::flash('success_message',"Congratulation!! Your account is activeted with email {$user->email}. Please login to your account.");
				
			}
			else{
				\Session::flash('success_message'," Your account is already activeted with email {$user->email}. Please login to your account.");
			}
		}
		return view('authentication::login');

	}
	public function getLogin(){
		return view('authentication::login');
	}
	public function login(Request $request){
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'],'active' => 1]))
        {
            return redirect('');
        }
        else{
        	$request->flash();
        	return view('authentication::login')->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => 'These credentials do not match our records.',
					]);
        }
        
	}
	
}