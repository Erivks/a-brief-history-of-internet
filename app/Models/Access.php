<?php

namespace App\Models;

use App\lib\ConnectionToDB;

/*
* Class for management and return data access from database
*
* @author Erick O. dos Santos
* @access public
*/
class AccessModel
{
    /*
    * Method for return a specific access from database by id
    *
    * @param string $id
    * @return Array[] App\Models\Access
    */
    public static function getAccessById($id)
    {
        
    }

    /*
    * Method for return all access from database
    *
    * @return App\Models\Access
    */
    public static function getAllAccess()
    {
        
    }

    /*
    * Method for return data access by site, month and year
    *
    * @param string $site
    * @param string $month
    * @param string $year
    * @return App\Models\Access
    */
    public function getAccess($site = null, $month = null, $year = null)
    {
        
    }

    /*
    * Method for store data access in database
    *
    * @return void
    */
    public function storeAccess()
    {

    }

    /*
    * Method for delete a specific data access in database by id
    *
    * @param string $id
    * @return void
    */
    public function deleteAccess($id)
    {

    }

    /*
    * Method for update a specific data access in database by id
    *
    * @param Array[] $data
    * @param string $id
    * @return void
    */
    public function updateAccess($id, $data)
    {

    }
}