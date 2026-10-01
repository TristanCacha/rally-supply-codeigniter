<<<<<<< HEAD
# Rally Supply POS foundations

A CodeIgniter 4 starter for a pickleball shop. It demonstrates routing, controllers, views, shared navigation, an in-memory gear catalog, and temporary account lists. Catalog, customer, and staff data are stored as readable PHP arrays; the project has no database or checkout backend.

## Requirements

- PHP 8.2 or newer with the `intl` and `mbstring` extensions enabled
- Composer 2.0.14 or newer

## Run locally on Windows

Open PowerShell in this project directory. On a fresh checkout, copy the example environment file, install the locked Composer dependencies, and start CodeIgniter's local development server:

```powershell
if (-not (Test-Path .env)) { Copy-Item .env.example .env }
composer install
php spark serve --port 8081
```

Open <http://localhost:8081/>. Port 8080 is already occupied on the setup machine, so the example and local `.env` use 8081. Keep the trailing slash on the base URL. For a different local port or host, update `app.baseURL` in `.env` to match. Do not commit your local `.env`.

If port 8081 is already in use on another computer, choose an available port and use it in both the server command and `app.baseURL`.

PHP and Composer must be available in the PowerShell `PATH`. After installing them on Windows, open a new PowerShell window before running the commands above.

## Pages

| URL | Controller action | Purpose |
| --- | --- | --- |
| `/` | `Pages::index` | Store landing page |
| `/shop` | `Catalog::index` | Sample pickleball catalog with category links and product options |
| `/about` | `Pages::about` | About Rally Supply |
| `/customers` | `Customers::index` | Five sample customers (name, email, phone) |
| `/users` | `Users::index` | Five sample staff users (username, name, role) |

Routes are declared in `app/Config/Routes.php`. Each route points to a controller method, which passes data to a view. The catalog and account controllers provide temporary PHP arrays; their views use `foreach` and `esc()` to display the data. Catalog categories use regular links, while product choices use native select controls. Product photos are stored in `public/assets/images/`. Shared navigation and page structure live under `app/Views/partials/`, with styling in `public/assets/css/store.css`.

This assessment version intentionally uses static arrays and does not connect to a database. The displayed prices are sample values; there is no payment or checkout flow. Database models, migrations, and an SQL export belong to a later data-layer version.

## Submission status

- GitHub repository: intentionally left for the student to create and link later.
- Hosted version: no public deployment has been configured. Use the local preview at <http://localhost:8081/> while developing; a public hosting target and its deployment setup are still needed for a hosted link.
- Database export: not applicable to this static-array starter. No database is used.
=======
# rally-supply-codeigniter
Rally Supply pickleball store project.
>>>>>>> f6bbc845fba8ce94fa1b4cae2ed2a9bee8b8b26d
