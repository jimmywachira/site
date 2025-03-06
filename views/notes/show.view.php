<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php'); 
?>

<main>
  <div class="p-2 m-2 border">

     <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-2.jpg" alt="">

        <div class="card p-2 m-2 border shadow">
            <ul>
                    <li class="center text-green-600 border-green">
                            <?= htmlspecialchars($note['title']); ?>
                        </li>
                    <li class="text-black-600"><?= htmlspecialchars($note['body']); ?> </li>
            </ul>

            <div>
           
           <form action="/note" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                
                <input type="hidden" name="id" value="
                <?= $note['id'];?>
                ">

                <div class="text-right">
                    <button type="submit" class="text-white rounded border bg-red-800 py-2 px-4 hover:bg-red-600"> delete
                    </button>

                    <footer class="mt-3">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded m-2 border bg-green-700 py-2 px-4 text-white hover:bg-green-500 ">edit</a>
            </footer>
                </div>
            </form>  
        </div>
        </div>
        
         
    </div>  
</main>

<?php require "../views/partials/footer.php";?>