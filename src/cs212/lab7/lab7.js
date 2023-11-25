// madlib.js

// Accessing the form
const madLibForm = document.querySelector('form');

// Function to handle form submission
function handleSubmit(event) {
  event.preventDefault(); // Prevent default form submission behavior

  // Collect input values from the form
  const pluralNoun = document.getElementById('pluralNoun').value;
   const adjective = document.getElementById('adjective').value;
   const verb = document.getElementById('verb').value;
   const adverb = document.getElementById('adverb').value;
   const color = document.getElementById('color').value;
   const animal = document.getElementById('animal').value;
   const bodyPart = document.getElementById('bodyPart').value;
   const occupation = document.getElementById('occupation').value;
  const food = document.getElementById('food').value;
  const emotion = document.getElementById('emotion').value;
  const madLibResult = `The plural noun you entered is: ${pluralNoun}`;
 
  
  console.log(madLibResult);
  // You could display the result on the page or send it to the server via AJAX

  // For instance, you might want to display the result in a specific div on the page
  const madLibOutput = document.createElement('div');
  madLibOutput.textContent = madLibResult;
  document.body.appendChild(madLibOutput);
}

// Adding a listener for form submission
madLibForm.addEventListener('submit', handleSubmit);
