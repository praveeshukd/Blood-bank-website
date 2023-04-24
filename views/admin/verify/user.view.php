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
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">ADD DONOR</h2>
            </div>
            <div class="p-3 mb-2 bg-danger text-white">
                <?php foreach ($donor as $user): ?>
                    <form action="/admin/useradd?id=<?= $user['id'] ?>" method="post">

                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">

                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="username" value="<?= $user['username'] ?>">


                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="state" value="<?= $user['state'] ?>">

                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="district" value="<?= $user['district'] ?>">

                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="age" value="<?= $user['age'] ?>">

                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="hospital" value="<?= $user['hospital'] ?>">

                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="blood" value="<?= $user['blood'] ?>">

                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="contact" value="<?= $user['contact'] ?>">


                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="Date" value="<?= $user['Date'] ?>">
                    <?php endforeach ?>
                    <div class="space-y-12">

                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            </div>
                        </div>
                        <span>
                            <?= $errors['user'] ?>
                        </span>

                        <div class="border-b border-gray-900/10 pb-12">


                            <div class="sm:col-span-3">
                                <label for="verify"
                                    class="block text-sm font-medium leading-6 text-gray-900">Verify</label>
                                <div class="mt-2">
                                    <select id="verify" name="verify" autocomplete="state" required
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>verified</option>
                                        <option>unverified</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>



            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a
                        href="/admin/unverify">cancel</a></button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Save
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="p-3 mb-2 bg-secondary text-white">
                                <h6>Verification</h6>
                                <p>Confirm ! </p>
                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal"><a
                                        href="/admin/unverify">cancel</a></button>
                                <button type="submit" class="btn btn-primary">Save</button>      <span><?= $errors['user'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
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