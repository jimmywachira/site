<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php'); 
?>

<main>
  <div class="p-2 m-2 border">

     <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">

        <div class="card p-3 m-3 border shadow">
            <ul>
                    <a href="/note?id=<?= $note['id']; ?>" class="text-green-600 border-green">
                        <li>
                            <?= htmlspecialchars($note['title']); ?>
                        </li>
                    </a>
                    <li class="text-black-600"><?= htmlspecialchars($note['body']); ?> </li>
            </ul>
        </div>
        
        <div>
           
           <form action="/note" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="
                /*<?= $note['id'];?>*/
                ">

                <div class="text-right">
                    <button type="submit" class="inline-flex text-white rounded border bg-red-600 py-2 px-6 hover:bg-green-800"> delete
                    </button>
                </div>
            </form> 

            <footer class="mt-6">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded border bg-green-500 py-2 px-4 text-white hover:bg-green-700 justify-end">edit</a>
            </footer>
        </div> 
    </div>  
</main>

<?php require "../views/partials/footer.php";?>