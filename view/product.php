<?php
include './model/pdo.php';
include './model/category.php';
$spl = 'select * from product';
$product = get_ALL($spl);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

  <body>
    <?php
  ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">description</th>
          <th scope="col">category</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($product as $value) : ?>
        <tr>
          <td><?= $value['product_name'] ?></td>
          <td><?= $value['description'] ?></td>
          <td><?= $value['id_category'] ?></td>
          </td>
        </tr>
        <?php endforeach ?>
        <?php
      ?>
      </tbody>
    </table>
  </body>
</body>

</html>