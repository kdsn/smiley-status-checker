# 📖 API Reference

Welcome to the API documentation for **[Project Name]**. Below, you'll find details on how to use the API, including available endpoints, request/response formats, and authentication methods.

---

## 🔑 Authentication
This API uses **API keys** for authentication. Include your key in the request header:
```http
Authorization: Bearer YOUR_API_KEY
```
If you're unauthorized, the API will return:

```json
{
"error": "Unauthorized",
"message": "Invalid API key"
}
```

---

## 📌 Endpoints
### 1️⃣ GET /api/v1/status
Returns the current status of the API.

#### 🔹 Request
```http
GET /api/v1/status HTTP/1.1
Host: api.example.com
```

#### 🔹 Response
```json
{
"status": "ok",
"uptime": "24h"
}
```
### 2️⃣ POST /api/v1/login
Authenticates a user and returns a session token.

#### 🔹 Request

```http
POST /api/v1/login HTTP/1.1
Host: api.example.com
Content-Type: application/json

{
"username": "testuser",
"password": "securepassword"
}
```

#### 🔹 Response
```json
{
"token": "abcdef123456",
"expires_in": 3600
}
```

### 3️⃣ GET /api/v1/users/{id}
Fetch details of a specific user.

#### 🔹 Request
```http
GET /api/v1/users/42 HTTP/1.1
Host: api.example.com
Authorization: Bearer YOUR_API_KEY
```

#### 🔹 Response
```json
{
"id": 42,
"name": "John Doe",
"email": "johndoe@example.com"
}
```

---

## 🔄 Error Handling

The API follows standard HTTP response codes:

| Status Code | Meaning                               |
|-------------|---------------------------------------|
| `200 OK`      | Request was successful                |
| `201 Created` | Resource was created                  |
| `400 Bad Request`   | Invalid input                         |
| `401 Unauthorized`   | Missing/invalid API key               |
| `403 Forbidden`   | No permission for action              |
| `404 Not Found`   | Resource not found                    |
| `500 Internal Server Error`   | Unexpected issue on the server        |

---

## 📋 Rate Limits

- **Free plan**: 100 requests per hour
- **Pro plan**: 10,000 requests per hour
- Exceeding limits will result in a `429 Too Many Requests response.

---

## 🛠️ Example Usage

### Curl
```sh
curl -H "Authorization: Bearer YOUR_API_KEY" https://api.example.com/api/v1/status
```

### Python
```python
import requests

headers = {"Authorization": "Bearer YOUR_API_KEY"}
response = requests.get("https://api.example.com/api/v1/status", headers=headers)

print(response.json())
```

---

## 📞 Need Help?
For further assistance:
- Open a **GitHub Issue**: [Issues](https://github.com/kdsn/project-template/issues).
- Contact support: <support@example.com>

---

🚀 Happy coding with [Project Name]!