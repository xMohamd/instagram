# Laravel Instagram Clone

This project is an Instagram clone that aims to replicate the core features and functionalities of the popular social media platform. It includes features such as user authentication, posting images, following other users, liking and commenting on posts, and more.

- Demo

## Technologies Used

- Frontend: HTML, CSS, SCSS, JavaScript, blade
- Backend: PHP, Laravel, MySql
- Additional Tools: Axios, AWS, mailpit, Breeze

## Features

- User Authentication: Users can sign up, log in, and log out.
- Profile Management: Users can update their profiles, including their profile picture and bio.
- Post Creation: Users can create new posts with images and captions.
- Like and Comment: Users can like and comment on posts.
- Follow System: Users can follow/unfollow other users.

## Installation

1. Clone the repository:

    ```
    git clone https://github.com/your_username/instagram-clone.git 
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

- app/: Contains the application's models, controllers, and other PHP classes.
- database/: Contains database migrations and seeders.
- resources/
    - sass/: Contains Sass files.
    - views/: Contains Blade templates for the frontend.
- public/: Contains publicly accessible files, such as images, compiled CSS/JS.
- routes/: Contains route definitions.

## Contributors ✨

<table>
  <tbody>
    <tr>
      <td align="center" valign="top" width="14.28%">
        <a href="https://github.com/marwan-mohamed12">
          <img src="https://avatars.githubusercontent.com/u/40841193?v=4" width="100px;" alt="Marwan Mohamed" /><br /><sub><b>Marwan Mohamed</b></sub>
        </a><br />
        <a href="#" title="Answering Questions">💬</a> 
        <a href="#" title="Documentation">📖</a> 
        <a href="#" title="Reviewed Pull Requests">👀</a> 
        <a href="#" title="Talks">📢</a>
      </td>
      <td align="center" valign="top" width="14.28%">
        <a href="https://github.com/NourhanRadwan145">
          <img src="https://avatars.githubusercontent.com/u/153069096?v=4" width="100px;" alt="Nourhan Radwan" /><br /><sub><b>Nourhan Radwan</b></sub>
        </a><br />
        <a href="#" title="Answering Questions">💬</a> 
        <a href="#" title="Documentation">📖</a> 
        <a href="#" title="Reviewed Pull Requests">👀</a> 
        <a href="#" title="Talks">📢</a>
      </td>
    </tr>
  </tbody>
</table>
