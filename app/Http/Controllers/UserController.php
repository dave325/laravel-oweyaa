<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $results = app('db')->select("SELECT * FROM test WHERE user='david'");
        return $results;
    }
}
?>