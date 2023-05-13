<!DOCTYPE html>
<html lang="en">
<title>About - PatanPatola</title>
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>
    <section class="flex flex-col justify-center items-center reletive">
        <div class="h-30 bg-gray-500 flex justify-center items-center">
            <img class="max-h-full max-w-full" src="src/img/product.png" alt="">
        </div>
        <div class="h-70 flex justify-center items-center absolute">
            <p class="text-4xl text-gray-100 font-bold">Our Product</p>
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
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-red-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Product</a>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="px-4 py-8 md:px-12 md:py-24 lg:px-24 lg:py-32">
        <div class="grid  place-items-center grid grid-cols-1 lg:grid-cols-2 gap-5">
            <div class="relative group">
                <div class="h-96 w-96 bg-center bg-no-repeat bg-cover shadow-xl rounded max-w-full align-middle border-none"
                    style="background-image:url('src/img/product.jpg')"></div>
            </div>
            <div class="">
                <p class="text-gray-600 text-base md:text-lg text-center lg:text-left pb-2">India has a rich and ancient
                    The patola was traditionally woven in a sari length of 5 to 9 yards by 45" to 54" width.
                </p>
                <p class="text-gray-600 text-base md:text-lg text-center lg:text-left pb-2">The range now extends to
                    include tablecloth borders scarves, handkerchiefs
                </p>
                <p class="text-gray-800 text-base md:text-xl text-center lg:text-left pb-2">Design Elements:
                </p>
                <p class="text-gray-600 text-base md:text-lg text-center lg:text-left pb-2">
                    Essentially the design in a patola are based on traditional motifs called "Bhat". These designs
                    include "narikunj", "paan", "phulwadi", "chowkdi", "raas", "chhabdi", "choktha", "navratana",
                    "paanchphul", "sarvariya", "laheriya" etc.
                </p>
                <p class="text-gray-600 text-base md:text-lg text-center lg:text-left pb-2">Flowers, animals, birds and
                    human figures form the basic designs. New geometrical designs using vegetable dyes were developed
                    and displayed at the Festival of India held in Paris, London, Tokyo, Washington and Moscow.
                </p>
                <button
                    class="rounded-full bg-red-900 px-5 py-3 text-sm font-medium text-white transition hover:bg-red-800">
                    Patola
                </button>
                <button
                    class="mr-4 rounded-full bg-red-900 px-5 py-3 text-sm font-medium text-white transition hover:bg-red-800">
                    Scarf
                </button>
            </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>