<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
session_start();
$is_premium = isset($_SESSION['premium_access']) && $_SESSION['premium_access'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Access Payment</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }
        h1 {
            color: #333;
            margin-bottom: 1.5rem;
        }
        .price {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }
        .payment-button {
            background-color: #5469d4;
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .payment-button:hover {
            background-color: #4054b2;
        }
        .features {
            margin: 2rem 0;
            text-align: left;
        }
        .features ul {
            list-style-type: none;
            padding: 0;
        }
        .features li {
            margin: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }
        .features li:before {
            content: "✓";
            color: #5469d4;
            position: absolute;
            left: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>App Access</h1>
        <div class="price">€5.00</div>
        <div class="features">
            <ul>
                <li>Full access to all app features</li>
                <li>Premium support</li>
                <li>Regular updates</li>
                <li>No ads</li>
            </ul>
        </div>
        <form action="checkout.php" method="POST">
            <button type="submit" class="payment-button">
                Pay Now
            </button>
        </form>
    </div>
</body>
</html>