<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>квадраты</title>
  <style>
    div {
      display: inline-block;
      width: 100px;
      height: 100px;
      margin-right: 15px;
    }
    .black {
      background-color: black;
      transition: width 1s ease-in-out, background-color 1s linear 1s;
    }
    .blue {
      background-color: DeepSkyBlue;
    }
    div:hover {
      background: Orange;
    }
  </style>
</head>
<body>
  <div class="black"></div>
  <div class="blue"></div>
  <div class="black"></div>
  <div class="blue"></div>
  <div class="black"></div>
</body>
</html>