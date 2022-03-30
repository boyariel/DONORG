<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use App\User;


trait UserTrait {

    public function user_index()
    {
        $roles = Role::get();
        return \view('user.index', compact('roles'));
    }

    public function store_user(Request $request)
    {

        $request['password'] = bcrypt($request['password']);

        $user = User::create($request->all());
        return response()->json([
            'data' => $user
        ], 200);

    }

    public function update_user(Request $request)
    {
    if (isset($request['password']) && !empty($request['password'])) {
      $request['password'] = bcrypt($request['password']);
    }else{
      unset($request['password']);
    }

    User::find($request->id)->update($request->all());
    return response()->json(['message' => 'Great!'], 200);

    }

    function get_users(Request $request){
        $users = (isset($request->deleted) ? User::onlyTrashed()->get() : User::get() );
        return response()->json([
            'data' => $users
        ]);
    }
    function get_user(Request $request){
        $user = User::findOrFail($request->id);

        return response()->json([
            'data' => $user
        ]);
    }


    public function update_user_delete(Request $request)
    {

        User::onlyTrashed()->find($request->id)->restore();

        return response()->json(['message' => 'Great!'], 200);
    }

    public function user_delete(Request $request){
        User::findOrFail($request->id)->delete();
        return response()->json(['message' => 'Great!'], 200);
    }


    function get_users_delete(Request $request){

      $users_delete = User::onlyTrashed()->get();

      return response()->json([
        'data' => $users_delete
      ]);
    }
}
