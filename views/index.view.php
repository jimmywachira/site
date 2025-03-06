<?php 
require "../views/partials/head.php";
require "../views/partials/nav.php";
require "../views/partials/banner.php"; 
?>

<main>
  <div class="p-2 m-4">
    <section>
      <article>
          <div class="card shadow">
              <img class="full" src="https://flowbite.com/docs/images/blog/image-3.jpg" alt="">

              <h1 class="pt-4 m-4 text-green-800 mb-1"> Lorem Ipsum </h1>
              <p class="p-1 m-1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt sunt atque quos nemo?  In distinctio facilis sapiente, voluptatem rem dolorum eveniet quibusdam nam povident itaque aspernatur et magni facere labore!
              </p>

              <h2 class="p-2 m-2 lowercase text-right  text-green-800s"> > <?= $_SESSION['user']['email'] ?? 'Guest' ?>
              </h2>

          </div>
      </article>
    </section>
  </div>
</main> 

<?php require "../views/partials/footer.php"; ?>