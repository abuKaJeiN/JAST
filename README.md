# JAST

# A Simple E-Commerce Website

Welcome to my small e-commerce website project! This project was developed as a part of my high school learning journey to understand the basics of building a website using native PHP. It's my first attempt at creating a PHP-based web application, and I'm excited to share it with you.

## Features

- **Product Catalog:** Browse through a variety of products listed on the website.
- **Product Details:** View detailed information about each product, including images, description, and price.
- **User Authentication:** Register an account, log in, and manage your profile.

## W.I.P

- **Shopping Cart:** Will add products to your cart and ability to manage your shopping cart before making a purchase.
- **Order Placement:** Place orders for the selected products and complete the purchase process.
- **Responsive Design:** The website is designed to be responsive, providing a seamless experience across different devices.
- The `config.php` file to update the database connection details (hostname, username, password, and database name).

## Getting Started

To get a copy of this project up and running on your local machine, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/abuKaJeiN/JAST
   ```

   - Rename "main" folder to "htdocs" and put them into xampp directory. If you have htdocs folder already, you will have to temporarily rename it.
 
2. Import the database:

   - Use the provided SQL file (`JAST.sql`) to create the necessary tables and populate them with sample data.

3. Configure the database connection:

   - Import database file to XAMPP as JAST at localhost, without password.

  ```bash
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "JAST";
  ```

4. Run the project:

   - Start Apache and click admin on the xampp panel to access the page. Reminder: it has to be in htdocs directory. \xampp\htdocs

5. Explore and Learn:

   - Explore the codebase, experiment with changes, and use this project as a learning resource to understand the basics of PHP web development.

## Project Structure

- **`routes.php`:** The file containing paths to views.
- **`router.php`:** Router
- **`.htaccess`:** The file stating all accesible directories by the website.
- **`views`:** Websites' views.
- **`uploads`:** Image uploading system used to manage product thumbnail images and its previews.
- **`assets`:** Fonts and website graphics.
- **`api, assets, mocks`:** MydDevelopment, experimentation and ideas folders.

## Technologies Used

- **PHP:** The core programming language used for server-side scripting.
- **HTML, CSS, JavaScript:** Front-end technologies for building the user interface.
- **MySQL:** Database management system for storing product and user information.
