<?php
/**
* VideoGamer v3 API
 *
 * @author Adam McCann (@adamvideogamer)
 */
namespace App\Http\Controllers;

class TestController extends Controller
{
    public function get()
    {
        dd('getting something');
    }

    public function update()
    {
        dd('updating something');
    }
}
