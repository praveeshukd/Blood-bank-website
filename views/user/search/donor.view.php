<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Available</title>
  <style>
    body {
      padding: 0;
      margin: 0;

      background-size: cover;

      background-repeat: no-repeat;
    }
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
  <div>
    <img src="https://www.eraktkosh.in/BLDAHIMS/bloodbank/transactions/assets/updated_NewYear2022.png" alt="">
    <div class="container">
      <div>
        <div class="row">
          <div class="col-8 m-auto">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Hospital</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Date</th>
                  <th>Booking</th>

                </tr>
              </thead>
              <tbody>
                <?php foreach ($donor as $td): ?>
                  <?php $id++ ?>
                  <tr>
                    <td scope="row">
                      <?= $id ?>
                    </td>
                    <td scope="row">
                      <?= $td['username']; ?>
                    </td>
                    <td scope="row">
                      <?= $td['hospital']; ?>
                    </td>
                    <td>
                      <?= $td['contact'] ?>
                    </td>
                    <td>
                      <?= $td['Date'] ?>
                    </td>
                    <td class=" hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><a
                        href="/user/booking?id=<?= $td['id'] ?>">Booking</a></td>

                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <p>
              <a href="/" class="text-blue-500 underline">Go back...</a>
            </p>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
</div>
</div>
</div>