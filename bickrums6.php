<?php

class Movie {
    public $title;
    public $rating;
    public $actors;

    public function __construct($title, $rating, $actors) {
        $this->title = $title;
        $this->rating = $rating;
        $this->actors = $actors;
    }
}

// Создаем массив с информацией о фильмах
$movies = array(
    new Movie("Фильм 1", 8.5, ["Актер 1", "Актер 2", "Актер 3"]),
    new Movie("Фильм 2", 9.2, ["Актер 4", "Актер 5", "Актер 6"]),
    new Movie("Фильм 3", 7.9, ["Актер 7", "Актер 8", "Актер 9"]),
    new Movie("Фильм 4", 8.8, ["Актер 10", "Актер 11", "Актер 12"]),
    new Movie("Фильм 5", 9.5, ["Актер 13", "Актер 14", "Актер 15"])
);

// Функция для сортировки фильмов по рейтингу
function sortByRating($a, $b) {
    return $b->rating - $a->rating;
}

// Сортируем фильмы по рейтингу
usort($movies, 'sortByRating');

// Выводим информацию о 3 фильмах с наивысшим рейтингом
echo "Топ 3 фильмов:\n";
for ($i = 0; $i < 3; $i++) {
    echo "Название: " . $movies[$i]->title . ", Рейтинг: " . $movies[$i]->rating . "\n";
    echo "Актеры: " . implode(", ", $movies[$i]->actors) . "\n\n";
}

?>
