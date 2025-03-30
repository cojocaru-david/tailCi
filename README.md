# TailCI - CodeIgniter with Tailwind CSS

TailCI is a minimalist yet powerful web application template that integrates CodeIgniter, a robust PHP framework, with Tailwind CSS, a highly customizable utility-first CSS framework. Designed for developers who value speed, simplicity, and modern aesthetics.

## Features

- Lightweight and fast CodeIgniter core
- Responsive design powered by Tailwind CSS
- Easy-to-customize structure
- Optimized for performance and scalability

## Requirements

- PHP 7.4 or higher (PHP 8.x recommended)
- Composer (for dependency management)
- Web server (e.g., Apache, Nginx)
- Basic knowledge of CodeIgniter and Tailwind CSS

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/cojocaru-david/tailCI.git
   ```
2. Navigate to the project directory:
   ```bash
   cd tailci
   ```
3. Install PHP dependencies (if any):
   ```bash
   composer install
   ```
4. Configure your environment:
   - Copy `application/config/config.php.example` to `application/config/config.php` and update settings (e.g., base URL).
   - Set up your database in `application/config/database.php`.
5. Install Tailwind CSS:
   - Run `npm install` to install dependencies (ensure Node.js is installed).
   - Build Tailwind: `npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --watch`
6. Start your web server and visit the project URL.

## Usage

- Modify controllers, models, and views in the `application/` folder.
- Customize styles in `assets/css/input.css` and rebuild Tailwind as needed.
- Add your own features and logic!

## Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m "Add your feature"`).
4. Push to your branch (`git push origin feature/your-feature`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [CodeIgniter](https://codeigniter.com)
- [Tailwind CSS](https://tailwindcss.com)
- Built with ❤️ by [Cojocaru David](https://github.com/cojocaru-david)
