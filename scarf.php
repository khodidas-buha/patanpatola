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
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24">
              <path
                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="pt-1 text-gray-900">₹999</p>
        </a>
      </div>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="#">
          <img class="hover:grow hover:shadow-lg rounded-lg" src="src/img/sc2.png">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              Chhabadi Bhat Maroon (CH)
            </p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24">
              <path
                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="pt-1 text-gray-900">₹999</p>
        </a>
      </div>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="#">
          <img class="hover:grow hover:shadow-lg rounded-lg" src="src/img/sc3.png">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              Choktha Bhat (CH)
            </p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24">
              <path
                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="pt-1 text-gray-900">₹999</p>
        </a>
      </div>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="#">
          <img class="hover:grow hover:shadow-lg rounded-lg" src="src/img/sc4.png">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              Elephant In Blue Chhabadi (CH)
            </p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24">
              <path
                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="pt-1 text-gray-900">₹999</p>
        </a>
      </div>

    </div>

  </section>

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

  </section>




  <?php include 'footer.php'; ?>

  <script src="src/script/script.js"></script>
</body>

</html>