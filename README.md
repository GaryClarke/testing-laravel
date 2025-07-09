# 🧪 Testing Laravel – Course Project

Welcome to the official repo for the **Testing Laravel** section of the [Testing PHP: Laravel & Symfony course](https://www.garyclarke.tech/p/testing-php-laravel-symfony) by [Gary Clarke](https://www.garyclarke.tech).

This project starts with a clean Laravel install and evolves **lesson-by-lesson** into a fully testable Laravel application. You'll follow along as we introduce real-world testing techniques for controllers, jobs, middleware, form requests, and more.

---

## 🎓 About the Course

This course teaches you how to test your Laravel and Symfony apps confidently and efficiently.

- ✅ Learn the **fundamentals** of testing in vanilla PHP
- ✅ Master **Laravel testing** using Pest and PHPUnit
- ✅ Apply **Symfony-specific** testing techniques
- ✅ Understand mocks, fakes, factories, test isolation, and more
- ✅ Develop a workflow that gives you confidence in your code

📘 [View the course here](https://www.garyclarke.tech/p/testing-php-laravel-symfony)

---

## 🧰 How This Repo Works

Each lesson has its own Git branch:

- `main` – Starting point of the course
- `lesson-01`, `lesson-02`, etc. – Completed state at the end of each lesson

You can check out the appropriate branch to match your lesson progress or compare with your own solution.

---

## 🚀 Getting Started

Follow these steps to run the project locally.

### 1. Clone the Repository

```bash
https://github.com/GaryClarke/testing-laravel
cd testing-laravel
````

---

### 2. Install PHP Dependencies

```bash
composer install
```

---

### 3. Run Docker (MySQL Container)

Using Docker is **optional**, but highly recommended.

I use it in this course **only to run MySQL 8**, which saves you the hassle of installing and configuring MySQL manually on your machine.

All you need is [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed — and then just one command to get going.

This setup ensures **you have the exact same environment as me**, which is how I design all my courses. It also means I can provide **technical support confidently**, knowing we're working with the same tools.

Don’t worry if Docker is new to you — it’s just:

```bash
docker compose up -d
```

...and you're ready to roll.

Wait a few seconds for the MySQL container to be ready.

---

### 4. Create the Test Database

Using TablePlus (or your preferred tool), create a test database called:

```
signup_practice_test
```

Alternatively, run this in MySQL:

```sql
CREATE DATABASE signup_practice_test;
```

I have a video demo of creating the DB in the course.

---

### 5. Run Migrations

```bash
php artisan migrate
```

---

### 6. Install Frontend Dependencies

```bash
npm install && npm run build
```

---

✅ That’s it! You're ready to start coding and testing alongside the course.
