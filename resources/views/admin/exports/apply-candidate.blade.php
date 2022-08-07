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
        </tr>
    </thead>
    <tbody>
        @foreach ($candidates as $candidate)
            <tr>
                <td>{{$candidate->fisrt_name}} {{$candidate->last_name}}</td>
                <td>{{$candidate->gender}}</td>
                <td>{{$candidate->state}}</td>
                <td>{{$candidate->city}}</td>
                <td>{{$candidate->post_code}}</td>
                <td>{{$candidate->dob}}</td>
                <td>{{$candidate->email}}</td>
                <td>{{$candidate->cnic}}</td>
            </tr>
        @endforeach
    </tbody>
</table>