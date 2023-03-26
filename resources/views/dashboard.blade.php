@extends('layout/main')

@section('app')
<section>
  <div class="flex items-center justify-between h-10">
    <div class="flex items-center gap-2 text-lg">
      <a href="/" class="text-purple font-semibold hover:underline">Dashboard</a>
    </div>
    <a href="/input-nilai" class="px-6 w-fit bg-purple py-3 text-xs text-white uppercase font-bold rounded">
      Input Nilai
    </a>
  </div>
  <div class="grid grid-cols-4 grid-flow-row gap-4 mt-10">
    <div class="p-4 border border-grey col-span-2">
      <div class="border-b border-purple pb-4 mb-4">Total Sebaran Grade</div>
      <div id="chart-total-grade"></div>
    </div>
    <div class="p-4 border border-grey col-span-2">
      <div class="border-b border-purple pb-4 mb-4">Total All Grade</div>
      <div id="chart-total-all-grade"></div>
    </div>
    <div class="p-4 border border-grey col-span-4">
      <div class="border-b border-purple pb-4 mb-4">List Nilai</div>
      <table class="w-full">
        <thead>
          <tr>
            <td class="w-10" rowspan="2">No.</td>
            <td rowspan="2">Nama</td>
            <td class="text-center" colspan="5">Nilai</td>
            <td class="text-center" colspan="2" rowspan="2">Action</td>
          </tr>
          <tr>
            <td class="text-center w-32">Kuis</td>
            <td class="text-center w-32">Tugas</td>
            <td class="text-center w-32">Absensi</td>
            <td class="text-center w-32">Praktik</td>
            <td class="text-center w-32">UAS</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($list_grade as $index => $g)
          <tr>

            <td>
              {{ $index + 1 }}
            </td>
            <td>{{ $g->name }}</td>
            <td class="text-center">{{ $g->score_quiz }} ({{ $g->grade_quiz }})</td>
            <td class="text-center">{{ $g->score_assignment }} ({{ $g->grade_assignment }})</td>
            <td class="text-center">{{ $g->score_absence }} ({{ $g->grade_absence }})</td>
            <td class="text-center">{{ $g->score_practice }} ({{ $g->grade_practice }})</td>
            <td class="text-center">{{ $g->score_exam }} ({{ $g->grade_exam }})</td>
            <td class="text-center">
              <form method="post" action="/input-nilai/{{ $g->id }}">
                @method('delete')
                @csrf
                <button class="text-red" onclick="confirm('are you sure?')">
                  <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  const totalGrade = {!! json_encode($total_grade) !!};
  const totalAllGrade = {!! json_encode($total_all_grade) !!};
</script>
@vite('resources/js/chart/total-grade.js')
@vite('resources/js/chart/total-all-grade.js')
@endsection