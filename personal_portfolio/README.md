# Amreen Kaur - Personal Portfolio

Welcome to my personal portfolio website! This project showcases my skills, projects, and experiences. It’s built using **HTML**, **CSS**, **JavaScript**, **PHP**, and **Bootstrap**. The website is fully responsive and includes a contact form that stores submissions in a MySQL database.

---

## Features
- **Responsive Design**: Works on all devices (desktop, tablet, mobile).
- **Contact Form**: Visitors can send me messages, and the data is stored in a database.
- **Dark Mode**: Toggle between light and dark themes.
- **Interactive Animations**: Smooth scrolling and dynamic content.

---

## How to Set Up
1. **Download the Project**:
   - Clone or download the repository to your computer.

2. **Set Up the Database**:
   - Open your MySQL server (e.g., phpMyAdmin).
   - Create a database named `portfolio`.
   - Create a table named `contact form` with the following structure:
     ```sql
     CREATE TABLE `contact form` (
         `id` INT AUTO_INCREMENT PRIMARY KEY,
         `Name` VARCHAR(255) NOT NULL,
         `Email` VARCHAR(255) NOT NULL,
         `Subject` VARCHAR(255) NOT NULL,
         `Message` TEXT NOT NULL,
         `Created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

3. **Configure Database Connection**:
   - Open the `db.php` file in the root directory.
   - Update the database credentials:
     ```php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $database = "portfolio";
     ```

4. **Run the Project**:
   - Place the project folder in your web server’s root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
   - Start your local server (e.g., Apache and MySQL via XAMPP).
   - Open your browser and go to `http://localhost/portfolio_portfolio`.

---

## Folder Structure
```
personal_portfolio/
├── css/ # CSS files
│ ├── bootstrap.min.css # Bootstrap CSS
│ ├── owl.carousel.min.css # Owl Carousel CSS
│ ├── owl.theme.default.min.css # Owl Carousel Theme CSS
│ ├── style.css # Custom stylesheet
│ └── unicons.css # Unicons CSS
├── font/ # Font files
│ ├── unicons.eot # Unicons EOT font
│ ├── unicons.svg # Unicons SVG font
│ ├── unicons.ttf # Unicons TTF font
│ ├── unicons.woff # Unicons WOFF font
│ └── unicons.woff2 # Unicons WOFF2 font
├── images/ # Images and icons
│ ├── icons/ # Skill icons
│ │ ├── android.png # Android icon
│ │ ├── css.png # CSS icon
│ │ ├── html.png # HTML icon
│ │ ├── java.png # Java icon
│ │ ├── js.png # JavaScript icon
│ │ ├── mysql-database.png # MySQL icon
│ │ ├── php.png # PHP icon
│ │ └── python.png # Python icon
│ ├── people/ # Testimonial images
│ │ ├── person1.jpg # Person 1 image
│ │ ├── person2.jpg # Person 2 image
│ │ └── person3.jpg # Person 3 image
│ ├── project/ # Project images
│ │ ├── project1.png # Project 1 image
│ │ ├── project2.png # Project 2 image
│ │ └── project3.png # Project 3 image
│ ├── undraw/ # SVG illustrations
│ │ └── engineer.svg # Engineer illustration
│ ├── bg.jpeg # Background image
│ └── letter-a.png # Logo image
├── js/ # JavaScript files
│ ├── bootstrap.min.js # Bootstrap JS
│ ├── custom.js # Custom JavaScript
│ ├── Headroom.js # Headroom JS
│ ├── jquery-3.3.1.min.js # jQuery library
│ ├── jQuery.Headroom.js # jQuery Headroom plugin
│ ├── owl.carousel.min.js # Owl Carousel JS
│ ├── popper.min.js # Popper JS
│ └── smoothscroll.js # Smooth scroll JS
├── sass/ # SASS files
│ └── toolplate-style.scss # SASS stylesheet
├── amreen_kaur_resume.pdf # Resume file
├── db.php # Database connection script
├── index.php # Main entry point
└── README.md # This file


```
---

## How to Customize
- **Change Content**: Update the text in `index.php` and replace images in the `images/` folder.
- **Add New Sections**: Add new HTML sections in `index.php` and style them in `css/style.css`.

---

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Contact
If you have any questions or just want to say hi, feel free to reach out:
- **Email**: [amreenkaur005@gmail.com](mailto:amreenkaur005@gmail.com)
- **LinkedIn**: [Amreen Kaur](https://www.linkedin.com/in/amreen-kaur00/)
- **GitHub**: [Amreen-kaur1](https://github.com/Amreen-kaur1)
- **Instagram**: [@amreenn.__](https://www.instagram.com/amreenn.__/)

---

Thank you for visiting my portfolio! 😊

