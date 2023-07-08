# Requirements

***

- `PHP: ^8.0`
- `Laravel framework: ^9`
- `doctrine/dbal: ^3.6`

| Crod | L7                 | L8                 | L9                 | L10                |
|------|--------------------|--------------------|--------------------|--------------------|
| 1.0  | :white_check_mark: | :white_check_mark: | :white_check_mark: | :x:                |
| 1.1  | :x:                | :x:                | :white_check_mark: | :white_check_mark: |
| 1.2  | :x:                | :x:                | :white_check_mark: | :white_check_mark: |
| 1.3  | :x:                | :x:                | :white_check_mark: | :white_check_mark: |

# Installation

***

```bash
composer require milwad/laravel-crod
```

After publish config files.<br>

```bash
php artisan vendor:publish --provider="Milwad\LaravelCrod\LaravelCrodServiceProvider" --tag="laravel-crod-config"
```

# Check active commands

Run the command in cmd or terminal. <br>

```bash
php artisan
```

You must see this command in the terminal.

![Crod commands](https://s6.uupload.ir/files/carbon_(1)_tqmq.png "Crod commands")
