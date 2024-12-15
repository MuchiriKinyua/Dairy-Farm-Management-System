![Screenshot from 2024-12-15 17-51-49](https://github.com/user-attachments/assets/6595c920-48d4-4f32-b07f-856831e9977a)

# Dairy Farm Management System </br>

A comprehensive system to manage all aspects of a dairy farm including cow management, milk production, feed inventory, sales tracking, and employee management. </br>

## Features </br>

- **Cow Management**: Track and manage cows on the farm, their health, and milk production. </br>
- **Milk Production**: Monitor and record milk production and inventory. </br>
- **Feed Inventory**: Manage feed consumption and inventory for cows. </br>
- **Sales Tracking**: Keep track of sales related to milk, cows, and other dairy products. </br>
- **Employee Management**: Manage farm employees, their roles, and responsibilities. </br>
- **Roles & Permissions**: Administer user roles and permissions to control access to different sections of the system. </br>

## Technologies Used </br>

- **Frontend**:  </br>
  - [Tailwind CSS](https://tailwindcss.com/) for modern, responsive UI design. </br>
  - [Font Awesome](https://fontawesome.com/) for icons. </br>
  
- **Backend**:  </br>
  - [Laravel](https://laravel.com/) for the backend API and user management. </br>
  
- **Database**:  </br>
  - [MySQL](https://www.mysql.com/) for data storage. </br>

## Installation </br>

### Prerequisites </br>

- PHP >= 7.4 </br>
- Composer </br>
- MySQL </br>

### Steps to Install </br>

1. Clone the repository: </br>

   ```bash </br>
   git clone https://github.com/MuchiriKinyua/Dairy-Farm-Management-System </br>
   cd dairy-farm-management-system </br>
Install the required dependencies via Composer: </br>

## bash </br>
composer install </br>
Copy the .env.example file to .env and update the database and other environment variables: </br>

## bash </br>
cp .env.example .env </br>
Edit .env to configure your database settings. </br>

Generate the application key: </br>

## bash </br>
php artisan key:generate </br>
Run the database migrations: </br>

## bash </br>
php artisan migrate </br>
(Optional) Seed the database with dummy data: </br>

## bash </br>
php artisan db:seed </br>
Serve the application: </br>

## bash </br>
php artisan serve </br>
Your application will be available at http://127.0.0.1:8000. </br>

## Usage </br>
Log in: Navigate to the login page to access the system with your credentials. </br>
Dashboard: Once logged in, you'll be able to manage cows, milk production, employees, sales, feed, and more from the dashboard.
