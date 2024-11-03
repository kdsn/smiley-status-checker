<?php

// Simple router logic can be added here if needed
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
    case '':
        require __DIR__ . '/home.php';
        break;

    case '/dokumentation':
        require __DIR__ . '/documentation.php';
        break;

    case '/eksempler':
        require __DIR__ . '/examples.php';
        break;

    case '/kontakt':
        require __DIR__ . '/contact.php';
        break;

    case '/hjaelp':
        require __DIR__ . '/help.php';
        break;

    case '/betingelser':
        require __DIR__ . '/terms.php';
        break;

    case '/test_db_connection':
        require __DIR__ . '/test_db_connection.php';
        break;

    case '/insert_test_data':
        require __DIR__ . '/insert_test_data.php';
        break;

    case '/api':
        // Redirect to the API section - This will actually be handled by .htaccess and directed to /public/api/index.php
        header("Location: /public/api/index.php");
        break;

    default:
        // 404 Page Not Found
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}