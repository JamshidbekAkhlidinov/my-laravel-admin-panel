<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UserController extends Component
{

    #[Layout('admin.layouts.main')]


    public function create(){

        dd("salom");

    }

    public function render()
    {
        $users = User::all();
        return view('admin.user.index',[
            'users' => $users
        ]);
    }
}
