const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');
const app = express();
const port = 8080;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, 'public')));
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.get('/cs212/lab7', (req, res) => {
  res.sendFile(path.join(__dirname, '/public/index.html'));
});

app.post('/cs212/lab7', (req, res) => {
  const { pluralNoun, adjective, verb, adverb, color, animal, bodyPart, occupation, food, emotion } = req.body;

  // Render the madlib_display.ejs template with the collected input values
  res.render('madlib_display', {
    pluralNoun,
    adjective,
    verb,
    adverb,
    color,
    animal,
    bodyPart,
    occupation,
    food,
    emotion
  });
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
