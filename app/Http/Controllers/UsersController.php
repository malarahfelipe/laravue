<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller {

  public function storeUser(Request $request) {
    $user = new Users();
    $user->uid = $request->uid;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();
    return $user;
  }

  public function getUserByUid(Request $request, $uid) {
    $user = Users::where('uid',$uid)->first();
    return $user;
  }

}
