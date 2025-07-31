# Portfolio & Blog Website (Laravel + Filament)

This project is a **Dynamic Portfolio + Blog Website** built with **Laravel 12**, **Filament Admin Panel**, and **Blade** for the frontend.

---

## ✨ Features
- **Home Page**: Display a short profile, latest portfolios, and recent blog articles.
- **Portfolio Page**: Show all portfolios with a detail page.
- **Blog Page**: List of blog articles and detailed article pages.
- **Contact Page**: Contact form with validation and email sending.
- **Admin Panel (Filament)**: CRUD for `Blog` and `Portfolio` with image upload and auto-generated slug.

---

## 🛠️ Tech Stack
- [Laravel 12](https://laravel.com)
- [Filament Admin Panel](https://filamentphp.com)
- [Blade Template Engine](https://laravel.com/docs/blade)
- [Tailwind CSS](https://tailwindcss.com)
- MySQL Database

---

## 📂 Project Structure
app/
├── Filament/Resources/ (admin resources for Blog & Portfolio)
├── Http/Controllers/Frontend/ (frontend controllers)
├── Http/Requests/ContactRequest.php (contact form validation)
└── Models/ (Blog & Portfolio)

resources/views/
├── layouts/app.blade.php (main layout)
├── home.blade.php
├── portfolio/{index, show}.blade.php
├── blog/{index, show}.blade.php
└── contact/index.blade.php

---

## 🚀 Installation & Run
1. **Clone the Repository**
   ```bash
   git clone <repo-url> portfolio-blog
   cd portfolio-blog
   ```
2. **Install Dependencies**
   ```bash
   composer install
   npm install && npm run build
   ```
3. **Setup Environment**
- Copy .env.example to .env
- Update database configuration:
  ```bash
  DB_DATABASE=your_db
  DB_USERNAME=root
  DB_PASSWORD=
  ```
4. **Generate Aplication Key**
   ```bash
   php artisan key:generate
   ```
5. **Run Database Migration**
   ```bash
   php artisan migrate
   ```
6. **Install Filament and Create Filament Admin User**
   ```bash
   php artisan filament:install --panels
   php artisan make:filament-user
   ```
7. **Start the Project**
   ```bash
   php artisan serve
   ```
- Frontend: http://127.0.0.1:8000
- Admin Panel: http://127.0.0.1:8000/admin

---

## 📨 Contact
If you have any questions or need help, feel free to reach out:

Email: msyukronm12@gmail.com
Instagram: @immunizationn

---

## ✅ Next Steps / To-Do
 Add blog categories
 Add automatic SEO meta tags
 Add dark mode for the frontend
