let str = document.body.firstElementChild;

  for (let i = 0; i < str.rows.length; i++) {
  let row = str.rows[i];
  row.cells[i].style.backgroundColor = 'red';
  }
  