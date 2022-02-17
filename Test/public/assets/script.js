let extended_html = `
  <div class="col-md-3">
  <div class="form-field" style="margin-top: 30px">
    <label for="">SubES Name</label><br />
    <input type="text" name="food[]"/><br />

    <label for="">SubES Quantity</label><br />
    <input type="text" name="food[]"/><br />

    <label for="">SubES Quantity Unit</label><br />
    <input type="text" name="food[]"/><br />

    <div>
      <label for="">SubES Value</label><br />
      <input type="text" name="food[]"/><br />
    </div>

    <label for="">SubES Value Unit</label><br />
    <input type="text" name="food[]"/><br />

    <label for="">SubES Validation</label><br />
    <input type="text" name="food[]"/><br />
  </div>
`;

let food = document.querySelector("#food");
let food_button_plus = document.querySelector(".food_button_plus");
let food_button_extension = document.querySelector("#food_button_extension");
let food_row = document.querySelector("#food_row");

function foodRadio() {
  food_button_plus.style.display = "inline";
  food_button_extension.style.display = "inline";
}

function food_button_plus_click() {
  food_row.insertAdjacentHTML("beforeend", extended_html);
}
