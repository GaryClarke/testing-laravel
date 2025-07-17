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
- `1-show-form`, `2-subscribe-feature-test`, etc.
 
You can check out the appropriate branch to match your lesson progress or compare with your own solution.

---

## 🚀 Getting Started

Follow these steps to run the project locally.

### 1. Clone the Repository

```bash
git clone https://github.com/GaryClarke/testing-laravel
cd testing-laravel
````

---

### 2. Install PHP Dependencies

```bash
composer install
```

---

### 3. Create the SQLite Database File

The project uses SQLite instead of MySQL for simplicity. A blank database file is already included in the repo:

```
database/database.sqlite
```

If you ever need to recreate it:

```bash
touch database/database.sqlite
```

Your `.env` file is already preconfigured to use SQLite:

```
DB_CONNECTION=sqlite
DB_SQLITE_PATH=database/database.sqlite
```

You don't need to worry about migrating the db until we cover it in the course.

---

### 6. Install Frontend Dependencies

```bash
npm install && npm run build
```

---

✅ That’s it! You're ready to start coding and testing alongside the course.
