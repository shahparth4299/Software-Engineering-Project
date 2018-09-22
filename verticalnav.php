<!DOCTYPE HTML>
<html>
  <style>
    :root {
    --blackOne : #222;
    --blackTwo : #333;
    }
    body {
    margin: 0;
    padding: 0;
    }

    nav {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    background-color: #222;
    font-family: 'Roboto Condensed', sans-serif;
    overflow-x: auto;
    }
    nav ul {
    margin: 0;
    padding: 0;
    }
    nav ul li {
    list-style: none;
    }
    nav ul li a {
    text-decoration: none;
    color: #fff;
    display: block;
    text-transform: uppercase;
    position: relative;
    }
    nav > ul > li > a {
    padding: 10px 15px;

    }

    nav .d-btn {
    position: relative;
    }
    nav .d-btn:before {
    content:"";
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 40px;
    background-color: #333;
    }
    nav .d-btn:after {
    content:"\f107";
    font-family: FontAwesome;
    position: absolute;
    top: 50%;
    right: 0;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 40px;
    text-align: center;
    }
    nav .dropdown {
    background-color: #333;
    }
    nav .d-btn {
    background-color: #222;
    }
    nav .dropdown ul.d-menu li a {
    padding: 10px 25px;
    font-size: 12px;
    }
    nav .dropdown .d-btn {
    border-top: 1px solid #222;
    }


    /* Habib Pro Tag */
    .habibpro {
    position: absolute;
    bottom: 10px;
    right: 10px;
    padding: 15px 30px;
    background-color: #212121;
    color: #fff;
    box-shadow: -2.5px 5px 5px #555;
    font-family: 'Raleway', sans-serif;
    letter-spacing: 3px;
    display: inline-block;
    text-decoration: none;
    }
    .habibpro:hover {
    background-color: #FFC107;
    color: #222;
    transition: .5s;
    }
  </style>
  <body>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>

        <li class="dropdown"> <!-- Dropdown 01 -->
          <a href="#" class="d-btn">Service</a>
          <ul class="d-menu">
            <li><a href="#">Menu 1.1</a></li>
            <li><a href="#">Menu 1.2</a></li>
            <li><a href="#">Menu 1.3</a></li>
            <li><a href="#">Menu 1.4</a></li>

            <li class="dropdown"> <!-- Dropdown 01 -> Dropdown -->
              <a href="#" class="d-btn">Menu 1.5</a>
              <ul class="d-menu">
                <li><a href="#">Menu 2.1</a></li>
                <li><a href="#">Menu 2.2</a></li>
                <li><a href="#">Menu 2.3</a></li>
                <li><a href="#">Menu 2.4</a></li>
              </ul>
            </li>

          </ul>
        </li>

        <li><a href="#">Contact</a></li>
        <li class="dropdown"> <!-- Dropdown 02 -->
          <a href="#" class="d-btn">More</a>
          <ul class="d-menu">
            <li><a href="#">Menu 1.1</a></li>
            <li><a href="#">Menu 1.2</a></li>
            <li><a href="#">Menu 1.3</a></li>
            <li><a href="#">Menu 1.4</a></li>

            <li class="dropdown"> <!-- Dropdown 02 -> Dropdown -->
              <a href="#" class="d-btn">Menu 1.5</a>
              <ul class="d-menu">
                <li><a href="#">Menu 2.1</a></li>
                <li><a href="#">Menu 2.2</a></li>
                <li><a href="#">Menu 2.3</a></li>
                <li><a href="#">Menu 2.4</a></li>
              </ul>
            </li>

          </ul>
        </li>
      </ul>
    </nav>


  </body>
</html>
