<?php

class LoginController extends BaseController {
    public function index() {
        $this->view('login/login');
    }

    public function profile(){
        $this->view('profile/profile');
    }
}