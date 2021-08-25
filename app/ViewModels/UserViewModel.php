<?php

namespace App\ViewModels;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Spatie\ViewModels\ViewModel;

class UserViewModel extends ViewModel
{
    // 缓存有效时间
    protected $second;

    // 用户列表缓存Key
    protected $usersCacheKey = 'users';

    public function __construct($second)
    {
        $this->second = $second;
    }

    public function users()
    {
        return Cache::remember($this->usersCacheKey, $this->second, function () {
            return User::all();
        });
    }
}
