<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 2/26/15
 * Time: 8:00 PM
 */


class UserController extends BaseController {

    /**
     * Метод авторизирует пользователя
     *
     * @return mixed
     */
    public function login(){
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password))){
            return Redirect::to('/')->with('success', 'You have been logged in');
        }else{
            return Redirect::to('/')->with('error', 'Login Failed');
        }
    }

    /**
     * Метод для разлогинивания пользователя
     *
     * @return mixed
     */
    public function logout(){
        Auth::logout();
        return Redirect::to('/')->with('success', 'You have successfully logged out');
    }

}