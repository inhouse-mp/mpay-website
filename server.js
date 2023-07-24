const express = require('express');
const app = express();
const path = require('path');

app.set('view engine', 'ejs');

app.use(express.static(path.join(__dirname, 'public')));

app.get('/', (req, res) => {
    res.render('index');
});


app.get('/privacy-policy', (req, res) => {
  res.render('privacy-policy');
});

app.get('/terms-of-service', (req, res) => {
  res.render('terms-of-service');
});
  
const port = process.env.PORT || 3000;

app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
