!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<h1>Enter New Customer</h1>
<form method="POST" action="/customers/{{ $customer->id }}show">
<tr>
  <th>First Name</th>
  <th>Last Name</th>

</tr>
  @foreach ($customers as $customer)
    <tr>
      <td>{{$customer->first_name}}</td>
      <td>{{$customer->last_name}}</td>
