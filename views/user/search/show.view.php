<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
 
<main>

<img src="https://www.eraktkosh.in/BLDAHIMS/bloodbank/transactions/assets/updated_NewYear2022.png" alt="">

    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">LOOKING FOR BLOOD</h2>
            </div>
            <div class="p-3 mb-2 bg-danger text-white">
                <form action="/user/search" method="post">
      
                    <div class="space-y-12">
                  
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                        

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                
                            <div class="sm:col-span-3">
                                    <label for="district"
                                        class="block text-sm font-medium leading-6 text-gray-900">District</label>
                                    <div class="mt-2">
                                    
 <input list="state-options" value="<?php echo $user['district']?>" name="district" id="district" class="w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" placeholder="Enter your state">
<datalist id="state-options">
<option><?=$user['district'] ?></option>    
<option value="kannur">
    <option value="palakkad">
    <option value="kochi">
    <option value="kozhikode">
    <option value="malappuram">
</datalist>
                                    </div>
                                </div>

                             
                                <div class="sm:col-span-3">
                                    <label for="blood"
                                        class="block text-sm font-medium leading-6 text-gray-900">Blood-group</label>
                                    <div class="mt-2">
                                        <select id="blood" name="blood" autocomplete="blood"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option></option>
                                            <option>A+</option>
                                            <option>B+</option>
                                            <option>o+</option>
                                            <option>o-</option>
                                        </select>
                                        <span><?= $errors['blood'] ?></span>
                                    </div>
                                </div>
                                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="verify" value="verified">
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a href="/">Cancel</a></button>
        <button type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Search</button>
    </div>
                </form>
              
    </div>
    </div>
    </div>

    </form>


<?php require base_path('views/partials/footer.php') ?>