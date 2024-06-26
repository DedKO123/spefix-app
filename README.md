# Spefix App

- [Install](#install)

Prerequisites:
- Docker
## Install

1. Clone the repository:
```
git clone https://github.com/DedKO123/spefix-app.git
```
2. Navigate into the project directory:
```
cd spefix-app
```
3. Copy the .env.example file to .env:
```
cp .env.example .env
```
4. Set up your database credentials in the .env file.
5. Install the composer dependencies:
```
 composer install
```
6. Build the Docker containers:
```
./vendor/bin/sail up -d
```
7. Install the NPM dependencies:
```
./vendor/bin/sail npm i
```
8. Build the assets:
```
./vendor/bin/sail npm run dev
```

10. Generate the application key:
```
./vendor/bin/sail artisan key:generate
```
11. Run the database migrations:
```
./vendor/bin/sail artisan migrate --seed
```
12. Create a symbolic link to the storage directory:
```
./vendor/bin/sail artisan storage:link
```

13. Visit the application in your browser:
```
http://localhost
```
