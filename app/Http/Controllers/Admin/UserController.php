<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        $users = User::paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso');
    }

    public function edit(string $id)
    {
        // Formas de buscar pelo ID
        // $user = User::where('id','=',$id)->first();
        // $user = User::where('id',$id)->first(); // ->firstOrFail();
        if(!$user = User::find($id)){
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado');
        }

        return view('admin.users.edit', compact('user'));
        
    }

    public function update(UpdateUserRequest $request, string $id)
    {
        if(!$user = User::find($id)){
            return back()->with('message', 'Usuário não encontrado');
        }

        $data = $request->only('name', 'email');
        // Se o password estiver preenchido ele vai ser criptografado
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }
        // dd($data);
        $user->update($data);

        return redirect()->route('users.index')->with('success', 'Usuário editado com sucesso');
    }
}
