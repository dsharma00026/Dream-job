# Dream Job 💼 – Laravel Job Portal

Dream Job is a Laravel-based job portal built to connect job seekers with companies. It allows users to register, search for jobs, apply with a resume, and manage their profile — all through a clean and responsive interface.

🔗 **Live Website:** [https://dreamjob.rf.gd]
👨‍💻 **Developed By:** [Deepak Sharma](https://github.com/dsharma00026)

---

## 📌 Features

- 📝 **User Registration & Login** (Custom session-based authentication)
- 🔍 **Job Search by Title or Company**
- 📄 **Apply for Jobs** with resume upload (PDF, DOC, DOCX)
- 📋 **My Jobs** section for users to view their applied jobs
- 👤 **Profile Management** (Edit user details securely)
- 📧 **Contact Form** with backend message storage
- 🔐 **Route Protection** using custom middleware
- 🌐 **Responsive UI** using Bootstrap 5
- 📄 **Terms & About** static pages included

---

## 🔧 Tech Stack

- **Framework:** Laravel 10
- **Database:** MySQL (via phpMyAdmin / XAMPP)
- **Frontend:** HTML, CSS, Bootstrap 5, Blade
- **Backend:** PHP (Laravel), Eloquent ORM
- **File Storage:** Resume uploads via Laravel’s public disk
- **Hosting:** [InfinityFree](https://infinityfree.net) (Free Hosting)

---

## 📂 Folder Structure Overview
app/
├── Http/
│ └── Controllers/ → MainController.php
├── Models/ → Job.php, UserData.php, Application.php, Contact.php

resources/views/
├── layouts/ → app.blade.php (layout)
├── partials/ → header, footer
├── views/ → home, login, register, profile, view-details, myjob, contact-us, terms, about-us

routes/
└── web.php

public/
└── resumes/ → (Resume file uploads)


---

## 🚀 How It Works (Core Logic)

- A user registers and logs in using session-based authentication.
- Once logged in:
  - The home page shows jobs **not applied to** using:
    ```php
    $appliedJobIds = Application::where('user_id', session('user_id'))->pluck('job_id');
    $jobs = Job::whereNotIn('job_id', $appliedJobIds)->paginate(6);
    ```
  - Users can **apply to jobs** with a resume (stored in `/public/resumes`).
  - Laravel validation ensures security and data integrity throughout the app.

---

## 📷 Screenshots

(Add screenshots here if possible — homepage, apply job form, my jobs page, etc.)

---

## 🛡️ Security & Validation

- All forms include CSRF protection.
- Input fields are validated using Laravel’s validation rules.
- Routes are grouped under middleware to ensure access control:
  ```php
  Route::middleware('checkUser')->group([...]);


  🙋‍♂️ Author
Deepak Sharma
🎓 Self-taught Laravel Developer
📍 Jalandhar, Punjab
📧 dsharma00026@gmail.com
🌐 GitHub Profile

📣 A Note from the Developer
This project was built after just 40 days of learning Laravel, and completed in just 3 days. I'm continuing to grow, improve my skills, and looking for my first opportunity in IT.

If you’re a recruiter or company, I’d love to connect with you!
