<?php

class LoginController extends BaseController {
    public function index() {
        $this->view('login/login');
    }
}