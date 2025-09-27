🍽️ Foodoko – Smart Restaurant Management System

Foodoko is a Smart Restaurant Management System built to streamline the dining experience for both customers and restaurant staff.

  -Customers can browse menus, place orders, and reserve tables online.
  
  -Admins/staff can manage orders, track reservations, and handle billing & inventory.
  
---

Frontend: HTML, CSS

Backend: PHP, MySQL

Server: XAMPP (Apache + MySQL)

---

⚙️ Installation & Setup
    Follow these steps to set up the project locally using XAMPP:
    

1. Prerequisites
   
      -Install XAMPP (Apache + MySQL).
  
      -Git (optional, for cloning the repository).
  
      -A modern web browser (Chrome/Edge/Firefox).
   

2. Clone or Download the Project:
 
        git clone https://github.com/prachetakadam23/Foodoko-Smart_restaurant_management_system.git
   
  (Or download the ZIP and extract it)


3. Move Project to htdocs
   
      Copy the project folder into the XAMPP htdocs directory.
   
      Example (Windows default path):
   
        C:\xampp\htdocs\foodoko


4. Start XAMPP Services
   
      -Open XAMPP Control Panel
  
      -Start Apache and MySQL


5. Configure the Database
   
    i. Open phpMyAdmin
   
    ii. Create a new database

          foodoko
   
    iii.Import the SQL schema from:

        /database/foodoko.sql


6. Update Database Connection (if needed)
   
    -Open backend/config.php (or wherever DB connection is handled) and check:
   
       $host = "localhost";
       $user = "root";       // default user for XAMPP
       $password = "";       // default is empty in XAMPP
       $dbname = "foodoko";


7. Run the Project
  -Open browser and visit:
   
        http://localhost/foodoko/index.html
   

🎉 That’s it! The Foodoko Smart Restaurant Management System is now running on your local server.
