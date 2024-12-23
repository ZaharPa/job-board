# Job-board

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Job-board

Job-board is a web application built with Laravel that allows users to post and apply for jobs. It provides a user-friendly interface for job seekers and employers to interact and manage job listings and applications.

### Features

- **Job Listings**: Employers can create and manage job listings.
- **Job Applications**: Job seekers can apply for jobs and manage their applications.
- **User Authentication**: Secure login for users.
- **Job Search**: Users can search for jobs based on various criteria.
- **Job Details**: Detailed view of job listings with information about the employer and job requirements.
- **Application Management**: Employers can view and manage applications for their job listings.

## Technical Details

### Technologies Used

- **Framework**: Laravel 11
- **Database**: MySQL
- **Frontend**: Blade templates, Tailwind CSS
- **Authorization**: Laravel Gates and Policies
- **Job Processing**: Laravel Queues

### Installation

To get started with Job-board, follow these steps:

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/job-board.git
    cd job-board
    ```

2. Install dependencies:
    ```sh
    composer install
    npm install
    npm run dev
    ```

3. Set up the environment:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure the database in the [.env](http://_vscodecontentref_/0) file and run migrations:
    ```sh
    php artisan migrate
    ```

5. Seed the database with initial data (optional):
    ```sh
    php artisan db:seed
    ```

6. Start the development server:
    ```sh
    php artisan serve
    ```

## Usage

- Visit `http://localhost:8000` in your browser to access the application.
- Register a new account or log in with existing credentials.
- Employers can create and manage job listings.
- Job seekers can search for jobs and apply for them.

## License

Job-board is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Page Look

![MyJobs](https://github.com/user-attachments/assets/4ec4bb18-d6a9-427a-bc2b-a7ba8653edb0)

![Main Page](https://github.com/user-attachments/assets/97384560-e8c5-4461-a68e-617c5d4a770e)

![Job Application](https://github.com/user-attachments/assets/b6b3faac-810b-4853-be21-d7559cf2aed2)



