# Checklist-Implementation

# ⚡ Transformer Energy Audit Web App

This is a PHP + MySQL-based lightweight web application that facilitates structured data entry and export of transformer energy audit reports. Designed for ease of use and compatibility with Excel records, it offers a smooth way to digitally store, retrieve, and analyze transformer audit data.

---

## 📘 Project Summary

This project offers **two approaches** to transformer audit reporting:

### ✅ Approach 1 (Implemented):
- **Web-based Form** using HTML, PHP, and MySQL.
- **Submit** data into a database via `submit.php`.
- **Export** audit records into a `.csv` using `export.php`.
- **Hosted using XAMPP** locally or on any LAMP stack.

### 📁 Approach 2 (Optional):
- Excel VBA-based form interface.
- Macros for data entry and saving into worksheets.
- Works offline and saves in `.xls/.csv`.

### Project Structure: 
 - Transformer-Energy-Audit-Web/ 
├── index.html # Frontend form UI 
├── submit.php # Backend insert to MySQL 
├── export.php # Export all records as CSV 
├── Transformer_Energy_Audit.xlsx # Reference Excel form 
├── Checklist-Report.docx # Project documentation 
└── README.md # This file

---

## 🔧 Setup Instructions

### 1. ✅ Install XAMPP
Download and install XAMPP from [https://www.apachefriends.org](https://www.apachefriends.org).

### 2. 🗂 Move Files
Place this project folder inside your `htdocs` directory:
C:/xampp/htdocs/Transformer-Energy-Audit-Web/

### 3. ▶️ Start Localhost Server
Launch Apache and MySQL from XAMPP Control Panel.

Or start using terminal:
```bash
cd C:/xampp/htdocs/Transformer-Energy-Audit-Web/
php -S localhost:8000
```

### 4. 🌐 Access Web App
Open your browser and go to:
```bash
http://localhost:8000/index.html
```

### 5. 🗃️ MySQL Database Setup
 - Use phpMyAdmin or MySQL CLI to create the database and table:
``` SQL
CREATE DATABASE IF NOT EXISTS energy_audit;
USE energy_audit;

CREATE TABLE audit_data (
  id INT AUTO_INCREMENT PRIMARY KEY,
  address TEXT,
  contact_person VARCHAR(255),
  contact_info VARCHAR(255),
  year_built INT,
  building_type VARCHAR(255),
  square_footage INT,
  occupants INT,
  operating_hours VARCHAR(255),
  transformer_id VARCHAR(255),
  location VARCHAR(255),
  manufacturer VARCHAR(255),
  capacity FLOAT,
  voltage_rating VARCHAR(50),
  frequency VARCHAR(50),
  type VARCHAR(50),
  temperature VARCHAR(50),
  cooling_type VARCHAR(50),
  installation_date DATE,
  motor_id VARCHAR(50),
  motor_rating FLOAT,
  motor_efficiency FLOAT,
  chiller_capacity FLOAT,
  chiller_cop FLOAT,
  chiller_hours INT,
  fan_id VARCHAR(50),
  fan_power FLOAT,
  fan_runtime INT,
  observations TEXT,
  recommendations TEXT
);
```
### 6. ✅ Submit Data (Form ➜ MySQL)
 - Visit index.html → fill in audit fields → on submit:
-- Data is stored in the audit_data MySQL table using submit.php.

### 7. 📷 Screenshots & Deployment Docs
 - Refer to:
 - 📎 GitHub: Checklist-Implementation[https://github.com/pranjalsinha1965/Checklist-Implementation/tree/main]
 - 📎 Project Report: Checklist-Report.docx in the repo.

### 8. 🚀 Future Enhancements
- Admin dashboard to review all audits.
- Excel auto-importer for .xlsx to MySQL (via PhpSpreadsheet).
- Email/PDF reports generation.
- User login system (admin + field staff).
- Data analytics for loss, load, and failure prediction.

