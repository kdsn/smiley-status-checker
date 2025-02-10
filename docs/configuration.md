# ⚙️ Configuration Guide

This guide explains how to configure **[Project Name]** properly.

---

## 📌 **1. Configuration Methods**
You can configure **[Project Name]** using:
1. **Environment Variables** (`.env` file)
2. **Configuration Files** (`config.yaml` or `settings.json`)
3. **Command-line Arguments** (for overriding settings)

---

## 🌍 **2. Environment Variables (`.env` file)**
To use environment variables, rename the provided `.env.example` file to `.env`:
```sh
cp .env.example .env
```

Then, open `.env` and update the values:
```ini
# Database Configuration
DATABASE_URL=postgres://user:password@localhost:5432/mydatabase

# API Keys
API_KEY=your-secret-key

# Debug Mode
DEBUG=true
```
💡 **Make sure .env is not committed to Git!** Add it to `.gitignore`:
```gitignore
.env
```

---

## 📜 3. Configuration Files
Option 1: `config.yaml` **(YAML Format)**

```yaml
app:
  name: "MyApp"
  debug: false
database:
  host: "localhost"
  port: 5432
  username: "db_user"
  password: "securepassword"
```
Option 2: `settings.json` **(JSON Format)**

```json
{
  "app": {
    "name": "MyApp",
    "debug": false
  },
  "database": {
    "host": "localhost",
    "port": 5432,
    "username": "db_user",
    "password": "securepassword"
  }
}
```

---

## 🖥 4. Overriding Configuration via CLI
You can override settings using command-line arguments:

```sh
python main.py --debug=True --database.host="localhost"
```

For Node.js:


```sh
node index.js --config=config.json
```

--- 

## 🛠 5. Configuration Priority Order
1. **Command-line Arguments** (highest priority)
2. Environment Variables (`.env)
3. **Configuration Files** (`config.yaml` **or** `settings.json`) (default values)

--- 

## 🔍 6. Checking Current Configuration
To verify the current configuration:

**Python**:

```python
import os
print("Database URL:", os.getenv("DATABASE_URL"))
```

**Node.js**:

```javascript
console.log("Database URL:", process.env.DATABASE_URL);
```

---

## 📞 Need Help?

If you run into configuration issues:
- Open a **GitHub Issue**: [Issues](https://github.com/kdsn/project-template/issues).
- Contact support: <support@example.com>


--- 

🚀 Now you are ready to configure [Project Name] efficiently!