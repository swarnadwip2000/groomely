<html>
<head>
    <title>Appointment Details</title>
    
</head>
<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body>
    <div class="">
        <img src="{{public_path('frontend_assets/images/black2.jpg')}}" style="width: 120px; height: 80px; align-items: center; padding: 5px; position: relative;">
       
        <h3>Transaction Details:</h3>
        @if($transactions->count() > 0)
        <table style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $appointment)
                <tr>
                    <td align="center">{{$appointment['name']}}</td>
                    <td align="center">{{$appointment['email']}}</td>
                    <td align="center">{{$appointment['phone']}}</td>
                    <td align="center">{{date('d M, Y', strtotime($appointment['booking_date']))}}</td>
                    <td align="center">${{$appointment['amount']}}</td>                                                                       
                </tr>
                @endforeach
                <tr>
                    <td colspan="5," align="right">Total: ${{$sum}}</td>
                </tr>
            </tbody>
        </table>
        @else
        <h5>No Transaction Found...</h5>
        @endif
    
    </div>
    
</body>
</html>