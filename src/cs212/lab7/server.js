const express = require('express');
const logger = require('morgan');
const path = require('path');
const server = express();

server.use(express.urlencoded({ 'extended': true }));
server.use(logger('dev'));

// Routes
server.get('/cs212/lab7', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'lab7.html'));
});

server.post('/cs212/lab7', (req, res) => {
  const { pluralNoun, adjective, verb, adverb } = req.body;

  // Simple Mad Lib construction (customize as needed)
  const madLib = `The ${adjective} ${pluralNoun} ${verb} ${adverb}.`;
  
  // Sending the result to the EJS template
  res.render('lab7result', { madLib });
});

// Static files serving
server.use(express.static(path.join(__dirname, 'public')));

// Set the view engine to EJS
server.set('view engine', 'ejs');

// Start the server
const port = process.env.PORT || 8080;
server.listen(port, () => console.log(`Server running on port ${port}`));
