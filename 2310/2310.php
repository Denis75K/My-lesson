<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    .info-big, .info-small {
      color:brown;
    }
    .siblings p+p {
      color: orange;
    }
    P[title="Красная"] {
      color: red;
    }
    </style>
</head>
<body>
  <div class="selectors">
    <div class="context">
      <p>Материал1</p>
      <p>Материал2</p>
      <p>Материал3</p>
      <div class="context-d">
        <p>Материал3.1</p>
        <p>Материал3.2</p>
        <p>Материал3.3</p>
        <div class="children">
          <p>Материал1</p>
          <p>Материал2</p>
          <p>Материал3</p>
          <div class="children-inner">
            <p> нас не красить</p>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <div class="multi">
    <p class="info-big">информация</p>
    <p class="info-small">информация</p>
    <p class="info-big">информация</p>
    <p class="info-small">информация</p>
    <div class="siblings">
    <p>меня не красить</p>
    <p>меня покрасить</p>
    <p>меня покрасить</p>
    </div>
    <div class="attr">
      <p title=Красная>Первая</p>
      <p title=Синяя>Вторая</p>
      <p title=Зеленая>Третья</p>
    </div>
  </div>
  <div class="ending">
    <p class="col-2">col-2</p>
    <p class="col-4">col-4</p>
    <p class="col-2">col-2</p>
  </div>
  <form action="">
    <input type="text" class="user-name" value="anonym">
    <input type="text" class="user-password" value="12345">
    <input type="text" class="password-check" value="12345">
  </form>
</body>
</html>