
## Setup Instructions

### 1. Install XAMPP
- Download and install XAMPP from [apachefriends.org](https://www.apachefriends.org).
- Start Apache and MySQL services via the XAMPP Control Panel.
- Verify installation by accessing `http://localhost` in a web browser.

### 2. Set Up the Database
- Open phpMyAdmin (`http://localhost/phpmyadmin`).
- Create a database named `blog_app`.
- Import the database schema:
  ```bash
  mysql -u root -p blog_app < C:/xampp/htdocs/Internship-Tasks-for-Web-Development-PHP-MySQL/Task-3/database.sql
# PHP/MySQL Blog Application

This repository contains a professional PHP and MySQL-based blog application developed as part of an internship task. The project implements a **Basic CRUD Application** (Task 1) and enhances it with **Advanced Features** (Task 2), including user authentication, search, pagination, and a responsive user interface using Bootstrap 5.

## Project Overview

### Task 2: Basic CRUD Application
- **Objective**: Develop a simple web application to perform CRUD (Create, Read, Update, Delete) operations with user authentication.
- **Features**:
  - MySQL database (`blog_app`) with `posts` and `users` tables.
  - User authentication (registration, login, logout) with secure password hashing.
  - CRUD operations for blog posts (create, read, update, delete).
- **Deliverables**:
  - Functional CRUD application with user authentication.
  - Database schema (`database.sql`).
  - PHP code for all functionality.
- **Timeline**: 10 days

### Task 3: Advanced Features Implementation
- **Objective**: Enhance the application with search, pagination, and UI improvements.
- **Features**:
  - Search functionality to find posts by title or content.
  - Pagination to display 5 posts per page with navigation links.
  - Responsive UI using Bootstrap 5 and custom CSS for improved UX.
- **Deliverables**:
  - Updated application with search and pagination.
  - Improved user interface design.
- **Timeline**: 10 days

### Development Environment Setup
- **Objective**: Set up a local development environment with PHP, MySQL, Git, and a code editor.
- **Tools**:
  - Local server: XAMPP
  - Code editor: Visual Studio Code with PHP extensions
  - Version control: Git and GitHub
- **Deliverables**:
  - Configured development environment.
  - Initialized Git repository with basic project structure (`index.php`, `README.md`).
- **Timeline**: 3 days
