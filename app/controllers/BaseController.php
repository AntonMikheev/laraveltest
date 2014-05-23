<?php

class BaseController extends Controller {

    function __construct() {
        $islogin = Session::get('islogin');
        if(isset($islogin)&&!empty($islogin)) {
            $url = 'islogin';
            $method = "GET";
            $request_data =array('islogin' => $islogin);
            $json = json_encode($request_data);
            $response = UserController::unit($url, $method, $json);
            if(!$response['success']){
                UserController::userLogout();
            }
        }
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
