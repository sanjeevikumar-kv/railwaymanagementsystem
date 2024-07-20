# Railway Management System

## Overview
The Railway Management System is a web-based application developed as a mini-project for the Database Management System course in the second year of B.Tech. This project demonstrates database connectivity using XAMPP on a local computer. The backend is implemented using PHP, while HTML and CSS are used for the frontend.

## Features
- User Registration and Login
- Ticket Booking
- Payment Page
- Schedule Management
- User Interaction

## Technologies Used
- **Frontend:** HTML, CSS
- **Backend:** PHP, MySQL
- **Server:** XAMPP

## Installation and Setup
1. **Clone the repository:**
    ```bash
    git clone https://github.com/sanjeevikumar-kv/railwaymanagementsystem.git
    ```
2. **Start XAMPP:**
   - Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
   - Start Apache and MySQL from the XAMPP Control Panel.

3. **Import the Database:**
   - Open [phpMyAdmin](http://localhost/phpmyadmin/).
   - Create a new database named `railway`.
   - Import the SQL file located in the `database` directory of the project.

4. **Configure the Database Connection:**
   - Open the `config.php` file located in the project directory.
   - Update the database configuration details:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "railway";
    ?>
    ```

5. **Run the Application:**
   - Open your web browser and navigate to `http://localhost/railwaymanagementsystem`.

## Project Planning
- **UML Diagrams**
- **Use Case Diagrams**

## Contribution
This project was a collaborative effort. My contributions include designing the frontend and connecting the code with the local database using MySQL and XAMPP as the server. It was a great experience working with my team to plan and execute this project.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact
- **Name:** Sanjeevi Kumar K V
- **Email:** sanjeevikumarkv@gmail.com
- **GitHub:** [sanjeevikumar-kv](https://github.com/sanjeevikumar-kv)
- **LinkedIn:** [Sanjeevi Kumar K V](https://linkedin.com/in/sanjeevi-kumar-k-v-a63a35221)
- **Google Developer Profile:** [Sanjeevi Kumar K V](https://g.dev/sanjeevikumarkv)

## Acknowledgements
- This project was completed as part of the Database Management System course in the second year of B.Tech at K Ramakrishnan College of Engineering.
- Special thanks to my team members and instructors who provided guidance and support throughout the project.

[README FILE.pdf](https://github.com/sanjeevikumar-kv/railwaymanagementsystem/files/11382987/README.FILE.pdf)
