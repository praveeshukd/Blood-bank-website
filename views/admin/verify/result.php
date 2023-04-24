<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
   
<main>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
     <h1>User Verification</h1>
            <div  class="p-3 mb-2 bg-info text-dark">
         
                    <div class="space-y-12">
                  
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            </div>
                        </div>
                  

                      
                    </div>
                   
                    <?php foreach($donor as $user) :?>
                        <span>verification:<?= $user['verify'] ?></span>
<br>
<span>   username:   <?=$user['username'];?></span>
<br>

<span>   district:   <?=$user['district'];?></span>

<?php endforeach ?>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a href="/admin/verify">back</a></button>
       
    </div>
                </form>
            

            </div>
        </div>
    </div>



    </div>
    </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>