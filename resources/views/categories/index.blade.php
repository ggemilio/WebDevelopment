<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      @foreach($categories as $c)
      <tr>
        <td>{{$c->name}}</td>
        <td>{{$c->cars}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
