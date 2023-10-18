## Running the project locally
- Running the api requires docker. Here are instructions to install for [mac](https://docs.docker.com/desktop/install/mac-install/) and [windows](https://docs.docker.com/desktop/install/windows-install/).
- Running the app requires [npm](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm).
- To start the docker VMs CD into the api directory and run ``` docker-compose up -d ```

### Database
If running for the first time you need to run the database migrations and seeders.
- SSH into the API VM with ``` docker-compose exec app /bin/bash ``` and run the following:
- Install dependencies: ``` composer install ```
- DB migrations: ``` php artisan migrate ```
- DB seeders: ``` php artisan db:seed ```

To start the app:
CD into the app directory
- Install dependencies: ``` npm install ```
- Starting: ``` npm start ```

### Viewing API documentation
- While running locally view the [API docs here](http://localhost/documentation/redoc)
