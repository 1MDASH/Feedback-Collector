# 📝 Feedback Collector

A simple web application to collect user feedback using a modern HTML/CSS/JS frontend and a PHP + MySQL backend.  
Perfect for beginners learning full-stack web development! 🚀

---

## 📚 Project Overview

This project allows users to submit their feedback through a web form.  
The feedback is stored securely in a MySQL database for later review.

- **Frontend:** HTML, CSS, JavaScript (Vanilla)
- **Backend:** PHP (Beginner-friendly)
- **Database:** MySQL

---

## 🎯 Features

- Responsive feedback form
- Stores feedback (name, email, phone, message) in a database
- Simple and clean UI
- Beginner-friendly code and structure

---

## 🛠️ Setup Instructions

### 1. Prerequisites

- [XAMPP](https://www.apachefriends.org/) or any local PHP/MySQL server
- Web browser (Chrome, Edge, Firefox, etc.)

### 2. Installation

1. **Clone or Download this Repository**
   ```
   git clone https://github.com/yourusername/feedback_collector.git
   ```
   Or download and extract the ZIP.

2. **Move the Project Folder**
   - Place the `feedback_collector` folder inside your XAMPP `htdocs/2php_start/` directory:
     ```
     c:\xampp\htdocs\2php_start\feedback_collector
     ```

3. **Import the Database**
   - Open [phpMyAdmin](http://localhost/phpmyadmin/)
   - Click "Import" and select `database/schema.sql` from the project folder
   - This will create the `feedback_db` database and `feedbacks` table

4. **Start Apache and MySQL**
   - Open XAMPP Control Panel
   - Click "Start" for Apache and MySQL

5. **Open the App in Your Browser**
   ```
   http://localhost/2php_start/feedback_collector/frontend/index.html
   ```

---

## 🖥️ Project Structure

```
feedback_collector/
│
├── backend/
│   ├── feedback_add.php      # PHP script to handle feedback submissions
│   └── db.php                # (Optional) DB connection file
│
├── database/
│   └── schema.sql            # MySQL database schema
│
├── frontend/
│   ├── index.html            # Main feedback form page
│   ├── script.js             # Handles form submission (AJAX)
│   └── styles.css            # Styling for the form
│
└── README.md                 # Project documentation
```

---

## 🚦 Usage

1. Fill out the feedback form.
2. Click **Submit**.
3. Your feedback is saved to the database and you'll see a thank you message!

---

## 💡 Customization

- You can add more fields to the form by editing `frontend/index.html` and updating the PHP/DB accordingly.
- Style the form by editing `frontend/styles.css`.

---

## 🤝 Contributing

Pull requests are welcome!  
For major changes, please open an issue first to discuss what you would like to change.

---

## 📧 Contact

For questions or suggestions, open an issue or contact [your-email@example.com](mailto:your-email@example.com).

---

## ⭐️ Show your support

If you like this project, please give it a ⭐️ on GitHub!

---

Made with ❤️ by a beginner, for beginners!
