<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Create New Reservation</h1>
  <form method="POST" action="/reservations/{{ $customer->id }}">
    @csrf

    <div>
      <p>
           <b>Enter Reservation for {{$customer->first_name}} {{$customer->last_name}}</b>
       </p>
       <h4 class="info-text">Select Room<br>
        <select name="room_no" id="room_no">
            <option value=100>100</option>
            <option value=101>101</option>
            <option value=102>102</option>
            <option value=103>103</option>
            <option value=104>104</option>
            <option value=105>105</option>
            <option value=106>106</option>
            <option value=107>107</option>
            <option value=108>108</option>
            <option value=109>109</option>
            <option value=110>110</option>
          </select>
        </h4>
        <h4 class="info-text">Select Room Type<br>
         <select name="category" id="category">
           <option value="Deluxe">Deluxe</option>
           <option value="Economy">Economy</option>
           <option value="Suite">Suite</option>
        </h4>
            <p>
        <b>Enter Start and End Date:</b>
           </p>
           <table>
               <tr>
                   <td>
                     <input class="input" type="date" name="start_date" size="11" />
                     <input class="input" type="date" name="end_date" size="11" />
                   </td>
               </tr>
           </table>
           <b>Cost of Stay</b>
           <td>
             <input class="input" type="decimal" name="amount" size="11"/>
           </td>
  		<p><button type="submit">Create Reservation</button></p>
    </div>
  </form>
</body>
</html>
