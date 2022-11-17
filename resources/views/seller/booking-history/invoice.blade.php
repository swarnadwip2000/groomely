<!DOCTYPE html>
<html>

<head>
    <title>Groomely</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/phosphor-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>
{{-- @dd($appointment) --}}

<body class="">
    <table width="800"
        style="width:800px; margin:0 auto; font-size: 16px;font-family: 'Poppins', sans-serif;border: 1px solid #f2f2f2; padding: 12px;">
        {{-- <thead>
            <tr>
                <th></th>
            </tr>
        </thead> --}}
        <tbody>
            <td>
                <table width="800" style="width:800px; margin:0 auto;">
                    <tbody>
                        <tr>
                            <td style="vertical-align:middle; padding: 15px; text-align: left;">
                                <font style="text-align: left; font-size:25px;color: #5719cc;font-weight: 600;"> #
                                    Invoice</font>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="800" style="width:800px; margin:0 auto;">
                    <tbody>
                        <tr>
                            <td style="vertical-align:middle; padding: 15px;">
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Invoice
                                    No. : ##{{ $appointment['id'] }}</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Invoice
                                    Date : {{ date('d M, Y', strtotime('today')) }}</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Barber
                                    Name : {{ $appointment['service']['user']['name'] }}</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Barber
                                    Email : {{ $appointment['service']['user']['email'] }}</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Barber
                                    Phone : {{ $appointment['service']['user']['phone'] }}</font>
                            </td>

                            <td style="vertical-align:middle; padding: 15px;">
                                <font style="color:#000; font-weight: 600; width:100%; display: inline-block;">Customer
                                    Details</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Name. :
                                    {{ $appointment['name'] }}</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Email :
                                    {{ $appointment['email'] }}</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Phone. :
                                    {{ $appointment['phone'] }}</font>
                            </td>
                        </tr>
                    </tbody>
                </table>




                <table width="800" style="width:800px; margin:0 auto;">
                    <tbody>
                        <tr>
                            <td style="vertical-align:middle; padding: 07px 15px;">
                                <font style=" font-size:20px;color: #5719cc;font-weight: 600;">Fare Details</font>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="800" style="width:800px; margin:0 auto;border:1px solid #f2f2f2;">
                    <tbody>
                        <tr style="background:#f6faff;">
                            <td
                                style="vertical-align:middle; padding: 07px 15px; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                <font style="color: #000; font-weight: 600; width: 100%; display: inline-block;">Service
                                    Name</font>
                            </td>
                            <td
                                style="vertical-align:middle; padding: 07px 15px; text-align: center; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                <font style="color: #000; font-weight: 600; width: 100%; display: inline-block;">Service
                                    Catgegory</font>
                            </td>
                            <td
                                style="vertical-align:middle; padding: 07px 15px; text-align: center; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                <font style="color: #000; font-weight: 600; width: 100%; display: inline-block;">Service
                                    Duration </font>
                            </td>
                            <td
                                style="vertical-align:middle; padding: 07px 15px; text-align: center; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                <font style="color: #000; font-weight: 600; width: 100%; display: inline-block;">Rate
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="vertical-align:middle; padding: 07px 15px; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                <font style="color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                    {{ $appointment['service']['name'] }}</font>
                            </td>
                            <td
                                style="vertical-align:middle; padding: 07px 15px;text-align: center; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                <font style="color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                    {{ $appointment['service']['category']['name'] }}</font>
                            </td>
                            <td
                                style="vertical-align:middle; padding: 07px 15px; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                <font style="color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                    {{ date('h', strtotime($appointment['service']['duration'])) }} hr
                                    {{ date('i', strtotime($appointment['service']['duration'])) }} mins</font>
                            </td>
                            <td
                                style="vertical-align:middle; padding: 07px 15px;text-align: center; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                <font style="color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                    {{ $appointment['service']['rate'] }}</font>
                            </td>
                        </tr>
                        @if (count($extraServices) > 0)
                            <tr>
                                <td style="vertical-align:middle; padding: 07px 15px; border-bottom: 1px solid #f2f2f2;"
                                    colspan="4">
                                    <font style=" font-size:18px;color: #464646;font-weight: 600;">Extra Services:
                                    </font>
                                </td>
                            </tr>
							@php
							$extraRate = 0;	
							@endphp
                            @foreach ($extraServices as $extraService)
							@php
								$extraRate += $extraService['service']['rate']
							@endphp
                                <tr>
                                    <td
                                        style="vertical-align:middle; padding: 07px 15px; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                        <font
                                            style="color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                            {{ $extraService['service']['name'] }}</font>
                                    </td>
                                    <td
                                        style="vertical-align:middle; padding: 07px 15px;text-align: center; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                        <font
                                            style="color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                            {{ $extraService['service']['category']['name'] }}</font>
                                    </td>
                                    <td
                                        style="vertical-align:middle; padding: 07px 15px; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                        <font
                                            style="color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                            {{ date('h', strtotime($extraService['service']['duration'])) }} hr
                                            {{ date('i', strtotime($extraService['service']['duration'])) }} mins
                                        </font>
                                    </td>
                                    <td
                                        style="vertical-align:middle; padding: 07px 15px;text-align: center; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;">
                                        <font
                                            style="color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                            {{ $extraService['service']['rate'] }}</font>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <table width="800" style="width:800px; margin:0 auto;border:1px solid #f2f2f2; margin-top: 25px;">
                    <tbody>

                        <tr style="background-color: linear-gradient(45deg, #2022e2, #7739d1) !important; background-repeat:no-repeat;">
                            <td style="vertical-align:middle; padding: 07px 15px; border-right:1px solid #f2f2f2;">
                                <font
                                    style=" font-size:16px;color: #7739d1;font-weight: 600; width:100%; display: inline-block;">
                                    Grand Total:</font>
                            </td>
                            <td style="vertical-align:middle; padding: 07px 15px;">
                                <font
                                    style=" font-size:16px;color: #2022e2;font-weight: 600; width:100%; display: inline-block;">
                                   @if (count($extraServices) > 0)
								   ${{ $appointment['service']['rate'] +  $extraRate }}
									@else
									${{ $appointment['service']['rate'] }}
								   @endif </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="800" style="width:800px; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td style="vertical-align:middle; border-bottom: 5px solid #000;padding-bottom: 15px;">
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                    *The credit, for GST charged by the Airline and included in the airfare, would be
                                    available against a separate GST invoice/eticket issued by the Airline.</font>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; border-bottom: 5px solid #000;padding-bottom: 15px;">
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - The amount received as donation will be used for the specified charitable causes.
                                    Groomely will donate the collected amount to Groomely Foundation (a public trust
                                    registered with charitable objects) or similar charitable organizations to help
                                    create a social impact</font>
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - The contributions once made will not be refunded or cancelled.</font>
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - You voluntarily choose to contribute to the social cause and by proceeding to
                                    donate the money, you do so at own risk and expressly waive any and all claims,
                                    rights of action and/or remedies (under law or otherwise) that you may have against
                                    Groomely arising out of or in connection with the aforesaid transaction.</font>
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - No certificate under section 80G of the Income Tax Act, 1961 will be issued.
                                </font>
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - By proceeding to donate the money, you understand and confirm that this donation
                                    is not from any foreign source as defined under Foreign Contribution Regulation Act,
                                    2010.</font>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="800" style="width:800px; margin:0 auto;border:1px solid #f2f2f2; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td style="vertical-align:middle; padding: 07px 15px; border-bottom: 1px solid #f2f2f2; border-right:1px solid #f2f2f2;"
                                colspan="2">
                                <font
                                    style=" font-size:16px;color: #000;font-weight: 600; width:100%; display: inline-block;">
                                    Support Details</font>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top; padding: 07px 15px; border-right:1px solid #f2f2f2;">
                                <font
                                    style=" font-size:16px;color: #5719cc;font-weight: 600; width:100%; display: inline-block; margin-bottom: 10px;">
                                    Groomely Address</font>
                                <font
                                    style=" font-size:16px;color: #757575;font-weight: 600; width:100%; display: inline-block;">
                                    3962 Circle Lake Drive Palm Beach FL 33417 USA</font>
                            </td>
                            <td style="vertical-align:top; padding: 07px 15px;">
                                <font
                                    style=" font-size:16px;color: #5719cc;font-weight: 600; width:100%; display: inline-block; margin-bottom: 10px;">
                                    Support</font>
                                <font
                                    style=" font-size:16px;color: #2c2c2c;font-weight: 600; width:100%; display: inline-block;">
                                    +1 918 519 8362 <font style="color:#757575">(Tollfree)</font>
                                </font>
                                <font
                                    style=" font-size:16px;color: #2c2c2c;font-weight: 600; width:100%; display: inline-block;">
                                    support@groomely.com <font style="color:#757575">(Email)</font>
                                </font>
                                <!-- <font style=" font-size:16px;color: #757575;font-weight: 600; width:100%; display: inline-block;"><a href="">https://supportz.flightmantra.com/login</a></font> -->

                            </td>
                        </tr>

                    </tbody>
                </table>

                <table width="800" style="width:800px; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td style="vertical-align:middle; border-bottom: 5px solid #000;padding-bottom: 15px;">
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block;">
                                    Note: This is a computer generated invoice and does not require a signature/stamp.
                                    Please do not reply to this email. It has been sent from an email account that is
                                    not monitored.</font>
                            </td>
                        </tr>
                    </tbody>
                </table>



            </td>
        </tbody>
    </table>
</body>

</html>
