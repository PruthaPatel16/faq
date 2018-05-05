# faq


This project is to add a new feature to the FAQ project:

This project intergartes the use of 
laravel,heroku,github,php,and running tests

To run the FAQ project:

git clone https://github.com/PruthaPatel16/faq.git

CD into FAQ and run composer install
cp .env.example to .env

run: php artisan key:generate
setup database / with sqlite or other https://laravel.com/docs/5.6/database

Run: php artisan migrate

Run: unit tests: phpunit

Run: seeds php artisan migrate:refresh --seed

Epic: Like and Dislike Button

Story1. User should be able to like a question

Story2. User should be able to dislike a question

Story3. User should be able to like an Answer

Story4. User should be able to dislike an Answer

New Feature Added:

1.Generate "Like" and "Dislike" buttons under Questions Asked and Answers answered

2.Once Buttons are generated assign a count value to the buttons

3.Once buttons are clicked, the count should go up by +1

4.Display the total number of likes and dislikes for the Question and or Answer




Prerequisites:
You need to complete upto video 20 where it has testing to begin this project, if you don't have previous experience with Laravel.

https://laracasts.com/series/laravel-from-scratch-2017

FAQ Tutorial Playlist
https://www.youtube.com/playlist?list=PLytMRtonvCRUjrQqKaQeOd2KoYq_ifcpD

Relevant Laravel Resources:
https://laravel.com/docs/5.6/eloquent

https://laravel.com/docs/5.6/database

https://laravel.com/docs/5.6/seeding

https://laravel.com/docs/5.6/testing
