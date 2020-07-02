<?php

namespace App\Controllers;

class Journal extends BaseController
{
  public function index()
  {
    return view('journal/index', [
      'title' => [
        'page' => 'Jurnal Umum | Zainzo Accounting'
      ],
      'navbar' => [
        'active' => 'journal'
      ],
      'nav' => [
        'active' => 'index'
      ],
      'breadcrumb' => 'Halaman Utama'
    ]);
  }

  // --------------------------------------------------------

  public function data()
  {
    return view('journal/data', [
      'title' => [
        'page' => 'Data Jurnal Umum | Zainzo Accounting'
      ],
      'navbar' => [
        'active' => 'journal'
      ],
      'nav' => [
        'active' => 'data'
      ],
      'breadcrumb' => 'Halaman Utama'
    ]);
  }

  // --------------------------------------------------------

  public function entry()
  {
    return view('journal/entry', [
      'title' => [
        'page' => 'Entri Jurnal Umum | Zainzo Accounting'
      ],
      'navbar' => [
        'active' => 'journal'
      ],
      'nav' => [
        'active' => 'entry'
      ],
      'breadcrumb' => 'Halaman Utama'
    ]);
  }
}