let catalog = [
  {id: 1, name: "Яблоко", price: "40", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/apples.jpg"},
  {id: 2, name: "Банан", price: "80", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/banana.jpg"},
  {id: 3, name: "Грейпфрут", price: "150", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/garnet.jpg"},
  {id: 4, name: "Виноград", price: "130", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/grape.jpg"},
  {id: 5, name: "Дыня", price: "300", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/mellon.jpg"},
];

createAlert();
createCatalog(catalog);

function createAlert() {
  let alertElem = document.createElement("div");
  alertElem.className = "content";
  alertElem.innerHTML = `
  <div class="card" style="width: 20rem; display: none">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Название карточки</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-primary">цена    <span class="badge-light">4</span></button>
  </div>
</div>`;
  
 let h1 = document.querySelector(".header");
 h1.after(alertElem);
 
  }
  

function createCatalog(products) {
  
  let content = document.querySelector(".content"); 
  for (let product of products) {
    let card = document.querySelector(".card");
     let clone = card.cloneNode(true);
     card.style.display = "block";
      card.after(clone);
     
    card.querySelector(".card-img-top").src = product.image;
    card.querySelector(".card-title").innerHTML  = product.name;
    card.querySelector(".card-text").innerHTML  = product['description'];
    card.querySelector(".badge-light").innerHTML  = product['price'];
   
   
    content.append(card);
  }
  
}



