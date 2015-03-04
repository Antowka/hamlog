<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 3/4/15
 * Time: 1:10 AM
 */

class LogController extends BaseController {

    private $logModel = null;

    function __construct() {
        $this->logModel = new LogModel();
    }

    /**
     * Create new qso
     */
    public function postAdd(){
        $this->logModel->user_id    = Auth::id();
        $this->logModel->callsign   = Input::get('callsign');
        $this->logModel->frequency  = Input::get('freq');
        $this->logModel->qth        = Input::get('qth');
        $this->logModel->comment    = Input::get('comment');
        $this->logModel->date   = Input::get('date');
        $this->logModel->save();
    }

    public function edit(){

    }

    public function remove(){

    }

}