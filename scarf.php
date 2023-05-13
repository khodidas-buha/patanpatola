<!DOCTYPE html>
<html lang="en">
<title>Scarf - PatanPatola</title>
<?php include 'head.php'; ?>

<body>
  <?php include 'header.php'; ?>
  <section class="flex flex-col justify-center items-center reletive">
    <div class="h-30 bg-gray-500 flex justify-center items-center">
      <img class="max-h-full max-w-full" src="src/img/scarfnanner.png" alt="">
    </div>
    <div class="h-70 flex justify-center items-center absolute">
      <p class="text-4xl text-gray-100 font-bold">Scarf</p>
    </div>
  </section>

  <section>
    <div class="h-70 mt-8 flex justify-center items-center">
      <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li aria-current="page">
          <div class="inline-flex items-center">

          </div>
          <a href="#"
            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-red-900 dark:text-gray-400 dark:hover:text-white">
            <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
              </path>
            </svg>
            Home
          </a>
        </li>
        <li aria-current="page">
          <div class="inline-flex items-center">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <a href="#"
              class="ml-1 text-sm font-medium text-gray-700 hover:text-red-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Scarf</a>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <section class="bg-white py-8">

    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

      <nav id="store" class="w-full top-0 px-6 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

          <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
            Store
          </a>

          <div class="flex items-center" id="store-nav-content">

            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
              <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
              </svg>
            </a>

            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
              <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                  d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
              </svg>
            </a>

          </div>
        </div>
      </nav>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="#">
          <img class="hover:grow hover:shadow-lg rounded-lg" src="src/img/sc1.png">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              Chhabadi 10 Elephant (CH)
            </p>
          </div>
        </a>
      </div>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="#">
          <img class="hover:grow hover:shadow-lg rounded-lg" src="src/img/sc2.png">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              Chhabadi Bhat Maroon (CH)
            </p>
          </div>
        </a>
      </div>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="#">
          <img class="hover:grow hover:shadow-lg rounded-lg" src="src/img/sc3.png">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              Choktha Bhat (CH)
            </p>
          </div>
        </a>
      </div>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="#">
          <img class="hover:grow hover:shadow-lg rounded-lg" src="src/img/sc4.png">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              Elephant In Blue Chhabadi (CH)
            </p>
          </div>
        </a>
      </div>
    </div>
  </section>
<!-- 
  <section class="bg-white">

    <div class="container py-4 px-6 mx-auto">

      <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
        About Scarf
      </a>
      <p class="mt-8 mb-8">Patan Patola scarf is a traditional and highly esteemed textile product originating from the
        city of Patan in Gujarat, India. It is renowned for its exquisite craftsmanship, vibrant colors, and intricate
        designs, making it a coveted accessory in the fashion world.
      </p>
      <p class="mt-8 mb-8">The Patan Patola scarf is meticulously handwoven using the double ikat technique, which
        involves dyeing the warp and weft threads separately before weaving them together. This intricate process
        results in a visually stunning pattern on both sides of the fabric, with no distinction between the front and
        back.</p>
      <p class="mt-8 mb-8">Each Patan Patola scarf is a unique masterpiece, taking several months to complete. The
        weavers meticulously plan and execute every detail, ensuring precision in alignment and color placement. The
        complexity of the weaving process and the attention to detail make Patan Patola scarves highly valued and
        collectible.</p>

    </div>

  </section> -->




  <?php include 'footer.php'; ?>

  <script src="src/script/script.js"></script>
</body>

</html>