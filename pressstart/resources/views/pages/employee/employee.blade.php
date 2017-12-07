@extends ('layout.master')

@section ('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h2>Employee List
        <small>
          <span class="btn-group pull-right">
            <a href="/employee/create" class="btn btn-primary">Add Employee</a>
          </span>
        </small>
      </h2>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Employee Type</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th class="text-right">View/Edit</th>
            <th class="text-right">Delete</th>
          </tr>
        </thead>
        <tbody>
          <!-- This will likely become a foreach. This is just for demo purposes -->
          @for ($i = 0; $i < 15; $i++)
          <tr>
            <td>E42</td>
            <td>John Doe</td>
            <td>Technician</td>
            <td>john_doe@email.com</td>
            <td>289-111-1111</td>
            <td>123 Fake Street, Oshawa</td>
            <td class="text-right"><a href="/employee/view" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></a></td>
            <td class="text-right"><button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></td>
          </tr>
          @endfor
        </tbody>
      </table>
    </div>

  </div>
</div>

@endsection