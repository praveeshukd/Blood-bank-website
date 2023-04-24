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
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">BOOKING BLOOD</h2>
            </div>
            <div class="p-3 mb-2 bg-danger text-white">
                <form action="/booking/user?id=<?=$user['id']?>" method="post">
            
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            
                    <div class="space-y-12">
                  
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                        
                        <span class="text-black-500 "><?= $errors['user'] ?></span>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                    <label for="username"
                                        class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                    <div class="mt-2">
                                        <select id="username" name="username" autocomplete="username"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option><?=$user['username'] ?></option>
                                         
                                        </select>
                                        <span class="text-black-500 "><?= $errors['username'] ?></span>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="state"
                                        class="block text-sm font-medium leading-6 text-gray-900">State</label>
                                    <div class="mt-2">
                                        <select id="state" name="state" autocomplete="state"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option><?=$user['state'] ?></option>
                                         
                                        </select>
                                        <span class="text-black-500 "><?= $errors['state'] ?></span>
                                    </div>
                                </div>

            

 <div class="sm:col-span-3">
                                    <label for="district"
                                        class="block text-sm font-medium leading-6 text-gray-900">District</label>
                                    <div class="mt-2">
                                        <select id="district" name="district" autocomplete="district"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option><?=$user['district'] ?></option>
                                         
                                        </select>
                                        <span class="text-black-500 "><?= $errors['district'] ?></span>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="age"
                                        class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                                    <div class="mt-2">
                                        <select id="age" name="age" autocomplete="age"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option><?=$user['age'] ?></option>
                                         
                                        </select>
                                        <span class="text-black-500 "><?= $errors['age'] ?></span>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="hospital"
                                        class="block text-sm font-medium leading-6 text-gray-900">Hospital</label>
                                    <div class="mt-2">
                                        <select id="hospital" name="hospital" autocomplete="hospital"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option><?=$user['hospital'] ?></option>
                                          
                                        </select>
                                        <span class="text-black-500 "><?= $errors['hospital'] ?></span>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="blood"
                                        class="block text-sm font-medium leading-6 text-gray-900">Blood-group</label>
                                    <div class="mt-2">
                                        <select id="blood" name="blood" autocomplete="blood"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option><?=$user['blood'] ?></option>
                                          
                                        </select>
                                        <span class="text-black-500 "><?= $errors['blood'] ?></span>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="contact"
                                        class="block text-sm font-medium leading-6 text-gray-900">Contact</label>
                                    <div class="mt-2">
                                        <select id="contact" name="contact" autocomplete="contact"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option><?=$user['contact'] ?></option>
                                          
                                        </select>
                                        <span class="text-black-500 "><?= $errors['blood'] ?></span>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="Date"
                                        class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                                    <div class="mt-2">
                                        <input type="Date" name="Date" id="Date" 
                                            autocomplete="Date"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    <span class="text-black-500 "><?= $errors['contact'] ?></span>
                                </div>
                            
                                <div class="sm:col-span-3">
                                    <label for="booked"
                                        class="block text-sm font-medium leading-6 text-gray-900">Booking</label>
                                    <div class="mt-2">
                                        <select id="booking" name="booking" autocomplete="booking"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                          
                                            <option>booked</option>
                                          
                                        </select>
                                        <span class="text-black-500 "><?= $errors['blood'] ?></span>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>

                    

                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a href="/looking/blood">Cancel</a></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Save
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="p-3 mb-2 bg-secondary text-white">
      <p>Confirm ! </p>
      </div>
      <div class="modal-footer">
      
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/user/search">Cancel</a></button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div>
                </form>
            

            </div>
        </div>
    </div>

    </form>

    </div>
    </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>