//wrap all of the code in a dom content loaded event handler
//so it does not matter if the script is placed in the head or the end of the html body

document.addEventListener("DOMContentLoaded", () => {
  
  
  const form = document.getElementById("registrar");
  const input = document.querySelector("input");
  const mainDiv = document.querySelector(".main");
  const ul = document.getElementById("invitedList");
  
  
  //Create the filter guests checkbox
  const div = document.createElement("div");
  const filterLabel = document.createElement("label");
  const filterCheckbox = document.createElement("input");
  filterCheckbox.type = "checkbox";
  
  filterLabel.textContent = "Hide those who have not responded";
  div.appendChild(filterLabel);
  div.appendChild(filterCheckbox);
  mainDiv.insertBefore(div, ul);
  
  //Add change event handler to the filterCheckbox
  filterCheckbox.addEventListener("change", (e) => {
    //store the checked state into a variable;
    const isChecked = e.target.checked;
    //store the li's into a variable
    const lis = ul.children;
    
    //Hide li's if the checkbox is checked
    if(isChecked) {
      for(let i = 0; i < lis.length; i++) {
        let li = lis[i];
        if(li.className === "responded") {
           li.style.display = '';
        }else {
           li.style.display = "none";                       
        }
      }
    }else {
      for(let i = 0; i < lis.length; i++) {
        let li = lis[i];
        li.style.display = '';
      }                            
    }
  });
  
  
  //Function to create li
  
  function createLI(text) {
    
    //A function to build and return elements
    function createElement(elementName, property, value) {
      //Create a new element
      const element = document.createElement(elementName);
      //Set the new span text content to the input value
      element[property] = value;
      return element;
    }
    
    //A function to append elements to LI
    function appendToLI(elementName, property, value) {
      const element = createElement(elementName, property, value);
      li.appendChild(element);
      return element;
    }
    
    //Create a new li element
    const li = document.createElement("li");
    
    //Create a new span element to wrap the li text and append to LI
    appendToLI("span", "textContent", text);
    
    //Create a label for the checkbox and append to LI
    const label = appendToLI("label", "textContent", "Confirmed");
    
    //Create a new input element and set the type to a checkbox
    const checkbox = createElement("input", "type", "checkbox");
    
    //Append the checkbox to the label
    label.appendChild(checkbox);
    
    //Create a button element with the text content edit and append to LI
    appendToLI("button", "textContent", "Edit");
    
    //Create a button element with the text content remove and append to LI
    appendToLI("button", "textContent", "Remove");
    
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
    if(text != "") {
      ul.appendChild(li);
    } else {
      alert("Please enter a name");
    }
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
    
  
    
  //Create a on click event handler on the buttons within the ul element
    
  ul.addEventListener("click", (e) => {
    const button = e.target;
    const li = e.target.parentNode;
    const ul = li.parentNode;
    
    //Object containing all of the functions
    const nameActions = {
      remove  : () => {
                  //remove li from page
                  ul.removeChild(li);
                },
        
      edit    : () => {
                  //select the span element
                  const span = li.firstElementChild;
                  //create an input element and set the value to the span text
                  const input = document.createElement("input");
                  input.type = "text";
                  input.value = span.textContent;
                  //insert the input before the span, then remove the span
                  li.insertBefore(input, span);
                  li.removeChild(span);
                  //Change button text from edit to save
                  button.textContent = "Save";
                },
        
      save    : () => {
                  //select the input element
                  const input = li.firstElementChild;
                  //create an span element and set the value to the input text
                  const span = document.createElement("span");
                  span.textContent = input.value;
                  //insert the span before the input, then remove the input
                  li.insertBefore(span, input);
                  li.removeChild(input);
                  //Change button text from edit to save
                  button.textContent = "Edit";
                }
    };

    //Check to see if the element with a type of button with the text content "Remove" was clicked
    if(button.tagName === "BUTTON" && button.textContent === "Remove") {
      nameActions.remove();
    //Check to see if the element with a type of button with the text content "Edit" was clicked
    } else if(button.tagName === "BUTTON" && button.textContent === "Edit") {
      nameActions.edit();
    } else if(button.tagName === "BUTTON" && button.textContent === "Save") {
      nameActions.save();
    }
  });
    
    
});



  
  
  
  
