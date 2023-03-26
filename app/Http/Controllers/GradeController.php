<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
  public function index()
  {
    return view('dashboard', [
      'page' => 'Dashboard',
      'list_grade' => Grade::list(),
      'total_grade' => Grade::getTotalGrade(),
      'total_all_grade' => Grade::getTotalAllGrade()
    ]);
  }
}