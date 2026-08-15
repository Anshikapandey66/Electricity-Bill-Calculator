# ⚡ Electricity Bill Calculator

A simple **Electricity Bill Calculator** developed using **PHP, HTML, and CSS**.
This project calculates an estimated electricity bill based on the user's previous and current meter readings.

## 📌 Project Overview

The Electricity Bill Calculator allows users to enter their meter readings and connection type. The application calculates the electricity units consumed and generates an estimated bill based on predefined tariff slabs.

This project was created as a **small PHP web development project** to practice server-side programming, form handling, conditional logic, and basic web design.

## ✨ Features

* Enter customer name
* Enter previous meter reading
* Enter current meter reading
* Select connection type
* Automatically calculate units consumed
* Calculate energy charges using slab-based rates
* Add fixed charges
* Calculate electricity duty
* Display the estimated total bill
* Validate meter readings
* Simple and responsive user interface

## 🛠️ Technologies Used

* **PHP** — Backend and bill calculation logic
* **HTML5** — Structure of the web pages
* **CSS3** — Styling and user interface
* **XAMPP** — Local PHP development server

## 📂 Project Structure

```text
Electricity-Bill-Calculator/
│
├── index.php
├── calculate.php
├── style.css
└── README.md
```

### `index.php`

Contains the main form where the user enters:

* Customer name
* Previous meter reading
* Current meter reading
* Connection type

### `calculate.php`

Processes the submitted data and:

1. Calculates units consumed.
2. Applies the selected tariff slabs.
3. Calculates fixed charges.
4. Calculates electricity duty.
5. Displays the estimated total bill.

### `style.css`

Contains the styling and layout of the application.

## 🧮 How It Works

The basic calculation is:

```text
Units Consumed = Current Meter Reading - Previous Meter Reading
```

The consumed units are then divided into applicable slabs and the corresponding charges are calculated.

For example:

```text
Previous Reading = 1250
Current Reading  = 1400

Units Consumed = 1400 - 1250
               = 150 Units
```

The application then calculates the applicable charges and displays the estimated bill.

## ⚠️ Important: Why This Project Is Not Live on GitHub Pages

This project **cannot run directly on GitHub Pages**.

The reason is that GitHub Pages is designed for **static websites** and can serve files such as:

* HTML
* CSS
* JavaScript
* Images

However, this project uses **PHP for server-side processing**.

PHP code needs a **PHP-enabled server** to execute. GitHub Pages does not provide a PHP server/runtime.

Therefore, if the PHP files are uploaded to GitHub Pages, the PHP calculation code will not execute as it does on a local PHP server.

### Local Development

The project can be run using **XAMPP**:

```text
XAMPP
  ↓
Apache Server
  ↓
PHP Runtime
  ↓
Electricity Bill Calculator
```

Place the project inside:

```text
xampp/htdocs/Electricity-Bill-Calculator/
```

Then start **Apache** from XAMPP and open:

```text
http://localhost/Electricity-Bill-Calculator/
```

## 🌐 Can This Project Be Made Live?

**Yes.**

Although it cannot be hosted directly on GitHub Pages, it can be deployed on a hosting service that supports **PHP**.

A PHP-supported hosting environment provides:

* PHP runtime
* Web server
* Optional MySQL database
* Server-side execution

After deploying the project to such a server, the application can be accessed through a public URL.

## ⚠️ Tariff Disclaimer

The tariff values currently used in this project are **demonstration values for educational purposes**.

Actual electricity bills may depend on the applicable:

* Electricity tariff slabs
* Fixed charges
* Electricity duty
* Fuel/power purchase adjustment charges
* Government/regulatory charges
* Connection category
* DISCOM
* Billing period

Therefore, this project should be considered an **estimated bill calculator** and not an official electricity billing system.

## 🚀 Future Improvements

The project can be extended with:

* [ ] MySQL database integration
* [ ] Bill history
* [ ] Customer login and registration
* [ ] Downloadable PDF bill
* [ ] Print bill functionality
* [ ] Multiple DISCOM support
* [ ] Updated official tariff rates
* [ ] Admin dashboard
* [ ] Monthly electricity consumption reports
* [ ] Electricity bill charts and analytics

## 🎯 Learning Outcomes

Through this project, I practiced:

* PHP fundamentals
* HTML forms
* Form data handling
* Conditional statements
* Arithmetic calculations
* Input validation
* CSS styling
* Basic server-side programming
* Local development using XAMPP
* Git and GitHub project management

## 👩‍💻 Author

**Anshika Pandey**

GitHub: **Anshikapandey66**

---

⭐ If you find this project useful, feel free to explore the repository and provide feedback.
