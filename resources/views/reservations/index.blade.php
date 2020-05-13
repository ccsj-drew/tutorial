<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>All Reservations</h1>
  <p>
    <a href="/">Home</a>
  </p>
</p>
<a href="/customers/create">Enter New Customer</a>
</p>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Room Number</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Amount</th>



    </tr>
    @foreach ($reservations as $reservation)
      <tr>
        <td>{{$reservation->customer_id}}</td>
        <td>{{$reservation->room_no}}</td>
        <td>{{$reservation->start_date}}</td>
        <td>{{$reservation->end_date}}</td>
        <td>{{$reservation->amount}}</td>
        <td><a href="reservations/{{$reservation->id}}/edit">Update</a></td>
        <td><form method="POST" action="reservations/{{$reservation->id}}">
          @method('DELETE')
          @csrf
        <p><button type="submit">Delete room</button></p>
      </form></td>










</tr>

      @endforeach
    </tr>
    <p>
    <a href="/customers">All Customers</a>

  </p>
  <table>
</body>
</html>
