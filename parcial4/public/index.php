<?php
// Incluir los controladores
include_once('../controllers/AuthorController.php');
include_once('../controllers/GenreController.php');
include_once('../controllers/BookController.php');
include_once('../controllers/StockController.php');

// Obtener las acciones y las entidades desde la URL
$action = isset($_GET['action']) ? $_GET['action'] : null;
$entity = isset($_GET['entity']) ? $_GET['entity'] : null;

// Si se especifica una entidad y una acción, procesamos la solicitud
if ($entity == 'author') {
    $authorController = new AuthorController();

    if ($action == 'read') {
        $authors = $authorController->read();
        include_once('../views/author/index.php');
    } elseif ($action == 'create') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $full_name = $_POST['full_name'];
            $date_of_birth = $_POST['date_of_birth'];
            $date_of_death = $_POST['date_of_death'];
            $authorController->create($full_name, $date_of_birth, $date_of_death);
            header('Location: index.php?action=read&entity=author');
            exit;
        } else {
            include_once('../views/author/create.php');
        }
    } elseif ($action == 'update') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_author = $_POST['id_author'];
            $full_name = $_POST['full_name'];
            $date_of_birth = $_POST['date_of_birth'];
            $date_of_death = $_POST['date_of_death'];
            $authorController->update($id_author, $full_name, $date_of_birth, $date_of_death);
            header('Location: index.php?action=read&entity=author');
            exit;
        } else {
            $id = $_GET['id'];
            $author = $authorController->getById($id);
            include_once('../views/author/update.php');
        }
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        $authorController->delete($id);
        header('Location: index.php?action=read&entity=author');
        exit;
    }
} elseif ($entity == 'genre') {
    $genreController = new GenreController();

    if ($action == 'read') {
        $genres = $genreController->read();
        include_once('../views/genre/index.php');
    } elseif ($action == 'create') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $genreController->create($name);
            header('Location: index.php?action=read&entity=genre');
            exit;
        } else {
            include_once('../views/genre/create.php');
        }
    } elseif ($action == 'update') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_genre = $_POST['id_genre'];
            $name = $_POST['name'];
            $genreController->update($id_genre, $name);
            header('Location: index.php?action=read&entity=genre');
            exit;
        } else {
            $id = $_GET['id'];
            $genre = $genreController->getById($id);
            include_once('../views/genre/update.php');
        }
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        $genreController->delete($id);
        header('Location: index.php?action=read&entity=genre');
        exit;
    }
} elseif ($entity == 'book') {
    $bookController = new BookController();

    if ($action == 'read') {
        $books = $bookController->read();
        include_once('../views/book/index.php');
    } elseif ($action == 'create') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $year_publication = $_POST['year_publication'];
            $id_author = $_POST['id_author'];
            $id_genre = $_POST['id_genre'];
            $bookController->create($title, $description, $year_publication, $id_author, $id_genre);
            header('Location: index.php?action=read&entity=book');
            exit;
        } else {
            // Obtenemos los autores y géneros para el formulario
            $authorController = new AuthorController();
            $authors = $authorController->read();
            $genreController = new GenreController();
            $genres = $genreController->read();
            include_once('../views/book/create.php');
        }
    } elseif ($action == 'update') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_book = $_POST['id_book'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $year_publication = $_POST['year_publication'];
            $id_author = $_POST['id_author'];
            $id_genre = $_POST['id_genre'];
            $bookController->update($id_book, $title, $description, $year_publication, $id_author, $id_genre);
            header('Location: index.php?action=read&entity=book');
            exit;
        } else {
            $id = $_GET['id'];
            $book = $bookController->getById($id);
            // Obtenemos los autores y géneros para el formulario
            $authorController = new AuthorController();
            $authors = $authorController->read();
            $genreController = new GenreController();
            $genres = $genreController->read();
            include_once('../views/book/update.php');
        }
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        $bookController->delete($id);
        header('Location: index.php?action=read&entity=book');
        exit;
    }
} elseif ($entity == 'stock') {
    $stockController = new StockController();

    if ($action == 'read') {
        $stocks = $stockController->read();
        include_once('../views/stock/index.php');
    } elseif ($action == 'create') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_book = $_POST['id_book'];
            $total_stock = $_POST['total_stock'];
            $notes = $_POST['notes'];
            $last_inventory = $_POST['last_inventory'];
            $stockController->create($id_book, $total_stock, $notes, $last_inventory);
            header('Location: index.php?action=read&entity=stock');
            exit;
        } else {
            // Obtener los libros para el formulario
            $bookController = new BookController();
            $books = $bookController->read();
            include_once('../views/stock/create.php');
        }
    } elseif ($action == 'update') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_stock = $_POST['id_stock'];
            $id_book = $_POST['id_book'];
            $total_stock = $_POST['total_stock'];
            $notes = $_POST['notes'];
            $last_inventory = $_POST['last_inventory'];
            $stockController->update($id_stock, $id_book, $total_stock, $notes, $last_inventory);
            header('Location: index.php?action=read&entity=stock');
            exit;
        } else {
            $id = $_GET['id'];
            $stock = $stockController->getById($id);
            // Obtener los libros para el formulario
            $bookController = new BookController();
            $books = $bookController->read();
            include_once('../views/stock/update.php');
        }
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        $stockController->delete($id);
        header('Location: index.php?action=read&entity=stock');
        exit;
    }
} else {
    // Pantalla inicial con botones para gestionar las entidades
    include_once('buttons.php');
}
?>
