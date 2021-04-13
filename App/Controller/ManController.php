<?php


namespace App\Controller;

use App\Database\Database;

class ManController
{
    private $con;
    public function __construct()
    {
        $this->con = new Database;
    }

    // Insert man data into man table
    public function insertData($post)
    {

    }

    // Fetch man records for show listing
    public function displayData()
    {

    }

    // Fetch single data for edit from man table
    public function displyaRecordById($id)
    {

    }

    // Update man data into man table
    public function updateRecord($postData)
    {


    }


    // Delete man data from man table
    public function deleteRecord($id)
    {
        
    }

}