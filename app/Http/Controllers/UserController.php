<?php
namespace App\Http\Controllers;
use App\Models\User as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use View;
use Session;
use Redirect;
use App\Service\SampleServiceInterface;

class UserController extends Controller
{
    
    /*
     *  Example of Service Provider
     * 
     */
     public function testsp(SampleServiceInterface $sample_service)
     {
        $sample_service->getData();
     }
    
    public function login(Request $request){
         Log::info('Login page loaded... ');
          
        return View::make('user.login');
    }
    public function dologin(Request $request){
       if(\Request::isMethod('post')){
           Log::info("POST data :: ".json_encode($request->all()) );
           $userData = array(
                'email'=> $request->email,
                'password'=> $request->password
           );
           if(Auth::attempt($userData)){
               return Redirect::to('dashboard');
           } else {
                return Redirect::to('login')->withErrors(['Login failed']);   
           }
           exit;
       }
    }
    
    public function dashboard(){
        return View::make('user.dashboard');
    }
    
    public function register(Request $request){
        Log::info('Register page loaded...');
        return View::make('user.register');
    }
    public function createaccount(Request $request){
        Log::info('post data :: ',$request->all());
//          dd($request->all());
        if (\Request::isMethod('post')){
            if($request->password != $request->cpassword){
                return Redirect::back()->withErrors(['Password mismatch']);
            }
            $user = new User();
            $user->username = $request->username;
            $user->password =  Hash::make($request->password);
            $user->email = $request->email;
            if($user->save()){
                Session::flash('message', 'Account created successfully!'); 
                return Redirect::back();
            }
        }
    }
    public function profile(){
         $viewDataArr['userData'] = json_decode(Auth::user(),true); 
        return View::make('user.profile')->with($viewDataArr);
    }
    public function updateprofile(Request $request){
        Log::info('post data :: ',$request->all(), ['method' => 'updateprofile']);
        $user = User::find($request->user_id);
        $user->username = $request->username;
        if($request->password != '') $user->password =  Hash::make($request->password);
        if($user->save()){
            Session::flash('message', 'Details are updated successfully!'); 
            return Redirect::back();
        }
    }
    
    public function logout(Request $request){
        $request->session()->flush();
        return Redirect::to('login');
    }
    public function index(Request $request){
        return View::make('user.index', ['name' => 'Index Page']);
    } 
    public function getall(){
        $users = User::all();
        foreach ($users as $user) {
            echo $user->username;
        }
    }
}