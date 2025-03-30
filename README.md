# TailCI - CodeIgniter with Tailwind CSS

TailCI is a lightweight, fast, and modern web application built with CodeIgniter 4 and styled with Tailwind CSS. It combines the simplicity of CodeIgniter’s PHP framework with the utility-first power of Tailwind CSS for rapid development and clean design.

## Features

- Lightweight and fast CodeIgniter 4 core
- Responsive design powered by Tailwind CSS
- Easy-to-customize structure
- Optimized for performance and scalability

## Requirements

- PHP 8.1 or higher
- Composer (for dependency management)
- Web server (e.g., Apache, NgINX)
- Basic knowledge of CodeIgniter and Tailwind CSS

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/cojocaru-david/tailCi.git
   ```
2. Navigate to the project directory:
   ```bash
   cd tailci4
   ```
3. Install PHP dependencies:
   ```bash
   composer install
   ```
4. Configure your environment:
   - Copy `.env.example` to `.env` and update settings (e.g., base URL).
   - Set up your database in `.env`.
5. Install Tailwind CSS:
   - Run `npm install` to install dependencies (ensure Node.js is installed).
   - Build Tailwind: `npm run build`
   - Dev server: `npm run dev`
6. Start your web server (`php .\spark serve`) and visit the project URL.

## Usage

- Modify controllers, models, and views in the `app/` folder.
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

## Acknowledgements

- [CodeIgniter 4 Documentation](https://codeigniter.com/user_guide/index.html)
- [Tailwind CSS Official Site](https://tailwindcss.com)
- Built with ❤️ by [Cojocaru David](https://github.com/cojocaru-david)
