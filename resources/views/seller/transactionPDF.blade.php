<html>
<head>
    <title>Transaction Details</title>
    
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
        <h4 style="margin:1; padding:0;">Seller Details:</h4> 
        <p> Name: {{Auth::user()->name}}</br>
            Shopname : {{Auth::user()->shop_name}}</br>
            Email: {{Auth::user()->email}}</p>
        <h3 style="margin:1; padding:1;">Customer Details:</h3>
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
                @foreach($transactions as $transaction)
                <tr>
                    <td align="center">{{$transaction['name']}}</td>
                    <td align="center">{{$transaction['email']}}</td>
                    <td align="center">{{$transaction['phone']}}</td>
                    <td align="center">{{date('d M, Y', strtotime($transaction['booking_date']))}}</td>
                    <td align="center">${{$transaction['amount']}}</td>                                                                       
                </tr>
                @endforeach
                <tr>
                    <td colspan="5" align="right">Total: ${{$sum}}</td>
                </tr>
            </tbody>
        </table>

        
      

        
    </div>
    
</body>
</html>