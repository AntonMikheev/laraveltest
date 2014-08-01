<?php

class UserController extends BaseController {

    protected static function unit( $url, $method,$json=NULL) {
        $path= Config::get('curl.path_to_userapi');
        $ch = curl_init("$path" .$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        return json_decode($response,true);
    }

    public static function viewFormRegistration(){
        return View::make('RegistrForm');
    }

    public function curlApiAddUser() {

        $username = Input::get('name');
        $email = Input::get('email');
        $password = Input::get('password');
        $acceptpassword = Input::get('acceptpassword');
        $request_data = array();
        if($password === $acceptpassword){
            if (isset($username)&&isset($email)&&isset($password)) {
                $request_data['name'] = $username;
                $request_data['email'] = $email;
                $request_data['password'] = $password;

                $json = json_encode($request_data);
                $url = 'registration';
                $method = "POST";
                $response = UserController::unit($url, $method, $json);
                return View::make('SuccessAddUser', $response);
            }
            else {
                return Redirect::route('viewregistrform');
            }
        }
    }

    public function userLoginForm() {
        return View::make('UserLoginForm');
    }

    public function curlApiLoginUser() {

        $email =Input::get('email');
        $password =Input::get('password');
        $logintime = Input::get('rememberme');
        if (isset($email)&&isset($password)) {
            $request_data['email'] = $email;
            $request_data['password'] = $password;
            $request_data['logintime'] = $logintime;
            $json = json_encode($request_data);
            $url = 'userlogin';
            $method = "POST";
            $response = UserController::unit($url, $method, $json);
            Session::put('islogin', $response['islogin']);
            Session::put('name', $response['name']);
            Session::put('permission', $response['permission']);
            return Redirect::route('reviews');
        }
        else {
            return Redirect::route('userloginform');
        }
    }

    public static function userLogout(){
//        Session::forget('islogin');
        $url = 'userlogout';
        $method = "GET";
        $request_data =array('islogin' => Session::get('islogin'));
        $json = json_encode($request_data);
        $response = UserController::unit($url, $method, $json);
        Session::forget('islogin');
        Session::forget('name');
        return Redirect::back();
    }
}