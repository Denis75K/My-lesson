<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Позиционирование</title>
  <style>
  body
    .header-image {
      height: 350px;
      background-color: rgb(255, 100, 100);
      background-image: url("https://i.artfile.ru/6000x4298_858710_%5Bwww.ArtFile.ru%5D.jpg");
      background-size: cover;
      background-position: 50% 15%;
    }
    .navigation {
      list-style: none;
      padding-left: 0;
    }
    .navigation li {
      display: inline-block;
      border-right: 2px solid blue;
      padding: 0 10px;
    }
    .last {
      border-right: none !important;
    }
    .link {
      text-decoration: none;
      text-transform: uppercase;
      font-weight: bold;
    }
    .about {
      padding: 0 15%;
    }
    .about-header {
      display: inline-block;
      text-align: center;
      text-transform: uppercase;
      margin: 50px 0;
      border-top: 2px solid rgba(230, 230, 230, 0.9);
      border-bottom: 2px solid rgba(230, 230, 230, 0.9);
      padding: 10px 0;
    }
    .header-title {
      padding: 25px;
      background-color: rgba(255, 255, 255, 0.8);
      position: absolute;
      right:0;
      top: 50%;
      transform: translateY(-50%);
      box-shadow: ;
    }
    .about-text {
      text-align: justify;
    }
  </style>
</head>
<body>
  <header>
    <div class="header-titie">
      
    </div>
    <div class="header-image"></div>
    <nav>
      <ul class=navigation>
        <li><a href="#" class="link">О нас</a></li>
        <li><a href="#" class="link">Наши проекты</a></li>
        <li><a href="#" class="link">Наши сотрудники</a></li>
        <li class="last"><a href="#" class="link">Контакты</a></li>
      </ul>
    </nav>
  </header>
  <selection class="about">
    <h2 class="about-header">О НАС</h2>
    <p class="text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      Voluptatibus, beatae, voluptates, ducimus saepe maiores 
      quaerat vel optio reprehenderit laboriosam quasi dolores 
      praesentium nesciunt illum esse consectetur explicabo quis repellendus consequatur aspernatur corporis adipisci dolor ipsum est dicta excepturi porro mollitia odio totam consequuntur dolorem nostrum quia dignissimos veniam iusto voluptatem provident architecto earum tempore quod cum tempora facere. Iste, nulla, distinctio quisquam at beatae eum praesentium voluptates nisi magni impedit non deleniti qui officia. Fugiat, temporibus, totam, tenetur veritatis reiciendis atque vitae eum impedit ipsum aliquam quam velit facilis id sed molestiae itaque minima repellat nostrum cupiditate obcaecati adipisci ut aperiam at voluptatem aliquid magnam quisquam provident quaerat quod quos voluptatum maxime fugit nam ullam veniam hic eligendi corporis placeat porro et tempore eveniet architecto repellendus perspiciatis doloribus esse. Cupiditate, atque, omnis, ducimus magni unde eos laudantium rerum ea eligendi architecto neque similique aspernatur qui. Voluptates quae ratione sint sequi.
    </p>
  </selection>
  <selection class="employee">
    
  </selection>
  <main>
    
  </main>
  <footer>
    <section class="about"></section>
  </footer>
</body>
</html>