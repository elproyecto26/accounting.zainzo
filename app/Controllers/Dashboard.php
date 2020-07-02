<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
  public function index()
  {
    return view('dashboard/index', [
      'title' => [
        'page' => 'Dashboard | Zainco Accounting'
      ],
      'navbar' => [
        'active' => 'dashboard'
      ]
    ]);
  }
}