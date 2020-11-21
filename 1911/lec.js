

createAlert("111")
function createAlert(text) {
  let alertElem = document.createElement("div");
  alertElem.className = "alert alert-success";
  alertElem.setAttribute("role", "alert");
  alertElem.innerHTML = text;
  
  //let body = document.body;
 // body.append(alertElem);
// body.prepend(alertElem);
let h2 = document.querySelector(".adding-header");
h2.after(alertElem);
}