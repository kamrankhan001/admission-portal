<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Challan</title>
    <style>
        .look {
            border: 1px solid black;
            margin-left: 20px;
            float: left;
            width: 300px
        }

        .mt {
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div>

        <div class="look">
            <small>Bank Copy</small> <br />
            <small>The Fun University of city.T.N : 9020017-1</small> <br />
            <div class="flex" style="margin-top: 5px">
                <small>Bank Name</small>
                <small style="margin-left: 20px">
                    Account No: 00427876544321 Account Title: For Credit to Collection
                    Account of The Fun University of city
                </small>
            </div>
            <div class="mt" style="border-top: 1px solid black; border-bottom: 1px solid black">
                <small style="color: red;"">
                    PLEASE DO NOT USE FUNDS TRANSFER METHOD TO PAY YOUR ANY KIND OF FEE
                </small>
            </div>
            <div class="flex mt">
                <div>Date</div>
                <div>28-07-2022 8:53:56 PM</div>
            </div>
            <div class="flex mt" style="border: 1px solid black;">
                <div>
                    Challan No: {{ $application->challan_no }}
                </div>
                <div>
                    Due Date: 05/08/2022
                </div>
            </div>
            <table style="width: 100%;" class="mt">
                <tr>
                    <th>Name</th>
                    <td>{{ $candidate->first_name }} {{ $candidate->last_name }}</td>
                </tr>
                <tr>
                    <th>CNIC</th>
                    <td>{{ $candidate->cnic }}</td>
                </tr>
                <tr>
                    <th>Reg#</th>
                    <td>FEAU433425433</td>
                </tr>
                <tr>
                    <th>Program</th>
                    <td>{{ $application->Program }}</td>
                </tr>
                <tr>
                    <th>APP Title</th>
                    <td>Admission Challan</td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>1000</td>
                </tr>
                <tr style="background-color: gray;">
                    <th>Total Amount to Pay</th>
                    <td>1000</td>
                </tr>

            </table>
            <p style="color: red;">
                Fee can be paid through bank name Online Banking/name
                Mobile App/Konnect Mobile App Agent
                Note: If your Challan not get verified within 48 hours
                on the portal, then email picture of your paid
                Challan at admin@gmail.com
            </p>
        </div>

        <div class="look">
            <small>Student Copy</small> <br />
            <small>The Fun University of city.T.N : 9020017-1</small> <br />
            <div class="flex" style="margin-top: 5px">
                <small>Bank Name</small>
                <small style="margin-left: 20px">
                    Account No: 00427876544321 Account Title: For Credit to Collection
                    Account of The Fun University of city
                </small>
            </div>
            <div class="mt" style="border-top: 1px solid black; border-bottom: 1px solid black">
                <small style="color: red;"">
                    PLEASE DO NOT USE FUNDS TRANSFER METHOD TO PAY YOUR ANY KIND OF FEE
                </small>
            </div>
            <div class="flex mt">
                <div>Date</div>
                <div>28-07-2022 8:53:56 PM</div>
            </div>
            <div class="flex mt" style="border: 1px solid black;">
                <div>
                    Challan No: {{ $application->challan_no }}
                </div>
                <div>
                    Due Date: 05/08/2022
                </div>
            </div>
            <table style="width: 100%;" class="mt">
                <tr>
                    <th>Name</th>
                    <td>{{ $candidate->first_name }} {{ $candidate->last_name }}</td>
                </tr>
                <tr>
                    <th>CNIC</th>
                    <td>{{ $candidate->cnic }}</td>
                </tr>
                <tr>
                    <th>Reg#</th>
                    <td>FEAU433425433</td>
                </tr>
                <tr>
                    <th>Program</th>
                    <td>{{ $application->Program }}</td>
                </tr>
                <tr>
                    <th>APP Title</th>
                    <td>Admission Challan</td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>1000</td>
                </tr>
                <tr style="background-color: gray;">
                    <th>Total Amount to Pay</th>
                    <td>1000</td>
                </tr>

            </table>
            <p style="color: red;">
                Fee can be paid through bank name Online Banking/name
                Mobile App/Konnect Mobile App Agent
                Note: If your Challan not get verified within 48 hours
                on the portal, then email picture of your paid
                Challan at admin@gmail.com
            </p>
        </div>

        <div class="look">
            <small>Department Copy</small> <br />
            <small>The Fun University of city.T.N : 9020017-1</small> <br />
            <div class="flex" style="margin-top: 5px">
                <small>Bank Name</small>
                <small style="margin-left: 20px">
                    Account No: 00427876544321 Account Title: For Credit to Collection
                    Account of The Fun University of city
                </small>
            </div>
            <div class="mt" style="border-top: 1px solid black; border-bottom: 1px solid black">
                <small style="color: red;"">
                    PLEASE DO NOT USE FUNDS TRANSFER METHOD TO PAY YOUR ANY KIND OF FEE
                </small>
            </div>
            <div class="flex mt">
                <div>Date</div>
                <div>28-07-2022 8:53:56 PM</div>
            </div>
            <div class="flex mt" style="border: 1px solid black;">
                <div>
                    Challan No: {{ $application->challan_no }}
                </div>
                <div>
                    Due Date: 05/08/2022
                </div>
            </div>
            <table style="width: 100%;" class="mt">
                <tr>
                    <th>Name</th>
                    <td>{{ $candidate->first_name }} {{ $candidate->last_name }}</td>
                </tr>
                <tr>
                    <th>CNIC</th>
                    <td>{{ $candidate->cnic }}</td>
                </tr>
                <tr>
                    <th>Reg#</th>
                    <td>FEAU433425433</td>
                </tr>
                <tr>
                    <th>Program</th>
                    <td>{{ $application->Program }}</td>
                </tr>
                <tr>
                    <th>APP Title</th>
                    <td>Admission Challan</td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>1000</td>
                </tr>
                <tr style="background-color: gray;">
                    <th>Total Amount to Pay</th>
                    <td>1000</td>
                </tr>

            </table>
            <p style="color: red;">
                Fee can be paid through bank name Online Banking/name
                Mobile App/Konnect Mobile App Agent
                Note: If your Challan not get verified within 48 hours
                on the portal, then email picture of your paid
                Challan at admin@gmail.com
            </p>
        </div>

    </div>
</body>

</html>
