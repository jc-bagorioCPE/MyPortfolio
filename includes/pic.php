<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .image-container {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin: 20px 0;
    }
    .image-container img {
      width: 30%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }
    .image-container img:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <div class="image-container">
    <img src="images/image1.jpg" alt="Image 1">
    <img src="images/image2.jpg" alt="Image 2">
    <img src="images/image3.jpg" alt="Image 3">
  </div>

</body>
</html>
