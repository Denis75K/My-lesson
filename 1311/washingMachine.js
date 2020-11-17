
let things = ["свитер", "брюки", "рубашку", "халат"];

function wash(things, callback) {
  alert("!!! начинаю стирку !!!");
  for (let i = 0; i < things.length; i++) {
    alert ("Стираю " + things[i]);
    }
  callback();
}
wash(things, showApple);
function showApple() {
  alert("!!! стирка окончена !!!");
}








