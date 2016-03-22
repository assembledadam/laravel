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
        dbg('TestController::get() called');
    }
}
