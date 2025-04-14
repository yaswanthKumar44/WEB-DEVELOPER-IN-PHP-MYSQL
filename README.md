# 💻 PHP CRUD Application with User Authentication

This repository is part of a PHP & MySQL learning project. It includes two major tasks:

- **Task 1:** Setting up a PHP development environment.
- **Task 2:** Building a functional CRUD application with user authentication.

---

## ✅ Task 1: Setting Up the Development Environment

### 🎯 Objective
Set up a local development environment for PHP and MySQL. Configure Git and GitHub for version control.

---

### 🛠️ Steps

#### 1. Install a Local Server Environment
- Download and install **XAMPP**, **WAMP**, or **MAMP**:
  - [XAMPP Download](https://www.apachefriends.org/index.html)
  - [WAMP Download](https://www.wampserver.com/en/)
- Start **Apache** and **MySQL** services.
- Open [http://localhost](http://localhost) to verify that the server is running.

#### 2. Install a Code Editor
- Recommended editors:
  - [Visual Studio Code](https://code.visualstudio.com/)
  - [Sublime Text](https://www.sublimetext.com/)
- Install PHP extensions (like PHP IntelliSense, PHP Debug).

#### 3. Configure Git & GitHub
- Install Git: [https://git-scm.com/](https://git-scm.com/)
- Create a [GitHub](https://github.com/) account.
- Initialize your project directory as a Git repo:
  ```bash
  git init
  git add .
  git commit -m "Initial commit - Task 1 setup"
  git remote add origin https://github.com/yourusername/your-repo-name.git
  git push -u origin main

# Basic PHP CRUD Application with User Authentication

This project is a simple web application built with PHP and MySQL that allows users to perform **Create, Read, Update, and Delete (CRUD)** operations on blog posts and includes basic user authentication. The project is designed to be a learning tool for building PHP-based web applications.

## Features

- **CRUD Operations:** 
  - Create new posts
  - Display a list of posts
  - Edit existing posts
  - Delete posts

- **User Authentication:** 
  - User registration
  - User login and logout
  - Secure password storage with hashing
  - Session management for logged-in users

- **Responsive Design:** 
  - Basic responsive CSS for a good user experience on both desktop and mobile devices.

## Prerequisites

- **Web Server:** Apache, Nginx, or any PHP-supported server.
- **PHP:** Version 7.0 or higher.
- **MySQL:** Version 5.7 or higher.
- **Local Environment:** Tools like [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](http://www.wampserver.com/) can help set up Apache, MySQL, and PHP quickly.

## Installation

1. **Clone the Repository**

   Clone this repository to your local machine:
   ```bash
   git clone https://github.com/yourusername/WEB-DEVELOPER-IN-PHP-MYSQL.git
