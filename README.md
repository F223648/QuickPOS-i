# 🚀 QuickPOS — Modern POS Landing Page
A clean, responsive, and fully functional **PHP-based Landing Page** for the QuickPOS system. Built using an Agile workflow with Jira, GitHub, and proper sprint management.

---

## 📌 Project Overview
QuickPOS is a promotional landing page designed to showcase key product features such as:
- Modern Header & Navigation
- Hero section with CTA
- Feature highlights grid
- Pricing table
- Contact form with PHP backend
- Footer with branding & social links

This project was executed following **Scrum practices** with:
- Detailed Jira Epics → Stories → Tasks
- GitHub branching strategy
- Pull Requests with reviews
- Logged bugs & fixes

---

## 🗂️ Project Structure
```
QuickPOS/
│── index.php
│── style.css
│── contact.php
│── thank-you.html
│── assets/
│     ├── logo.png
│     ├── hero.png
│     ├── feature-icons/
│     └── ...
│── README.md
```

---

## 🧩 Features Implemented
### ✔️ Header
- Logo
- Navigation links
- Call-to-action (Sign Up)

### ✔️ Hero Section
- Headline & sub-text
- CTA button
- POS Mockup image

### ✔️ Features Section
- 3–4 product features
- Icon + Title + Description

### ✔️ Pricing Section
- Tiered pricing table
- Basic / Pro / Enterprise

### ✔️ Contact Form
- Name, Email, Message
- PHP backend validation
- Redirects to *thank-you.html*

### ✔️ Footer
- Social icons
- Copyright

---

## 🛠️ Technologies Used
- **HTML5**, **CSS3**, **PHP**
- Git & GitHub
- Jira (Scrum)
- VS Code
- Responsive Mobile-First Design

---

## 🔀 Git Workflow
### Branching Strategy
```
main                → Production branch
feature/header      → Header work
feature/hero        → Hero section
feature/features    → Features grid
feature/pricing     → Pricing table
feature/contact     → Contact form
feature/footer      → Footer
```

### Commit Format
```
[POS-101] Add header section
[POS-102] Add hero section
...
```

### Pull Requests
- Each feature completed via PR
- PR assigned to reviewer (Ali)
- Merged after approval

---

## 📋 Jira Structure
### Epics
- Header
- Hero
- Features
- Pricing
- Contact Form
- Footer

### Each Epic contains:
- User Stories
- Technical Tasks
- Test Tasks

Example Story:
> **As a visitor, I want a clear navigation bar so that I can find the sections easily.**

---

## 🧪 Testing
Makki handled all testing:
- Layout & UI testing
- Mobile responsiveness (Chrome DevTools)
- Bug logs created in Jira

---

## ▶️ How to Run Locally
1. Clone the repository:
```
git clone https://github.com/F223648/QuickPOS-i.git
```

2. Move inside folder:
```
cd QuickPOS
```

3. Start PHP server:
```
php -S localhost:8000
```

4. Visit:
```
http://localhost:8000
```




---

