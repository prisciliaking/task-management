# 🌴 Taskify Tropical - Task Management System
A vibrant and modern task management application built with Laravel 11, Tailwind CSS, and Alpine.js. Designed with a "Tropical Punch" aesthetic for students at Universitas Ciputra Surabaya.

## ✨ Features
* **Search**: Search tasks based on title, category.
* **Category Grouping**: Tasks automatically grouped by Status (On Going, Pending, Completed).

---

## 🚀 Setup Instructions

Follow these steps to get the project running on your local machine:

### 1. Clone the Repository
git clone https://github.com/yourusername/taskify-tropical.git
cd taskify-tropical

### 2. Install Dependencies
composer install
npm install

### 3. Environment Setup
Copy the example environment file and generate an application key:
cp .env.example .env
php artisan key:generate

### 4. Database & Session Configuration
1. Buat database baru (misal: taskify_db) di MySQL/XAMPP.
2. Update .env file:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=taskify_db
   DB_USERNAME=root
   DB_PASSWORD=

3. 💡 **PENTING**: Jika muncul error terkait session/database saat pertama kali dijalankan, ubah Session Driver di .env menjadi:
   SESSION_DRIVER=file

### 5. Run Migrations
php artisan migrate

### 5.5 Seed Database (Optional)
Untuk mengisi data contoh (dummy data) agar tampilan tidak kosong:
php artisan db:seed

### 6. Compiling Assets
npm run dev

### 7. Start the Server
Jika `php artisan serve` tidak bisa digunakan, gunakan alternatif perintah PHP native berikut:

Pilihan A:
php artisan serve

Pilihan B (Alternatif):
php -S 127.0.0.1:9999 -t public

Akses aplikasi di http://127.0.0.1:8000 atau http://127.0.0.1:9999.

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
Universitas Ciputra Surabaya
