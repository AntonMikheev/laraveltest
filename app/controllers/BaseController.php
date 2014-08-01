<?php

class BaseController extends Controller {

//    function __construct() {
//
//        $resp = BaseController::routeName();
//        $islogin = Session::get('islogin');
//        if(isset($islogin)&&!empty($islogin)) {
//            $url = 'islogin';
//            $method = "GET";
//            $request_data =array('islogin' => $islogin);
//            $json = json_encode($request_data);
//            $response = UserController::unit($url, $method, $json);
//            if(!$response['success']){
//                UserController::userLogout();
//                $this->beforeFilter(function() {
//                    return Redirect::route('home');
//                });
//            }
//        } elseif($resp){
//            var_dump(32323);
//            $this->beforeFilter(function() {
//                return Redirect::route('home');
//            });
//        }
//    }

    protected function routeName()
    {
        $flag = true;
        $routeName = Route::currentRouteName();
        $routes = array('viewregistrform', 'registration', 'userloginform', 'userlogin', 'home');
        foreach($routes as $route){
            if($route == $routeName){
                $flag = false;
            }
        }
        return $flag;
    }
    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */

    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

}
