<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	public function about()
	{
		return view('pages.about');
	}
	public function service()
	{
		return view('pages.service');
	}
	public function whyus()
	{
		return view('pages.whyus');
	}
	public function howitwork()
	{
		return view('pages.howitwork');
	}
	public function faq()
	{
		return view('pages.faq');
	}
	public function contact()
	{
		return view('pages.contact');
	}
	public function order()
	{
		return view('pages.order');
	}
	public function price()
	{
		return view('pages.price');
	}

}
