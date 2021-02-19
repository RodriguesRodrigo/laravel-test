> I'm on a project with Laravel and choice create a new project to study about TDD and test somethings.

# Requirements

You must have ```php:7.4``` and ```composer:2.0.9``` installed.

# Run project :running:

> In this project you don't need generate a storage link or instances to databases. Not now.

Clone the project, access the dir, create and edit your .env:

```
$ git clone link-to-project
$ cd laravel-tests
$ cp .env.example .env
```

Now we need install all dependencies. So run the **composer** command:

```
$ composer install
```

After, run the project using **artisan**:

```
$ php artisan serve
```

# Run a test :bar_chart:

Open the terminal at the directory project and run this command:

```
php artisan test
```

Simple as fly :bird:
