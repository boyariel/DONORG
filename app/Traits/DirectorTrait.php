<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use App\Models\Director;


trait DirectorTrait {

    public function director_index()
    {

        return \view('director.index');
    }

    public function director_store(Request $request)
    {

        $request['password'] = bcrypt($request['password']);

        $director = Director::create($request->all());
        return response()->json([
            'data' => $director
        ], 200);

    }

    public function update_director(Request $request)
    {
    if (isset($request['password']) && !empty($request['password'])) {
      $request['password'] = bcrypt($request['password']);
    }else{
      unset($request['password']);
    }

    Director::find($request->id)->update($request->all());
    return response()->json(['message' => 'Great!'], 200);

     }

  public function update_director_delete(Request $request)
  {

    Director::onlyTrashed()->find($request->id)->restore();

    return response()->json(['message' => 'Great!'], 200);
  }

  public function director_delete(Request $request){
  	Director::findOrFail($request->id)->delete();
  	return response()->json(['message' => 'Great!'], 200);
  }

  function get_Director(Request $request){
  	$Director = Director::findOrFail($request->id);

  	return response()->json([
  		'data' => $Director
  	]);
  }

   function get_directors(Request $request){
        $Directors = (isset($request->deleted) ? Director::onlyTrashed()->get() : Director::get() );
        return response()->json([
            'data' => $Directors
        ]);
    }

    function get_directors_delete(Request $request){

      $directors_delete = Director::onlyTrashed()->get();

      return response()->json([
        'data' => $directors_delete
      ]);
    }
}
