# eHome - Accommodation Rental Platform

## Overview

eHome is a PHP-based web application that helps users find and rent accommodations in Ho Chi Minh City. It allows users to register an account, log in, search for listings, and rent properties.

## Features

### User Registration & Authentication

- Sign up with an email and password.  
- Log in with existing credentials.  
- OTP-based password reset functionality.  

### Accommodation Search & Rental

- Users can search for available accommodations.  
- Users must be logged in to rent a property.  

### Database Integration

- Utilizes MySQL to store user credentials and other necessary data.  

## Project Structure

- **Controller.php** - Handles user authentication, OTP verification, password reset, and rental requests.  
- **db.php** - Establishes a connection to the MySQL database.  
- **homepage.php** - Main page displayed after successful login.  
- **desktop2.css** - Stylesheet for the application's UI.  

## Installation & Setup

### Prerequisites

- A local server environment (e.g., XAMPP, WAMP, MAMP)  
- PHP 7.x or later  
- MySQL Database  

### Steps

1. Clone the repository or download the source code.  
2. Start your local server (Apache & MySQL).  
3. Create a MySQL database named `ehome`.  
4. Import the database schema (if available) into MySQL.  
5. Configure database connection in `db.php`:  

   ```php
   $conn = new mysqli("localhost", "root", "", "ehome") or die("Can't connect");
