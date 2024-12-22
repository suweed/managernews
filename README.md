<a name="readme-top"></a>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<div align="center">
    <a href="https://github.com/suweed/managernews">
        <img src="public/images/avatarSelfie.png" alt="Logo" width="80" height="80">
    </a>
    <h3 align="center">Administrador de Noticias</h3>
    <p align="center">
        Adminsitrador de noticias creado como prueba para un proyecto con el gobierno
        <br />
        <a href="https://github.com/suweed/managernews"><strong>Explore the docs »</strong></a>
        <br />
        <br />
        <a href="https://github.com/suweed/managernews">View Demo</a>
        ·
        <a href="https://github.com/suweed/managernews/issues">Report Bug</a>
        ·
        <a href="https://github.com/suweed/managernews/issues">Request Feature</a>
    </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## About The Project

![Screen Shot][product-screenshot]

Adminsitrador de noticias creado como prueba para un proyecto con el gobierno

<p align="right">(<a href="#readme-top">volver al principio</a>)</p>

### Built With

* [![Laravel][Laravel]][Laravel-url]
* [![Php][Php]][Php-url]
* [![Mysql][Mysql]][Mysql-url]
* [![Node][Node]][Node-url]
* [![Composer][Composer]][Composer-url]
* [![Javascript][Javascript]][Javascript-url]
* [![JQuery][JQuery]][JQuery-url]
* [![Bootstrap][Bootstrap]][Bootstrap-url]

<p align="right">(<a href="#readme-top">volver al principio</a>)</p>

<!-- GETTING STARTED -->
## Getting Started

Proyecto en Laravel para crear contenido dinamico en una pagina principal

### Prerequisites

* laravel
    - https://laravel.com/
* node
  - https://nodejs.org/es
* npm
  - https://www.npmjs.com/

  ```
  laravel new gobierno
  npm install
  npm run build
  ```

### Installation

1. Clone the repo
   ```
   git clone https://github.com/suweed/managernews.git
   ```
2. Install NPM packages
   ```
   npm install
   ```
3. build project
   ```
   npm run build
   ```
4. In the root project
   ```
   Create file .env
   ```
   Modified Configs Bd Connection
   ```
    DB_CONNECTION=mysql
    DB_HOST=<host>
    DB_PORT=3306
    DB_DATABASE=<database-name>
    DB_USERNAME=<username>
    DB_PASSWORD=<password>
   ```
5. Migrate Data
   ```
   php artisan migrate
   ```
6. start project
   ```
   php artisan serve
   ```

<p align="right">(<a href="#readme-top">volver al principio</a>)</p>

<!-- LICENSE -->
## License

Distribuido bajo la licencia MIT. Consulte `LICENSE` para obtener más información.

<p align="right">(<a href="#readme-top">volver al principio</a>)</p>

<!-- CONTACT -->
## Contact

Jesús Cardozo - [@dRsUgAr1221](https://twitter.com/dRsUgAr1221) - gsuskr2o@gmail.com

Project Link: [https://github.com/suweed/managernews](https://github.com/suweed/managernews)

<p align="right">(<a href="#readme-top">volver al principio</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/suweed/configurator.svg?style=for-the-badge
[contributors-url]: https://github.com/suweed/managernews/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/suweed/configurator.svg?style=for-the-badge
[forks-url]: https://github.com/suweed/managernews/network/members
[stars-shield]: https://img.shields.io/github/stars/suweed/configurator.svg?style=for-the-badge
[stars-url]: https://github.com/suweed/managernews/stargazers
[license-shield]: https://img.shields.io/github/license/suweed/configurator.svg?style=for-the-badge
[license-url]: https://github.com/suweed/managernews/blob/main/LICENSE.txt
[issues-shield]: https://img.shields.io/github/issues/suweed/configurator.svg?style=for-the-badge
[issues-url]: https://github.com/suweed/managernews/issues
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/gsuskr2o
[product-screenshot]: public/images/screen.jpg
[Javascript]: https://img.shields.io/badge/javascript-20232A?style=for-the-badge&logo=javascript
[Javascript-url]: https://lenguajejs.com/javascript/
[JQuery]: https://img.shields.io/badge/jquery-20232A?style=for-the-badge&logo=JQuery
[JQuery-url]: https://jquery.com/
[Laravel]: https://img.shields.io/badge/laravel-20232A?style=for-the-badge&logo=laravel
[Laravel-url]: https://laravel.com/
[Bootstrap]: https://img.shields.io/badge/bootstrap-20232A?style=for-the-badge&logo=Bootstrap
[Bootstrap-url]: https://getbootstrap.com/
[Php]: https://img.shields.io/badge/php-20232A?style=for-the-badge&logo=Php
[Php-url]: https://www.php.net/
[Node]: https://img.shields.io/badge/node.js-20232A?style=for-the-badge&logo=node.js
[Node-url]: https://nodejs.org/es
[Composer]: https://img.shields.io/badge/composer-20232A?style=for-the-badge&logo=composer
[Composer-url]: https://getcomposer.org/
[Mysql]: https://img.shields.io/badge/mysql-20232A?style=for-the-badge&logo=mysql
[Mysql-url]: https://www.mysql.com/