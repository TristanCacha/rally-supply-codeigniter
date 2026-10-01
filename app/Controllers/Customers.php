<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['name' => 'Mika Reyes', 'email' => 'mika.reyes@example.test', 'phone' => '+63 917 204 1180'],
            ['name' => 'Andre Santos', 'email' => 'andre.santos@example.test', 'phone' => '+63 918 315 2291'],
            ['name' => 'Bianca Cruz', 'email' => 'bianca.cruz@example.test', 'phone' => '+63 919 426 3302'],
            ['name' => 'Paolo Mendoza', 'email' => 'paolo.mendoza@example.test', 'phone' => '+63 920 537 4413'],
            ['name' => 'Toni Garcia', 'email' => 'toni.garcia@example.test', 'phone' => '+63 921 648 5524'],
        ];

        return view('accounts/customers', [
            'title' => 'Customer accounts',
            'customers' => $customers,
        ]);
    }
}
