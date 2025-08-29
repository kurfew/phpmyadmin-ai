# MyAdminPHP with AI Query Assistant

**MyAdminPHP** is an enhanced version of phpMyAdmin with an **AI-powered SQL Assistant**.  
With this feature, users can write queries in **simple English** (e.g., *"Show me all customers who registered last month"*) and the system will automatically generate the corresponding **SQL query** inside phpMyAdmin.

This saves time for developers, analysts, and non-technical users by reducing the need to remember SQL syntax.

---

## ✨ Features

- All features of **phpMyAdmin** (database browsing, CRUD, export/import, etc.)
- New **AI Assistant tab/button** for **natural language to SQL conversion**
- Schema aware query generation 
- Secure integration with **OpenAI (or any LLM API)**
- Works directly inside phpMyAdmin interface
- Lightweight, simple setup

---

## ⚙️ Requirements

- PHP >= 7.4  
- MySQL/MariaDB  
- Web server (Apache / Nginx with PHP support)  
- Composer (for dependency management)  
- OpenAI API Key (or compatible LLM API)  

---

## 📥 Installation Guide

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/myadminphp-ai.git
cd myadminphp-ai
