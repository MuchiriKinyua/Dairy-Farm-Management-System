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


# MMAZIWA

![Screenshot_20221211-142559](https://github.com/MuchiriKinyua/Mmaziwa/assets/113877377/c19433ca-f2b4-40bc-ab75-39677d6b8801)


MMaziwa is a small-scale Dairy Farm Information Management System refers to a system that automates the activities of small-scale dairy farmers.This is because farmers practicing this type of farming keep their records manually or even don't keep their records at all. 
By having a platform by which they can input their cows' data they can keep it safe and secure hence having references in the future. 
Also, they can input through the app the amount of milk they have sold and how much they earned by doing so.

# Problem Statement
The challenge in collecting proper and accurate milk production information hinders the exploitation of Kenya's full potential for the economic contribution of the dairy sector. 
Many choose to memorize the cows' inputs and outputs. This is dangerous because the cows' details are so many and ever-changing on a day-to-day basis. 
Novice farmers cannot memorize such especially if they have a quite large number of cows that are being milked at a given period e.g., 4 (a large number for a small-scale farmer). 
Also, because they don't record the amount of input they are feeding the cattle, they are prone to overfeeding the animals or even underfeeding them.

# In-scope
Enable the farmer to input their details such as name, email address, and password. This will be necessary for the event a farmer losses his/her device.
Enable the recording of a cow's milk production for the entire day.
Store the cows' data which can be used for future reference by the farmer.

# Out-of-scope
Record other outputs of the cow such as meat production since the app strictly deals with dairy cattle.
Record inputs of any other animal except a dairy cow such as a goat.
Record inputs of a cow i.e., its' not focused on what a cow is consuming but rather what it is producing.

# Justification 
All types of farmers will be able to use it hence ensuring the average learned farmer from the rural area can use it.
It is much easier to input a record digitally than to get a book and start filling it.
The farmers can access their records even if the records phone gets lost since they can simply login into their account and get their records back unlike when a book is lost, the records are gone forever.

# Application Development Methodology 
The waterfall model is used for the development of the recording system for milk producers. This methodology is considered the classic style of software development which clarifies the application development process in a linear sequential flow. 
This means that any phase in the development process starts when the earlier phase is completed.

# Conclusions
The project was a success whereby the said system (mobile application) was designed and can now be used in real life by a degree student.
It contains real-life applications such as the M-Pesa platform whereby many are now used to it and therefore nothing new.
It is also so simple to login details hence will be much easy for the farmers to key in their day-to-day activities.

# Recommendations
The county governments should incorporate such an application to see how it can be used by small-scale dairy farmers.
They should also improve it for it to move to the next level i.e., Large-scale dairy users, and in this case, administrators will be involved in monitoring milk production.
