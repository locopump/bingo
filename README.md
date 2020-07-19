<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Server Requirements
- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Composer

## Up Project

Execute the next steps

- chmod -Rf 777 storage bootstrap/cache
- cp .env.example .env
```
 - APP_URL=Your URL. Example: (http://bingo.test.local)
 - DB_HOST=Your Host. Example: (172.17.0.2)
 - DB_DATABASE= Your Data Base name. Example: (dizzy)
 - DB_USERNAME=Your Username. Example: (root)
 - DB_PASSWORD=Your Password. Example: (root!)
```
- composer install
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- If you wish try with dummy data, execute:
```
- php artisan db:seed --class=DummyDataSeeder
```
- If you wish restart the database:
```
- php artisan migrate:fresh --seed
```

### Endpoints
```
- api/card_structure/ | Method: get | Card's Structure
- api/game/ | Method: post | create a game 
      => params: { String game_name, String game_description } 
- api/game/ | Method: get | list of games
- api/game/{id} | Method: get | select a game
- api/game_cards/ | Method: post | create a card 
      => params: { Integer game_id }
 
- api/throw/ | Method: get | get a coordinate | not yet
- api/verify_winner/ | Method: get | Check all cards to find a winner | not yet
- api/verify_winner/{card_id} | Method: get | Check if a card is winner | not yet
```

### Contact
- Developer: Augusto Cáceres Puma
- Phone: +51 945615408
- Email: augusto.caceres.puma@gmail.com
- Country: Perú
- Passion: Code
