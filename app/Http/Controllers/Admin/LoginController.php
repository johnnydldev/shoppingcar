<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class LoginController extends Controller
{
    //use AuthenticatesUsers; //Se agrega este Trait de laravel el cual proveela autenticación de usuarios
/**
* Where to redirect admins after login.
*
* @var string
*/
protected $redirectTo = '/admin'; //define a donde el usuario admin será redirigido después del login exitoso
/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
$this->middleware('guest:admin')->except('logout'); //Se usa el middleware guest para admin dentro delconstructor
}
/**
* @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
*/
public function showLoginForm()
{
return view('admin.auth.login');//Envia la vista del login
}

/**
 * @param Request $request
 * @return \Illuminate\Http\RedirectResponse
 * @throws \Illuminate\Validation\ValidationException
 */
public function login(Request $request)
{
$this->validate($request, [
'email' => 'required|email',
'password' => 'required|min:6'
]);
if (Auth::guard('admin')->attempt([
'email' => $request->email,
'password' => $request->password
], $request->get('remember'))) {
return redirect()->intended(route('admin.dashboard'));
}
return back()->withInput($request->only('email', 'remember'));
}


/**
 * @param Request $request
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
public function logout(Request $request)
{
Auth::guard('admin')->logout();
$request->session()->invalidate();
return redirect()->route('admin.login');
}

}
