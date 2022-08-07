<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>
</head>

<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers td {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #f8f5f5;
        color: rgb(14, 13, 13);
    }

    .page-break {
        page-break-after: always;
    }
</style>

<body>
    <h1>{{$info->program}}</h1>
    <table id="customers">
        <tr>
            <th colspan="4">
                <img src="{{ public_path('storage/candidate-avatar/' . $info->picture) }}" alt="avatar" width="200px"
                    height="200px">
            </th>
        </tr>
        <tr>
            <th>Full Name</th>
            <td style="text-align: center">{{ $info->first_name }} {{ $info->last_name }}</td>
            <th>Gender</th>
            <td style="text-align: center">{{ $info->gender }}</td>
        </tr>
        <tr>
            <th>State</th>
            <td style="text-align: center">{{ $info->state }}</td>
            <th>City</th>
            <td style="text-align: center">{{ $info->city }}</td>
        </tr>
        <tr>
            <th>Post Code</th>
            <td style="text-align: center">{{ $info->post_code }}</td>
            <th>Date of Brith</th>
            <td style="text-align: center">{{ $info->dob }}</td>
        </tr>
        <tr>
            <th>CNIC</th>
            <td style="text-align: center">{{ $info->cnic }}</td>
            <th>Email</th>
            <td style="text-align: center">{{ $info->email }}</td>
        </tr>
        <tr>
            <th>Father</th>
            <td style="text-align: center">{{ $info->father_name }}</td>
            <th>Father CNIC</th>
            <td style="text-align: center">{{ $info->father_cnic }}</td>
        </tr>
        <tr>
            <th>Father Mobile Number</th>
            <td style="text-align: center">{{ $info->father_mobile_number }}</td>
            <th>Father Occupation</th>
            <td style="text-align: center">{{ $info->father_occupation }}</td>
        </tr>
        <tr>
            <th>Father Salary</th>
            <td style="text-align: center">{{ $info->father_salary }}</td>
            <th>Address</th>
            <td style="text-align: center">{{ $info->address }}</td>
        </tr>
        <tr>
            <th>Hafiz Quran</th>
            <td style="text-align: center">{{ $info->hafiz_quran }}</td>
            <th>Mobile Number</th>
            <td style="text-align: center">{{ $info->mobile_number }}</td>
        </tr>
        <tr>
            <th>Matriculation</th>
            <th>Total Marks Metric</th>
            <th colspan="2">Obtain Marks Metric</th>
        </tr>
        <tr>
            <td style="text-align: center">{{ $info->matriculation }}</td>
            <td style="text-align: center">{{ $info->total_marks_metric }}</td>
            <td style="text-align: center" colspan="2">{{ $info->obtain_marks_metric }}</td>
        </tr>
        <tr>
            <th>Intermediate</th>
            <th>Total Marks Inter</th>
            <th colspan="2">Obtain Marks Inter</th>
        </tr>
        <tr>
            <td style="text-align: center">{{ $info->intermediate }}</td>
            <td style="text-align: center">{{ $info->total_marks_inter }}</td>
            <td style="text-align: center" colspan="2">{{ $info->obtain_marks_inter }}</td>
        </tr>
    </table>
    <br><br><br>
    <hr><br><br><br>
    <div class="page-break"></div>
    <table id="customers" style="width: 100%">
        <tr>
            <th>Matriculation Result</th>
            <th>Intermediate Result</th>
        </tr>
        <tr>
            <td style="text-align: center">
                <img src="{{ public_path('storage/' . $info->matriculation_result) }}" alt="matric result" width="200px"
                    height="200px">
            </td>
            <td style="text-align: center">
                <img src="{{ public_path('storage/' . $info->intermediate_result) }}" alt="inter result" width="200px"
                    height="200px">
            </td>
        </tr>
        <tr>
            <th>CNIC Card</th>
            <th>Domicile</th>
        </tr>
        <tr>
            <td style="text-align: center">
                <img src="{{ public_path('storage/' . $info->cnic_card) }}" alt="cnic card" width="200px"
                    height="200px">
            </td>
            <td style="text-align: center">
                <img src="{{ public_path('storage/' . $info->domicile) }}" alt="domicile" width="200px" height="200px">
            </td>
        </tr>
    </table>
</body>

</html>
