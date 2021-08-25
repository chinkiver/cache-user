<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Http\Request;

class UserService
{
    public function stone(Request $request)
    {
        $user = new User();

        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->password = bcrypt($request->user_password);

        $user->save();
    }
}
