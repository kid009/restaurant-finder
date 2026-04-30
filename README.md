# 🍽️ Restaurant Finder 

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20.svg?style=flat&logo=laravel)](https://laravel.com)
[![Livewire](https://img.shields.io/badge/Livewire-3.x-4e56a6.svg?style=flat)](https://laravel-livewire.com)
[![Test](https://img.shields.io/badge/Tests-Passing-green.svg)]()

> A highly scalable, robust web application designed to help users discover, filter, and review local restaurants seamlessly.

## 📑 Table of Contents
- [Overview & Demo](#-overview--demo)
- [Key Features](#-key-features)
- [Architecture & Tech Stack](#-architecture--tech-stack)
- [System Data Flow](#-system-data-flow)
- [Installation & Setup](#-installation--setup)
- [Testing (QA Automation)](#-testing-qa-automation)

---

## 🚀 Overview & Demo

The **Restaurant Finder** provides a seamless user experience for discovering nearby dining spots based on preferences, ratings, and locations. Built with a focus on clean code and maintainability, it handles complex data queries efficiently.

**[🎥 Watch Demo Video Here] (ใส่ลิงก์ YouTube หรือแนบไฟล์ GIF โชว์การใช้งานจริง)**

---

## ✨ Key Features

* **Advanced Search & Filtering:** Filter restaurants by cuisine, rating, and distance.
* **Real-time UI Updates:** Powered by Livewire 3 for a snappy, SPA-like feel without writing heavy JS logic.
* **Interactive Maps & Geolocation:** Integrated mapping for visual discovery.
* **Robust Review System:** Secure and validated user review submissions.

---

## 🛠 Architecture & Tech Stack

This project is built using the **Layered Architecture** and strictly follows the **Action-DTO-Query Pattern** to ensure high maintainability, separation of concerns, and ease of testing.

**Backend:**
* **Framework:** Laravel 12 (Global middleware registered cleanly in `bootstrap/app.php`)
* **Database:** PostgreSQL / MySQL 
* **Design Pattern:** Action-DTO-Query

**Frontend:**
* **UI Engine:** Livewire 3
* **Scripting:** Vanilla JS (ES6+) *(Note: Alpine.js is intentionally excluded to prevent configuration conflicts)*
* **Styling:** Tailwind CSS / Bootstrap 5

**Quality Assurance:**
* **Unit/Feature Testing:** PHPUnit
* **E2E Automation:** (เช่น Playwright / Selenium)

---

## 🔄 System Data Flow (How it works)

To maintain a clean controller, the application processes requests as follows:
1. **Request:** User searches for a restaurant.
2. **DTO (Data Transfer Object):** Search parameters are validated and encapsulated into a `RestaurantSearchDTO`.
3. **Query Class:** The DTO is passed to a specific `Query` class responsible only for fetching data (handling complex joins/filtering).
4. **Action Class:** Business logic (if any, like calculating dynamic scores) is handled by the `Action` class.
5. **Response:** Data is rendered dynamically via Livewire components.

---

## ⚙️ Installation & Setup

Follow these steps to get the project running on your local machine for development or QA testing.

### Prerequisites
* PHP 8.2+
* Composer
* Node.js & NPM
* Docker (Optional but recommended)

### Steps

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/kid009/restaurant-finder.git](https://github.com/kid009/restaurant-finder.git)
   cd restaurant-finder
