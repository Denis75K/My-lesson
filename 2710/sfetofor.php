<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>светофор</title>
  <style>
    .korobka {
      display: inline-block;
      background-color: Lightgray;
      position: absolute; 
      left: 50%;
      top: 50%;
      border: 5px solid grey;
      border-radius: 15px;
      padding: 25px;
      transform: translate(-50%, -50%);
    }
    .color {
      width : 150px;
      height: 150px;
      border: 3px solid black;
      border-radius: 60% 60% 30% 30%;
      margin: 15px;
      box-sizing: border-box;
      box-shadow: 0 0 15px 5px rgba(0,0,0,30%)inset;
    }
    .red {
      background: rgb(246,56,9);
      background: radial-gradient(circle, rgba(246,56,9,1) 40%, rgba(205,131,31,1) 75%);
    }
    .yellow {
      background-color: yellow;
    }
    .green {
      background: rgb(9,246,52);
      background: radial-gradient(circle, rgba(9,246,52,1) 29%, rgba(31,205,33,1) 45%);
    }
    
  </style>
</head>
<body>
  <div class="korobka">
    <div class="color red"></div>
    <div class="color yellow"></div>
    <div class="color green"></div>
  </div>
</body>
</html>