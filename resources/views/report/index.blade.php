<table>

    <thead>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Surname</th>

            <th>Documents</th>

            <th>Type</th>

            <th>Email</th>

        </tr>

    </thead>

    <tbody>

        @foreach ($reports as $report)

            <tr>

                <td>{{ $report->id }}</td>

                <td>{{ $report->name }}</td>

                <td>{{ $report->surname }}</td>

                <td>{{ $report->documents }}</td>

                <td>{{ $report->type }}</td>

                <td>{{ $report->email }}</td>

            </tr>

        @endforeach

    </tbody>

</table>