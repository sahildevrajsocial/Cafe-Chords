<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
    <?php include('assets/navbar.php')?>
    <div class="container">
    <h2 class="text-center">Cafe Menu</h2>

    <!-- First Dropdown: Category -->
    <div class="form-group">
        <label for="menu">Choose a Category</label>
        <select class="form-control" id="menu" name="menu" onchange="updateSubMenu()">
            <option value="">Select Category</option>
            <option value="tea_coffee">Tea & Coffee</option>
            <option value="shake_mock">Shake & Mocktail</option>
            <option value="maggi">Maggi</option>
            <option value="kathi_roll">Kathi Roll</option>
            <option value="bakery_pizza">Bakery Pizza</option>
            <option value="parantha">Parantha</option>
            <option value="omelette">Omelette</option>
            <option value="momos">Momos</option>
            <option value="starter">Starter</option>
            <option value="noodle_rice">Noodles & Rice</option>
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

    <!-- Second Dropdown: Item -->
    <div class="form-group">
        <label for="submenu">Choose Item</label>
        <select class="form-control" id="submenu" name="submenu">
            <option value="">Select Item</option>
        </select>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function updateSubMenu() {
        var menu = document.getElementById("menu").value;
        var submenu = document.getElementById("submenu");

        // Clear current submenu options
        submenu.innerHTML = '<option value="">Select Item</option>';

        var options = [];

        // Populate submenu based on menu selection
        if (menu === "tea_coffee") {
            options = ['Tea', 'Coffee', 'Large Coffee', 'Lemon Tea', 'Black Coffee'];
        } else if (menu === "shake_mock") {
            options = ['Virgin Mojito', 'Mango Shake', 'Banana Shake', 'Cold Coffee', 'Vanilla Shake', 'Strawberry Shake', 'Kitkat Shake', 'Oreo Shake', 'Chocolate Shake', 'Lemon Soda', 'Freshlime Water', 'Masala Soda', 'Peach Ice Tea', 'Lemon Ice Tea', 'Butter Scotch Shake', 'Chunky Banana Shake'];
        } else if (menu === "maggi") {
            options = ['Plain Maggi', 'Masala Maggi', 'Veg Maggi', 'Cheese Maggi', 'Paneer Maggi', 'Egg Maggi', 'Chicken Maggi'];
        } else if (menu === "kathi_roll") {
            options = ['Veg Roll', 'Paneer Roll', 'Egg Roll', 'Chicken Roll'];
        } else if (menu === "bakery_pizza") {
            options = ['Vada Pav', 'Aloo Patty', 'Sandwich', 'Bun Maska', 'Cheese Chill Toast', 'Veg Pizza', 'Sweet Corn Pizza', 'Paneer Pizza', 'Chicken Pizza', 'Paneer Sandwich', 'Club House Sandwich', 'Cheese Sandwich', 'Veg Burger', 'Cheese Burger', 'Chicken Burger', 'Chicken Sandwich'];
        } else if (menu === "parantha") {
            options = ['Aloo Parantha', 'Aloo Pyaz Parantha', 'Gobhi Parantha', 'Paneer Parantha', 'Egg Parantha', 'Chicken Parantha'];
        } else if (menu === "omelette") {
            options = ['Plain Omelette', 'Bun Omelette', 'Bread Omelette', 'Masala Omelette', 'Cheese Omelette'];
        } else if (menu === "momos") {
            options = ['Veg Momos', 'Chicken Momos', 'Veg Fried Momos', 'Chicken Fried Momos', 'Gravy Momos', 'Afghani Momos'];
        } else if (menu === "starter") {
            options = ['Dry Manchurian', 'Paneer Chilli', 'Spring Roll', 'Honey Chilli Potato', 'Cripsy Corn', 'Chilli Chicken'];
        } else if (menu === "noodle_rice") {
            options = ['Veg Noodles', 'Egg Noodles', 'Chicken Noodles', 'Cheese Noodles', 'Veg Fried Rice', 'Egg Fried Rice', 'Chicken Fried Rice', 'Paneer Fried Rice'];
        } else if (menu === "pasta") {
            options = ['Red Sauce Pasta', 'White Sauce Pasta', 'Cheese Macroni', 'Masala Macroni'];
        } else if (menu === "fries") {
            options = ['Plain Fries', 'Peri-Peri Fries', 'Cheese Fries'];
        } else if (menu === "combo") {
            options = ['Rajma Chawal', 'Kadhi Chawal', 'Chole Bhature'];
        } else if (menu === "soup") {
            options = ['Veg Soup', 'Chicken Soup', 'Sweet Corn Soup', 'Tomato Soup', 'Manchow Soup', 'Hot N Sour Soup'];
        } else if (menu === "desert") {
            options = ['Pineapple Pastry', 'Chocolate Pastry', 'Red Velvet Pastry', 'Chocolate Brownie', 'Cinnamon Doughnut', 'Chocolate Doughnut', 'Black Forest'];
        } else if (menu === "main_course") {
            options = ['Paneer Butter Masala', 'Kadhi Paneer', 'Shahi Paneer', 'Paneer Lawabdaar', 'Butter Chicken', 'Kadhi Chicken', 'Chicken Curry'];
        } else if (menu === "rayta") {
            options = ['Mix Rayta', 'Plane Dahi', 'Lassi', 'Chache'];
        } else if (menu === "bread") {
            options = ['Tawa Roti', 'Butter Roti'];
        }

        // Append new options to submenu
        options.forEach(function(item) {
            var option = document.createElement("option");
            option.value = item.toLowerCase().replace(" ", "-");
            option.text = item;
            submenu.appendChild(option);
        });
    }
</script>
    <?php include('assets/footer.php')?>
</body>
</html>