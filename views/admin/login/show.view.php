<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<main>
<img src="https://www.eraktkosh.in/BLDAHIMS/bloodbank/transactions/assets/updated_NewYear2022.png" alt="">
  <div >
                              
                                    
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
        <div class="p-3 mb-2 bg-info text-dark">
            <div >
         
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">LOGIN ADMIN</h2>
            </div>
          
            <form class="mt-8 space-y-6" action="/login/update" method="POST">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <span>   <?= $errors['user'] ?></span>
                        <label for="username" class="sr-only">USERNAME</label>
                        <input id="username" name="username" type="text"required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="username">
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <?= $errors['password'] ?>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Password">
                    </div>
                </div>

                <div>
     
                    <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        LOGIN
                    </button>
                </div>

                <ul>
               
            </form>
            </div>
        </div>
    </div>
    </div>  
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>