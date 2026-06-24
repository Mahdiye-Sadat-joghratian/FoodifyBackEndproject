# 🍳 Foodify Backend Project

> Backend API for a modern cooking recipe platform - Built with Laravel

---

## 📖 About The Project

This is the **backend API** for a recipe sharing platform inspired by a Figma UI design. The project provides RESTful APIs for managing:

- 👤 **Users** (Authentication, Profile Management)
- 📝 **Recipes** (Create, Read, Update, Delete)
- 📂 **Categories** (Organize recipes by category)
- 💬 **Comments** (User interactions on recipes)
- ⭐ **Collections** (Save and organize favorite recipes)
- 👥 **Follow System** (Follow other users)

---

## 🎨 Figma Design Reference

The UI/UX design for this project was created in Figma.

---

## 🚀 Tech Stack

| Technology | Version |
|------------|---------|
| PHP | 8.x |
| Laravel | 10.x |
| MySQL | 8.x |
| Laravel Sanctum | API Authentication |
| Composer | Dependency Management |

---

## 📦 Features

- ✅ CRUD Operations for all main entities
- ✅ API Authentication with Sanctum (Token-based)
- ✅ Request Validation using Form Requests
- ✅ API Resources for consistent JSON responses
- ✅ Model Observers for automated actions
- ✅ RESTful API Routes organized in /routes/v1/api.php

---

## 🗄️ Database Structure

Main tables:
- `users` - User accounts and profiles
- `recipes` - Recipe posts with ingredients and instructions
- `categories` - Recipe categories
- `comments` - User comments on recipes
- `collections` - User recipe collections
- `follows` - User follow relationships

---

## 🔧 Installation

1. Clone the repository:
```bash
git clone https://github.com/Mahdiye-Sadat-joghratian/FoodifyBackEndproject.git
cd FoodifyBackEndproject
