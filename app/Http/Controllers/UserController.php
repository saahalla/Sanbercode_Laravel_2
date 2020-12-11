<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // use Query Builder
        // $users = DB::table('users')->get();
        
        // Use Model Eloquent
        $users = User::all();
        // dd($users);
        return view('users/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if($request->role == "admin"){
            $role = "097af317-b977-4e1f-a9e3-3bd36931bf43";
        }else{
            $role = "2060b2bc-a779-4a62-ac56-4a06734212ac";
        }

        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "password" => 'required'
        ]);
        // Use Query Builder

        // DB::table('users')->insert([
        //     "id" => "12121212121",
        //     "name" => $request["name"],
        //     "email" => $request["email"],
        //     "password" => $request["password"],
        //     "role_id" => $role
        // ]);
        
        // Use Eloquent
        // $user = new User;
        // $user->name = $request["name"];
        // $user->email = $request["email"];
        // $user->password = $request["password"];
        // $user->role_id = $role;
        // $user->save();
        
        // Use Mass Assignment
        $user = User::create([
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => $request["password"],
            "role_id" => $role
        ]);
        // dd($user);

        return redirect('/users')->with('success', 'User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // use Query Builder
        $user = DB::table('users')->where('id', $id)->first();

        // use Model Eloquent
        $user = User::find($id);

        // dd($user);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Query Builder
        // $user = DB::table('users')->where('id', $id)->first();
        
        // use Model Eloquent
        $user = User::find($id);

        return view('users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "password" => 'required'
        ]);
        
        // $query = DB::table('users')
        //             ->where('id', $id)
        //             ->update([
        //                 "name" => $request["name"],
        //                 "email" => $request["email"],
        //                 "password" => $request["password"],
        //             ]);
        
        // Model
        $user = User::where('id', $id)->update([
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => $request["password"]
        ]);

        return redirect('/users')->with('success', 'Berhasil Update User');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Query Builder
        // $query = DB::table('users')->where('id', $id)->delete();

        // Model Eloquent
        User::destroy($id);


        return redirect('/users')->with('success', 'Berhasil Delete User');

    }
}
