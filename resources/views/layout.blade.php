<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وبلاگ من | خانه</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset و تنظیمات پایه */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gray-color: #6c757d;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: #f5f7fb;
            color: var(--dark-color);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: var(--transition);
        }

        a:hover {
            color: var(--secondary-color);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* هدر */
        header {
            background-color: white;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: var(--accent-color);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav a {
            font-weight: 600;
            color: var(--dark-color);
            font-size: 1.05rem;
        }

        nav a:hover {
            color: var(--primary-color);
        }

        .active {
            color: var(--primary-color) !important;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-color);
        }

        /* محتوای اصلی */
        main {
            flex: 1;
            padding: 30px 0 50px;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 60px 0;
            border-radius: 10px;
            margin-bottom: 40px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 25px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            background-color: var(--accent-color);
            color: white;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn:hover {
            background-color: #2fb0e0;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* بخش پست‌ها */
        .posts-section {
            margin-bottom: 50px;
        }

        .section-title {
            font-size: 1.8rem;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--primary-color);
            color: var(--secondary-color);
            display: inline-block;
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .post-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .post-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .post-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .post-content {
            padding: 25px;
        }

        .post-category {
            display: inline-block;
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .post-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--dark-color);
            line-height: 1.4;
        }

        .post-excerpt {
            color: var(--gray-color);
            margin-bottom: 20px;
        }

        .post-meta {
            display: flex;
            justify-content: space-between;
            color: var(--gray-color);
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }

        .post-meta i {
            margin-left: 5px;
        }

        /* سایدبار */
        .content-with-sidebar {
            display: flex;
            gap: 40px;
        }

        .main-content {
            flex: 3;
        }

        .sidebar {
            flex: 1;
        }

        .sidebar-widget {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .widget-title {
            font-size: 1.3rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
            color: var(--secondary-color);
        }

        .categories-list, .recent-posts-list {
            list-style: none;
        }

        .categories-list li, .recent-posts-list li {
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f5f5f5;
        }

        .categories-list li:last-child, .recent-posts-list li:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .categories-list a, .recent-posts-list a {
            display: flex;
            justify-content: space-between;
            color: var(--dark-color);
        }

        .categories-list a:hover, .recent-posts-list a:hover {
            color: var(--primary-color);
        }

        .category-count {
            background-color: #f0f0f0;
            padding: 2px 10px;
            border-radius: 50px;
            font-size: 0.8rem;
        }

        .search-box {
            display: flex;
            margin-top: 10px;
        }

        .search-box input {
            flex: 1;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 50px 0 0 50px;
            outline: none;
            font-size: 1rem;
        }

        .search-box button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 50px 50px 0;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-box button:hover {
            background-color: var(--secondary-color);
        }

        /* فوتر */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
            margin-top: auto;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-widget h3 {
            font-size: 1.4rem;
            margin-bottom: 25px;
            color: var(--accent-color);
        }

        .footer-widget p {
            color: #b0b7c3;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #2d3748;
            color: white;
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #b0b7c3;
        }

        .footer-links a:hover {
            color: var(--accent-color);
            padding-right: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #2d3748;
            color: #b0b7c3;
            font-size: 0.9rem;
        }

        /* طراحی واکنش‌گرا */
        @media (max-width: 992px) {
            .content-with-sidebar {
                flex-direction: column;
            }

            .hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-wrap: wrap;
            }

            nav {
                width: 100%;
                order: 3;
                margin-top: 15px;
                display: none;
            }

            nav.active {
                display: block;
            }

            nav ul {
                flex-direction: column;
                gap: 0;
            }

            nav li {
                border-bottom: 1px solid #eee;
                padding: 12px 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .posts-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 40px 0;
            }

            .hero h1 {
                font-size: 1.8rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
<!-- هدر -->
<header>
    <div class="container header-container">
        <a href="#" class="logo">
            <i class="fas fa-blog"></i>
            <span>وبلاگ من</span>
        </a>

        <div class="mobile-menu-btn" id="mobileMenuBtn">
            <i class="fas fa-bars"></i>
        </div>

        <nav id="mainNav">
            <ul>
                <li><a href="#" class="active">خانه</a></li>
                <li><a href="#">مقالات</a></li>
                <li><a href="#">دسته‌بندی‌ها</a></li>
                <li><a href="#">درباره من</a></li>
                <li><a href="#">تماس با من</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- محتوای اصلی -->
<main class="container">
    <!-- بخش معرفی -->
    <section class="hero">
        <h1>به وبلاگ من خوش آمدید</h1>
        <p>اینجا درباره تکنولوژی، برنامه‌نویسی، طراحی وب و موضوعات جالب دیگر می‌نویسم. با من همراه باشید!</p>
        <a href="#" class="btn">مشاهده مقالات <i class="fas fa-arrow-left"></i></a>
    </section>

    <div class="content-with-sidebar">
        <!-- محتوای اصلی -->
        <div class="main-content">

        </div>

        <!-- سایدبار -->
        <aside class="sidebar">
            <!-- جستجو -->
            <div class="sidebar-widget">
                <h3 class="widget-title">جستجو در وبلاگ</h3>
                <div class="search-box">
                    <input type="text" placeholder="چه چیزی می‌خواهید پیدا کنید؟">
                    <button type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>

            <!-- دسته‌بندی‌ها -->
            <div class="sidebar-widget">
                <h3 class="widget-title">دسته‌بندی‌ها</h3>
                <ul class="categories-list">

                    @foreach($categories as $category)
                        <li><a href="#">{{$category->title}} <span class="category-count">{{count($category->posts)}}</span></a></li>
                    @endforeach
                </ul>
            </div>

            <!-- آخرین پست‌ها -->
            <div class="sidebar-widget">
                <h3 class="widget-title">پربازدیدترین پست ها</h3>
                <ul class="recent-posts-list">

                    @foreach($bestPosts as $bestPost)
                        <li><a href="#">{{$bestPost->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</main>

<!-- فوتر -->
<footer>
    <div class="container">
        <div class="footer-content">
            <!-- درباره -->
            <div class="footer-widget">
                <h3>درباره وبلاگ</h3>
                <p>این وبلاگ فضایی است برای به اشتراک گذاری دانش و تجربیات در زمینه تکنولوژی، برنامه‌نویسی و طراحی وب. امیدوارم مطالب برای شما مفید باشند.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- لینک‌های سریع -->
            <div class="footer-widget">
                <h3>لینک‌های سریع</h3>
                <ul class="footer-links">
                    <li><a href="#">صفحه اصلی</a></li>
                    <li><a href="#">تمامی مقالات</a></li>
                    <li><a href="#">دسته‌بندی‌ها</a></li>
                    <li><a href="#">درباره من</a></li>
                    <li><a href="#">تماس با من</a></li>
                </ul>
            </div>

            <!-- تماس -->
            <div class="footer-widget">
                <h3>ارتباط با من</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-envelope"></i> email@example.com</li>
                    <li><i class="fas fa-phone"></i> ۰۹۱۲ ۱۲۳ ۴۵۶۷</li>
                    <li><i class="fas fa-map-marker-alt"></i> تهران، ایران</li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>© ۱۴۰۳ کلیه حقوق برای وبلاگ من محفوظ است. طراحی و توسعه با <i class="fas fa-heart" style="color:#e74c3c;"></i></p>
        </div>
    </div>
</footer>

<script>
    // منوی موبایل
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const nav = document.getElementById('mainNav');
        nav.classList.toggle('active');

        // تغییر آیکون منو
        const icon = this.querySelector('i');
        if (icon.classList.contains('fa-bars')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    // بستن منو هنگام کلیک روی لینک‌ها (در حالت موبایل)
    const navLinks = document.querySelectorAll('#mainNav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                document.getElementById('mainNav').classList.remove('active');
                document.querySelector('#mobileMenuBtn i').classList.remove('fa-times');
                document.querySelector('#mobileMenuBtn i').classList.add('fa-bars');
            }
        });
    });

    // شبیه‌سازی جستجو
    document.querySelector('.search-box button').addEventListener('click', function() {
        const searchInput = document.querySelector('.search-box input');
        if (searchInput.value.trim() !== '') {
            alert('جستجو برای: ' + searchInput.value);
            searchInput.value = '';
        } else {
            alert('لطفا عبارتی برای جستجو وارد کنید.');
        }
    });

    // اضافه کردن رویداد Enter برای جستجو
    document.querySelector('.search-box input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            document.querySelector('.search-box button').click();
        }
    });
</script>
</body>
</html>
