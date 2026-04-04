# 🍽️ Restaurant Finder - Full-Stack Assignment

A complete full-stack web application that allows users to search for restaurants based on a keyword. This project demonstrates a modern architecture using a decoupled frontend and backend, intelligent database caching, and a fully containerized development environment.

## 🚀 System Architecture & Tech Stack

This application is divided into two main services:

**1. Frontend (User Interface)**

- **Framework:** Vue.js 3 (Composition API) & Vite
- **Styling:** Bootstrap 5 & Font Awesome
- **HTTP Client:** Axios
- **Key Features:** Real-time search, responsive design, and intuitive loading/error states.

**2. Backend (RESTful API)**

- **Framework:** PHP 8.3 & Laravel 13
- **Database:** MySQL 8.0
- **Documentation:** Swagger / OpenAPI (`l5-swagger`)
- **Key Features:** Keyword searching (defaulting to "Bang Sue"), intelligent Database Caching (1-hour TTL) via Service classes, and structured API responses.

**3. Infrastructure**

- **Containerization:** Docker & Docker Compose

---

## 📁 Project Structure

Following the recommended guidelines, the project is structured as follows:

```text
project-root/
│
├── backend/                # Laravel backend service
│   ├── docker-compose.yml  # Backend container orchestration (PHP, MySQL)
│   ├── src/                # Laravel source code (Controllers, Models, Services)
│   └── src/README.md       # Detailed backend documentation
│
├── frontend/               # Vue 3 frontend service
│   ├── docker-compose.yml  # Frontend container orchestration (Node/Vite)
│   ├── src/                # Vue components, views, and assets
│   └── README.md           # Detailed frontend documentation
│
└── README.md               # You are here
```
