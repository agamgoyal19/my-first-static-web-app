const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 8080;

app.use(bodyParser.urlencoded({ extended: true }));

app.get('/cs212/lab7', (req, res) => {
  // Your HTML form here
  res.send(`
    <form action="/cs212/lab7" method="post">
      <label for="pluralNoun">Plural Noun:</label>
      <input type="text" id="pluralNoun" name="pluralNoun"><br><br>

      <label for="adjective">Adjective:</label>
      <input type="text" id="adjective" name="adjective"><br><br>

      <!-- Add more inputs as needed for your Mad Lib -->

      <input type="submit" value="Submit">
    </form>
  `);
});

app.post('/cs212/lab7', (req, res) => {
  const { pluralNoun, adjective } = req.body;
  // Retrieve other inputs as needed

  // Construct your Mad Lib
  const madLib = `Once upon a time, ${adjective} ${pluralNoun} lived happily ever after.`;
  // Create your complete Mad Lib using the received inputs

  // Send the filled Mad Lib as a response
  res.send(`<p>${madLib}</p>`);
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
