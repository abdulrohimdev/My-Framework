<?php
namespace App\Modules\Blog\Controllers;

use App\Library\Controller;
use App\Library\Response;

class About extends Controller{

    public function __construct(){
        $this->view_directory = 'Blog/Views';
    }

    public function index()
    {
        $this->view('tests',['hello' => 'oim']);
    }
}

?>