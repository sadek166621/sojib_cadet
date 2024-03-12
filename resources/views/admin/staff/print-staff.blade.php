<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Staff list</title>
</head>
<body>
    <br>
    <div>
        <h1 style="text-align: center;font-size: xxx-large;font-weight: bold;">
          নওয়াবেঁকী মহাবিদ্যালয় 
        </h1>
        <p style="text-align: center">
            ডাকঘর :নওয়াবেঁকী, উপজেলা : শ্যামনগর , জেলা : সাতক্ষীরা। 
        </p>
        <p style="text-align: center">
            BISE Code : 9426, NU code : 0244, EIIN No: 118991
        </p>
        <p style="text-align: center">
            কর্মরত কর্মকর্তা কর্মচারী গণের তালিকা 
        </p>
      </div>
      <table  class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>SL</th>
            <th>Staff Name</th>
            <th>Desigantion <br> Staff Class & Location</th>
            <th>Join Date</th>
            <th>Phone & Email</th>
            <th>Image</th>
            <th>Full Address</th>
          </tr>
        </thead>
        <tbody>
          @if (count($staffs) > 0)
            @foreach ($staffs as $key => $staff)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $staff->name }}</td>
                <td>{{ $staff->designation }} <br> {{ $staff->location->name }} <br> @if($staff->class == 1)
                  <span class=" bg-info">প্রথম শ্রেণী</span>
                @elseif($staff->class == 2)
                  <span class="badge bg-info">দ্বিতীয় শ্রেণী</span>
                @elseif($staff->class == 3)
                  <span class="badge bg-info">তৃতীয় শ্রেণী</span>
                @elseif($staff->class == 4)
                  <span class="badge bg-info">চতুর্থ শ্রেণী</span>
                @endif</td>
                <td>{{ $staff->join_date }}</td>
                <td>{{ $staff->phone }} <br> {{ $staff->email }}</td>
                <td>
                  <img src="{{ asset('assets') }}/images/uploads/staffs/{{ $staff->image }}" alt="Staff image" width="100px" height="100px">
                </td>
               <td>
                {{ $staff->address }}
               </td>
                
              </tr>
            @endforeach
          @else
              <td colspan="10" class="text-center">No staff found</td>
          @endif
        </tbody>
      </table>
      </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>