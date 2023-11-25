// madlib.js

// Accessing the form
const madLibForm = document.querySelector('form');

// Function to handle form submission
function handleSubmit(event) {
  event.preventDefault(); // Prevent default form submission behavior

  // Collect input values from the form
  const pluralNoun = document.getElementById('pluralNoun').value;
  // Add other input fields as needed

  // Perform operations or validations on the inputs if necessary
  
  // Constructing the Mad Lib (this is a simple example)
  const madLibResult = `The plural noun you entered is: ${pluralNoun}`;
  // You can construct your Mad Lib based on the collected inputs
  const adjective = document.getElementById('adjective').value;
  const madLibResult = `The adjective you entered is: ${adjective}`;
  // Display the result or take further actions
  console.log(madLibResult);
  // You could display the result on the page or send it to the server via AJAX

  // For instance, you might want to display the result in a specific div on the page
  const madLibOutput = document.createElement('div');
  madLibOutput.textContent = madLibResult;
  document.body.appendChild(madLibOutput);
}

// Adding a listener for form submission
madLibForm.addEventListener('submit', handleSubmit);
