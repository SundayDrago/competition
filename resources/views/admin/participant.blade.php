<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')

    <!-----------Body-------------->
    <div class="container mt-5" align="center">
        <div align="center" class="pt-5">
            <h1>Registered Participants</h1>
            <table class="table-bordered table table-primary text-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Student Number</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $participant)
                        <tr data-participant-id="{{ $participant->studentNumber }}" class="participant">
                            <td>{{ $participant->username }}</td>
                            <td>{{ $participant->firstname }}</td>
                            <td>{{ $participant->lastname }}</td>
                            <td>{{ $participant->email }}</td>
                            <td>{{ $participant->date_of_birth }}</td>
                            <td>{{ $participant->studentNumber }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.participant');
            rows.forEach(row => {
                row.addEventListener('click', function() {
                    const studentNumber = this.getAttribute('data-participant-id');
                    console.log(studentNumber);
                    window.location.href = `/participant/${studentNumber}/questions/`;
                });
            });
        });
    </script>
    @include('admin.script')
</body>

</html>
