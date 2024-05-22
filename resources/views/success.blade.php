<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .success-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .success-card {
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .success-icon {
            font-size: 4rem;
            color: #28a745;
        }

        .success-message {
            font-size: 1.5rem;
            margin-top: 20px;
            color: #28a745;
        }

        .btn-back {
            margin-top: 30px;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-card">
            <i class="fas fa-check-circle success-icon"></i>
            <h1 class="success-message">Success! Your Purchase was completed.</h1>
            <h3>Transaction Id: {{session()->get('transaction_id')}}</h3>
            <a href="{{route('page.index')}}" class="btn btn-primary btn-back btn-lg">Back to Home</a>
        </div>
    </div>
    <!-- Bootstrap JS and FontAwesome Icons -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>