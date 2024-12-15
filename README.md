# Dairy Farm Management System

A comprehensive system to manage all aspects of a dairy farm including cow management, milk production, feed inventory, sales tracking, and employee management.

## Features

- **Cow Management**: Track and manage cows on the farm, their health, and milk production.
- **Milk Production**: Monitor and record milk production and inventory.
- **Feed Inventory**: Manage feed consumption and inventory for cows.
- **Sales Tracking**: Keep track of sales related to milk, cows, and other dairy products.
- **Employee Management**: Manage farm employees, their roles, and responsibilities.
- **Roles & Permissions**: Administer user roles and permissions to control access to different sections of the system.

## Technologies Used

- **Frontend**: 
  - [Tailwind CSS](https://tailwindcss.com/) for modern, responsive UI design.
  - [Font Awesome](https://fontawesome.com/) for icons.
  
- **Backend**: 
  - [Laravel](https://laravel.com/) for the backend API and user management.
  
- **Database**: 
  - [MySQL](https://www.mysql.com/) for data storage.

## Installation

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL

### Steps to Install

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/dairy-farm-management-system.git
   cd dairy-farm-management-system
Install the required dependencies via Composer:

bash
Copy code
composer install
Copy the .env.example file to .env and update the database and other environment variables:

bash
Copy code
cp .env.example .env
Edit .env to configure your database settings.

Generate the application key:

bash
Copy code
php artisan key:generate
Run the database migrations:

bash
Copy code
php artisan migrate
(Optional) Seed the database with dummy data:

bash
Copy code
php artisan db:seed
Serve the application:

bash
Copy code
php artisan serve
Your application will be available at http://127.0.0.1:8000.

Usage
Log in: Navigate to the login page to access the system with your credentials.
Dashboard: Once logged in, you'll be able to manage cows, milk production, employees, sales, feed, and more from the dashboard.
