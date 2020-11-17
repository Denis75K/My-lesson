<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Батарейка</title>
  <style>
  .b, after:hover {
    background-color green
  }
  .b {
    width: 300px;
    height: 100px;
    border: 5px solid black;
    margin-bottom: 10px;
    position: relative;
    left: 35%;
    top: 50%;
    box-sizing: border-box;
  }
  .b::after {
    content: '';
    display: block;
    width:25px;
    height:35px;
    background-color: black;
    position: absolute;
    top: 30%;
    left: 100%;
  }
  .red::before {
    content: '';
    background-color: red;
    width: calc(100% / 3);
    height: 100%;
    position: absolute;
  }
  .yellow::before {
    content: '';
    background-color: yellow;
    width: calc(100% / 1.5);
    height: 100%;
    position: absolute;
  }
  .green::before {
    content: '';
    background-color: green;
    width: 100%;
    height: 100%;
    position: absolute;
  }
  </style>
</head>
<body>
  <div class="b red"></div>
  <div class="b yellow"></div>
  <div class="b green"></div>
</body>
</html>