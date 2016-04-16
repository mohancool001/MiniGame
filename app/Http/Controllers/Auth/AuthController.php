<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App;
use Auth;
use Redirect;
use Session;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'avatar' => 'max:490',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $pic="blob:http%3A//pasteboard.co/758539a0-5675-4341-a436-b8c093a45009";
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'avatar' => $pic,
            'password' => bcrypt($data['password']),           
        ]);
    }

    //Facebook Auth
    public function redirectAPI()
    {
        $fb = App::make('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');
        // Send an array of permissions to request
        $login_url = $fb->getLoginUrl(['email','public_profile']);

        // Obviously you'd do this in blade :)
        return redirect($login_url);
    }
    public function fbcallback()
    {
         $fb = App::make('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');
        // Obtain an access token.
        try {
            $token = $fb->getAccessTokenFromRedirect();
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }

        // Access token will be null if the user denied the request
        // or if someone just hit this URL outside of the OAuth flow.
        if (! $token) {
            // Get the redirect helper
            $helper = $fb->getRedirectLoginHelper();

            if (! $helper->getError()) {
                abort(403, 'Unauthorized action.');
            }

            // User denied the request
            dd(
                $helper->getError(),
                $helper->getErrorCode(),
                $helper->getErrorReason(),
                $helper->getErrorDescription()
            );
        }

        if (! $token->isLongLived()) {
            
            // OAuth 2.0 client handler
            $oauth_client = $fb->getOAuth2Client();

            // Extend the access token.
            try {
                $token = $oauth_client->getLongLivedAccessToken($token);
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                dd($e->getMessage());
            }
        }

        $fb->setDefaultAccessToken($token);
        Session::put('fb_user_access_token', (string) $token);

        // Get basic info on the user from Facebook.
        try {
            $response = $fb->get('/me?fields=id,name,email,picture');
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }

        // Convert the response to a `Facebook/GraphNodes/GraphUser` collection
        $facebook_user = $response->getGraphUser();
        //$user = App\User::createOrUpdateGraphNode($facebook_user);
        $userdec = json_decode($facebook_user);
        $pic = $userdec->picture->url;
        // Log the user into Laravel
        $authUser = $this->findOrCreateUser($userdec,$pic);
        Auth::login($authUser, true);

        return Redirect::to('home');
    }

    public function findOrCreateUser($nuser,$pic)
    {
        if ($authUser = User::where('email', $nuser->email)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $nuser->name,
            'email' => $nuser->email,
            'avatar' => $pic,
            'password'=> bcrypt("FBACCESS123"),
        ]);
    }
}
