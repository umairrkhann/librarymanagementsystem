<?php
// Initialize the session
session_start();

// Check if sessionData exists, else assign variables as null
if (isset($_SESSION['sessionData'])) {
    $sessionData = $_SESSION['sessionData'];
} else {
    $sessionData = null;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<nav class="navbar navbar-expand-lg">
    <div class="nav-div">
        <a class="navbar-brand" href="#">CENTRAL LIBRARY</a>
        <br>Welcome to the collection of BOOKS
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav">
            <?php
            if($sessionData) {
                echo '<li class="nav-item">
                <a class="nav-link" href="/logout.php">Logout</a>
            </li>';
            }else {
                echo '<li class="nav-item">
                <a class="nav-link" href="signup.php">Register</a>
            </li>
            ';
            }
            ?>
        </ul>
    </div>
    <span class="navbar-text">
         <span id="usernameDisplay"></span>
    </span>
</nav>
<body>
    <!-- Navbar -->

    <header>
        <div class="container">
        <h2 class="heading">BEST SELLERS</h2>
        
       <?php
       if($sessionData) {
        echo ' <table>
        <tr>Name: Umair Khan</tr>
        <tr><br>Register No: 20BBS0211</tr>
    </table>';
       }else {
        echo '<div>
        You are not logged in yet. Please Create your account from <a href = "/signup.php">this link</a>
        </div>';
       }
       ?>
    </header>



    <?php
if($sessionData) {
    echo '<div class="container">
        
    <a href="book1.html">
        <div class="book">
            <img src="https://www.crossword.in/cdn/shop/products/9789390166268_1_300x@2x.jpg?v=1663936263"
                alt="Book 1">
            <h2>The Psychology of money</h2>
            <p>Author: Morgan Housel</p>
            <p>Genre: Finance</p>
            
            <button><a href="https://calvinrosser.com/notes/psychology-of-money-morgan-housel/" target="_blank">Find More</a></button>
        </div>
    </a>
    <a href="book2.html">
        <div class="book">
            <img  style="height: 458px;" src="LORD.jpeg"
                alt="Book 2">
            <h2>Lord of the Rings</h2>
            <p>Author: J. R. R Tolkien</p>
            <p>Genre: Fiction</p>
            <button><a href="https://en.wikipedia.org/wiki/The_Lord_of_the_Rings"
                    target="_blank">Find More</a></button>
        </div>
    </a>
    <a href="book3.html">
        <div class="book">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRqnQWlbi1AnkRDz3mTU2yYVuwkXsFiptcqQ_COdk16xkijN8yG"
                alt="Book 3">
            <h2>Gone Girl</h2>
            <p>Author: Gillian Flynn</p>
            <p>Genre: Mystery</p>
            <button><a
                    href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjovL2YxvSAAxVQ9zgGHbVDAWYQmhN6BQgAEPkF&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FGone_Girl_(novel)&usg=AOvVaw3DY5RvIOFyKSjoxViC0wA_&opi=89978449"
                    target="_blank">Find More</a></button>
        </div>
    </a>
</div>

<div class="container">
    <h1 class="heading">Catalogue..</h1>
    <h2 class="genre">Fiction</h2>
    <div class="book-list">
        <div class="book-sm">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa8fK2XPR2ahpu1PZOLzTK4It1_VvoSwVuTvk1jc34dw58IOaX"
                alt="Fiction Book 1">
            <h3>The Alchemist</h3>
            <p>Author: Paulo Coelho</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsavbB1JB41qvpgD9oAiaXitJu69oinUy_JolRsSZKpMuihryK"
                alt="Fiction Book 1">
            <h3>The Catcher in the Rye</h3>
            <p>Author: J. D. Salinger</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeglXlBmm240qQ70HEi6CpdgjyevAGT78Vo8iOVtsLnkiDw5pb"
                alt="Fiction Book 1">
            <h3>Nineteen Eighty-Four</h3>
            <p>Author: George Orwell</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQzOvxL_Xm5WEQ8KYkvw521lfzA09wtW_9pN-koyJICMRITU1Bu"
                alt="Fiction Book 1">
            <h3>The Kite Runner</h3>
            <p>Author: Khaled Hosseini</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQqZGItnABOHaxI0zgk_IvxGSA8Fb0S8C0ppGsRq0YPM8MK3Exu"
                alt="Fiction Book 1">
            <h3>One Hundred Years of Solitude</h3>
            <p>Author: Gabriel García Márquez</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQzkbQRlCA3xjQSQb7lTkHx331L7Hb8L2SEVdr-GvjhhzARYGkO"
                alt="Fiction Book 2">
            <h3>The Handmaid\'s Tale</h3>
            <p>Author: Margaret Atwood</p>
        </div>
        <!-- Add more fiction books -->
    </div>

    <h2 class="genre">Non-Fiction</h2>
    <div class="book-list">
        <div class="book-sm">
            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSDt_DCSLzJsdZgqqOu5BUrGNJL-8QClmTAr3EesT16yMYo1GAN"
                alt="Non-Fiction Book 1">
            <h3>A Short History of Nearly Everything</h3>
            <p>Author: Bill Bryson</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKRgZxUtWSDHTphlc0HYXFxQW4vZscIQKjzuF2wtZX6_xG-wTM"
                alt="Non-Fiction Book 1">
            <h3>The Emperor of All Maladies</h3>
            <p>Author: Siddhartha Mukherjee</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSCQmVknFiZ8hOeaceUqwsy880t1T7qAZtllnaeyZC0syfnj2Ay"
                alt="Non-Fiction Book 1">
            <h3>Into Thin Air</h3>
            <p>Author: Jon Krakauer</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRq5pPce-5WeAtMGPMa2duwxIor1Ixe8mPC2_HpbD1KEEt08YGR"
                alt="Non-Fiction Book 1">
            <h3>The New Jim Crow: Mass Incarceration in the Age of Colorblindness</h3>
            <p>Author: Michelle Alexander</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQffNLinUkqZZIkU65uSwI8byrirjIly0WCejAjwm8d5D5TlJtK"
                alt="Non-Fiction Book 1">
            <h3>The Immortal Life of Henrietta Lacks</h3>
            <p>Author: Rebecca Skloot</p>
        </div>
        <div class="book-sm">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSjqS0J5kx42jfRW6dflhDmjoW2oi4N7r62_990xthEtAlrRD7O"
                alt="Non-Fiction Book 2">
            <h3>The Right Stuff</h3>
            <p>Author: Tom Wolfe</p>
        </div>

    </div>
</div>';
}else {
    echo 'you are not authorize to see books.';
}
    ?>
    <footer>
        <p>&copy; 2023 Library System. All rights reserved.</p>
    </footer>
</body>
<script src="script.js"></script>
</html>