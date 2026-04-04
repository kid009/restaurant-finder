# Restaurant Finder Frontend

A modern, responsive web application for finding restaurants, built with Vue 3 and Vite.

## 🚀 Features

- **Real-time Search:** Filter restaurants by name with built-in debouncing for performance.
- **Responsive Design:** Optimized for all screen sizes using Bootstrap 5.
- **Interactive UI:** Loading indicators, error handling, and intuitive feedback for empty results.
- **API Integration:** Seamlessly fetches data from a backend service using Axios.

## 🛠️ Technologies Used

- **Framework:** [Vue.js 3](https://vuejs.org/) (Composition API with `<script setup>`)
- **Build Tool:** [Vite](https://vitejs.dev/)
- **Styling:** [Bootstrap 5](https://getbootstrap.com/)
- **HTTP Client:** [Axios](https://axios-http.com/)
- **Icons:** [Font Awesome](https://fontawesome.com/)
- **Containerization:** [Docker](https://www.docker.com/) & [Docker Compose](https://docs.docker.com/compose/)

## 🏁 Getting Started

### Prerequisites

- [Node.js](https://nodejs.org/) (v20 or higher recommended)
- [npm](https://www.npmjs.com/)
- [Docker](https://www.docker.com/get-started) (optional, for containerized setup)

### Local Development

1. **Install dependencies:**
   ```bash
   npm install
   ```

2. **Run the development server:**
   ```bash
   npm run dev
   ```
   The app will be available at `http://localhost:5173`.

3. **Build for production:**
   ```bash
   npm run build
   ```

### Running with Docker

You can use Docker Compose to spin up the application quickly:

```bash
docker-compose up --build
```

The application will be accessible at `http://localhost:5173`.

## ⚙️ Configuration

The application is configured to connect to a backend API at `http://localhost:8081`. Ensure your backend service is running for the search functionality to work.

## 📁 Project Structure

- `src/components/FinderComponent.vue`: The main restaurant search and display logic.
- `src/App.vue`: The root component.
- `docker-compose.yml` & `Dockerfile`: Container configuration.
- `vite.config.js`: Vite build configuration.
