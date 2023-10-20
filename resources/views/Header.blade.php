<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71b7145720.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    
    <style>
        /* Custom CSS for glowing cards */
        .fixed-text-container {
   /* Add a border for illustration purposes */
  width: 100%; /* Set a fixed width for the div */
  height: 100%; /* Set a fixed height for the div */
  overflow: hidden; /* Hide any overflow content */
  /* Prevent line breaks */
}

.fixed-text-container p {
  /* Add padding for spacing inside the div */
   /* Remove default margins */
  overflow: hidden; /* Hide any overflow text */
  text-overflow: ellipsis; /* Add an ellipsis (...) for overflow text */
   /* Prevent line breaks */
}

        
        .glowing-card {
            position: relative;
            border: none;
            border-radius: 10px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s, opacity 0.2s;
        }

        .glowing-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        /* Glowing effect */
        @keyframes glowing {
            0% {
                box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            }
            50% {
                box-shadow: 0 0 20px 10px rgba(255, 223, 186, 0.5);
            }
            100% {
                box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            }
        }

        .glowing-card:hover {
            animation: glowing 1s infinite;
        }
    </style>

        </head>