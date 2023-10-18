# James Weston OrbitalRx
The coding test description can be found [here](https://drive.google.com/file/d/1CsgoaoFdlQMIs-oq3KdwpiCagx3OIaIg/view?usp=share_link) for the [Team Lead, Full Stack Developer](https://www.indeed.com/viewjob?from=app-tracker-post_apply-appcard&hl=en&jk=3012e635e69ae970&tk=1hck861q82pt7000) position.

## Project Structure
The project is structured as a monorepository. The api backend and app front-end can be found in their respective directories.

### API
- The language and framework I decided to go with for the API is PHP and [Laravel](https://laravel.com). I know, PHP sucks. But Laravel makes PHP good.
- Laravel is a modern framework and very similar to [nest.js](https://nestjs.com/) and [FastAPI](https://fastapi.tiangolo.com/). Out of the box it provides a lot of the tools that are needed for this project.
- The project was scaffolded with the [Laravel Installer](https://github.com/laravel/installer) composer package.

### App
- The app is javascript (typescript) using [react](https://react.dev/)
- The project was scaffolded with [create-react-app](https://create-react-app.dev/)

### Running the project locally
- Running the api requires docker. Here are instructions to install for [mac](https://docs.docker.com/desktop/install/mac-install/) and [windows](https://docs.docker.com/desktop/install/windows-install/).
- Running the app requires [npm](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm).

To start the API backend and all required services:
- CD into the api directory
- To start the docker VMs run ``` docker-compose up -d ```
- If running for the first time you need to run the database migrations and seeders.
  - SSH into the API VM with ``` docker-compose exec api /bin/bash ``` and run the following:
  - DB migrations: ``` php artisan migrate ```
  - DB seeders: ``` php artisan db:seed ```

To start the app:
- CD into the app directory
- Run the following command:
  - ```
        npm start
    ```

NPM Is also required but is assumed to be installed.

To run the API backend CD into the api directory and run the following:
```
    docker-compose up -d
```

## Database
- Database migrations can be found [here](./api/database/migrations).
- Database seeders can be found [here](./api/database/seeders).