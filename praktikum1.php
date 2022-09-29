<!DOCTYPE html>
<html lang="en">
<head>
<title>
  Bimbingan Belajar
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*
{
  box-sizing: border-box;
}

body 
{
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header 
{
  background-color: yellow;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: green;
}

/* Create two columns/boxes that floats next to each other */
nav 
{
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul 
{
  list-style-type: none;
  padding: 0;
}

article 
{
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after 
{
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer 
{
  background-color: yellow;
  padding: 10px;
  text-align: center;
  color: green;
}

/* Responsive layout - makes the two columns/boxes stack on top of
each other instead of next to each other, on small screens */
@media (max-width: 600px) 
{
  nav, article {
    width: 100%;
    height: auto;
  }
}

</style>
</head>
<body>
  <header>
    <h2>
      BIMBINGAN BELAJAR SAKA
    </h2>
  </header>

  <section>
    <nav>
      <ul>
        <li><a href="#">
          Program Bimbel
        </a></li>
        <li><a href="#">
          About Us
        </a></li>
        <li><a href="#">
          Bergabung Menjadi
        </a></li>
        <li><a href="#">
          Berita Bimbel
        </a></li>
      </ul>
    </nav>
  
    <?php
        echo
        "About Us

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Omnis consequatur quas accusantium mollitia ab, repellat placeat.
        A facere maiores hic tenetur quo quos quaerat, nam quidem amet aut,
        perspiciatis aspernatur?<p>"
    ?>
  </section>

  <footer>
    <p>
      Nama : Dimas Abidzar Fadly NIM : 21.12.1868  Kelas : SI01
    </p>
  </footer>

</body>
</html>