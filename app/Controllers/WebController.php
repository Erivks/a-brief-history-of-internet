<?php

namespace App\Controllers;

use League\Plates\Engine;
use App\Models\Access;

/*
* Class for management access of pages
*
* @author Erick O. dos Santos
* @access public
*/
class WebController 
{
    public $template;

    /*
    * Method construct for create a template and set template attribute
    *
    * @return void
    */
    public function __construct()
    {
        $this->template = new Engine('app/resources/views');
    }

    /*
    * Method for return the homepage website
    *
    * @param Array $data
    * @return void
    */
    public function index($data)
    {
        echo $this->template->render('index');
    }

    /*
    * Method for return about view
    *
    * @param Array $data
    * @return void
    */
    public function about($data)
    {
        echo $this->template->render('sobre');
    }

    /*
    * Method for return group view
    *
    * @return void
    */
    public function group()
    {
        echo $this->template->render('grupo');
    }

    /*
    * Method for return an access error code at page
    *
    * @param Array $data
    * @return void
    */
    public function showError($data)
    {
        echo $this->template->render('erro', ['errcode' => $data['errcode']]);
    }

    /*
    * Method for return egg view
    *
    * @return void
    */
    public function egg()
    {
        echo $this->template->render('egg');
    }
}