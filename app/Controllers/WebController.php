<?php

namespace App\Controllers;

use League\Plates\Engine;

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
    * Methods for return the homepage website
    *
    * @param Array $data
    * @return void
    */
    public function index($data)
    {
        echo $this->template->render('_layout');
    }

    /*
    * Methods for return an access error code at page
    *
    * @param Array $data
    * @return void
    */
    public function showError($data)
    {
        var_dump($data);
    }
}