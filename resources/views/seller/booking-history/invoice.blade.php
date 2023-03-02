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
                                    Name : {{ $appointment['seller']['name'] }}</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Barber
                                    Email : {{ $appointment['seller']['email'] }}</font>
                                <font style="color:#000; font-weight: 400; width:100%; display: inline-block;">Barber
                                    Phone : {{ $appointment['seller']['phone'] }}</font>
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
                            {{-- <td style="vertical-align:middle; padding: 07px 15px;">
                                <font style=" font-size:20px;color: #5719cc;font-weight: 600;">Fare Details</font>
                            </td> --}}
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
                                    *Greetings! Dear customer, the services encompass the licence and provision of the “Company” that allows you to leverage professional grooming and hairstyling. Please go through the following terms and conditions of services carefully before availing of them.</font>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; border-bottom: 5px solid #000;padding-bottom: 15px;">
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - The Company is only for non-commercial and personal usage unless otherwise concurred upon in accordance with the separate agreement’s terms and conditions.</font>
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - Please note that the Company intends to provide service within the territory where it is based. If customers agree to avail of any service from other legal jurisdictions, they will be adjudged to have agreed to the terms and conditions applicable to that jurisdiction.</font>
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - Any services accepted by the customers are deemed to be agreed upon in accordance with the service offered by the professionals over the Company.</font>
                              
                                <font
                                    style=" font-size:15px;color: #757575;font-weight: 400; width:100%; display: inline-block; margin-bottom: 12px;">
                                    - Customers may be required to furnish their identification proof to avail of the services they have accepted from the Company or any authorised platform of the Company for certain instances. In case of failure to provide the required identity proof may lead to denial of the service.</font>
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
                                    +1 918 519 8362 <font style="color:#757575"></font>
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
