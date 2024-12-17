<?php

namespace Database\Factories\Modules\Users\Models;

use App\Modules\Users\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory {
    protected $model = User::class;

    public function definition() {
        return [
            'name' => 'admin',
            'password' => bcrypt('admin'),
        ];
    }
}