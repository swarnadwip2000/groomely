<canvas id="myChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
new Chart(document.getElementById("myChart"),{

    type: 'bar',
    data: {
      labels: [@foreach($users as $user) '{{$user->name}}',  @endforeach],
      datasets: [{
        label: 'Transaction',
        data: [@foreach($users as $user) {{$user->totalAmountByYear($user['id'], $years)}}, @endforeach],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  
});
</script>