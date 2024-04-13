# Smiley Status Checker

## Introduction
Smiley Status Checker is a PHP-based API with an HTML/CSS frontend that facilitates access to the latest Danish Food Administration inspection results, represented as smileys. This tool is designed for businesses needing to automatically update the smiley statuses on their websites, ensuring compliance and transparency in food safety.

## Features
- **API Access**: Provides programmatic access to the latest inspection smiley statuses.
- **Web Interface**: Allows manual searches and displays smileys directly through a web browser.
- **Direct Links**: Offers direct links to detailed inspection reports on the Danish Food Administration's official website.

## Technologies Used
- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS
  
## Installation
1. Clone the repository:git clone https://github.com/kdsn/smiley-status-checker.git
2. Import the MySQL database schema provided in the `database.sql` file.
3. Configure your database connection settings in `config.php`.
4. Deploy the files to your server.

## Configuration
Edit the `config.php` file to set up your database connection:
```php
define('DB_SERVER', 'your_database_server');
define('DB_USERNAME', 'your_database_username');
define('DB_PASSWORD', 'your_database_password');
define('DB_DATABASE', 'your_database_name');
```

## Usage
- **API Endpoint:** Send GET requests to api.php?business_id=xxx to retrieve the smiley status for a specific business.
- **Web Frontend:** Access the web interface by visiting the root URL of where you deployed the project.

### Using the Project
Instructions and examples of API usage can be found in the project's documentation, helping you get started with integrating the Smiley Status Checker into your own application or website.<br><br> **Project URL: [SmileyCheck.DK](https://smileycheck.dk)**

## Contributing
Contributors are welcome! If you have suggestions or improvements, please fork the repository and submit a pull request, or open an issue to discuss what you would like to change.

## Support
For support, please open an issue on the GitHub repository or contact the project maintainers directly through GitHub.

## License
This project is licensed under the MIT License - see the LICENSE file for details.




<!-- 

# Smiley Status Checker
## Description
### Project Overview:
Smiley Status Checker is an API with a web frontend designed to query the Danish Food Administration's "Smiley" scheme. This system displays the latest inspection results of businesses as a smiley icon and provides a direct link to the companys profile on the official Food Administration website. This project was developed in response to the absence of an official API from the Food Administration, making it cumbersome for businesses to manually update their smiley status on their websites.

### Technology:
+ **Backend:** PHP
+ **Database:** MySQL
+ **Frontend:** HTML, CSS

### Features:
+ **API Service:** Enables programmatic queries for smiley status, facilitating the integration and automation of updates for businesses' inspection results.
+ **Web Interface:** A simple, user-friendly frontend that allows manual lookups and display of the smiley status.
### Purpose:
This tool is designed to assist restaurants, cafes, and other food businesses in easily and efficiently updating their food safety inspection reports on their own websites without the need for manual updates each time a new report is available.

### How It Works:
Users can query the API by sending a request with the business identification details. The frontend also allows users to search for and view the smiley status directly through a web browser.

This project is ideal for businesses looking to automate the update of their food safety statuses and for developers who wish to integrate such information into their applications or websites.

## Using the Project
Instructions and examples of API usage can be found in the project's documentation, helping you get started with integrating the Smiley Status Checker into your own application or website.<br><br> **Project URL: [SmileyCheck.DK](https://smileycheck.dk)**

-->
