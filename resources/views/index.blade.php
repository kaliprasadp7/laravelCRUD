<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>User Dashboard</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('companies.create') }}"> Add User</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>First Name</th>
<th>Last Email</th>
<th>Contact Number</th>
<th>User Name</th>
<th>Email</th>
<th>Select Company</th>
<th>User Type</th>
<th width="80px">Action</th>
</tr>
@foreach ($companies as $company)
<tr>
<td>{{ $company->id }}</td>
<td>{{ $company->first_name }}</td>
<td>{{ $company->last_name }}</td>
<td>{{ $company->contact_num}}</td>
<td>{{ $company->user_name}}</td>
<td>{{ $company->email}}</td>
<td>{{ $company->select_company}}</td>
<td>{{ $company->user_type}}</td>
<td>

<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>


</td>
</tr>
@endforeach
</table>
{!! $companies->links() !!}
</body>
</html>
