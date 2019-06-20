
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action={{route('cars.save')}} method="post">
      {{csrf_field()}}
      <label for="brand">Brand</label>
      <input type="text" id="brand" name="brand" value="" required>
      <label for="model">Model</label>
      <input type="text" id="brand" name="model" value="" required>
      <label for="year">year</label>
      <input type="number" id="year" name="year" value="" required>
      <select required name="category_id">
        <option value="1">Small</option>
        <option value="2">Medium</option>
        <option value="3">Large</option>
      </select>
      <input type="submit" name="" value="Create">
    </form>
  </body>
</html>
