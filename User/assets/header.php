<!-- Header Section -->
<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-semibold">Cafe Chords</h1>
      
      <!-- Cart Feature -->
      <div class="relative">
        <button class="text-xl" onclick="toggleCart()">
          <i class="fas fa-shopping-cart"></i>
          <!-- Cart item count badge -->
          <span id="cart-count" class="absolute top-0 right-0 bg-red-500 text-white rounded-full text-xs px-2">0</span>
        </button>
        <div id="cart" class="absolute top-12 right-0 bg-white shadow-lg p-4 rounded-md hidden w-72 max-h-96 overflow-y-auto">
          <h3 class="text-xl font-semibold mb-4" style="color: black;">Your Cart</h3>
          <ul id="cart-items" class="list-none space-y-2 max-h-64 overflow-y-auto"></ul>
          <div class="mt-4 flex justify-between">
            <span class="font-semibold" style="color: black;">Total:</span>
            <span id="total-price" class="font-semibold" style="color: black;">₹0</span>
          </div>
          <button id="order-button" class="mt-4 w-full bg-green-500 text-white py-2 rounded-md">Order</button>
        </div>
      </div>
    </div>
  </header>