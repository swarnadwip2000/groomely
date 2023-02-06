<canvas id="myChart2"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
new Chart(document.getElementById("myChart2"),{
type: 'line',
data: {
  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ],

            datasets: [
              {
                label: 'Customers',
                data: [{{ $customer['january'] }}, {{ $customer['february'] }},
                    {{ $customer['march'] }}, {{ $customer['april'] }},
                    {{ $customer['may'] }}, {{ $customer['june'] }},
                    {{ $customer['july'] }}, {{ $customer['august'] }},
                    {{ $customer['september'] }}, {{ $customer['october'] }},
                    {{ $customer['november'] }}, {{ $customer['december'] }},
                ],
                borderWidth: 1
              },

              {
                label: 'Barbers',
                data: [{{ $barber['january'] }}, {{ $barber['february'] }},
                    {{ $barber['march'] }}, {{ $barber['april'] }},
                    {{ $barber['may'] }}, {{ $barber['june'] }},
                    {{ $barber['july'] }}, {{ $barber['august'] }},
                    {{ $barber['september'] }}, {{ $barber['october'] }},
                    {{ $barber['november'] }}, {{ $barber['december'] }},
                ],
                borderWidth: 2
              }
          ] 
},
options: {
  scales: {
      y: {
        type: 'linear',
        display: true,
        position: 'left',
      },
      y1: {
        type: 'linear',
        display: true,
        position: 'right',

        // grid line settings
        grid: {
          drawOnChartArea: false, // only want the grid lines for one axis to show up
        },
      },
  }  
}

});
 
</script>
