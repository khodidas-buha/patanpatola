<!-- Navbar goes here -->
<nav class="bg-white shadow-lg sticky top-0 z-[999]">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<a href="#" class="flex items-center py-4 px-2">
								<img src="src/img/logo.jpg" alt="Logo" class="h-16 mr-2">
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="index.php" class="py-4 px-2 text-black font-semibold hover:text-red-950 transition duration-300">Home</a>
							<a href="about.php" class="py-4 px-2 text-black font-semibold hover:text-red-950 transition duration-300">About Us</a>
                            <li class="group relative dropdown">
                                  <a href="product.php" class="py-4 text-black font-semibold hover:text-red-950 transition duration-300">Product</a>
                                  <div class="group-hover:block dropdown-menu absolute hidden h-auto">
                                      <ul class="top-0 w-48 bg-white shadow px-6 py-8">
                                        <li class="py-1"><a href="Patola.php" class="block py-1 px-1 text-black font-semibold hover:text-red-950 transition duration-300">Patola</a></li>
                                        <li class="py-1"><a href="scarf.php" class="block py-1 px-1 text-black font-semibold hover:text-red-950 transition duration-300">Scarf</a></li>        
                                      </ul>
                                  </div>
                            </li>
                            <a href="awards.php" class="py-4 px-2 text-black font-semibold hover:text-red-950 transition duration-300">Awards</a>
							<a href="materials.php" class="py-4 px-2 text-black font-semibold hover:text-red-950 transition duration-300">Materials</a>
							<a href="visitors.php" class="py-4 px-2 text-black font-semibold hover:text-red-950 transition duration-300">Visitors</a>
							<a href="contact.php" class="py-4 px-2 text-black font-semibold hover:text-red-950 transition duration-300">Contact Us</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						<a href="" class="py-2 px-2 font-medium text-red-950 rounded hover:bg-red-950 hover:text-white transition duration-300">Log In</a>
						<a href="" class="py-2 px-2 font-medium text-red-950 rounded hover:bg-red-950 hover:text-white transition duration-300">Sign Up</a>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-black hover:text-green-500 "x-show="!showMenu"fill="red"stroke-linecap="round"stroke-linejoin="round"stroke-width="2"viewBox="0 0 24 24"stroke="currentColor">
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="pl-2">
					<li class=""><a href="index.php" class="block text-sm px-2 py-4 hover:bg-red-50 font-semibold">Home</a></li>
					<li><a href="about.php" class="block text-sm px-2 py-4 hover:bg-red-50 transition duration-300">About Us</a></li>
					<li><a href="product.php" class="block text-sm px-2 py-4 hover:bg-red-50 transition duration-300">Product</a></li>
                    <li class="pl-4"><a href="Patola.php" class="block text-sm px-2 py-4 hover:bg-red-50 transition duration-300">Patola</a></li>
                    <li class="pl-4"><a href="scarf.php" class="block text-sm px-2 py-4 hover:bg-red-50 transition duration-300">Scarf</a></li>  
					<li><a href="awards.php" class="block text-sm px-2 py-4 hover:bg-red-50 transition duration-300">Awards</a></li>
					<li><a href="materials.php" class="block text-sm px-2 py-4 hover:bg-red-50 transition duration-300">Materials</a></li>
					<li><a href="visitors.php" class="block text-sm px-2 py-4 hover:bg-red-50 transition duration-300">Visitors</a></li>
					<li><a href="contact.php" class="block text-sm px-2 py-4 hover:bg-red-50 transition duration-300">Contact Us</a></li>
				</ul>
			</div>
			
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");
				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>