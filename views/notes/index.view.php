<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php'); 
?>

<main class="card p-2 m-2 ">
    <div class="shadow">
        <img class="full rounded-t" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">

        <div>
            <ul class="p-2 border m-2">
                <?php foreach($notes as $note): ?>
                    <a href="/note?id=<?= $note['id']; ?>" class="bold text-justify m-2 bg-green-600 text-green-700">
                        <li class="p-1 border m-2 ">
                            <?= htmlspecialchars($note['title']); ?>
                        </li>
                    </a>
                    <li class="text-black"><?= htmlspecialchars($note['body']); ?> </li>
                <?php endforeach ;?>
            </ul>
        </div>

        <div class="px-2 py-1 text-right sm:px-6">
            <a href="/notes/create"
                title="opens this post" 
                class="inline-flex justify-center rounded border border-transparent bg-green-600 py-2 px-4 text-white shadow-sm hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                create note
            </a>
        </div>
    </div>  
</main>

<?php require "../views/partials/footer.php";?>