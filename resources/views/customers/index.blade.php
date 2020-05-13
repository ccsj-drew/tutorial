<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>All Customers</h1>
  <table border="1">

    <p>
      <a href="/">Home</a>
    </p>
    <a href="/customers/create">Enter New Customer</a>
  </p>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>

  </tr>
    @foreach ($customers as $customer)
      <tr>
        <td>{{$customer->first_name}}</td>
        <td>{{$customer->last_name}}</td>
        <td><a href="/customers/{{$customer->id}}/edit">Update</a></td>
        <td><form method="POST" action="/customers/{{ $customer->id }}">
          @method('DELETE')
          @csrf
        <p><button type="submit">Delete</button></p>
      </form></td>
        <p>
          <td><a href="/reservations/create/{{ $customer->id }}">Make Reservation</a></td>
          <td><a href="customers/{{$customer->id}}/show">show</a></td>

      @endforeach

      <a href="/reservations">All Reservations</a>
    </p>
  </tr>
  <table>
</body>
</html>
