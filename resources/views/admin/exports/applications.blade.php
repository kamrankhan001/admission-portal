<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Gender</th>
            <th>State</th>
            <th>City</th>
            <th>Post Code</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>CNIC</th>
            <th>Father Name</th>
            <th>Father CNIC</th>
            <th>Father Mobile Number</th>
            <th>Father Occupation</th>
            <th>Father Salary</th>
            <th>Address</th>
            <th>Hafiz Quran</th>
            <th>Mobile Number</th>
            <th>Metric Total Marks</th>
            <th>Metric Obtain Marks</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
            <tr>
                <td>{{ $application->first_name }} {{ $application->last_name }}</td>
                <td>{{ $application->gender }}</td>
                <td>{{ $application->state }}</td>
                <td>{{ $application->city }}</td>
                <td>{{ $application->post_code }}</td>
                <td>{{ $application->dob }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->cnic }}</td>
                <td>{{ $application->father_name }}</td>
                <td>{{ $application->father_cnic }}</td>
                <td>{{ $application->father_mobile_number }}</td>
                <td>{{ $application->father_occupation }}</td>
                <td>{{ $application->father_salary }}</td>
                <td>{{ $application->address }}</td>
                <td>{{ $application->hafiz_quran }}</td>
                <td>{{ $application->mobile_number }}</td>
                <td>{{ $application->total_marks_metric }}</td>
                <td>{{ $application->obtain_marks_metric }}</td>
                <td>{{ $application->total_marks_inter }}</td>
                <td>{{ $application->obtain_marks_inter }}</td>
            </tr>
        @endforeach
    </tbody>
</table>