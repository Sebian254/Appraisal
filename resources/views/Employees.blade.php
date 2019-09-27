@extends('Dashboard')
@section('content')

    <div class="container-fluid">
      <table class="table" style="margin-top: 40px;">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>IDnumber</th>
            <th>EmployeeID</th>
            <th>Department</th>
          </tr>
        </thead>
        <tbody>
          @foreach($employees as $employee)
          <tr>
            <td>{{$employee->Name}}</td>
            <td>{{$employee->Email}}</td>
            <td>{{$employee->IDnumber}}</td>
            <td>{{$employee->EmployeeID}}</td>
            <td>{{$employee->Department}}</td>
            <td><a class="btn btn-primary" href="{{ url('/Appraisal', $employee->id)}}">Appraise</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection