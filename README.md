# Laravel Instagram Clone

This project is an Instagram clone that aims to replicate the core features and functionalities of the popular social media platform. It includes features such as user authentication, posting images, following other users, liking and commenting on posts, and more.

https://github.com/xMohamd/instagram/assets/10786768/404515d7-1ce7-456c-9878-14043d7f61cc


## Technologies Used

-   Frontend: HTML, CSS, SCSS, JavaScript, blade
-   Backend: PHP, Laravel, MySql
-   Additional Tools: Axios, AWS, mailpit, Breeze

## Features

-   User Authentication: Users can sign up, log in, and log out.
-   Profile Management: Users can update their profiles, including their profile picture and bio.
-   Post Creation: Users can create new posts with images and captions.
-   Like and Comment: Users can like and comment on posts.
-   Follow System: Users can follow/unfollow other users.

## Installation

1. Clone the repository:

    ```
    git clone https://github.com/xMohamd/instagram-clone.git
    ```

2. Install composer dependencies:

    ```
    composer install
    ```

3. Create a .env file by copying the .env.example and update the database information:

    ```
    cp .env.example .env
    ```

4. Run migrations and seed the database:

    ```
    php artisan migrate
    ```

5. Compile Sass and JavaScript assets:

    ```
    npm install && npm run dev
    ```

6. Start the development server:

    ```
    php artisan serve
    ```

Access the application at `http://localhost:8000`.

## Usage

1. Register a new account or log in with the seeded users.
2. Explore the application by creating posts, following other users, liking and commenting on posts.

## Folder Structure

-   app/: Contains the application's models, controllers, and other PHP classes.
-   database/: Contains database migrations and seeders.
-   resources/
    -   sass/: Contains Sass files.
    -   views/: Contains Blade templates for the frontend.
-   public/: Contains publicly accessible files, such as images, compiled CSS/JS.
-   routes/: Contains route definitions.

## Contributors ✨

<table>
  <tbody>
    <tr>
        <td align="center" valign="top" width="14.28%">
            <a href="https://github.com/marwan-mohamed12">
            <img
                src="https://avatars.githubusercontent.com/u/40841193?v=4"
                width="100px;"
                alt="Marwan Mohamed"
            /><br /><sub><b>Marwan Mohamed</b></sub> </a
            ><br />
            <a href="https://github.com/xMohamd/instagram/commits?author=marwan-mohamed12" title="Documentation">📖</a>
             <a href="#" title="Tools">🔧</a>
             <a href="#" title="Infrastructure (Hosting, Build-Tools, etc)">🚇</a>
             <a href="#" title="Maintenance">🚧</a>
            <a href="https://github.com/all-contributors/all-contributors/pulls?q=is%3Apr+reviewed-by%3Ajakebolam" title="Reviewed Pull Requests">👀</a>
        </td>
        <td align="center" valign="top" width="15%">
            <a href="https://github.com/NourhanRadwan145">
            <img
                src="https://avatars.githubusercontent.com/u/153069096?v=4"
                width="105px;"
                alt="Nourhan Radwan"
            /><br /><sub><b>Nourhan Radwan </b></sub> </a
            ><br />
            <a href="#" title="Answering Questions">💬</a>
            <a href="#" title="Documentation">📖</a>
            <a href="#" title="Reviewed Pull Requests">👀</a>
            <a href="#" title="Talks">📢</a>
        </td>
        <td align="center" valign="top" width="14.28%">
            <a href="https://github.com/MahmoudDabbous">
            <img
                src="https://avatars.githubusercontent.com/u/109554499?v=4"
                width="100px;"
                alt="Mahmoud Dabbous"
            /><br /><sub><b>Mahmoud Dabbous</b></sub> </a
            ><br />
            <a href="#" title="Answering Questions">💬</a>
            <a href="#" title="Documentation">📖</a>
            <a href="#" title="Reviewed Pull Requests">👀</a>
            <a href="#" title="Talks">📢</a>
        </td>
        <td align="center" valign="top" width="14.28%">
            <a href="https://github.com/xMohamd">
            <img
                src="https://avatars.githubusercontent.com/u/10786768?v=4"
                width="100px;"
                alt="Mohamed"
            /><br /><sub><b>Mohamed</b></sub> </a
            ><br />
            <a href="#" title="Answering Questions">💬</a>
            <a href="#" title="Documentation">📖</a>
            <a href="#" title="Reviewed Pull Requests">👀</a>
            <a href="#" title="Talks">📢</a>
        </td>
        <td align="center" valign="top" width="14.28%">
            <a href="https://github.com/MohamedAliEsmaill">
            <img
                src="https://avatars.githubusercontent.com/u/76743957?v=4"
                width="100px;"
                alt="Mohamed Ali"
            /><br /><sub><b>Mohamed Ali</b></sub> </a
            ><br />
            <a href="#" title="Answering Questions">💬</a>
            <a href="#" title="Documentation">📖</a>
            <a href="#" title="Reviewed Pull Requests">👀</a>
            <a href="#" title="Talks">📢</a>
        </td>
        <td align="center" valign="top" width="14.28%">
            <a href="https://github.com/MohamedAliEsmaill">
            <img
                src="https://avatars.githubusercontent.com/u/87963230?v=4"
                width="100px;"
                alt="Mohamed Ali"
            /><br /><sub><b>ZeinabAbdelghaffar</b></sub> </a
            ><br />
            <a href="#" title="Answering Questions">💬</a>
            <a href="#" title="Documentation">📖</a>
            <a href="#" title="Reviewed Pull Requests">👀</a>
            <a href="#" title="Talks">📢</a>
        </td>
    </tr>
  </tbody>
</table>
