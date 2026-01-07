# Iron Software - Frontend Test (CodeIgniter 4)

This project is a high-fidelity implementation of the Iron Software landing page using **CodeIgniter 4**.

## 🚀 Getting Started

### Prerequisites
*   PHP 7.4 or higher
*   Composer

### Installation
1.  Navigate to the project directory:
    ```bash
    cd frontend-ci4
    ```
2.  Install dependencies:
    ```bash
    composer install
    ```

### Running the Application (Local)
Start the local development server:
```bash
php spark serve
```
Access the site at `http://localhost:8080`.

### Running with Docker 🐳
You can also run the application using Docker, which ensures a consistent environment.

**Start the container:**
```bash
docker-compose up -d
```
*(This will automatically build the image the first time you run it)*

**Stop the container:**
```bash
docker-compose down
```

**Rebuild the container:**
(Use this if you modify `Dockerfile` or add new dependencies in `composer.json`)
```bash
docker-compose up -d --build
```


## 📁 Project Structure
*   **`app/Views/index.php`**: Main landing page view.
*   **`app/Controllers/Home.php`**: Controller managing the view.
*   **`app/Repositories/JsonContentRepository.php`**: Handles data retrieval.
*   **`app/Data/content.json`**: Source of truth for dynamic content.
*   **`public/assets/`**: CSS, JS, fonts, and images.

## ✅ QA & Validation
A comprehensive QA Checklist has been included in this repository:
👉 [QA_Checklist.md](QA_Checklist.md)
