<?php

class Author {

    private $name;
    private $email;
    private $gender;

    public function __construct($name, $email, $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getGender() {
        return $this->gender;
    }

    public function __toString() {
        return "Author[name={$this->name}, email={$this->email}, gender={$this->gender}]";
    }
}


class Book {

    private $price;
    private $qty;
    private $nameBook; 
    private $authors = [];

  
    public function addAuthor(Author $author) {
        $this->authors[] = $author;
    }

    public function getAuthors() {
        return $this->authors;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setQty($qty) {
        $this->qty = $qty;
    }

    public function getQty() {
        return $this->qty;
    }

   
    public function setNameBook($nameBook) {
        $this->nameBook = $nameBook;
    }

    public function getNameBook() {
        return $this->nameBook;
    }

    public function __toString() {
        $authorsStr = "";
        foreach ($this->authors as $author) {
            $authorsStr .= $author . "\n";
        }
        return "Book[name={$this->nameBook}, Price={$this->price}, Quantity={$this->qty}, Authors=\n{$authorsStr}]";
    }
}


class TestBook {
    public function run() {
       
        $author1 = new Author("Aya", "aya@gmail.com", "f");
        $author2 = new Author("Omar", "omar@gmail.com", "m");

       
        $book = new Book();
        $book->setNameBook("The Great");
        $book->setPrice(19.99);
        $book->setQty(100);

      
        $book->addAuthor($author1);
        $book->addAuthor($author2);

       
        echo "Book details:\n"."<br>";
        echo $book . "\n";
    }
}


$test = new TestBook();
$test->run();

?>
