<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware([
           'auth',
            'privilege:Administrator',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('dashboard.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $validasi = User::create($input);

        if($validasi){
            Alert::success('Berhasil','Data user berhasil ditambah');
        }
        return redirect('/dashboard/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'user' => User::findOrFail($id),
        ];

        return view('dashboard.user.edit', $data);
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
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        
        if($request->input('password')) {
            $user_data = [
                'name' => $request->name,
                'role' => $request->role,
                'password' => bcrypt($request->password)
            ];
        }
        else{
            $user_data = [
                'name' => $request->name,
                'role' => $request->role
            ];
         }
        $user = User::findOrFail($id);
        $validasi = $user->update($user_data);
        if($validasi){
            Alert::success('Berhasil', 'Data user berhasil diubah');
        }
        return redirect('/dashboard/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $validasi = $user->delete($user);
        if($validasi){
            Alert::success('Berhasil', 'Data user berhasil dihapus');
        }
        return redirect('/dashboard/user');
    }
}
