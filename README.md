# Simple-E-Commerce-Website ✅

This is a simple e-commerce website built using PHP and MySQL. Users can log in, browse categories (mobile, laptop, VGA, other accessories), add items to their cart, view the total price, and proceed to payment. After submitting the payment form, the system confirms the order as successful.
<br><br>
Features
- User login system.
- Product categories: mobile, laptop, VGA, other accessories.
- Add products to the shopping cart.
- Display total price in the cart.
- Proceed to payment and simulate order completion.
- MySQL database for storing users and product information.

Technologies Used
- PHP
- MySQL (with phpMyAdmin for database management)
- HTML/CSS
- JavaScript (optional for front-end interactivity)
- XAMPP (Apache server and MySQL database)

<h2>Installation Guide</h2>
Step 1:<br> Download the ZIP file, then extract it.<br><br>

Step 2:<br> Move the Project to XAMPP htdocs Folder<br>
After extracting the files, move the project folder to the htdocs directory inside the XAMPP installation folder. Typically, this path looks like:<br>

```
C:\xampp\htdocs\
```
So, your project files should now reside in:<br>
```
C:\xampp\htdocs\simple-ecommerce\
```

Step 3:<br> Start XAMPP<br>
Open XAMPP Control Panel.<br>
Start Apache and MySQL modules.<br>

Step 4:<br> Create the Databases<br>
Open your web browser and go to:<br>
```
http://localhost/phpmyadmin
```
Create two new databases:<br>
shopping (for storing product details)<br>
users (for storing user account details)<br><br>
Import the SQL files to their respective databases:
- Go to the Import tab in phpMyAdmin.
- Import the shopping.sql file for the shopping database.
- Import the users.sql file for the users database.
