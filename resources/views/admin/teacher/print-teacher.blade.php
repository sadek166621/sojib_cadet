<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Teachers list</title>
</head>
<body>
    <br>
    <div>
        <h1 style="text-align: center;font-size: xxx-large;font-weight: bold;">
            Syed-Syeda Memorial High School
        </h1>
        <br>
      </div>
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th> Desigantion & Department</th>
            <th>Join Date</th>
            <th>Phone & Email</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
          @if (count($teachers) > 0)
            @foreach ($teachers as $key => $teacher)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->designation }} <br> {{ $teacher->department->name }} </td>
                <td>{{ $teacher->join_date }}</td>
                <td>{{ $teacher->phone }} <br> {{ $teacher->email }}</td>
                <td>
                  <img src="{{ asset('assets') }}/images/uploads/teachers/{{ $teacher->image }}" alt="Teacher image" width="50px" height="50px">
                </td>


              </tr>
            @endforeach
          @else
              <td colspan="10" class="text-center">No teacher found</td>
          @endif
        </tbody>
      </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
