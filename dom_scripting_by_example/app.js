const form = document.getElementById("registrar");
const input = document.querySelector("input");
const ul = document.getElementById("invitedList");

//Function to create li

function createLI(text) {
  //Create a new li element
  const li = document.createElement("li");
  
  //Set the new li text content to the input value
  li.textContent = text;
  
  //Create a label for the checkbox
  const label = document.createElement("label");
  
  //Set the text content for the label
  label.textContent = "Confirmed";
  
  //Create a new input element and set the type to a checkbox
  const checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  
  //Append the checkbox to the label
  label.appendChild(checkbox);
  
  //Append the label and checkbox to the li
  li.appendChild(label);
  
  //Create a button element with the text content remove
  const button = document.createElement("button");
  button.textContent = "Remove";
  
  //Append the button to the li
  li.appendChild(button);
  
  return li;
}


//Create an submit event handler on the form element

form.addEventListener("submit", (e) => {
  //prevent default form behavior from reloading the page on submit
  e.preventDefault();
  
  //Collect input value into a variable
  const text = input.value;
  
  //Clear out input box after value is saved into variable above
  input.value = '';
  
  //Create the li from the createLI function
  const li = createLI(text);
  
  //Append the li to the ul
  ul.appendChild(li);
});

  
  
//Create a on change event handler on the checkbox within the ul element
  
ul.addEventListener("change", (e) => {
  //Store the checkbox element into a variable
  const checkbox = event.target;
  //Store the state of the checkbox into a variable (Checked or not checked)
  const checked = checkbox.checked;
  //Store the li item into a variable
  const listItem = checkbox.parentNode.parentNode;
  
  //If the checkbox is checked add css class name responded
  if(checked) {
    listItem.className = "responded";
  } else {
    listItem.className = "";
  }
});
  

  
//Create a on click event handler on the button within the ul element
  
ul.addEventListener("click", (e) => {
  //Check to see if the element with a type of button with the text content "Remove" was clicked
  if(e.target.tagName === "BUTTON" && e.target.textContent === "Remove") {
    const li = e.target.parentNode;
    const ul = li.parentNode;
    //remove li from page
    ul.removeChild(li);
  }
}); 
  
  
  
  
