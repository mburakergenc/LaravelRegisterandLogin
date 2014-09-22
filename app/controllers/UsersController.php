<?php
 
class UsersController extends BaseController {


	public function __construct() {
     $this->beforeFilter('csrf', array('on'=>'post'));
    $this->beforeFilter('auth', array('only'=>array('getDashboard')));

}

	 protected $layout = "layouts.main";

	 public function getRegister() {
	 	if (Auth::check())
{
    return Redirect::to('users/dashboard');
}	else{

    $this->layout->content = View::make('users.register');
}
}
	public function postCreate(){

		$validator = Validator::make(Input::all(), User::$rules);
		if($validator->passes()){

			//save user
			$user = new User;
    $user->firstname = Input::get('firstname');
    $user->lastname = Input::get('lastname');
    $user->email = Input::get('email');
    $user->password = Hash::make(Input::get('password'));
    $user->save();
 
    return Redirect::to('users/login')->with('message', '<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> Your registration completed succesfully!.
</div>	');
		}
		else{
			//display error messages

			 return Redirect::to('users/register')->with('message', '')->withErrors($validator)->withInput();
		}
	}

	public function getLogin(){
		if (Auth::check())
{
    return Redirect::to('users/dashboard');
}
else{
	$this->layout->content = View::make('users.login');
	}


	}

	public function getDashboard() {

		$this->layout->content = View::make('users.dashboard');
     
}

public function getLogout() {
    Auth::logout();
    return Redirect::to('users/login')->with('message', 'Your are now logged out!');
}

	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
    return Redirect::to('users/dashboard')->with('message', '<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> Now you are logged in.
</div>');
} else {
    return Redirect::to('users/login')
        ->with('message', '<div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> Your email/password combination was not correct.
</div>')

        ->withInput();
}


             
}
 
}

?>