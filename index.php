<?php
    $monetag_zone_id = "8841127";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monetag Self Click Script By Crazy Developer BD</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- Toastr CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Monetag Script -->
    <script src='//doakosteceet.net/vignette.min.js' data-zone='<?= $monetag_zone_id ?>' data-sdk='show_<?= $monetag_zone_id ?>'></script>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 500px;
        }
        h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        .btn {
            font-size: 1.2rem;
            padding: 12px 30px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .btn-warning {
            background-color: #ffc107;
            border: none;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container animate__animated animate__fadeIn">
    <h2>Watch Ads and Earn Rewards!</h2>
    <div>
        <button id="showAdButton1" class="btn btn-primary">Show Ad 1</button>
        <button id="showAdButton2" class="btn btn-success">Show Ad 2</button>
        <button id="showAdButton3" class="btn btn-warning">Show Ad 3</button>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Toastr JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    function showAd(buttonId) {
        show_<?= $monetag_zone_id ?>().then(() => {
            // Reward function
            toastr.success(`You have watched the ad on ${buttonId} and earned a reward!`, 'Congratulations');
        }).catch((error) => {
            toastr.error('There was an error displaying the ad.', 'Error');
            console.error(error);
        });
    }

    document.getElementById('showAdButton1').addEventListener('click', function() {
        showAd('Show Ad 1');
    });

    document.getElementById('showAdButton2').addEventListener('click', function() {
        showAd('Show Ad 2');
    });

    document.getElementById('showAdButton3').addEventListener('click', function() {
        showAd('Show Ad 3');
    });
</script>

</body>
</html>
