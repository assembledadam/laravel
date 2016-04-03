<?php
/**
* VideoGamer v3 API
 *
 * @author Adam McCann (@adamvideogamer)
 */
namespace App\Http\Controllers;

class TestController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        echo "Hello! You are calling the get() controller method.";
    }
}
