# 🌴 Taskify Tropical - Task Management System
A vibrant and modern task management application built with Laravel 11, Tailwind CSS, and Alpine.js. Designed with a "Tropical Punch" aesthetic for students at Universitas Ciputra Surabaya.

## ✨ Features
* **Live Search**: Search tasks in real-time with debouncing logic.
* **Modular Design**: Clean code structure using Blade Components (Header, Footer, SearchBar, Card).
* **Instant Modals**: Create and Edit tasks via Alpine.js pop-ups (No page refresh).
* **Category Grouping**: Tasks automatically grouped by Status (On Going, Pending, Completed).
* **Vibrant UI**: Custom "Tropical Punch" color palette with Poppins typography.

---

## 🚀 Setup Instructions

Follow these steps to get the project running on your local machine:

### 1. Clone the Repository
git clone https://github.com/yourusername/taskify-tropical.git
cd taskify-tropical

### 2. Install Dependencies
Install PHP dependencies via Composer and JavaScript dependencies via NPM:
composer install
npm install

### 3. Environment Setup
Copy the example environment file and generate an application key:
cp .env.example .env
php artisan key:generate

### 4. Database Configuration
1. Create a new database in your local SQL (e.g., MySQL/XAMPP) named taskify_db.
2. Open the .env file and update your database credentials:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=taskify_db
   DB_USERNAME=root
   DB_PASSWORD=

### 5. Run Migrations
Run the migrations to create the necessary tables:
php artisan migrate

### 6. Compiling Assets
Run the development server for Vite to compile CSS and JS:
npm run dev

### 7. Start the Server
Open a new terminal and start the Laravel development server:
php artisan serve

Access the application at http://127.0.0.1:8000.

---

## 🎨 Color Palette Reference
- Tropical Teal: #069494 (Header, Primary Buttons)
- Tropical Orange: #FF8243 (On Going Category)
- Tropical Yellow: #FCE883 (Pending Category, New Task Button)
- Tropical Pink: #FFC0CB (Completed Category, Footer BG)

---

## 🛠️ Tech Stack
* Framework: Laravel 11
* Styling: Tailwind CSS
* Interactions: Alpine.js
* Icons: Heroicons
* Typography: Poppins (Google Fonts)

---

**Made with ❤️ by Priscilia King**