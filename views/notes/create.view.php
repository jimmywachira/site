<?php 
    require base_path('views/partials/head.php');
    require base_path('views/partials/nav.php');
    require base_path('views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mt-5 md:col-span-2 md:mt-0 border shadow">
            <form method="POST" action="/notes">
                <div class="p-2 m-2">
                        <div class="">
                        <div>
                            <label for="title" class="text-black">title</label>
                            <div class="px-2">
                                <input id="title" name="title" class=" p-2 m-2 w-full" placeholder="Title"><?= $_POST['title'] ?? '' ?> 
                                </input>
                            </div>
                        </div>

                            <div class="px-2">
                                <label for="body" class="">Body</label>
                                <div class="">
                                    <input id="body" name="body" class="m-2 p-2 block w-full "
                                        placeholder="Note goes here"><?= $_POST['body'] ?? '' ?>
                                    </input>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="px-4 py-3 text-right sm:px-6">
                            <button
                                type="submit"
                                class="border rounded bg-green-600 px-4 py-2  hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"> Submit
                            </button>

                            <ul>
                    <?php if (isset($errors['email'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['password'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                    <?php endif; ?>
                </ul>
                        </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>