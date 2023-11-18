<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 1em 0;
    }

    header h1 {
      margin-bottom: 5px;
    }

    header nav {
      text-align: left;
      margin-left: 5px;
    }

    .ribbon {
      width: 100%;
      background-color: #d86763;
      color: white;
      text-align: center;
      padding: 10px 0;
      z-index: 1000;
    }

    .content {
      display: flex;
      flex: 1;
    }

    .filters {
      width: 30%;
      padding: 20px;
    }

    .filters form {
      display: flex;
      flex-direction: column;
    }

    .filters label {
      margin-bottom: 10px;
    }

    .products {
      width: 70%;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .producto {
      padding: 10px;
      border: 1px solid #ddd;
      box-sizing: border-box;
    }

    .producto img {
      width: 100%;
      height: auto;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: left;
      padding: 1em 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <div class="ribbon">
    ¡Oferta Especial! Envío gratis en todos los pedidos superiores a $50.
  </div>

  <header>
    <h1>Tienda de Ropa</h1>
    <nav>
      <ul>
        <li><a href="#mujer">Mujer</a></li>
        <li><a href="#hombre">Hombre</a></li>
        <li><a href="#niños">Niños</a></li>
        <li><a href="#curvy">Curvy</a></li>
        <li><a href="#streetwear">Streetwear</a></li>
        <li><a href="#accesorios">Accesorios</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contenido -->
  <div class="content">
    <!-- Filtros -->
    <div class="filters">
      <h2>Filtros</h2>
      <form id="filterForm">
        <label for="priceRange">Rango de Precios</label>
        <input type="text" id="minPrice" placeholder="Min">
        <input type="text" id="maxPrice" placeholder="Max">

        <label for="colors">Colores</label>
        <select id="colors">
          <option value="rojo">Rojo</option>
          <option value="azul">Azul</option>
          <option value="verde">Verde</option>
        </select>

        <button type="button" onclick="filterProducts()">Aplicar Filtros</button>
      </form>
    </div>

    <!-- Productos -->
    <div class="products">
      <?php
      $categoryProducts = [
        'mujer' => [
          ['nombre' => 'Producto Mujer 1', 'precio' => 20.99, 'color' => 'rojo', 'imagen' => 'mujer1.jpg'],
          ['nombre' => 'Producto Mujer 2', 'precio' => 25.99, 'color' => 'azul', 'imagen' => 'mujer2.jpg'],
        ],
        'hombre' => [
          ['nombre' => 'Producto Hombre 1', 'precio' => 30.99, 'color' => 'verde', 'imagen' => 'hombre1.jpg'],
          ['nombre' => 'Producto Hombre 2', 'precio' => 35.99, 'color' => 'rojo', 'imagen' => 'hombre2.jpg'],
        ],
        // ... Puedes agregar más productos y categorías según sea necesario
      ];

      foreach ($categoryProducts as $category => $products): ?>
        <section id="<?php echo $category; ?>">
          <h2><?php echo ucfirst($category); ?></h2>
          <?php foreach ($products as $product): ?>
            <div class="producto" data-color="<?php echo $product['color']; ?>">
              <img src="<?php echo $product['imagen']; ?>" alt="<?php echo $product['nombre']; ?>">
              <h3><?php echo $product['nombre']; ?></h3>
              <p>Precio: $<?php echo $product['precio']; ?></p>
            </div>
          <?php endforeach; ?>
        </section>
      <?php endforeach; ?>
    </div>
  </div>

  <footer>
    <p>&copy; 2023 Tienda de Ropa</p>
  </footer>

  <script>
    function filterProducts() {
      // Implementa la lógica para aplicar filtros con JavaScript aquí
    }
  </script>

</body>
</html>
