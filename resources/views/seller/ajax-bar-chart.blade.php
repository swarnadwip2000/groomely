<canvas id="sellerChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    new Chart(document.getElementById("sellerChart"), {

        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ],
            datasets: [{
                label: 'Transaction',
                data: [{{ $transaction['january'] }}, {{ $transaction['february'] }},
                    {{ $transaction['march'] }}, {{ $transaction['april'] }},
                    {{ $transaction['may'] }}, {{ $transaction['june'] }},
                    {{ $transaction['july'] }}, {{ $transaction['august'] }},
                    {{ $transaction['september'] }}, {{ $transaction['october'] }},
                    {{ $transaction['november'] }}, {{ $transaction['december'] }},
                ],
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
