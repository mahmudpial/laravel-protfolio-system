# Laravel Portfolio Website

A dynamic portfolio website built with **Laravel** that allows an **admin user to manage skills and portfolio projects** through a secure dashboard, while public visitors can view the content.

---

## Features

### Authentication

* Admin registration and login using Laravel authentication.
* Only authenticated users can access the admin dashboard.

### Admin Dashboard

Admin can manage website content dynamically:

* Add, edit, and delete **skills**
* Add, edit, and delete **portfolio projects**
* Upload project images
* View stored data from the database

### Public Website

Visitors can view:

* **Home Page**
* **Skills Page** (list of skills added by admin)
* **Portfolio Page** (list of projects added by admin)
* **Contact Page** (users can send messages)

### Contact System

* Users submit messages through a contact form
* Messages are stored in the database

---

## Technologies Used

* PHP
* Laravel Framework
* Tailwind CSS
* Blade Template Engine
* Eloquent ORM
* MySQL Database

---

## Database Structure

### Users Table

| Column     | Type       |
| ---------- | ---------- |
| id         | bigint     |
| name       | string     |
| email      | string     |
| password   | string     |
| timestamps | timestamps |

### Skills Table

| Column     | Type       |
| ---------- | ---------- |
| id         | bigint     |
| name       | string     |
| level      | string     |
| timestamps | timestamps |

### Portfolios Table

| Column      | Type       |
| ----------- | ---------- |
| id          | bigint     |
| title       | string     |
| description | text       |
| link        | string     |
| image       | string     |
| timestamps  | timestamps |

### Contacts Table

| Column     | Type       |
| ---------- | ---------- |
| id         | bigint     |
| name       | string     |
| email      | string     |
| message    | text       |
| timestamps | timestamps |

---

## Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/portfolio-website.git
cd portfolio-website
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Configure Environment

Copy the example environment file:

```bash
cp .env.example .env
```

Then configure database credentials inside `.env`.

---

### 4. Generate Application Key

```bash
php artisan key:generate
```

---

### 5. Run Migrations

```bash
php artisan migrate
```

---

### 6. Start Development Server

```bash
php artisan serve
```

Visit:

```
http://127.0.0.1:8000
```

---

## Admin Access

1. Register a new admin account
2. Login
3. Go to:

```
/dashboard
```

From the dashboard you can manage skills and portfolio projects.

---

## Project Structure

```
app
 ├── Models
 │    ├── Skill.php
 │    ├── Portfolio.php
 │    └── Contact.php
 │
 ├── Http
 │    ├── Controllers
 │    │     ├── SkillController.php
 │    │     ├── PortfolioController.php
 │    │     └── ContactController.php
 │
resources
 ├── views
 │    ├── home.blade.php
 │    ├── skills.blade.php
 │    ├── portfolio.blade.php
 │    ├── contact.blade.php
 │    └── admin/dashboard.blade.php
```

---

## Security Practices

* Authentication middleware protects admin routes
* CSRF protection enabled
* Form validation implemented
* Mass assignment protection using `$fillable`

---

## Future Improvements

* Admin dashboard analytics
* Portfolio image gallery
* Project categories
* Pagination
* API support
* Responsive UI enhancements

---

## Author

Developed as a Laravel portfolio project for academic coursework.

---

## License

This project is open-source and available for learning and educational purposes.
