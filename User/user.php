<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe Chords</title>
  <!-- Add Tailwind CSS link -->
  <link href="https://cdn.tailwindcss.com" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>

    body {
      background-image: url('img.jpeg'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

  <?php include('assets/header.php')?>

    <main class="container mx-auto p-6 bg-white bg-opacity-90 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Our Menu</h2>

    <div class="mb-6">
      <label for="menu-category" class="block text-lg font-semibold mb-2 text-gray-800">Select Category:</label>
      <select id="menu-category" onchange="showSubMenu()" class="w-full p-2 bg-gray-200 rounded-md">
        <option value="" selected disabled>Select a category</option>
        <option value="tea_coffee">Tea & Coffee</option>
        <option value="shake_mocktail">Shake & Mocktail</option>
        <option value="maggi">Maggi</option>
        <option value="kathi_roll">Kathi Roll</option>
        <option value="bakery_pizza">Bakery Pizza</option>
        <option value="parantha">Parantha</option>
        <option value="omellette">Omellette</option>
        <option value="momos">Momos</option>
        <option value="starter">Starter</option>
        <option value="noodles_rice">Noodles & Rice</option>
        <option value="pasta">Pasta</option>
        <option value="fries">Fries</option>
        <option value="combo">Combo</option>
        <option value="soup">Soup</option>
        <option value="desert">Desert</option>
        <option value="main_course">Main Course</option>
        <option value="rayta">Rayta</option>
        <option value="bread">Bread</option>
      </select>
    </div>
    
    <div id="sub-menu" class="hidden p-4 bg-white rounded-md shadow-md">
      <h3 id="sub-menu-title" class="text-xl font-semibold mb-4 text-gray-800"></h3>
      <div id="food-items" class="grid grid-cols-2 gap-4"></div>
    </div>
  </main>

      <script>
        const menuItems = {
          'tea_coffee': [
            { name: 'Tea', price: 20 },
            { name: 'Coffee', price: 25 },
            { name: 'Large Coffee', price: 50 },
            { name: 'Lemon Tea', price: 20 },
            { name: 'Black Coffee', price: 20 }
          ],
          'shake_mocktail': [
            { name: 'Virgin Mojito', price: 65 },
            { name: 'Mango Shake', price: 80 },
            { name: 'Banana Shake', price: 70 },
            { name: 'Cold Coffee', price: 75 },
            { name: 'Vanilla Shake', price: 75 },
            { name: 'Strawberry Shake', price: 75 },
            { name: 'Kitkat Shake', price: 85 },
            { name: 'Oreo Shake', price: 85 },
            { name: 'Chocolate Shake', price: 75 },
            { name: 'Lemon Soda', price: 30 },
            { name: 'Freshlime Water', price: 25 },
            { name: 'Masala Coke', price: 40 },
            { name: 'Peach Ice Tea', price: 70 },
            { name: 'Lemon Ice Tea', price: 70 },
            { name: 'Butter Scotch Shake', price: 80 },
            { name: 'Chunky Banana Shake', price: 85 }
          ],
          'maggi': [
            { name: 'Plain Maggi', price: 45 },
            { name: 'Masala Maggi', price: 50 },
            { name: 'Veg Maggi', price: 65 },
            { name: 'Cheese Maggi', price: 70 },
            { name: 'Paneer Maggi', price: 100 },
            { name: 'Egg Maggi', price: 65 },
            { name: 'Chicken Maggi', price: 120 },
            { name: 'Aloo Chat', price: 50 },
            { name: 'Chana Chat', price: 60 }
          ],
          'kathi_roll': [
            { name: 'Veg Roll', price: 85 },
            { name: 'Paneer Roll', price: 100 },
            { name: 'Egg Roll', price: 90 },
            { name: 'Chicken Roll', price: 120 }
          ],
          'bakery_pizza': [
            { name: 'Vada Pav', price: 45 },
            { name: 'Aloo Patty', price: 35 },
            { name: 'Sandwich', price: 50 },
            { name: 'Bun Maska', price: 45 },
            { name: 'Cheese Chilli Toast', price: 80 },
            { name: 'Veg Pizza', price: 125 },
            { name: 'Sweet Corn Pizza', price: 130 },
            { name: 'Paneer Pizza', price: 140 },
            { name: 'Chicken Pizza', price: 150 },
            { name: 'Paneer Sandwich', price: 60 },
            { name: 'Club House Sandwich', price: 70 },
            { name: 'Cheese Sandwich', price: 70 },
            { name: 'Veg Burger', price: 60 },
            { name: 'Cheese Burger', price: 90 },
            { name: 'Chicken Burger', price: 110 },
            { name: 'Chicken Sandwich', price: 110 }
          ],
          'parantha': [
            { name: 'Aloo Parantha', price: 50 },
            { name: 'Aloo Pyaz Parantha', price: 55 },
            { name: 'Gobhi Parantha', price: 60 },
            { name: 'Paneer Parantha', price: 85 },
            { name: 'Egg Parantha', price: 75 },
            { name: 'Chicken Parantha', price: 115 }
          ],
          'omellette': [
            { name: 'Plain Omelette', price: 45 },
            { name: 'Bun Omelette', price: 50 },
            { name: 'Bread Omelette', price: 50 },
            { name: 'Masala Omelette', price: 55 },
            { name: 'Chesse Omelette', price: 70 }
          ],
          'momos': [
            { name: 'Veg Momos', price: 80 },
            { name: 'Chicken Momos', price: 100 },
            { name: 'Veg Fried Momos', price: 90 },
            { name: 'Chicken Fried Momos', price: 120 },
            { name: 'Gravy Momos', price: 150 },
            { name: 'Afghani Momos', price: 150 }
          ],
          'starter': [
            { name: 'Dry Manchurian', price: 90 },
            { name: 'Paneer Chilli', price: 180 },
            { name: 'Spring Roll', price: 70 },
            { name: 'Honey Chilli Potato', price: 90 },
            { name: 'Crispy Corn', price: 90 },
            { name: 'Chilli Chicken', price: 350 }
          ],
          'noodles_rice': [
            { name: 'Veg Noodles', price: 80 },
            { name: 'Egg Noodles', price: 95 },
            { name: 'Chicken Noodles', price: 125 },
            { name: 'Cheese Noodles', price: 100 },
            { name: 'Veg Fried Rice', price: 120 },
            { name: 'Egg Fried Rice', price: 140 },
            { name: 'Chicken Fried Rice', price: 150 },
            { name: 'Paneer Fried Rice', price: 150 }
          ],
          'pasta': [
            { name: 'Red Sauce Pasta', price: 120 },
            { name: 'White Sauce Pasta', price: 120 },
            { name: 'Cheese Macaroni', price: 100 },
            { name: 'Masala Macaroni', price: 90 }
          ],
          'fries': [
            { name: 'Plain Fries', price: 50 },
            { name: 'Peri-Peri Momos', price: 60 },
            { name: 'Cheese Fries', price: 70 }
          ],
          'combo': [
            { name: 'Rajma Chawal', price: 80 },
            { name: 'Kadhi Chawal', price: 80 },
            { name: 'Chole Chawal', price: 80 }
          ],
          'soup': [
            { name: 'Veg Soup', price: 40 },
            { name: 'Chicken Soup', price: 60 },
            { name: 'Sweet Corn Soup', price: 40 },
            { name: 'Tomato Soup', price: 40 },
            { name: 'Manchow Soup', price: 45 },
            { name: 'Hot N Sour Soup', price: 40 }
          ],
          'desert': [
            { name: 'Pienapple Pastry', price: 50 },
            { name: 'Chocolate Pastry', price: 50 },
            { name: 'Red Velvet Pastry', price: 50 },
            { name: 'Chocolate Brownie', price: 90 },
            { name: 'Cinnamon Doughnut', price: 60 },
            { name: 'Chocolate Doughnut', price: 60 },
            { name: 'Black Forest', price: 60 }
          ],
          'main_course': [
            { name: 'Paneer Butter Masala', price: 280 },
            { name: 'Kadhi Paneer', price: 280 },
            { name: 'Shahi Paneer', price: 280 },
            { name: 'Paneer Lawabdar', price: 260 },
            { name: 'Butter Chicken', price: 380 },
            { name: 'Kadhai Chicken', price: 380 },
            { name: 'Chicken Curry', price: 380 }
          ],
          'rayta': [
            { name: 'Mix Rayta', price: 40 },
            { name: 'Plain Dahi', price: 30 },
            { name: 'Lassi', price: 40 },
            { name: 'Chache', price: 25 }
          ],
          'bread': [
            { name: 'Tawa Roti', price: 10},
            { name: 'Butter Roti', price: 15}
          ]
        };

        const cartItems = {};
        const cartCountElement = document.getElementById('cart-count');
        const cartItemsElement = document.getElementById('cart-items');
        const totalPriceElement = document.getElementById('total-price');
        const cartElement = document.getElementById('cart');
        const orderButton = document.getElementById('order-button');

        function toggleCart() {
          cartElement.classList.toggle('hidden');
        }

        function showSubMenu() {
          const category = document.getElementById('menu-category').value;
          const subMenu = document.getElementById('sub-menu');
          const subMenuTitle = document.getElementById('sub-menu-title');
          const foodItemsContainer = document.getElementById('food-items');

          if (category) {
            subMenu.classList.remove('hidden');
            subMenuTitle.textContent = category.charAt(0).toUpperCase() + category.slice(1);
            foodItemsContainer.innerHTML = '';

            menuItems[category].forEach(item => {
              const foodDiv = document.createElement('div');
              foodDiv.className = 'p-2 bg-gray-100 rounded-md text-center cursor-pointer hover:bg-gray-200';
              foodDiv.innerHTML = `${item.name} - ₹${item.price}`;
              foodDiv.onclick = () => addToCart(item.name, item.price);
              foodItemsContainer.appendChild(foodDiv);
            });
          }
        }

        function addToCart(foodName, foodPrice) {
          if (cartItems[foodName]) {
            cartItems[foodName].quantity++;
          } else {
            cartItems[foodName] = { price: foodPrice, quantity: 1 };
          }
          updateCart();
        }

        function updateCart() {
          cartCountElement.textContent = Object.keys(cartItems).length;
          cartItemsElement.innerHTML = '';
          let total = 0;

          for (const foodName in cartItems) {
            const item = cartItems[foodName];
            const li = document.createElement('li');
            li.classList.add('flex', 'justify-between', 'items-center', 'bg-gray-100', 'p-2', 'rounded-md', 'border', 'border-gray-300', 'space-x-4');
            li.innerHTML = `
              <span class="text-gray-800">${foodName} - ${item.quantity} x ₹${item.price} = ₹${item.quantity * item.price}</span>
              <button class="text-red-500" onclick="removeItem('${foodName}')">X</button>
            `;
            cartItemsElement.appendChild(li);
            total += item.price * item.quantity;
          }

          totalPriceElement.textContent = `₹${total}`;
        }

        function removeItem(foodName) {
          delete cartItems[foodName];
          updateCart();
        }

        document.getElementById('order-button').addEventListener('click', () => {

          const dataToSend = {
            cartItems: cartItems,
            cartCount: Object.keys(cartItems).length,
            totalPrice: calculateTotalPrice(),
          };

          fetch('save_cart.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json', // Server must handle JSON payload
            },
            body: JSON.stringify(dataToSend),
          })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                alert('Order placed successfully!');
              } else {
                alert('Failed to place order. Please try again.');
              }
            })
            .catch(error => {
              console.error('Error:', error);
              alert('An error occurred while placing your order.');
            });

          resetCart();
        });

        function calculateTotalPrice() {
          return Object.values(cartItems).reduce(
            (total, item) => total + item.price * item.quantity,
            0
          );
        }

        function resetCart() {
          for (const key in cartItems) {
            delete cartItems[key];
          }
          updateCart();
        }
      </script>
  <?php include('assets/footer.php')?>

</body>
</html>
