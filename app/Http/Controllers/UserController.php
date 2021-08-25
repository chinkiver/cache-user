<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use App\ViewModels\UserViewModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $second = 300; // 5 分钟
    protected $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function index()
    {
        return (new UserViewModel($this->second))->view('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $this->service->stone($request);
        return redirect('users');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
