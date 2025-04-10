# La Casa De Com - PHP Static Website

A static website for La Casa De Com agency built with PHP, HTML, CSS, and Bootstrap.

## Requirements

- PHP 7.4 or higher
- Apache or Nginx web server

## Installation

1. **Clone the repository**

```bash
git clone https://github.com/yourusername/php-static-website.git
cd php-static-website
```

2. **Set up your web server**

### Using PHP's built-in server (for development):

```bash
php -S localhost:8000
```

### Using Apache:

- Copy the project to your Apache document root (e.g., `/var/www/html/` or `htdocs/`)
- Configure the virtual host if needed

### Using XAMPP/WAMP/MAMP:

- Clone or extract the project to your `htdocs` or `www` directory
- Start Apache through the control panel
- Access the site at `http://localhost/php-static-website`

## Project Structure

```
php-static-website/
├── index.php              # Main entry point
├── public/                # Public assets
│   └── assets/
│       ├── css/           # CSS files
│       ├── js/            # JavaScript files
│       └── images/        # Image files
└── src/                   # Source files
    └── components/        # PHP components
        ├── header.php     # Header component
        └── footer.php     # Footer component
```

## Features

- Responsive design using Bootstrap
- Modular components with PHP includes
- Modern UI with Font Awesome icons

## Customization

- Edit the CSS files in `public/assets/css/` to customize the styling
- Modify the components in `src/components/` to update the layout structure

## License

[MIT License](LICENSE)
