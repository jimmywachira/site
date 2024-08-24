<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php'); 
?>

<main>
  <div class="p-4 m-4">

  <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">

  <div class="card p-3 m-3">
    <ul>
            <a href="/note?id=<?= $note['id']; ?>" class="text-blue-600">
                <li>
                    <?= htmlspecialchars($note['title']); ?>
                </li>
            </a>
            <li class="text-black-600"><?= htmlspecialchars($note['body']); ?> </li>
    </ul>

    </div>

    <form action="/note" method="post">
        <input type="hidden" name="id" value="<?= $note['id']; ?>">
        <button class="inline-flex text-white justify-center rounded border bg-blue-600 py-2 px-4 shadow-sm hover:bg-blue-800"> delete
        </button>
    
    </form>

</div>  
</main>

<?php require "../views/partials/footer.php";?>