<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Image Viewer</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        img {
            max-width: 100%;
            max-height: 100%;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php
    function random_pic($dir = 'uploads') {
        $files = glob($dir . '/*.*');
        if (empty($files)) {
            return null; // No files found
        }
        $file = array_rand($files);
        return $files[$file];
    }

    $randomImage = random_pic();
    if ($randomImage) {
        echo '<img src="' . htmlspecialchars($randomImage) . '" alt="Random Image">';
    } else {
        echo '<p>No images found.</p>';
    }
    ?>
</body>
</html>
