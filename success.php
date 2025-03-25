<?php
session_start();
$_SESSION['premium_access'] = true;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betaling Succesvol - Premium Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .success-icon {
            font-size: 4rem;
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="success-icon mb-4">✓</div>
                <h1 class="display-4 mb-4">Bedankt voor je aankoop!</h1>
                <p class="lead mb-4">Je hebt nu toegang tot alle premium content.</p>
                <a href="/index.php" class="btn btn-primary btn-lg">Terug naar Home</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 