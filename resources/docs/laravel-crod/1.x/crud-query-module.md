# CRUD query from module

<font color="success">This command adds query and date to CRUD files for the module.</font> <br>

<font color="yellow">** You must run your migration file. ** </font> <br>

```
php artisan crud:query-module {table_name} {model} {--id-controller}
```

For example

```bash
php artisan crud:query-module products Product
```

OR

```bash
php artisan crud:query-module products Product --id-controller
```

When writing the `--id-controller` option add a function without route model binding.

<font color="info">After you can see add a query to service, repository, controller, model, etc for the module.</font>
