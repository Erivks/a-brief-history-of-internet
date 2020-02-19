<?php

namespace App\Controllers;

/*
* Class for management access of pages
*
* @author Erick O. dos Santos
* @access public
*/
class WebController 
{
    /*
    * Methods for return the homepage website
    *
    * @param Array $data
    * @return void
    */
    public function index($data)
    {
        var_dump($data);
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