<table>
    <thead>
        <tr>
            <td>Degree Name</td>
            <td>Program Name</td>
            <td>Total Year</td>
            <td>Total Semester</td>
            <td>Registration Fee</td>
            <td>Fee per Semester</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs as $program)
            <tr>
                <td>{{ $program->degree_name }}</td>
                <td>{{ $program->program_name }}</td>
                <td>{{ $program->total_year }}</td>
                <td>{{ $program->total_semtr }}</td>
                <td>{{ $program->register_fee }}</td>
                <td>{{ $program->fee_per_semtr }}</td>
            </tr>
        @endforeach
    </tbody>
</table>