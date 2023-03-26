<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScoreController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('input-nilai', [
      'page' => 'Dashboard'
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */

  public function store(Request $request)
  {
    // return $request;
    $payload = $request->validate([
      'name' => 'required',
      'score_quiz' => 'numeric|min:0|max:100',
      'score_assignment' => 'numeric|min:0|max:100',
      'score_absence' => 'numeric|min:0|max:100',
      'score_practice' => 'numeric|min:0|max:100',
      'score_exam' => 'numeric|min:0|max:100'
    ]);

    function getGrade($score)
    {
      if ($score <= 65) {
        return 'D';
      } elseif ($score <= 75) {
        return 'C';
      } elseif ($score <= 85) {
        return 'B';
      } else {
        return 'A';
      }
    }

    $payload['grade_quiz'] = getGrade($payload['score_quiz']);
    $payload['grade_assignment'] = getGrade($payload['score_assignment']);
    $payload['grade_absence'] = getGrade($payload['score_absence']);
    $payload['grade_practice'] = getGrade($payload['score_practice']);
    $payload['grade_exam'] = getGrade($payload['score_exam']);

    Grade::create($payload);

    return redirect('/');
  }

  /**
   * Display the specified resource.
   */
  public function show(Grade $grade)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Grade $grade)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Grade $grade)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $d = Grade::find($id);
    $d->delete();
    return redirect('/');
  }
}