# Happy New Year Wishing Web App


[ ## Free and Open Source ]


Happy New Year Name Wishing Web APP :100:

- Bootstrap CSS (Frontend Framework)
- PHP/MYSQL [PHP Version - version 5.6 or greater(PHP 7 Recommended) / MYSQL Version -  5.5 or greater / MariaDB version 10.0 or greater]

## Demo

Watch demo in youtube - <a href="https://youtu.be/WoVyj0X2-EA" target="_blank">Demo</a>

Forum Discussion - <a href="https://goo.gl/Mkebuv" target="_blank">Join Now</a>

Blog Post - <a href="https://awts.in/2nBIPZh" target="_blank">Read Now</a>

## Recent Changes

:bug: Fix W3 validation Errors <br>
:bug: Fix Whatsapp W3 validation Errors & Warnings - Enode the Share Text Using PHP rawurlencode <br>
:art: Twitter Meta Tag Improvements <br>
:art: Add Ad Placements Slots <br>
:art: Update Google Font Lato to Ubuntu <br>
:art: Add Responsive Image `<div class="post-content"><img src="build/image/example.png" alt="alt text"></div>`

## Features

- SEO Friendly URL
- Social Meta Tags
- Mobile Responsive
- Proper canonical Tag
- Facebook & Whatsapp Share 
- Light Weight
- Easy to Customize


## Customization :electric_plug:

Create Database Table for Store the user's Entries.

```

CREATE TABLE event_wishes
(
 id INT NOT NULL AUTO_INCREMENT,
 title VARCHAR (500) NOT NULL UNIQUE, 
 str VARCHAR (500) NOT NULL UNIQUE,
 PRIMARY KEY (ID)
);


```

- Connect your Database
- open `db.php` & enter your Database user detailes & passwords
- Next open `index.php` & update Web APP URL
- Find the below line on `index.php`
- Replace `http://localhost/newyear` it with your web app Home page URL

```

header("Location: http://localhost/newyear/$str");

```

- open `wishApp.php`
- Find this Below line on `wishApp.php`
- Replace `http://localhost/newyear/` it with your web app Home page URL Don't remove "/" 

```

<form method="post" action="http://localhost/newyear/" class="form-inline">

```

- That's all Done - Happy Event :-) 

