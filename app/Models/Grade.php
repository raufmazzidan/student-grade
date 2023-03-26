<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Grade extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'score_quiz', 'score_assignment', 'score_absence', 'score_practice', 'score_exam', 'grade_quiz', 'grade_assignment', 'grade_absence', 'grade_practice', 'grade_exam'];

  public static function list()
  {
    return DB::table('grades')->get();
  }

  public static function getTotalGrade()
  {

    $data = DB::table('grades')->get();

    $x = [
      [
        'name' => 'A',
        'data' => [0, 0, 0, 0, 0]
      ],
      [
        'name' => 'B',
        'data' => [0, 0, 0, 0, 0]
      ],
      [
        'name' => 'C',
        'data' => [0, 0, 0, 0, 0]
      ],
      [
        'name' => 'D',
        'data' => [0, 0, 0, 0, 0]
      ]
    ];

    foreach ($data as $d) {
      if ($d->grade_quiz === 'A') {
        $x[0]['data'][0] = $x[0]['data'][0] + 1;
      } elseif ($d->grade_quiz === 'B') {
        $x[1]['data'][0] = $x[1]['data'][0] + 1;
      } elseif ($d->grade_quiz === 'C') {
        $x[2]['data'][0] = $x[2]['data'][0] + 1;
      } elseif ($d->grade_quiz === 'D') {
        $x[3]['data'][0] = $x[3]['data'][0] + 1;
      }

      if ($d->grade_assignment === 'A') {
        $x[0]['data'][1] = $x[0]['data'][1] + 1;
      } elseif ($d->grade_assignment === 'B') {
        $x[1]['data'][1] = $x[1]['data'][1] + 1;
      } elseif ($d->grade_assignment === 'C') {
        $x[2]['data'][1] = $x[2]['data'][1] + 1;
      } elseif ($d->grade_assignment === 'D') {
        $x[3]['data'][1] = $x[3]['data'][1] + 1;
      }

      if ($d->grade_absence === 'A') {
        $x[0]['data'][2] = $x[0]['data'][2] + 1;
      } elseif ($d->grade_absence === 'B') {
        $x[1]['data'][2] = $x[1]['data'][2] + 1;
      } elseif ($d->grade_absence === 'C') {
        $x[2]['data'][2] = $x[2]['data'][2] + 1;
      } elseif ($d->grade_absence === 'D') {
        $x[3]['data'][2] = $x[3]['data'][2] + 1;
      }

      if ($d->grade_practice === 'A') {
        $x[0]['data'][3] = $x[0]['data'][3] + 1;
      } elseif ($d->grade_practice === 'B') {
        $x[1]['data'][3] = $x[1]['data'][3] + 1;
      } elseif ($d->grade_practice === 'C') {
        $x[2]['data'][3] = $x[2]['data'][3] + 1;
      } elseif ($d->grade_practice === 'D') {
        $x[3]['data'][3] = $x[3]['data'][3] + 1;
      }

      if ($d->grade_exam === 'A') {
        $x[0]['data'][4] = $x[0]['data'][4] + 1;
      } elseif ($d->grade_exam === 'B') {
        $x[1]['data'][4] = $x[1]['data'][4] + 1;
      } elseif ($d->grade_exam === 'C') {
        $x[2]['data'][4] = $x[2]['data'][4] + 1;
      } elseif ($d->grade_exam === 'D') {
        $x[3]['data'][4] = $x[3]['data'][4] + 1;
      }
    }

    return $x;
  }

  public static function getTotalAllGrade()
  {
    $data = DB::table('grades')->get();

    $res = [0, 0, 0, 0];
    $source = ['grade_quiz', 'grade_assignment', 'grade_absence', 'grade_practice', 'grade_exam'];

    foreach ($data as $d) {
      foreach ($source as $s) {
        $g = $d->$s;

        if ($g === 'A') {
          $res[0] = $res[0] + 1;
        } elseif ($g === 'B') {
          $res[1] = $res[1] + 1;
        } elseif ($g === 'C') {
          $res[2] = $res[2] + 1;
        } elseif ($g === 'D') {
          $res[3] = $res[3] + 1;
        }
      }
    }
    return $res;
  }
}