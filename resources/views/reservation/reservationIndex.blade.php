<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="{{route('reservation.index')}}" method="post">
          <label for="startDate">Start date</label>
          <input type="date" id="startDate" name="startDate" required value="">
          <label for="endDate">End date</label>
          <input type="date" id="endDate" name="endDate" required value="">
          <input type="submit" name="" value="Check availability">
    </form>
  </body>
</html>
