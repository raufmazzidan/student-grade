const options = {
  series: totalAllGrade,
  labels: ['A', 'B', 'C', 'D'],
  plotOptions: {
    pie: {
      expandOnClick: false,
      donut: {
        labels: {
          show: true,
          name: {
            show: true,
            fontSize: '16px',
            color: 'black',
            offsetY: -10,
            formatter: () => {
              return 'Total Grade';
            },
          },
          value: {
            show: true,
            fontSize: '32px',
            fontWeight: 'bold',
            color: undefined,
            offsetY: 16,
            formatter: () => {
              return totalAllGrade.reduce((a, b) => {
                return a + b;
              }, 0);
            },
          },
          total: {
            show: true,
            fontSize: '16px',
            color: 'black',
            offsetY: -10,
            formatter: () => {
              return totalAllGrade.reduce((a, b) => {
                return a + b;
              }, 0);
            },
          },
        },
      },
    },
  },
  chart: {
    type: 'donut',
    events: {
      markerClick: undefined,
    },
  },
  onItemHover: {
    highlightDataSeries: false,
  },
  dataLabels: {
    enabled: true,
    formatter: (value, { seriesIndex }) => {
      return totalAllGrade[seriesIndex];
    },
    dropShadow: {
      enabled: false,
    },
  },
  tooltip: {
    enabled: false,
  },
  legend: {
    position: 'bottom',
    onItemClick: {
      toggleDataSeries: false,
    },
    onItemHover: {
      highlightDataSeries: false,
    },
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
    formatter: (label) => {
      return `Total Nilai ${label}`;
    },
  },
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200,
        },
        legend: {
          position: 'bottom',
        },
      },
    },
  ],
};

const chart = new ApexCharts(document.querySelector('#chart-total-all-grade'), options);
chart.render();
