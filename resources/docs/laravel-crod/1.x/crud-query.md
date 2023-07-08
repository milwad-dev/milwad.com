# CRUD query

This command adds query and date to CRUD files. <br>

<strong>** You must run the migrate command. ** </strong> <br>

```bash
php artisan migrate
```

Run this command in the terminal. <br>

```bash
php artisan crud:query {table_name} {model} {--id-controller}
```

For example

```bash
php artisan crud:query products Product
```

When writing the `--id-controller` option add a function without route model binding.

<font color="info">After you can see add a query to service, repository, controller, model, etc.</font>
