const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');
const app = express();
const port = 8080;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, 'public')));

app.get('/cs212/lab7', (req, res) => {
  res.sendFile(path.join(__dirname, '/public/index.html'));
});

app.post('/cs212/lab7', (req, res) => {
  const { pluralNoun, adjective, verb, adverb, color, animal, bodyPart, occupation, food, emotion } = req.body;

  const madLib = `In a ${adjective} land, there were ${pluralNoun} ${verb} ${adverb}, painting the sky in shades of ${color}. ${animal} with ${bodyPart} of ${occupation} enjoyed eating ${food} with ${emotion}.`;

  res.send(`<h2>Your Mad Lib:</h2><p>${madLib}</p>`);
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
