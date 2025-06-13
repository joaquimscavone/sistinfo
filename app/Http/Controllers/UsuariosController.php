<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
       $total = User::count();
       $tecnicos = User::where('tecnico',true)->count();
       $admins = User::where('admin',true)->count();
       $usuarios = User::all();
       return view('usuarios',compact('total','tecnicos','admins','usuarios'));
   }

   public function changeAdmin(User $user){
     $user->admin = !$user->admin;
     $user->save();
     return redirect()->route('usuarios')->with('success',"$user->name Atualizado!");
   }
   public function changeTecnico(User $user){
     $user->tecnico = !$user->tecnico;
     $user->save();
     return redirect()->route('usuarios')->with('success',"$user->name Atualizado!");
   }

}
