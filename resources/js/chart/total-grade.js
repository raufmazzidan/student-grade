console.log;
const options = {
  series: totalGrade,
  chart: {
    type: 'bar',
    height: 350,
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded',
    },
  },
  dataLabels: {
    enabled: false,
  },
  yaxis: {
    labels: {
      formatter: (val) => val,
    },
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent'],
  },
  xaxis: {
    categories: ['Kuis', 'Tugas', 'Absensi', 'Praktek', 'UAS'],
  },
  fill: {
    opacity: 1,
  },
  tooltip: {
    x: {
      formatter: (val) => `Nilai ${val}`,
    },
    y: {
      title: {
        formatter: (val) => `Total Nilai ${val} = `,
      },
    },
  },
  legend: {
    position: 'bottom',
    markers: {
      width: 12,
      height: 12,
      strokeWidth: 0,
      strokeColor: '#fff',
      radius: 0,
      fontSize: '14px',
      fontFamily: 'sans-serift',
      fontWeight: 400,
    },
  },
};

console.log;
const chart = new ApexCharts(document.querySelector('#chart-total-grade'), options);
chart.render();
