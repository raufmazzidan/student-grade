@extends('layout/main')

@section('app')
<form method="post" action="/input-nilai">
  @csrf
  <section>
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-2 text-lg">
        <a href="/" class="text-purple font-semibold hover:underline">Dashboard</a>
        <span>/</span>
        <span class="text-grey-dark">Input Nilai</span>
      </div>
      <button type="submit" class="px-6 w-fit bg-purple py-3 text-xs text-white uppercase font-bold rounded">
        Submit
      </button>
    </div>
    <div class="grid grid-cols-5 gap-4 mt-10">
      <div class="form-container col-span-2">
        <label @error('name') class="label-error" @enderror for="name">Nama Lengkap</label>
        <input @error('name') class="input-error" @enderror type="text" id="name" name="name" value={{old('name')}}>
        @error('name')
        <span class="text-xs text-red mt-1">{{$message}}</span>
        @enderror
      </div>
      <div class="col-span-3"></div>
      <div class="form-container">
        <label @error('score_quiz') class="label-error" @enderror for="score_quiz">Nilai Kuis</label>
        <input @error('score_quiz') class="input-error" @enderror type="number" id="score_quiz" name="score_quiz"
          value={{old('score_quiz')}}>
        @error('score_quiz')
        <span class="text-xs text-red mt-1">{{$message}}</span>
        @enderror
      </div>
      <div class="form-container">
        <label @error('score_quiz') class="label-error" @enderror for="score_quiz">Nilai Tugas</label>
        <input @error('score_quiz') class="input-error" @enderror type="number" id="score_assignment"
          name="score_assignment" value={{old('score_assignment')}}>
        @error('score_quiz')
        <span class="text-xs text-red mt-1">{{$message}}</span>
        @enderror
      </div>
      <div class="form-container">
        <label @error('score_absence') class="label-error" @enderror for="score_absence">Nilai Absensi</label>
        <input @error('score_absence') class="input-error" @enderror type="number" id="score_absence"
          name="score_absence" value={{old('score_absence')}}>
        @error('score_absence')
        <span class="text-xs text-red mt-1">{{$message}}</span>
        @enderror
      </div>
      <div class="form-container">
        <label @error('score_practice') class="label-error" @enderror for="score_practice">Nilai Praktik</label>
        <input @error('score_practice') class="input-error" @enderror type="number" id="score_practice"
          name="score_practice" value={{old('score_practice')}}>
        @error('score_practice')
        <span class="text-xs text-red mt-1">{{$message}}</span>
        @enderror
      </div>
      <div class="form-container">
        <label @error('score_exam') class="label-error" @enderror for="score_exam">Nilai UAS</label>
        <input @error('score_exam') class="input-error" @enderror type="number" id="score_exam" name="score_exam"
          value={{old('score_exam')}}>
        @error('score_exam')
        <span class="text-xs text-red mt-1">{{$message}}</span>
        @enderror
      </div>
    </div>
  </section>
</form>

@vite('resources/js/dashboard/grade.js')
@endsection