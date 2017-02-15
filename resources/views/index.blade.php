<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
    <title></title>
  </head>
  <body>
    <h1>Welcome to my Candy Shop</h1>
    <form class="ui form" action="/index" method="post">
      {{ csrf_field() }}
      <div class="nameField">
        <label for="name">Produit à ajouter</label>
        <input type="text" name="name">
      </div>
      <div class="stockField">
        <label for="stock">Quantité à ajouter</label>
        <input type="text" name="stock">
      </div>
      <button type="submit" class="ui purple button" name="button">Stocker</button>
    </form>
  </body>
</html>
