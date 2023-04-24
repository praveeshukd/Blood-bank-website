<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <img src="https://www.eraktkosh.in/BLDAHIMS/bloodbank/transactions/assets/updated_NewYear2022.png" alt="">
<main>
<div >
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">DONATE BLOOD</h2>
            </div>
            <div class="p-3 mb-2 bg-info text-white">
            
                <form action="/user/store" method="post">
      
                    <div class="space-y-12">
                  
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                        

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="username"
                                        class="block text-sm font-medium leading-6 text-gray-900">username</label>
                                         
                                    <div class="mt-2">
                                        <input type="text" name="username" id="username"    
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    <span class="text-red-500 "><?= $errors['username'] ?></span>
                                
                                    
                                </div>
                               

                                <div class="sm:col-span-3">
                                    <label for="state"
                                        class="block text-sm font-medium leading-6 text-gray-900">State</label>
                                    <div class="mt-2">
                                        <select id="state" name="state" autocomplete="state"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option></option>
                                            <option>Kerala</option>
                                            <option>Tamilnadu</option>
                                            <option>Delhi</option>
                                        </select>
                                        <span class="text-red-500 "><?= $errors['state'] ?></span>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="district"
                                        class="block text-sm font-medium leading-6 text-gray-900">District</label>
                                    <div class="mt-2">
                                        <select id="district" name="district" autocomplete="district"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option></option>
                                            <option>Palakkad</option>
                                            <option>Kozhikode</option>
                                            <option>Kochi</option>
                                        </select>
                                        <span class="text-red-500 "><?= $errors['district'] ?></span>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="age"
                                        class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                                    <div class="mt-2">
                                        <select id="age" name="age" autocomplete="age"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option></option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>34</option>
                                        </select>
                                        <span class="text-red-500 "><?= $errors['age'] ?></span>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="hospital"
                                        class="block text-sm font-medium leading-6 text-gray-900">Hospital</label>
                                    <div class="mt-2">
                                        <select id="hospital" name="hospital" autocomplete="hospital"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option></option>

                                            <option>ARMC AEGIS HOSPITAL</option>
                                            <option>Government District Hospital, Perint</option>
                                            <option>Moulana Hospital</option>
                                        </select>
                                        <span class="text-red-500 "><?= $errors['hospital'] ?></span>
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

                                            <option>A-</option>
                                            <option>AB+</option>
                                            <option>O-</option>
                                        
                                        </select>
                                        <span class="text-red-500 "><?= $errors['blood'] ?></span>
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="contact"
                                        class="block text-sm font-medium leading-6 text-gray-900">contact no</label>
                                    <div class="mt-2">
                                        <input type="number" name="contact" id="contact"
                                            autocomplete="contact"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    <span class="text-red-500 "><?= $errors['contact'] ?></span>
                                </div>
                                <div class="sm:col-span-3">
                             
                                    <div class="mt-2">
                                    <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="verify" value="unverified" required>
                                    </div>
                                </div>
                                
                            </div>
                        </div>



                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a href="/">cancel</a></button>
       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
save
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="p-3 mb-2 bg-secondary text-white">
      <h6>Congrats</h6>
      <p>Just 1 donation can save up to 3 lives. </p>
      </div>
      <div class="modal-footer">
      
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/user/donate">cancel</a></button>
        <button type="submit" class="btn btn-primary">Save changes</button>
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
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>