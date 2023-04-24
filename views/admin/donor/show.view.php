<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<main>

    <div class="d-flex p-2 ">
        <div class="card " style="width: 18rem;">
            <div  class="card-body bg-success p-2 text-white bg-opacity-75">
                <h5 class="card-title">Doner Registered</h5>
          
           <h1>12</h1>
            </div>
        </div>
        <br>
   
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-success p-2 text-white bg-opacity-75">
                <h5 class="card-title">Blood Donation</h5>
           
               

            </div>
            <a href="/donor/add" class="btn btn-primary">Blood Donation</a>
        </div>
    
        <div class="card" style="width: 18rem;">
            <div  class="card-body bg-success p-2 text-white bg-opacity-75">
            <h5 class="card-title">Blood Availability search</h5>
            <h1> <?= $newcount['count'] ?></h1>
             
             
        
            </div>
            <a href="/admin/donor" class="btn btn-primary">Home</a>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-success p-2 text-white bg-opacity-75">
            <h5 class="card-title">verified</h5>
           
                <h1> <?= $newcount['newverified'] ?></h1>
             
            </div>
            <a href="/admin/verify" class="btn btn-primary">verified</a>
         
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-success p-2 text-white bg-opacity-75">
            <h5 class="card-title">unverified</h5>
                
                <h1> <?= $newcount['unverified'] ?></h1>
          
            </div>
            <a href="/admin/unverify" class="btn btn-primary">unverified</a>
           
        </div>



    </div>
    <div class="flex min-h-full items-center justify-right py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
           
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Donor Details</h2>
            </div>


            <form action="/donor/add">
            <div>
                    <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        ADD
                    </button>
                </div>

                <div>

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Username</th>
                                <th scope="col">State</th>
                                <th scope="col">District </th>
                                <th scope="col">Age</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">blood </th>
                                <th scope="col">Contact</th>
                                <th scope="col">Date</th>
                                <th scope="col">verify</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                    
    <?php foreach($donor as $user) :?>

    <tr>
      <td scope="row"><?= $user['id']?></td>
      <td><?= $user['username']?></td>
      <td><?= $user['state']?></td>
      <td><?= $user['district']?></td>
      <td><?= $user['age']?></td>
      <td><?= $user['hospital']?></td>
      <td><?= $user['blood']?></td>
      <td><?= $user['contact']?></td>
      <td><?= $user['Date']?></td>
      <td><?= $user['verify']?></td>
      <td class=" hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><a href="/donor/edit?id=<?= $user['id'] ?>">EDIT</a></td>
      <td class=" hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><a href="/donor/delete?id=<?= $user['id'] ?>" onclick="if (!confirm('Are you sure?')) { return false }">DELETE</a></td>


</td>

    </tr>
    <?php endforeach ?>

                           
                        </tbody>
                    </table>
                </div>

            </form>

        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
