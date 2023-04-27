const ctx = document.getElementById('investChart');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['1', '5', '10', '15', '20', '25', '30'],
    datasets: [{
      label: 'Projections for march',
      data: [100000000, 120000000, 90000000, 30000000, 90000000, 220342123, 150000000],
      borderColor: 'rgb(128,128,128)',
      borderWidth: 4,
      tension: 0.4,
      fill: {
          target: 'start',
          above: 'rgba(176,176,176,0.5607376739758403)',
          below: 'rgba(255, 255, 255)'
      }
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }, plugins: {
      title: {
        display: true,
        text: 'Financial estimations',
      }, 
      subtitle: {
        display: true,
        text: 'For the month of march',
        color: 'green'
      }
    },
  }
});