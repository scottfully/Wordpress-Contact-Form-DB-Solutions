# Prevent Contact Form 7 DB Form Save

[![WordPress](https://img.shields.io/badge/WordPress-Plugin-blue.svg)](https://wordpress.org/)
[![Contact Form 7](https://img.shields.io/badge/Contact%20Form%207-Compatible-green.svg)](https://contactform7.com/)
[![License](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

A simple solution to prevent specific Contact Form 7 forms from being saved to the database when using the Contact Form DB (CFDB7) plugin.

## 🚀 Why This fix?

After spending a long time searching for a way to prevent certain forms from saving to the database while using Contact Form DB, I decided to share my solution with the community.

## ✨ Features

- ✅ Selectively prevent specific Contact Form 7 forms from being saved to the database
- ✅ Easy to configure with form titles

## 📋 Requirements

- WordPress
- Contact Form 7 plugin
- Contact Form DB (CFDB7) plugin

## 🛠️ Installation

1. Download the `prevent_cfdb_form_save.php` file
2. Upload it to your WordPress main directory or add the code to your theme's `functions.php`
3. Configure the form titles you want to exclude from database storage

## 📝 Usage

Simply modify the form titles in the `prevent_cfdb_form_save.php` file to specify which forms should be excluded from database storage.

```php
// Example: Prevent forms with titles 'Test Form 1' and 'Test Form 2' from being saved
$prevent_form_save_titles = array('Test Form 1', 'Test Form 2')
```

## 🤝 Contributing

Found this helpful? Feel free to contribute improvements or report issues!

## 📄 License

This project is licensed under the GPL v2 License - see the [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html) file for details.

## 💡 Support

If this solution saved you time like it did for me, consider giving it a ⭐ star!

---

Happy coding! 👨‍💻
