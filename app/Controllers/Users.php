<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'courtadmin', 'name' => 'Alex Rivera', 'role' => 'Store manager'],
            ['username' => 'rallycashier', 'name' => 'Jamie Lim', 'role' => 'Cashier'],
            ['username' => 'paddletech', 'name' => 'Morgan Lee', 'role' => 'Gear specialist'],
            ['username' => 'servecrew', 'name' => 'Sam Dela Cruz', 'role' => 'Sales associate'],
            ['username' => 'matchdesk', 'name' => 'Taylor Navarro', 'role' => 'Shift lead'],
        ];

        return view('accounts/users', [
            'title' => 'User accounts',
            'users' => $users,
        ]);
    }
}
