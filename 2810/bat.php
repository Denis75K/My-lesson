<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Батарейка</title>
  <style>
  body {
    margin: 0
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
    width: 0;
    height: 100%;
    position: absolute; 
    transition: width 2s linear, background-color 2s linear;
  }
  .yellow::before {
    content: '';
    background-color: yellow;
    width: 0;
    height: 100%;
    position: absolute;
    transition: width 2s linear, background-color 2s linear;
  }
  .green::before {
    content: '';
    background-color: green;
    width: 0%;
    height: 100%;
    position: absolute;
    transition: width 2s linear, background-color 2s linear;
  }
  .red:hover:before {
    background-color: red;
    width: 33%;
  }
  .yellow:hover:before {
    background-color: yellow;
    width: 66%;
  }
  .green:hover:before {
    background-color: green;
    width: 100%;
  }
  .text {
      background: #ED1C24;
      min-height: 150px;
      font-family: Impact, sans-serif;
      font-size: 100px;
      color: #fff;
      padding-left: 20px; /* Отступ слева */
      position: relative; /* Относительное позиционирование */
      transition: background-color 2s linear, color 2s linear;
    }
    .text span {
      position: absolute; /* Абсолютное позиционирование */
      bottom: -21px;
    }
    .text:hover {
      background: #fff;
      color: #ED1C24;
    }
  </style>
</head>
<body>
  <div class="b red"></div>
  <div class="b yellow"></div>
  <div class="b green"></div>
  <div class="text">
    <span>ШИВОРОТ НА ВЫВОРОТ</span>
  </div>
</body>
</html>