# 🩸 Blood Shield

### Blood Donation Management System

Blood Shield is a web-based blood donation management system designed to organize donor information, simplify donor lookup, and provide an overview of available blood units.

The project aims to make blood donation management more organized, accessible, and efficient.

---

## 🌐 Live Demo

Blood Shield will be available online so users can explore and interact with the application without installing it locally.

- **Live Application:** https://blood-shield.onrender.com/
- **Demo Access:** Public access will be available after deployment.

> **Note:** The current version is intended for demonstration purposes. It uses session-based storage rather than a production database, so data is temporary and not shared between visitors.

---

## ✨ Features

- **Dashboard:** Overview of donors, donations, and blood availability.
- **Donor Management:** View and manage registered donor information.
- **Donor Registration:** Register new donors with personal and blood type information.
- **Donor Details:** View individual donor profiles and contact information.
- **Donor Search:** Search for donors using their unique ID.
- **Blood Storage:** View available blood units by blood type.
- **About Us:** Information about the system and its mission.

---

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| PHP | Backend programming |
| Laravel 13 | Web application framework |
| HTML5 | Page structure |
| CSS3 | Styling |
| Bootstrap 5 | Responsive UI |
| JavaScript | Frontend interactions |
| Bootstrap Icons | Interface icons |
| Laravel Blade | Templating engine |
| Git & GitHub | Version control |

---

## 📸 Application Pages

The system currently includes:

1. Dashboard
2. Donors
3. Add New Donor
4. Donor Details
5. Donations
6. Blood Storage
7. About Us

---

## ⚙️ Installation

Follow these steps to run Blood Shield locally.

### Prerequisites

Make sure you have installed:

- PHP
- Composer
- Node.js and npm
- Git

### 1. Clone the repository

```bash
git clone https://github.com/CIS-Ahmad/Blood-Shield.git
```

### 2. Navigate to the project directory

```bash
cd Blood-Shield
```

### 3. Install PHP dependencies

```bash
composer install
```

### 4. Create the environment file

```bash
copy .env.example .env
```

### 5. Generate the application key

```bash
php artisan key:generate
```

### 6. Install frontend dependencies

```bash
npm install
```

### 7. Build frontend assets

```bash
npm run build
```

### 8. Start the development server

```bash
php artisan serve
```

Open the application in your browser:

`http://127.0.0.1:8000`

---

## 🚧 Development Status

Blood Shield is currently under development.

The current version uses Laravel sessions for donor data storage, with sample data for demonstration purposes.

Planned improvements include:

- Database integration.
- Complete donation recording and history management.
- Dynamic blood storage calculations.
- Improved data validation and management.
- Production deployment.

---

## 🎯 Project Goal

The goal of Blood Shield is to provide a simple and organized platform for managing blood donors and blood availability, with the potential to expand into a more complete blood bank management system.

---

## 👨‍💻 Developer

**ICE**

GitHub: [@CIS-Ahmad](https://github.com/CIS-Ahmad)

---

## 📄 License

This project is open-source and currently intended for educational and demonstration purposes.****
