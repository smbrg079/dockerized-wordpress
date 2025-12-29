# Dockerized WordPress (LEMP Stack)

This project is a Dockerized WordPress setup using the LEMP stack:
- **Linux**
- **Nginx**
- **MySQL**
- **PHP (PHP-FPM)**

It is designed for local development and can be deployed later to cloud hosting.

---

## Requirements

Make sure you have the following installed:

- Docker
- Docker Compose
- Git

---

## Project Structure

  

.
├── docker-compose.yml
├── wordpress/
│ └── wp-content/
├── .env.example
├── .gitignore
└── README.md


---

## Setup Instructions

1. Clone the repository:
```bash
git clone https://github.com/smbrg079/dockerized-wordpress.git
cd dockerized-wordpress
