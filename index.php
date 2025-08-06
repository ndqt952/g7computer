<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>G7 Computer - Gaming Pc & Laptops</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&family=Orbitron:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" defer></script>
  <style>
    :root { 
      --primary: #2563eb; 
      --primary-dark: #1e40af;
      --primary-light: #dbeafe;
      --secondary: #f59e0b; 
      --secondary-dark: #d97706;
      --accent: #ec4899;
      --bg: #f9fafb; 
      --text: #374151; 
      --text-light: #6b7280;
      --light: #ffffff; 
      --dark: #111827; 
      --gray-light: #e5e7eb;
      --radius: 0.75rem; 
      --radius-sm: 0.5rem;
      --trans: 0.3s ease; 
      --shadow: 0 8px 24px rgba(0,0,0,0.1);
      --shadow-md: 0 4px 12px rgba(0,0,0,0.1);
      --shadow-lg: 0 15px 40px rgba(0,0,0,0.15);
      
      /* Dark mode variables */
      --dark-bg: #121826;
      --dark-card: #1f2937;
      --dark-text: #e5e7eb;
      --dark-text-light: #9ca3af;
    }
    
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { 
      font-family: 'Inter', sans-serif; 
      background: var(--bg); 
      color: var(--text); 
      line-height: 1.6;
      overflow-x: hidden;
      transition: background-color var(--trans), color var(--trans);
    }
    
    body.dark-mode {
      background: var(--dark-bg);
      color: var(--dark-text);
    }
    
    h1, h2, h3, h4 {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
    }

    .container { 
      width: 90%; 
      max-width: 1400px; 
      margin: 0 auto; 
      padding-top: 100px;
    }

    /* Header */
    header { 
      background: rgba(255, 255, 255, 0.95); 
      backdrop-filter: blur(10px);
      position: fixed; 
      top: 0; 
      left: 0; 
      width: 100%; 
      z-index: 1000; 
      box-shadow: var(--shadow); 
      border-bottom: 1px solid rgba(0,0,0,0.05);
      transition: all var(--trans);
    }
    
    body.dark-mode header {
      background: rgba(18, 24, 38, 0.95);
      border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    
    .scrolled-header {
      padding: 0.5rem 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    
    .header-inner { 
      display: flex; 
      align-items: center; 
      justify-content: space-between; 
      padding: 1.25rem 0; 
      transition: padding var(--trans);
    }
    .scrolled-header .header-inner {
      padding: 0.75rem 0;
    }
    .logo { 
      font-size: 1.75rem; 
      font-weight: 700; 
      color: var(--primary); 
      display: flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
    }
    .logo-icon {
      color: var(--secondary);
      transition: transform var(--trans);
    }
    .logo:hover .logo-icon {
      transform: rotate(15deg);
    }
    .nav-links { 
      list-style: none; 
      display: flex; 
      gap: 2rem; 
    }
    .nav-links a { 
      position: relative; 
      font-weight: 600; 
      padding: 0.5rem 0; 
      color: var(--text); 
      text-decoration: none; 
      transition: color var(--trans); 
      font-size: 1.05rem;
    }
    
    body.dark-mode .nav-links a {
      color: var(--dark-text);
    }
    
    .nav-links a::after { 
      content: ''; 
      position: absolute; 
      bottom: -6px; 
      left: 0; 
      width: 0; 
      height: 3px; 
      background: var(--primary); 
      transition: width var(--trans); 
      border-radius: 3px;
    }
    .nav-links a:hover { color: var(--primary); }
    .nav-links a:hover::after { width: 100%; }
    .header-right { 
      display: flex; 
      align-items: center; 
      gap: 1.5rem; 
    }
    .search-bar { position: relative; }
    .search-bar input { 
      width: 250px; 
      padding: 0.75rem 2.5rem 0.75rem 1.25rem; 
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(5px);
      border: 1px solid var(--gray-light);
      border-radius: var(--radius); 
      box-shadow: var(--shadow-md); 
      transition: all var(--trans); 
      font-size: 0.95rem;
    }
    
    body.dark-mode .search-bar input {
      background: rgba(18, 24, 38, 0.2);
      color: var(--dark-text);
      border-color: #374151;
    }
    
    .search-bar input:focus { 
      width: 300px; 
      outline: none; 
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    .search-bar i { 
      position: absolute; 
      right: 15px; 
      top: 50%; 
      transform: translateY(-50%); 
      color: var(--text-light); 
      font-size: 0.9rem;
    }
    
    body.dark-mode .search-bar i {
      color: var(--dark-text-light);
    }
    
    .cart-btn, .wishlist-btn { 
      position: relative; 
      font-size: 1.35rem; 
      color: var(--dark); 
      transition: transform var(--trans); 
      cursor: pointer;
      text-decoration: none;
    }
    
    body.dark-mode .cart-btn,
    body.dark-mode .wishlist-btn {
      color: var(--dark-text);
    }
    
    .cart-btn:hover, .wishlist-btn:hover { transform: scale(1.1); }
    .cart-btn .cart-count, .wishlist-btn .wishlist-count { 
      position: absolute; 
      top: -8px; 
      right: -8px; 
      font-size: 0.7rem; 
      font-weight: 600;
      padding: 3px 7px; 
      border-radius: 50%; 
    }
    .cart-btn .cart-count { 
      background: var(--secondary); 
      color: var(--light); 
    }
    .wishlist-btn .wishlist-count { 
      background: var(--accent); 
      color: var(--light); 
    }
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      font-size: 1.5rem;
      cursor: pointer;
      color: var(--dark);
    }
    
    body.dark-mode .mobile-menu-btn {
      color: var(--dark-text);
    }
    
    /* Dark mode toggle */
    .theme-toggle {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1.35rem;
      color: var(--dark);
      transition: transform var(--trans);
    }
    
    body.dark-mode .theme-toggle {
      color: var(--dark-text);
    }
    
    .theme-toggle:hover {
      transform: rotate(30deg);
    }

    /* Hero */
    .hero { 
      display: flex; 
      align-items: center; 
      justify-content: space-between; 
      padding: 6rem 0 8rem;
      position: relative;
      overflow: hidden;
      min-height: 100vh;
    }
    
    #particles-js {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
    
    body.dark-mode .hero {
      background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, rgba(245, 158, 11, 0.05) 100%);
    }
    
    .hero::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 100%;
      height: 200%;
      background: radial-gradient(circle, rgba(37, 99, 235, 0.05) 0%, rgba(0,0,0,0) 70%);
      z-index: -1;
    }
    
    body.dark-mode .hero::before {
      background: radial-gradient(circle, rgba(37, 99, 235, 0.1) 0%, rgba(0,0,0,0) 70%);
    }
    
    .hero-content { 
      max-width: 600px; 
      position: relative;
      z-index: 1;
    }
    .hero-title { 
      font-family: 'Orbitron', sans-serif;
      font-size: 3.5rem; 
      color: var(--dark); 
      margin-bottom: 1.5rem; 
      line-height: 1.1; 
      animation: fadeInDown 1s ease;
      text-shadow: 0 0 10px var(--primary), 0 0 20px var(--primary);
    }
    
    body.dark-mode .hero-title {
      color: var(--dark-text);
    }
    
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .hero-title span {
      color: var(--primary);
      position: relative;
    }
    .hero-title span::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 8px;
      background: var(--secondary);
      opacity: 0.3;
      z-index: -1;
    }
    .hero-sub { 
      font-size: 1.25rem; 
      margin-bottom: 2.5rem; 
      color: var(--text-light); 
      max-width: 90%;
    }
    
    body.dark-mode .hero-sub {
      color: var(--dark-text-light);
    }
    
    .btn { 
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 1rem 2rem; 
      border-radius: var(--radius); 
      font-weight: 600; 
      text-decoration: none; 
      transition: all var(--trans); 
      cursor: pointer;
      border: none;
      font-size: 1rem;
      position: relative;
      overflow: hidden;
    }
    .btn::after {
      content: '';
      position: absolute;
      top: -50%;
      left: -60%;
      width: 20px;
      height: 200%;
      background: rgba(255,255,255,0.3);
      transform: rotate(25deg);
      transition: all 0.6s;
    }
    .btn:hover::after {
      left: 120%;
    }
    .btn-primary { 
      background: var(--primary); 
      color: var(--light); 
      box-shadow: 0 0 10px var(--primary);
    }
    .btn-primary:hover { 
      background: var(--primary-dark); 
      transform: translateY(-3px); 
      box-shadow: 0 0 20px var(--primary), 0 10px 25px rgba(37, 99, 235, 0.3);
    }
    .btn-secondary {
      background: var(--secondary);
      color: var(--light);
      box-shadow: var(--shadow-md);
    }
    .btn-secondary:hover {
      background: var(--secondary-dark);
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(245, 158, 11, 0.3);
    }
    .hero-btns {
      display: flex;
      gap: 1rem;
      margin-top: 2rem;
    }
    .hero-img { 
      position: relative;
      width: 100%;
      max-width: 600px;
      perspective: 1000px;
    }
    .hero-img img { 
      width: 100%; 
      border-radius: var(--radius); 
      box-shadow: var(--shadow-lg); 
      transition: transform var(--trans); 
      transform-style: preserve-3d;
    }
    .hero-img:hover img { 
      transform: scale(1.02) rotateY(-5deg);
    }
    .hero-badge {
      position: absolute;
      top: -15px;
      right: -15px;
      background: var(--accent);
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: var(--radius);
      font-weight: 600;
      box-shadow: var(--shadow);
      transform: rotate(5deg);
      animation: float 3s ease-in-out infinite;
      z-index: 2;
    }
    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(5deg); }
      50% { transform: translateY(-10px) rotate(5deg); }
    }
    
    /* Countdown */
    .countdown-container {
      margin: 2.5rem 0 1.5rem;
      background: var(--dark);
      border-radius: var(--radius);
      padding: 1.5rem;
      box-shadow: var(--shadow);
      display: inline-block;
    }
    .countdown-title {
      color: white;
      margin-bottom: 1rem;
      font-size: 1.1rem;
      text-align: center;
    }
    .countdown {
      display: flex;
      gap: 1rem;
      justify-content: center;
    }
    .countdown-item {
      text-align: center;
      min-width: 70px;
      background: rgba(255,255,255,0.1);
      border-radius: var(--radius-sm);
      padding: 0.5rem;
    }
    .countdown-number {
      font-size: 1.5rem;
      font-weight: 700;
      color: white;
      display: block;
    }
    .countdown-label {
      font-size: 0.8rem;
      color: rgba(255,255,255,0.8);
      display: block;
      margin-top: 0.25rem;
    }

    /* Search & Filter */
    .search-filter { 
      background: var(--light); 
      padding: 2rem; 
      border-radius: var(--radius); 
      box-shadow: var(--shadow); 
      margin-bottom: 3rem;
      margin-top: -4rem;
      position: relative;
      z-index: 2;
    }
    
    body.dark-mode .search-filter {
      background: var(--dark-card);
    }
    
    .filter-wrapper { 
      display: flex; 
      gap: 1.5rem; 
      align-items: center; 
    }
    .filter-wrapper input { 
      flex: 2; 
      padding: 1rem 1.5rem; 
      border: 1px solid var(--gray-light);
      border-radius: var(--radius); 
      box-shadow: var(--shadow-md); 
      font-size: 1rem;
      transition: all var(--trans);
    }
    
    body.dark-mode .filter-wrapper input {
      background: var(--dark-card);
      color: var(--dark-text);
      border-color: #374151;
    }
    
    .filter-wrapper input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    .filter-wrapper select { 
      flex: 1; 
      padding: 1rem 1.5rem; 
      border: 1px solid var(--gray-light);
      border-radius: var(--radius); 
      background: var(--light); 
      box-shadow: var(--shadow-md); 
      font-size: 1rem;
      cursor: pointer;
      transition: all var(--trans);
    }
    
    body.dark-mode .filter-wrapper select {
      background: var(--dark-card);
      color: var(--dark-text);
      border-color: #374151;
    }
    
    .filter-wrapper select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    .filter-actions {
      display: flex;
      gap: 1rem;
    }
    .filter-btn {
      padding: 1rem;
      border-radius: var(--radius-sm);
      background: var(--light);
      border: 1px solid var(--gray-light);
      cursor: pointer;
      transition: all var(--trans);
    }
    
    body.dark-mode .filter-btn {
      background: var(--dark-card);
      color: var(--dark-text);
      border-color: #374151;
    }
    
    .filter-btn:hover {
      background: var(--primary);
      color: white;
      border-color: var(--primary);
    }
    .filter-btn.active {
      background: var(--primary);
      color: white;
      border-color: var(--primary);
    }

    /* Section Titles */
    .section-title {
      text-align: center;
      margin-bottom: 4rem;
      position: relative;
    }
    .section-title h2 {
      font-size: 2.75rem;
      color: var(--dark);
      margin-bottom: 1rem;
      position: relative;
      display: inline-block;
    }
    
    body.dark-mode .section-title h2 {
      color: var(--dark-text);
    }
    
    .section-title h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 4px;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      border-radius: 2px;
    }
    .section-title p { 
      max-width: 700px;
      margin: 1.5rem auto 0;
      color: var(--text-light); 
      font-size: 1.1rem;
    }
    
    body.dark-mode .section-title p {
      color: var(--dark-text-light);
    }

    /* Products */
    .sanpham { 
      padding: 6rem 0; 
      position: relative;
    }
    .sanpham::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 50%;
      background: linear-gradient(to bottom, rgba(249, 250, 251, 0), var(--bg));
      z-index: -1;
    }
    
    body.dark-mode .sanpham::before {
      background: linear-gradient(to bottom, rgba(18, 24, 38, 0), var(--dark-bg));
    }
    
    .sanpham-grid { 
      display: grid; 
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
      gap: 2.5rem; 
    }
    .sanpham-grid.list-view {
      grid-template-columns: 1fr;
    }
    .sanpham-grid.list-view .product-card {
      display: flex;
      flex-direction: row;
      max-width: 100%;
    }
    .sanpham-grid.list-view .product-img {
      width: 40%;
      height: 200px;
    }
    .sanpham-grid.list-view .product-info {
      width: 60%;
      padding: 1.5rem;
    }
    .product-card { 
      background: rgba(255, 255, 255, 0.8); 
      backdrop-filter: blur(10px);
      border-radius: var(--radius); 
      overflow: hidden; 
      box-shadow: var(--shadow); 
      transition: all var(--trans); 
      position: relative;
      border: 1px solid rgba(255, 255, 255, 0.2);
      opacity: 0;
      animation: fadeInUp 0.5s ease forwards;
      transform-style: preserve-3d;
    }
    
    body.dark-mode .product-card {
      background: rgba(18, 24, 38, 0.8);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .product-card:hover { 
      transform: translateY(-10px) rotateY(5deg); 
      box-shadow: var(--shadow-lg); 
    }
    .product-badge {
      position: absolute;
      top: 1rem;
      left: 1rem;
      background: var(--accent);
      color: white;
      padding: 0.25rem 1rem;
      border-radius: var(--radius-sm);
      font-size: 0.8rem;
      font-weight: 600;
      z-index: 2;
      box-shadow: var(--shadow-md);
    }
    .deal-countdown {
      position: absolute;
      top: 1rem;
      right: 1rem;
      background: var(--dark);
      color: white;
      padding: 0.25rem 0.75rem;
      border-radius: var(--radius-sm);
      font-size: 0.8rem;
      font-weight: 600;
      z-index: 2;
      box-shadow: var(--shadow-md);
    }
    .product-img {
      width: 100%; 
      height: 220px;
      object-fit: cover;
      position: relative;
      overflow: hidden;
    }
    .product-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .product-card:hover .product-img img {
      transform: scale(1.05);
    }
    .product-info { 
      padding: 1.75rem; 
    }
    .product-info h4 { 
      font-family: 'Orbitron', sans-serif;
      font-size: 1.3rem; 
      margin-bottom: 0.75rem; 
      color: var(--dark); 
      transition: color var(--trans);
    }
    
    body.dark-mode .product-info h4 {
      color: var(--dark-text);
    }
    
    .product-card:hover .product-info h4 {
      color: var(--primary);
    }
    .product-info .price { 
      color: var(--secondary); 
      font-weight: 700; 
      font-size: 1.25rem; 
      margin-bottom: 1rem;
      display: block;
    }
    .product-info .specs {
      margin: 1rem 0;
      color: var(--text-light);
      font-size: 0.9rem;
    }
    
    body.dark-mode .product-info .specs {
      color: var(--dark-text-light);
    }
    
    .product-info .specs span {
      display: inline-block;
      margin-right: 0.75rem;
      margin-bottom: 0.5rem;
    }
    .product-info .specs i {
      margin-right: 0.25rem;
      color: var(--primary);
    }
    .product-actions {
      display: flex;
      gap: 0.75rem;
      align-items: center;
      margin-top: 1.5rem;
    }
    .product-actions .btn {
      flex: 1;
      padding: 0.75rem;
      font-size: 0.9rem;
    }
    .wishlist-btn {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: var(--light);
      border: 1px solid var(--gray-light);
      cursor: pointer;
      transition: all var(--trans);
    }
    
    body.dark-mode .wishlist-btn {
      background: var(--dark-card);
      border-color: #374151;
    }
    
    .wishlist-btn:hover {
      background: #fee2e2;
      border-color: #fecaca;
      color: #ef4444;
    }
    .wishlist-btn.active {
      background: #fee2e2;
      border-color: #fecaca;
      color: #ef4444;
    }
    .compare-label {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.9rem;
      color: var(--text-light);
      cursor: pointer;
    }
    
    body.dark-mode .compare-label {
      color: var(--dark-text-light);
    }
    
    .compare-checkbox {
      accent-color: var(--primary);
    }
    .rating {
      display: flex;
      align-items: center;
      margin-bottom: 0.75rem;
    }
    .rating-stars {
      color: var(--secondary);
      margin-right: 0.5rem;
    }
    .rating-count {
      font-size: 0.85rem;
      color: var(--text-light);
    }
    
    body.dark-mode .rating-count {
      color: var(--dark-text-light);
    }

    /* Features */
    .tinhnang { 
      padding: 6rem 0; 
      background: linear-gradient(to bottom, var(--light), #f3f4f6); 
      position: relative;
      overflow: hidden;
    }
    
    body.dark-mode .tinhnang {
      background: linear-gradient(to bottom, var(--dark-card), #1a2436);
    }
    
    .tinhnang::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none" stroke="%23dbeafe" stroke-width="0.5" /></svg>');
      opacity: 0.1;
      z-index: 0;
    }
    
    body.dark-mode .tinhnang::before {
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none" stroke="%231e40af" stroke-width="0.5" /></svg>');
    }
    
    .feature-grid { 
      display: grid; 
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
      gap: 2.5rem; 
      position: relative;
      z-index: 1;
    }
    .feature-card { 
      text-align: center; 
      padding: 2.5rem 2rem; 
      border-radius: var(--radius); 
      background: var(--light); 
      box-shadow: var(--shadow); 
      transition: all var(--trans); 
      border: 1px solid rgba(0,0,0,0.05);
      backdrop-filter: blur(5px);
    }
    
    body.dark-mode .feature-card {
      background: var(--dark-card);
      border: 1px solid rgba(255,255,255,0.05);
    }
    
    .feature-card:hover { 
      transform: translateY(-10px); 
      box-shadow: var(--shadow-lg); 
    }
    .feature-icon {
      width: 70px;
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      background: rgba(37, 99, 235, 0.1);
      border-radius: 50%;
      color: var(--primary);
      font-size: 1.75rem;
      transition: all var(--trans);
    }
    
    body.dark-mode .feature-icon {
      background: rgba(37, 99, 235, 0.2);
    }
    
    .feature-card:hover .feature-icon {
      background: var(--primary);
      color: white;
      transform: rotateY(180deg);
    }
    .feature-card h3 { 
      color: var(--dark); 
      margin-bottom: 1rem;
      font-size: 1.3rem;
    }
    
    body.dark-mode .feature-card h3 {
      color: var(--dark-text);
    }
    
    .feature-card p { 
      margin-top: 0.75rem; 
      color: var(--text-light); 
      font-size: 0.95rem;
    }
    
    body.dark-mode .feature-card p {
      color: var(--dark-text-light);
    }

    /* Testimonials */
    .phanhoi { 
      padding: 6rem 0; 
      background: linear-gradient(to bottom, #f3f4f6, var(--light));
    }
    
    body.dark-mode .phanhoi {
      background: linear-gradient(to bottom, #1a2436, var(--dark-bg));
    }
    
    .testimonial-slider { 
      position: relative; 
      overflow: hidden; 
      max-width: 1000px;
      margin: 0 auto;
      border-radius: var(--radius);
    }
    .testimonial-track { 
      display: flex; 
      transition: transform 0.5s ease; 
    }
    .testimonial-item { 
      min-width: 100%; 
      padding: 3rem; 
      text-align: center; 
      background: var(--light); 
      border-radius: var(--radius); 
      box-shadow: var(--shadow); 
      position: relative;
      border: 1px solid rgba(0,0,0,0.05);
    }
    
    body.dark-mode .testimonial-item {
      background: var(--dark-card);
      border: 1px solid rgba(255,255,255,0.05);
    }
    
    .testimonial-item::before {
      content: '"';
      position: absolute;
      top: 1rem;
      left: 2rem;
      font-size: 5rem;
      color: rgba(37, 99, 235, 0.1);
      font-family: serif;
      line-height: 1;
    }
    
    body.dark-mode .testimonial-item::before {
      color: rgba(37, 99, 235, 0.2);
    }
    
    .testimonial-item p { 
      font-style: italic; 
      margin-bottom: 1.5rem; 
      color: var(--text); 
      font-size: 1.1rem;
      position: relative;
      z-index: 1;
    }
    
    body.dark-mode .testimonial-item p {
      color: var(--dark-text);
    }
    
    .testimonial-item h4 { 
      color: var(--primary); 
      margin-bottom: 0.5rem;
    }
    .testimonial-item .position {
      color: var(--text-light);
      font-size: 0.9rem;
    }
    
    body.dark-mode .testimonial-item .position {
      color: var(--dark-text-light);
    }
    
    .testimonial-avatar {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 1rem;
      border: 3px solid var(--light);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .slider-controls {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-top: 2rem;
    }
    .slider-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: var(--gray-light);
      cursor: pointer;
      transition: all var(--trans);
    }
    
    body.dark-mode .slider-dot {
      background: #374151;
    }
    
    .slider-dot.active {
      background: var(--primary);
      transform: scale(1.2);
    }
    .slider-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: var(--light);
      border: none;
      font-size: 1.5rem;
      cursor: pointer;
      padding: 0.5rem 1rem;
      border-radius: 50%;
      box-shadow: var(--shadow);
      z-index: 10;
      transition: all var(--trans);
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    body.dark-mode .slider-arrow {
      background: var(--dark-card);
      color: var(--dark-text);
    }
    
    .slider-arrow:hover {
      background: var(--primary);
      color: white;
    }
    .slider-arrow.left {
      left: 1rem;
    }
    .slider-arrow.right {
      right: 1rem;
    }

    /* FAQ */
    .faq { 
      padding: 6rem 0; 
      background: linear-gradient(to bottom, var(--light), #f3f4f6);
    }
    
    body.dark-mode .faq {
      background: linear-gradient(to bottom, var(--dark-card), #1a2436);
    }
    
    .faq-container {
      max-width: 800px;
      margin: 0 auto;
    }
    .faq-item { 
      margin-bottom: 1rem; 
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow-md);
    }
    .faq-item button { 
      width: 100%; 
      padding: 1.5rem; 
      background: var(--light); 
      border: none; 
      text-align: left; 
      font-weight: 600; 
      font-size: 1.1rem;
      cursor: pointer; 
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: all var(--trans);
    }
    
    body.dark-mode .faq-item button {
      background: var(--dark-card);
      color: var(--dark-text);
    }
    
    .faq-item button:hover { 
      background: #f3f4f6; 
    }
    
    body.dark-mode .faq-item button:hover {
      background: #1a2436;
    }
    
    .faq-item button i {
      transition: transform var(--trans);
    }
    .faq-item.open button i {
      transform: rotate(180deg);
    }
    .faq-item .answer { 
      max-height: 0; 
      overflow: hidden; 
      transition: max-height 0.5s ease, padding 0.3s ease; 
      background: var(--light);
    }
    
    body.dark-mode .faq-item .answer {
      background: var(--dark-card);
    }
    
    .faq-item.open .answer { 
      max-height: 500px; 
      padding: 0 1.5rem 1.5rem; 
    }
    .faq-item .answer p {
      color: var(--text-light);
      line-height: 1.7;
    }
    
    body.dark-mode .faq-item .answer p {
      color: var(--dark-text-light);
    }

    /* Newsletter */
    .newsletter { 
      padding: 6rem 0; 
      text-align: center; 
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
      position: relative;
      overflow: hidden;
    }
    .newsletter::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 100%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(0,0,0,0) 70%);
      z-index: 1;
    }
    .newsletter .container {
      position: relative;
      z-index: 2;
    }
    .newsletter h2 { 
      font-size: 2.5rem; 
      margin-bottom: 1.5rem; 
      color: white;
    }
    .newsletter p {
      max-width: 600px;
      margin: 0 auto 2.5rem;
      font-size: 1.1rem;
      opacity: 0.9;
    }
    .newsletter form { 
      display: inline-flex; 
      align-items: stretch; 
      gap: 0; 
      max-width: 600px;
      width: 100%;
    }
    .newsletter input { 
      flex: 1;
      padding: 1rem 1.5rem; 
      border: none; 
      border-radius: var(--radius) 0 0 var(--radius); 
      font-size: 1rem;
      min-width: 0;
    }
    .newsletter input:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(255,255,255,0.2);
    }
    .newsletter button { 
      background: var(--secondary); 
      color: var(--dark); 
      border: none; 
      padding: 0 2rem; 
      border-radius: 0 var(--radius) var(--radius) 0; 
      cursor: pointer; 
      font-weight: 600;
      transition: all var(--trans); 
    }
    .newsletter button:hover { 
      background: var(--light); 
    }

    /* Contact */
    .lienhe { 
      padding: 6rem 0; 
      background: var(--light);
    }
    
    body.dark-mode .lienhe {
      background: var(--dark-bg);
    }
    
    .lienhe-form { 
      max-width: 700px; 
      margin: 0 auto; 
      background: var(--light);
      padding: 3rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }
    
    body.dark-mode .lienhe-form {
      background: var(--dark-card);
    }
    
    .form-group { 
      margin-bottom: 1.5rem; 
    }
    .lienhe-form label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 500;
      color: var(--dark);
    }
    
    body.dark-mode .lienhe-form label {
      color: var(--dark-text);
    }
    
    .lienhe-form input, 
    .lienhe-form textarea,
    .lienhe-form select { 
      width: 100%; 
      padding: 1rem; 
      border: 1px solid var(--gray-light);
      border-radius: var(--radius); 
      font-size: 1rem;
      transition: all var(--trans);
    }
    
    body.dark-mode .lienhe-form input, 
    body.dark-mode .lienhe-form textarea,
    body.dark-mode .lienhe-form select {
      background: var(--dark-card);
      color: var(--dark-text);
      border-color: #374151;
    }
    
    .lienhe-form input:focus, 
    .lienhe-form textarea:focus,
    .lienhe-form select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    .lienhe-form textarea {
      min-height: 150px;
      resize: vertical;
    }
    .lienhe-form button { 
      display: block; 
      margin: 2rem auto 0; 
      padding: 1rem 2.5rem; 
      border-radius: var(--radius); 
      background: var(--primary); 
      color: var(--light); 
      font-weight: 600;
      transition: all var(--trans);
    }
    .lienhe-form button:hover { 
      background: var(--primary-dark); 
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
    }

    /* Footer */
    footer { 
      background: var(--dark); 
      color: #9ca3af; 
      padding: 5rem 0 2rem;
      position: relative;
    }
    footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none" stroke="%231e293b" stroke-width="0.5" /></svg>');
      opacity: 0.1;
    }
    .footer-grid { 
      display: grid; 
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); 
      gap: 3rem; 
      margin-bottom: 3rem;
      position: relative;
      z-index: 1;
    }
    .footer-col h3 { 
      color: var(--light); 
      margin-bottom: 1.5rem; 
      font-size: 1.3rem;
      position: relative;
      padding-bottom: 0.75rem;
    }
    .footer-col h3::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50px;
      height: 2px;
      background: var(--secondary);
    }
    .footer-col p {
      margin-bottom: 1.5rem;
      line-height: 1.7;
    }
    .footer-links { 
      list-style: none; 
    }
    .footer-links li {
      margin-bottom: 0.75rem;
    }
    .footer-links a { 
      color: #9ca3af; 
      text-decoration: none; 
      transition: all var(--trans); 
      display: inline-block;
    }
    .footer-links a:hover { 
      color: var(--secondary); 
      transform: translateX(5px);
    }
    .social-links {
      display: flex;
      gap: 1rem;
      margin-top: 1.5rem;
    }
    .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
      color: #9ca3af;
      transition: all var(--trans);
    }
    .social-links a:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-3px);
    }
    .footer-bottom {
      text-align: center;
      padding-top: 3rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      position: relative;
      z-index: 1;
    }
    .payment-methods {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
    }
    .payment-methods img {
      height: 25px;
      filter: grayscale(100%) brightness(2);
      opacity: 0.7;
      transition: all var(--trans);
    }
    .payment-methods img:hover {
      filter: none;
      opacity: 1;
    }

    /* Back to Top */
    .back-to-top {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      width: 50px;
      height: 50px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: all var(--trans);
      z-index: 999;
      box-shadow: var(--shadow);
    }
    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }
    .back-to-top:hover {
      background: var(--primary-dark);
      transform: translateY(-5px);
    }
    
    /* Chatbot */
    .chatbot-container {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      z-index: 1000;
    }
    
    .chatbot-btn {
      width: 60px;
      height: 60px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      cursor: pointer;
      box-shadow: var(--shadow-lg);
      transition: all var(--trans);
    }
    
    .chatbot-btn:hover {
      background: var(--primary-dark);
      transform: scale(1.1);
    }
    
    .chatbot-popup {
      position: fixed;
      bottom: 5rem;
      right: 2rem;
      width: 350px;
      height: 450px;
      background: white;
      border-radius: var(--radius);
      box-shadow: var(--shadow-lg);
      overflow: hidden;
      display: none;
      flex-direction: column;
      z-index: 1001;
    }
    
    body.dark-mode .chatbot-popup {
      background: var(--dark-card);
    }
    
    .chatbot-popup.active {
      display: flex;
    }
    
    .chatbot-header {
      background: var(--primary);
      color: white;
      padding: 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    
    .chatbot-title {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 600;
    }
    
    .chatbot-close {
      background: none;
      border: none;
      color: white;
      font-size: 1.2rem;
      cursor: pointer;
    }
    
    .chatbot-messages {
      flex: 1;
      padding: 1rem;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    
    .message {
      max-width: 80%;
      padding: 0.75rem 1rem;
      border-radius: var(--radius-sm);
      position: relative;
    }
    
    .message.user {
      background: var(--primary-light);
      align-self: flex-end;
      border-bottom-right-radius: 0;
    }
    
    body.dark-mode .message.user {
      background: rgba(37, 99, 235, 0.2);
    }
    
    .message.bot {
      background: #f3f4f6;
      align-self: flex-start;
      border-bottom-left-radius: 0;
    }
    
    body.dark-mode .message.bot {
      background: #1a2436;
    }
    
    .chatbot-input {
      display: flex;
      padding: 1rem;
      border-top: 1px solid var(--gray-light);
    }
    
    body.dark-mode .chatbot-input {
      border-top: 1px solid #374151;
    }
    
    .chatbot-input input {
      flex: 1;
      padding: 0.75rem;
      border: 1px solid var(--gray-light);
      border-radius: var(--radius) 0 0 var(--radius);
    }
    
    body.dark-mode .chatbot-input input {
      background: var(--dark-card);
      color: var(--dark-text);
      border-color: #374151;
    }
    
    .chatbot-input button {
      background: var(--primary);
      color: white;
      border: none;
      padding: 0 1.25rem;
      border-radius: 0 var(--radius) var(--radius) 0;
      cursor: pointer;
      transition: background var(--trans);
    }
    
    .chatbot-input button:hover {
      background: var(--primary-dark);
    }
    
    /* Quick questions */
    .quick-questions {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-top: 1rem;
    }
    
    .quick-question {
      background: rgba(37, 99, 235, 0.1);
      color: var(--primary);
      border: none;
      border-radius: 20px;
      padding: 0.25rem 0.75rem;
      font-size: 0.85rem;
      cursor: pointer;
      transition: all var(--trans);
    }
    
    body.dark-mode .quick-question {
      background: rgba(37, 99, 235, 0.2);
    }
    
    .quick-question:hover {
      background: var(--primary);
      color: white;
    }

    /* Modal */
    .modal { 
      display: none; 
      position: fixed; 
      top: 0; 
      left: 0; 
      width: 100%; 
      height: 100%; 
      background: rgba(0,0,0,0.5); 
      backdrop-filter: blur(5px);
      z-index: 2000; 
      justify-content: center; 
      align-items: center; 
      padding: 1rem;
      opacity: 0;
      transition: opacity var(--trans);
    }
    .modal.active {
      opacity: 1;
    }
    .modal-content { 
      background: var(--light); 
      padding: 3rem; 
      border-radius: var(--radius); 
      max-width: 800px; 
      width: 100%; 
      box-shadow: var(--shadow-lg); 
      position: relative;
      transform: translateY(20px);
      transition: transform var(--trans);
    }
    
    body.dark-mode .modal-content {
      background: var(--dark-card);
    }
    
    .modal.active .modal-content {
      transform: translateY(0);
    }
    .modal-close {
      position: absolute;
      top: 1.5rem;
      right: 1.5rem;
      font-size: 1.5rem;
      color: var(--text-light);
      cursor: pointer;
      transition: all var(--trans);
    }
    
    body.dark-mode .modal-close {
      color: var(--dark-text-light);
    }
    
    .modal-close:hover {
      color: var(--primary);
      transform: rotate(90deg);
    }
    .modal-content h3 { 
      color: var(--dark); 
      margin-bottom: 1.5rem; 
      font-size: 1.75rem;
    }
    
    body.dark-mode .modal-content h3 {
      color: var(--dark-text);
    }
    
    .modal-content p { 
      color: var(--text-light); 
      margin-bottom: 2rem; 
      line-height: 1.7;
    }
    
    body.dark-mode .modal-content p {
      color: var(--dark-text-light);
    }
    
    .modal-product {
      display: flex;
      gap: 2rem;
      margin-bottom: 2rem;
    }
    .modal-product-img {
      flex: 1;
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--bg);
      height: 300px;
    }
    
    body.dark-mode .modal-product-img {
      background: #1a2436;
    }
    
    .modal-product-img img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
      transition: transform var(--trans);
    }
    .modal-product-img:hover img {
      transform: scale(1.05);
    }
    .modal-product-info {
      flex: 1;
    }
    .modal-price {
      font-size: 1.75rem;
      color: var(--secondary);
      font-weight: 700;
      margin: 1rem 0;
    }
    .modal-specs {
      margin: 1.5rem 0;
    }
    .modal-specs li {
      margin-bottom: 0.5rem;
      display: flex;
    }
    .modal-specs i {
      color: var(--primary);
      margin-right: 0.5rem;
      width: 20px;
      text-align: center;
    }
    .modal-actions {
      display: flex;
      gap: 1rem;
      margin-top: 2rem;
      align-items: center;
    }
    .quantity-selector {
      display: flex;
      align-items: center;
      margin: 1rem 0;
    }
    .quantity-btn {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--bg);
      border: none;
      cursor: pointer;
      font-size: 1.2rem;
      transition: all var(--trans);
    }
    
    body.dark-mode .quantity-btn {
      background: #1a2436;
      color: var(--dark-text);
    }
    
    .quantity-btn:hover {
      background: var(--gray-light);
    }
    .quantity-input {
      width: 60px;
      height: 40px;
      text-align: center;
      border: 1px solid var(--gray-light);
      border-left: none;
      border-right: none;
      font-size: 1rem;
    }
    
    body.dark-mode .quantity-input {
      background: var(--dark-card);
      color: var(--dark-text);
      border-color: #374151;
    }

    /* Compare Modal */
    .compare-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
    }
    .compare-card {
      background: var(--light);
      padding: 1.5rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }
    
    body.dark-mode .compare-card {
      background: var(--dark-card);
    }
    
    .compare-card h4 {
      margin-bottom: 1rem;
      color: var(--dark);
    }
    
    body.dark-mode .compare-card h4 {
      color: var(--dark-text);
    }
    
    .compare-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: var(--radius-sm);
      margin-bottom: 1rem;
    }
    .compare-specs li {
      margin-bottom: 0.5rem;
      font-size: 0.9rem;
    }

    /* Toast Notification */
    .toast {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      background: var(--dark);
      color: white;
      padding: 1rem 1.5rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow-lg);
      display: flex;
      align-items: center;
      gap: 1rem;
      z-index: 3000;
      transform: translateX(150%);
      transition: transform 0.5s ease;
    }
    .toast.visible {
      transform: translateX(0);
    }
    .toast i {
      font-size: 1.5rem;
    }
    .toast.success i {
      color: #10b981;
    }
    .toast.error i {
      color: #ef4444;
    }
    .toast-close {
      margin-left: 1rem;
      cursor: pointer;
      opacity: 0.7;
      transition: opacity var(--trans);
    }
    .toast-close:hover {
      opacity: 1;
    }
    
    /* Scroll progress */
    .scroll-progress {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: transparent;
      z-index: 2000;
    }
    
    .progress-bar {
      height: 100%;
      background: var(--primary);
      width: 0%;
      transition: width 0.2s ease;
    }
    
    /* Responsive */
    @media (max-width: 1024px) {
      .hero {
        flex-direction: column;
        text-align: center;
      }
      .hero-content {
        max-width: 100%;
        margin-bottom: 3rem;
      }
      .hero-sub {
        margin-left: auto;
        margin-right: auto;
      }
      .hero-btns {
        justify-content: center;
      }
      .filter-wrapper {
        flex-wrap: wrap;
      }
      .filter-wrapper input,
      .filter-wrapper select {
        flex: 100%;
      }
      .modal-product {
        flex-direction: column;
      }
      .sanpham-grid.list-view .product-card {
        flex-direction: column;
      }
      .sanpham-grid.list-view .product-img {
        width: 100%;
        height: 200px;
      }
      .sanpham-grid.list-view .product-info {
        width: 100%;
      }
    }
    
    @media (max-width: 768px) {
      .header-inner {
        flex-wrap: wrap;
      }
      .logo {
        margin-right: auto;
      }
      .mobile-menu-btn {
        display: block;
      }
      .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--light);
        padding: 1rem;
        box-shadow: var(--shadow);
      }
      
      body.dark-mode .nav-links {
        background: var(--dark-card);
      }
      
      .nav-links.active {
        display: flex;
      }
      .header-right {
        margin-left: auto;
      }
      .hero-title {
        font-size: 2.5rem;
      }
      .section-title h2 {
        font-size: 2rem;
      }
      .sanpham-grid {
        grid-template-columns: 1fr;
      }
      .countdown-container {
        display: none; /* Ẩn bộ đếm ngược trên mobile */
      }
      .search-bar input {
        width: 180px;
      }
      .search-bar input:focus {
        width: 200px;
      }
      .hero-img {
        max-width: 100%;
      }
      .newsletter form {
        flex-direction: column;
      }
      .newsletter input {
        border-radius: var(--radius);
        margin-bottom: 1rem;
      }
      .newsletter button {
        border-radius: var(--radius);
        padding: 1rem;
        width: 100%;
      }
      .hero-btns {
        flex-direction: column;
      }
      .chatbot-popup {
        width: 90%;
        height: 60vh;
        bottom: 5rem;
        right: 5%;
      }
    }
    
    @media (max-width: 480px) {
      .filter-wrapper {
        gap: 1rem;
      }
      .filter-wrapper select {
        padding: 0.75rem;
      }
      .filter-btn {
        padding: 0.75rem;
      }
    }
  </style>
</head>
<body>
  <!-- Scroll progress bar -->
  <div class="scroll-progress">
    <div class="progress-bar" id="progressBar"></div>
  </div>
  
  <!-- HEADER -->
  <header id="mainHeader">
    <div class="container header-inner">
      <a href="#trangchu" class="logo"><i class="fas fa-laptop-code logo-icon"></i>G7 Computer</a>
      <button class="mobile-menu-btn" id="mobileMenuBtn">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav-links" id="navLinks">
        <li><a href="#trangchu">Trang Chủ</a></li>
        <li><a href="#sanpham">Sản Phẩm</a></li>
        <li><a href="#tinhnang">Tính Năng</a></li>
        <li><a href="#phanhoi">Phản Hồi</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#lienhe">Liên Hệ</a></li>
      </ul>
      <div class="header-right">
        <div class="search-bar">
          <input type="text" placeholder="Search..." aria-label="Tìm Kiếm Sản Phẩm" id="searchInput">
          <i class="fas fa-search"></i>
        </div>
        <button class="theme-toggle" id="themeToggle" aria-label="Chuyển chế độ màu">
          <i class="fas fa-moon"></i>
        </button>
        <a href="#cart" class="cart-btn" onclick="handleCartClick()" aria-label="Cart"><i class="fas fa-shopping-cart"></i><span class="cart-count">0</span></a>
        <a href="#wishlist" class="wishlist-btn" onclick="handleWishlistClick()" aria-label="Wishlist"><i class="far fa-heart"></i><span class="wishlist-count">0</span></a>
      </div>
    </div>
  </header>

  <main class="container">
    <!-- HERO -->
    <section id="trangchu" class="hero">
      <div class="hero-content">
        <h1 class="hero-title">Build Your <span>Dream PC</span> Today!</h1>
        <p class="hero-sub">Máy tính để bàn và laptop hiệu suất cao dành cho chơi game, làm việc và sáng tạo chuyên nghiệp. Được lắp ráp theo đúng yêu cầu của bạn.</p>
        
        <!-- Bộ đếm ngược -->
        <div class="countdown-container">
          <div class="countdown-title">Ưu đãi đặc biệt kết thúc sau:</div>
          <div class="countdown">
            <div class="countdown-item">
              <span class="countdown-number" id="days">00</span>
              <span class="countdown-label">Ngày</span>
            </div>
            <div class="countdown-item">
              <span class="countdown-number" id="hours">00</span>
              <span class="countdown-label">Giờ</span>
            </div>
            <div class="countdown-item">
              <span class="countdown-number" id="minutes">00</span>
              <span class="countdown-label">Phút</span>
            </div>
            <div class="countdown-item">
              <span class="countdown-number" id="seconds">00</span>
              <span class="countdown-label">Giây</span>
            </div>
          </div>
        </div>
        
        <div class="hero-btns">
          <button class="btn btn-primary">Mua Ngay <i class="fas fa-arrow-right"></i></button>
          <a href="#sanpham" class="btn btn-secondary">Khám phá sản phẩm</a>
        </div>
      </div>
      <div class="hero-img">
        <div class="hero-badge">Ưu Đãi Có Hạn!</div>
        <img src="Custom Gaming PC.png" alt="Custom Gaming PC" loading="lazy">
      </div>
    </section>

    <!-- SEARCH & FILTER -->
    <section class="search-filter">
      <div class="filter-wrapper">
        <input type="text" id="search-box" placeholder="Tìm Kiếm Sản Phẩm..." aria-label="Tìm Kiếm Sản Phẩm">
        <select id="filter-select" aria-label="Filter by category">
          <option value="all">Tất Cả Sản Phẩm</option>
          <option value="gaming">Gaming PCs</option>
          <option value="laptop">Laptops</option>
        </select>
        <select id="sort-select" aria-label="Sort by">
          <option value="default">Sắp xếp theo: Mặc định</option>
          <option value="price-asc">Giá: Từ thấp đến cao</option>
          <option value="price-desc">Giá: Từ cao đến thấp</option>
          <option value="rating-desc">Đánh giá: Từ cao đến thấp</option>
        </select>
        <div class="filter-actions">
          <button class="filter-btn active" data-view="grid"><i class="fas fa-th-large"></i></button>
          <button class="filter-btn" data-view="list"><i class="fas fa-list"></i></button>
        </div>
      </div>
    </section>

    <!-- PRODUCTS -->
    <section id="sanpham" class="sanpham">
      <div class="section-title">
        <h2>Sản Phẩm Nổi Bật</h2>
        <p>Khám phá bộ sưu tập cao cấp của chúng tôi gồm các máy tính lắp ráp theo yêu cầu và laptop hiệu suất cao</p>
      </div>
      <div class="sanpham-grid" id="sanpham-grid"></div>
    </section>

    <!-- FEATURES -->
    <section id="tinhnang" class="tinhnang">
      <div class="section-title">
        <h2>Tại sao lại chọn G7 Computer?</h2>
        <p>Chúng tôi cung cấp những giải pháp máy tính tốt nhất, được tùy chỉnh theo nhu cầu riêng của bạn.</p>
      </div>
      <div class="feature-grid">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-tachometer-alt"></i></div>
          <h3>Hiệu suất hàng đầu</h3>
          <p>CPU và GPU mới nhất mang đến tốc độ vượt trội và khả năng đa nhiệm mượt mà.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Chế Độ Bảo Hành</h3>
          <p>Bảo hành 3 năm và hỗ trợ 24/7, mang đến sự an tâm tuyệt đối.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-cogs"></i></div>
          <h3>Tùy Chỉnh Toàn Diện</h3>
          <p>Cấu hình mọi thành phần từ RAM đến hệ thống tản nhiệt theo nhu cầu của bạn.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-truck"></i></div>
          <h3>Miễn Phí Giao Hàng</h3>
          <p>Giao hàng nhanh trên toàn quốc với đóng gói và xử lý cao cấp.</p>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="phanhoi" class="phanhoi">
      <div class="section-title">
        <h2>Khách Hàng Nói Gì Về Chúng Tôi?</h2>
        <p>Lắng nghe chia sẻ từ những khách hàng hài lòng đã trải nghiệm sự khác biệt của G7 Computer</p>
      </div>
      <div class="testimonial-slider">
        <button class="slider-arrow left" onclick="goToSlide(currentSlide - 1)"><i class="fas fa-chevron-left"></i></button>
        <div class="testimonial-track" id="testimonial-track"></div>
        <button class="slider-arrow right" onclick="goToSlide(currentSlide + 1)"><i class="fas fa-chevron-right"></i></button>
      </div>
      <div class="slider-controls" id="slider-dots"></div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq">
      <div class="section-title">
        <h2>Câu Hỏi Thường Gặp</h2>
        <p>Tìm câu trả lời cho những câu hỏi thường gặp về sản phẩm và dịch vụ của chúng tôi</p>
      </div>
      <div class="faq-container">
        <div class="faq-item">
          <button aria-expanded="false">Thời Gian Bảo Hành Là Bao Lâu? <i class="fas fa-chevron-down"></i></button>
          <div class="answer">
            <p>Tất cả hệ thống của chúng tôi đều đi kèm bảo hành 3 năm, bao gồm cả linh kiện và công lắp đặt. Đối với laptop, chúng tôi còn cung cấp thêm bảo hành 1 năm cho Pin.</p>
          </div>
        </div>
        <div class="faq-item">
          <button aria-expanded="false">Bạn Có Cung Cấp Dịch Vụ Giao Hàng Quốc Tế Không? <i class="fas fa-chevron-down"></i></button>
          <div class="answer">
            <p>Có, chúng tôi giao hàng toàn cầu qua DHL và FedEx. Phí vận chuyển sẽ khác nhau tùy theo vị trí của bạn và kích thước/trọng lượng đơn hàng.</p>
          </div>
        </div>
        <div class="faq-item">
          <button aria-expanded="false">Tôi Có Thể Nâng Cấp Hệ Thống Của Tôi Sau Này Không?  <i class="fas fa-chevron-down"></i></button>
          <div class="answer">
            <p>Chắc chắn rồi! Tất cả máy tính để bàn của chúng tôi đều được thiết kế để dễ dàng nâng cấp trong tương lai. Đối với laptop, việc nâng cấp bị giới hạn hơn nhưng vẫn có thể nâng cấp RAM và ổ lưu trữ.</p>
          </div>
        </div>
        <div class="faq-item">
          <button aria-expanded="false">Việc Lắp Ráp Một PC Theo Yêu Cầu Mất Bao Lâu? <i class="fas fa-chevron-down"></i></button>
          <div class="answer">
            <p>Các cấu hình tiêu chuẩn được hoàn thành trong vòng 3–5 ngày làm việc. Những cấu hình tùy chỉnh phức tạp có thể mất đến 7 ngày làm việc.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- NEWSLETTER -->
    <section class="newsletter">
      <div class="container">
        <h2>Đăng Ký Trở Thành Hội Viên Của G7 Computer</h2>
        <p>Đăng ký để nhận các ưu đãi độc quyền, tin tức công nghệ mới nhất và các chương trình giảm giá đặc biệt</p>
        <form id="newsletter-form">
          <input type="email" placeholder="Nhập Email Của Bạn" required aria-label="Email for newsletter">
          <button type="submit" class="btn btn-primary">Đăng Ký <i class="fas fa-paper-plane"></i></button>
        </form>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="lienhe" class="lienhe">
      <div class="section-title">
        <h2>Liên Hệ Với Chúng Tôi</h2>
        <p>Có những thắc mắc? Hãy liên hệ với đội ngũ chuyên gia của chúng tôi để nhận được tư vấn phù hợp.</p>
      </div>
      <form id="lienhe-form" class="lienhe-form">
        <div class="form-group">
          <label for="name">Họ Và Tên</label>
          <input type="text" id="name" placeholder="Họ Và Tên" required aria-label="Họ Và Tên">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Email" required aria-label="email">
        </div>
        <div class="form-group">
          <label for="Chủ Đề">Chủ Đề</label>
          <select id="Chủ Đề" aria-label="Chủ Đề">
            <option value="general">Yêu Cầu Chung</option>
            <option value="sales">Câu Hỏi Về Bán Hàng</option>
            <option value="support">Hỗ Trợ Kỹ Thuật</option>
            <option value="custom">Xây Dựng Cấu Hình Theo Yêu Cầu</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Lời Nhắn Của Bạn</label>
          <textarea id="message" placeholder="Hãy để lại lời nhắn" required aria-label="Hãy để lại lời nhắn"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gửi Tin Nhắn <i class="fas fa-paper-plane"></i></button>
      </form>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <h3>G7 Computer</h3>
          <p>Đối tác đáng tin cậy của bạn trong lĩnh vực mua sắm Gaming PC, Laptop. Chúng tôi đam mê công nghệ và luôn tận tâm mang đến những sản phẩm và dịch vụ tốt nhất.</p>
          <div class="social-links">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="footer-col">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="#trangchu">Trang Chủ</a></li>
            <li><a href="#sanpham">Sản Phẩm</a></li>
            <li><a href="#tinhnang">Tính Năng</a></li>
            <li><a href="#phanhoi">Phản Hồi</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#lienhe">Liên Hệ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Sản Phẩm</h3>
          <ul class="footer-links">
            <li><a href="#">Gaming PCs</a></li>
            <li><a href="#">Laptops</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Thông Tin Liên Hệ</h3>
          <p><i class="fas fa-map-marker-alt"></i> 69/68 Đặng Thùy Trâm, P. 13, Q. Bình Thạnh, Tp. HCM</p>
          <p><i class="fas fa-phone"></i> +84 123 456 789</p>
          <p><i class="fas fa-envelope"></i> info@G7Computer.vn</p>
          <p><i class="fas fa-clock"></i> Mon-Sat: 9AM - 7PM</p>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="payment-methods">
          <img src="https://cdn-icons-png.flaticon.com/512/196/196578.png" alt="Visa" loading="lazy">
          <img src="https://cdn-icons-png.flaticon.com/512/196/196561.png" alt="Mastercard" loading="lazy">
          <img src="https://cdn-icons-png.flaticon.com/512/825/825454.png" alt="PayPal" loading="lazy">
          <img src="https://cdn-icons-png.flaticon.com/512/825/825423.png" alt="Momo" loading="lazy">
          <img src="https://cdn-icons-png.flaticon.com/512/217/217853.png" alt="ZaloPay" loading="lazy">
        </div>
        <p>© 2025 G7 Computer. All rights reserved. | Designed by Group 7 <i class="fas fa-heart" style="color: #ec4899;"></i> VanLang University</p>
      </div>
    </div>
  </footer>

  <!-- BACK to Top -->
  <div class="back-to-top" id="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </div>
  
  <!-- Chatbot -->
  <div class="chatbot-container">
    <div class="chatbot-btn" id="chatbotBtn">
      <i class="fas fa-comments"></i>
    </div>
    <div class="chatbot-popup" id="chatbotPopup">
      <div class="chatbot-header">
        <div class="chatbot-title">
          <i class="fas fa-robot"></i> Trợ lý G7
        </div>
        <button class="chatbot-close" id="chatbotClose">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="chatbot-messages" id="chatbotMessages">
        <div class="message bot">
          Xin chào! Tôi có thể giúp gì cho bạn? Dưới đây là một số câu hỏi thường gặp:
          <div class="quick-questions">
            <button class="quick-question" onclick="sendQuickQuestion('Bảo hành bao lâu?')">Bảo hành bao lâu?</button>
            <button class="quick-question" onclick="sendQuickQuestion('Tôi có thể trả góp không?')">Trả góp?</button>
            <button class="quick-question" onclick="sendQuickQuestion('Thời gian giao hàng?')">Thời gian giao hàng?</button>
            <button class="quick-question" onclick="sendQuickQuestion('Có chính sách đổi trả không?')">Đổi trả?</button>
          </div>
        </div>
      </div>
      <div class="chatbot-input">
        <input type="text" id="chatbotInput" placeholder="Nhập câu hỏi của bạn...">
        <button id="chatbotSend"><i class="fas fa-paper-plane"></i></button>
      </div>
    </div>
  </div>

  <!-- MODAL -->
  <div class="modal" id="productModal">
    <div class="modal-content">
      <i class="fas fa-times modal-close" onclick="hideModal()"></i>
      <h3 id="modalTitle"></h3>
      <div class="modal-product">
        <div class="modal-product-img">
          <img id="modalImage" src="" alt="Product Image" loading="lazy">
        </div>
        <div class="modal-product-info">
          <div class="modal-price" id="modalPrice"></div>
          <div class="rating">
            <div class="rating-stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="rating-count" id="modalRating"></span>
          </div>
          <p id="modalDescription"></p>
          <ul class="modal-specs" id="modalSpecs"></ul>
          <div class="quantity-selector">
            <button class="quantity-btn" onclick="updateQuantity(-1)">-</button>
            <input type="number" class="quantity-input" value="1" min="1" id="quantityInput">
            <button class="quantity-btn" onclick="updateQuantity(1)">+</button>
          </div>
          <div class="modal-actions">
            <button class="btn btn-primary" onclick="addToCart()" style="flex: 3;">Thêm Vào Giỏ Hàng <i class="fas fa-cart-plus"></i></button>
            <button class="btn btn-secondary" onclick="toggleWishlistModal()" style="flex: 1;">Yêu Thích <i class="far fa-heart"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- COMPARE MODAL -->
  <div class="modal" id="compareModal">
    <div class="modal-content">
      <i class="fas fa-times modal-close" onclick="hideCompareModal()"></i>
      <h3>So sánh sản phẩm</h3>
      <div class="compare-grid" id="compareGrid"></div>
    </div>
  </div>

  <!-- CART MODAL -->
  <div class="modal" id="cartModal">
    <div class="modal-content">
      <i class="fas fa-times modal-close" onclick="hideCartModal()"></i>
      <h3>Giỏ Hàng</h3>
      <div id="cartItems"></div>
      <button class="btn btn-primary" onclick="buyFromCart()">Mua Ngay</button>
    </div>
  </div>

  <!-- WISHLIST MODAL -->
  <div class="modal" id="wishlistModal">
    <div class="modal-content">
      <i class="fas fa-times modal-close" onclick="hideWishlistModal()"></i>
      <h3>Danh Sách Yêu Thích</h3>
      <div id="wishlistItems"></div>
    </div>
  </div>

  <!-- TOAST NOTIFICATION -->
  <div class="toast" id="toast">
    <i id="toastIcon"></i>
    <span id="toastMessage"></span>
    <i class="fas fa-times toast-close" onclick="hideToast()"></i>
  </div>

  <!-- JavaScript -->
  <script>
    // Data
    const sanpham = [
      { 
        id: 1, 
        name: 'PC G7 Dragon ACE', 
        price: '159.000.000₫', 
        category: 'gaming', 
        img: 'PC G7 Dragon ACE.png', 
        desc: 'Đóng vai trò là nền tảng cho cội nguồn sức mạnh Intel Core Ultra 9 285K/ VGA RTX 5090 đó là cái tên PC G7 Dragon ACE.', 
        specs: ['MSI MEG Z890 ACE (DDR5)', 
        'Intel Core Ultra 9 285K / Turbo up to 5.7GHz / 24 Nhân 24 Luồng / 36MB / LGA 1851', 
        'Corsair Dominator Titanium Black 96GB (2x48GB) RGB 6600 DDR5', 
        'MSI GeForce RTX 5090 32G SUPRIM SOC',
        'MSI SPATIUM M480 PRO PCIe 4.0 NVMe M.2 1TB',
        'MSI MAG A1250GL PCIE5 - 80 Plus Gold - Full Modular (1250W)',
        'Case MSI MEG PROSPECT 700R',
        'MSI MAG CORELIQUID I360 BLACK'],
        rating: 4.8,
        badge: 'New'
      },
      { 
        id: 2, 
        name: 'PC G7 x ASUS Blackwell', 
        price: '188.880.000₫', 
        category: 'gaming', 
        img: 'PC G7 x ASUS Blackwell.png', 
        desc: 'Mang cho mình một thiết kế mạnh mẽ, hầm hố, PC G7 x ASUS Blackwell sẽ đem đến cho người dùng trải nghiệm tuyệt vời nhất.', 
        specs: ['Mainboard ASUS ROG MAXIMUS Z890 HERO (DDR5)', 
        'Intel Core Ultra 9 285K / Turbo up to 5.7GHz / 24 Nhân 24 Luồng / 36MB / LGA 1851', 
        'Corsair Dominator Titanium Black 96GB (2x48GB) RGB 6600 DDR5', 
        'ASUS ROG Astral GeForce RTX 5090 32GB GDDR7 OC Edition',
        'Ổ Cứng SSD Samsung 990 PRO 1TB M.2 PCIe Gen4 NVMe (MZ-V9P1T0BW)',
        'ASUS ROG Hyperion GR701',
        'Tản nhiệt AIO ASUS ROG Ryuo IV SLC 360 ARGB (Panorama)'],
        rating: 4.5,
        badge: 'New'
      },
      { 
        id: 3, 
        name: 'PC G7 Dragon GODLIKE', 
        price: '178.990.000₫', 
        category: 'gaming', 
        img: 'PC G7 Dragon GODLIKE.png', 
        desc: 'Với một thiết kế to, mạnh mẽ cùng hệ thống RGB đẹp mắt, chắc chắn bộ PC này sẽ làm hài lòng những khách hàng khó tính nhất với sức mạnh mà nó mang theo.', 
        specs: ['Bo mạch chủ MSI MEG Z890 GODLIKE', 
        'Intel Core Ultra 9 285K / Turbo up to 5.7GHz / 24 Nhân 24 Luồng / 36MB / LGA 1851', 
        'Corsair Dominator Titanium Black 96GB (2x48GB) RGB 6600 DDR5', 
        'MSI GeForce RTX 5090 32G SUPRIM SOC', 
        'MSI SPATIUM M480 PRO PCIe 4.0 NVMe M.2 1TB', 
        'Nguồn máy tính MSI MEG AI1600T PCIE5 - 80 Plus Titanium (1600W)',
        'Vỏ máy tính MSI MEG MAESTRO 700L PZ',
        'Tản nhiệt AIO MSI MAG CORELIQUID I360 BLACK chính hãng' ],
        rating: 4.7,
        badge: 'New'
      },
      { 
        id: 4, 
        name: 'PC G7 G-STUDIO', 
        price: '96.990.000₫', 
        category: 'gaming', 
        img: 'PC G7 G-STUDIO.png', 
        desc: 'Nổi tiếng về độ hiệu quả và khả năng phục vụ công việc, dòng mainboard ProArt từ ASUS đã khẳng định tên tuổi của mình trong giới sáng tạo ra PC G7 G-STUDIO.', 
        specs: ['ASUS ProArt X670E-CREATOR WIFI (DDR5)', 
        'AMD Ryzen 9 7950X3D / 4.2GHz Boost 5.7GHz / 16 nhân 32 luồng / 144MB / AM5', 
        'Corsair Dominator Platinum 64GB (2x32GB) RGB 6000 DDR5', 
        'ASUS TUF Gaming Radeon RX 7900 XTX OC Edition 24GB GDDR6', 
        'SamSung 980 PRO 1TB M.2 PCIe gen 4 NVMe', 
        'Seagate Barracuda 2TB 7200rpm',
        'ASUS TUF Gaming 1000W - 80 Plus Gold - Full Modular',
        'Corsair 7000D Airflow TG Black',
        'Corsair H150i ELITE CAPELLIX LCD' ],
        rating: 4.9,
        badge: '3D & Render'
      },
      { 
        id: 5, 
        name: 'PC G7 x MSI PROJECT ZERO WHITE', 
        price: '30.990.000₫', 
        category: 'gaming', 
        img: 'PC G7 x MSI PROJECT ZERO WHITE.png', 
        desc: 'PC G7 x MSI PROJECT ZERO WHITE là PC Gaming tầm trung cận cao cấp với tông màu trắng nổi bật, thích hợp cho việc stream game và những tác vụ khác', 
        specs: ['MSI B760M PROJECT ZERO', 
        'Intel Core i5 14400F / Turbo up to 4.7GHz / 10 Nhân 16 Luồng / 20MB / LGA 1700', 
        'Ram Corsair Vengeance RGB (2x16GB) 32GB 5600 DDR5', 
        'Card màn hình MSI GeForce RTX 5060 Ventus 2X OC White 8GB', 
        'Ổ cứng SSD Kingston NV3 1TB M.2 PCIe NVMe Gen4', 
        'MSI MAG A750BN PCIE5 - 80 Plus Bronze (750W)',
        'MSI MAG PANO M100R PZ WHITE',
        'Tản nhiệt AIO MSI MAG CORELIQUID I240 WHITE'],
        rating: 4.6,
      },
      { 
        id: 6, 
        name: 'PC G7 x Corsair iCUE', 
        price: '26.990.000₫', 
        category: 'gaming', 
        img: 'PC G7 x Corsair iCUE.png', 
        desc: 'PC G7 x Corsair iCUE thuộc dòng PC Gaming tầm trung cận cao cấp, có giá thành không quá cao nhưng đem lại hiệu xuất mượt mà khi chơi game và những tác vụ khác', 
        specs: ['Mainboard GIGABYTE B760M GAMING WIFI PLUS DDR5', 
        'Bộ vi xử lý Intel Core i5 14400F / LGA 1700 chính hãng / 10 nhân 16 luồng', 
        'Ram Corsair Vengeance RGB 32GB 5600 DDR5', 
        'Card màn hình Gigabyte GeForce RTX 5060 Windforce OC 8GB', 
        'Ổ cứng SSD Kingston NV3 1TB M.2 PCIe NVMe Gen4', 
        'Corsair CX750 - 80 Plus Bronze (750W)',
        'Corsair 3500X TG Mid Tower Black',
        'Bộ 3 quạt Corsair RS120 ARGB BLACK'],
        rating: 4.7,
        badge: 'Editor\'s Choice'
      },
      { 
        id: 7, 
        name: 'PC G7 Assassin', 
        price: '27.490.000₫', 
        category: 'gaming', 
        img: 'PC G7 Assassin.png', 
        desc: 'PC G7 Assassin thuộc dòng PC Gaming tầm trung cận cao cấp, có giá thành không quá cao nhưng đem lại hiệu xuất mượt mà khi chơi game và những tác vụ khác', 
        specs: ['Bo mạch chủ MSI MAG B760M MORTAR II WIFI DDR5', 
        'Bộ vi xử lý Intel Core i5-14400F', 
        'Ram Corsair Vengeance RGB 32GB 5600 DDR5', 
        'Card màn hình Gigabyte GeForce RTX 5060 Ti Windforce OC 8GB', 
        'Ổ cứng SSD Kingston NV3 1TB M.2 PCIe NVMe Gen4', 
        'Nguồn FSP HV PRO 650W - 80 Plus Bronze',
        'Vỏ máy tính Xigmatek QUANTUM 3GF',
        'Cooler Master Hyper 212 Spectrum V3 ARGB'],
        rating: 4.9,
        badge: 'Best Seller'  
      }, 
      { 
        id: 8, 
        name: 'PC G7 STRIX', 
        price: '18.990.000₫', 
        category: 'gaming', 
        img: 'PC G7 STRIX.png', 
        desc: 'PC G7 STRIX thuộc dòng PC Gaming tầm trung nhưng sử dụng card màn hình RTX 5000 Series giúp cho hiệu xuất chơi game mượt mà với giá thành phải chăng', 
        specs: ['Bo mạch chủ MSI PRO H610M-S WIFI DDR4', 
        'CPU Intel Core i5 12400F / 2.5GHz Turbo 4.4GHz / 6 Nhân 12 Luồng (Chính hãng - Full box)', 
        'Ram T-Group T-Force Delta 1x16GB 3600 RGB Black', 
        'Card màn hình Gigabyte GeForce RTX 5060 Windforce OC 8GB', 
        'Ổ cứng SSD Kingston NV3 500GB M.2 PCIe NVMe Gen4 (Đọc/Ghi - 5000/3000)', 
        'Nguồn FSP HV PRO 650W - 80 Plus Bronze',
        'Vỏ máy tính Xigmatek QUANTUM 3GF',
        'Cooler Master Hyper 212 Spectrum V3 ARGB'],
        rating: 4.9,
        badge: 'Best Seller'  
      }, 
      { 
        id: 9, 
        name: 'Laptop G7 gaming MSI Titan 18', 
        price: '179.990.000₫', 
        category: 'laptop', 
        img: 'Laptop G7 gaming MSI Titan 18.png', 
        desc: 'Laptop G7 gaming MSI Titan 18 là laptop gaming mạnh mẽ để đáp ứng nhu cầu học tập cũng như làm việc của mình thì có thể cân nhắc MSI Titan 18', 
        specs: ['Intel® Core™ Ultra 9 285HX 24 nhân 24 luồng (Max turbo 5.5GHz)', 
        '96GB (2 x 48GB) DDR5 6400MHz', 
        '6TB NVMe PCIe (1 x NVMe M.2 SSD by PCIe Gen5 x4 + 3 x NVMe M.2 SSD by PCIe Gen4 x4)', 
        'NVIDIA® GeForce RTX™ 5090 Laptop GPU 24GB GDDR7', 
        '18" UHD+ (3840x2400), 16:10, MiniLED, 120Hz, 100% DCI-P3, VESA DisplayHDR™ 1000 Certified, IPS-Level panel', 
        '2 x Thunderbolt™ 5, 3 x USB 3.2 Gen2 Type-A, 1 x HDMI™ 2.1 (8K@60Hz / 4K@120Hz), 1 x SD Express Memory Card Reader, 1 x Audio combo jack',
        '6 Speaker designed by Dynaudio system (4 x 2W Speakers + 2 x 2W Woofers)',
        'Intel® Killer™ Wi-Fi 7 BE1750',
        '99.99Whr',
        '404 (W) x 307.5 (D) x 24~32.05 (H) mm'],
        rating: 4.5,
        badge: 'New'  
      }, 
      { 
        id: 10, 
        name: 'Laptop gaming ASUS ROG Strix SCAR 18', 
        price: '113.990.000₫', 
        category: 'laptop', 
        img: 'Laptop gaming ASUS ROG Strix SCAR 18.png', 
        desc: 'Đã thành danh với những chiếc laptop gaming cao cấp, thế hệ ASUS ROG Strix chưa bao giờ khiến game thủ thất vọng cả về mặt ngoại hình và hiệu năng bên trong', 
        specs: ['Intel® Core™ Ultra 9 Processor 275HX 2.7 GHz', 
        '64GB (2x32GB) DDR5 5600MHz', 
        '2TB + 2TB PCIe® 4.0 NVMe™ M.2 Performance SSD', 
        'NVIDIA® GeForce RTX™ 5080 Laptop GPU 16GB GDDR7', 
        '18" 2.5K 16:10, 240Hz 3ms, Mini LED, 1200nits, Anti-glare display, G-Sync, Pantone Validated, ROG Nebula HDR Display', 
        '1x 2.5G LAN port, 2x Thunderbolt™ 5, 3x USB 3.2 Gen 2 Type-A, 1x 3.5mm Combo Audio Jack',
        'Backlit Chiclet Keyboard Per-Key RGB',
        'Wi-Fi 7 2*2+Bluetooth® 5.4 Wireless Card',
        '39.9 x 29.8 x 2.35 ~ 3.20 cm'],
        rating: 4.7,
        badge: 'New'  
      }, 
      { 
        id: 11, 
        name: 'Laptop Lenovo V14 G7', 
        price: '12.890.000₫', 
        category: 'laptop', 
        img: 'Laptop Lenovo V14 G7.png', 
        desc: 'Laptop Lenovo V14 G4 là một mẫu laptop nổi bật nằm trong dòng sản phẩm Laptop Lenovo. Với thiết kế hiện đại, hiệu năng mạnh mẽ, chiếc laptop này đã thu hút được sự quan tâm của nhiều người dùng.', 
        specs: ['Intel® Core™ i5-13420H, 8C (4P + 4E) / 12T, P-core 2.1 / 4.6GHz, E-core 1.5 / 3.4GHz, 12MB', 
        '8GB (1x8GB) DDR4 3200MHz onboard', 
        '512GB SSD M.2 2242 PCIe® 4.0x4 NVMe®', 
        'Intel® UHD Graphics', 
        '14" FHD (1920x1080) IPS 300nits, Anti-glare, 45% NTSC', 
        '1x USB 2.0, 1x USB 3.2 Gen 1, 1x USB-C® 3.2 Gen 1, 1x HDMI® 1.4b, 1x Headphone / microphone combo jack, 1x Ethernet, 1x Power connector',
        'Bàn phím tiêu chuẩn, không LED',
        'Wi-Fi® 6, 11ax 2x2',
        'Stereo speakers, 1.5W x2, Dolby® Audio',
        'Integrated 38Wh',
        '324.2 x 215.2 x 19.9 mm'],
        rating: 4.9,
        badge: 'Student Choice'  
      }, 
      { 
        id: 12, 
        name: 'Laptop Acer Aspire 5', 
        price: '20.490.000₫', 
        category: 'laptop', 
        img: 'Laptop Acer Aspire 5.png', 
        desc: 'Acer Aspire 5 là một trong những mẫu laptop đáng chú ý trong dòng sản phẩm của Acer, hướng đến đối tượng người dùng cần một thiết bị mạnh mẽ và linh hoạt cho công việc và giải trí.', 
        specs: ['Intel® Core™ i9-13900H 2.6 GHz (24MB Cache, up to 5.4 GHz, 14 cores, 20 Threads)', 
        '16GBx1 LPDDR5 5200MHz', 
        '512GB PCIe NVMe SSD', 
        'Intel® UHD Graphics', 
        '15.6" FHD (1920 x 1080), IPS SlimBezel, 60Hz, Acer ComfyView™', 
        '1x USB 3.2 Gen 1, 1x USB 3.2 Gen 1 featuring power off USB charging, 1x HDMI® 2.1 port with HDCP support, 1x Headphone/speaker jack',
        '802.11a/b/g/n/ac+ax (2x2)',
        '720p HD video at 30 fps with Temporal Noise Reduction',
        '3 Cell 48Whr',
        '1.7 kg',
        'Steel Gray',
        '362.9 x 237.5 x 17.99 (mm)'],
        rating: 4.7,
        badge: 'Student Choice'  
      }, 
    ];

    const phanhoi = [
      { 
        text: 'Chiếc PC chơi game mà tôi đặt đã vượt xa mọi mong đợi của tôi. Nó chạy tất cả các trò chơi ở thiết lập tối đa mà không gặp bất kỳ vấn đề nào.', 
        author: 'Nguyen Van A', 
        position: 'Gamer & Streamer', 
        avatar: 'https://randomuser.me/api/portraits/men/32.jpg'
      },
      { 
        text: 'G7 Computer đã lắp ráp cho tôi một bộ máy trạm hoàn hảo cho công việc làm hoạt hình 3D. Thời gian render nhanh đến kinh ngạc.', 
        author: 'Tran Thi B', 
        position: '3D Animator', 
        avatar: 'https://randomuser.me/api/portraits/women/44.jpg'
      },
      { 
        text: 'Các tùy chọn tùy chỉnh thật tuyệt vời. Tôi đã xây dựng được chiếc PC trong mơ cùng với G7 Computer!', 
        author: 'Le Van C', 
        position: 'Software Developer', 
        avatar: 'https://randomuser.me/api/portraits/men/75.jpg'
      },
      { 
        text: 'Chiếc laptop tôi mua thật hoàn hảo cho công việc thiết kế đồ họa của tôi. Nhẹ mà vẫn mạnh mẽ!', 
        author: 'Pham Thi D', 
        position: 'Graphic Designer', 
        avatar: 'https://randomuser.me/api/portraits/women/68.jpg'
      }
    ];
    
    // Chatbot questions and answers
    const chatbotResponses = {
      "hello": "Xin chào! Tôi là trợ lý ảo của G7 Computer. Tôi có thể giúp gì cho bạn?",
      "bảo hành bao lâu": "Tất cả sản phẩm máy tính để bàn của chúng tôi đều được bảo hành 3 năm, laptop bảo hành 2 năm chính hãng. Bạn có thể mang đến bất kỳ chi nhánh nào để được hỗ trợ.",
      "tôi có thể trả góp không": "Có, chúng tôi hỗ trợ trả góp với nhiều ngân hàng khác nhau như Vietcombank, Techcombank, VPBank... với lãi suất 0% trong 6 tháng.",
      "thời gian giao hàng": "Đối với sản phẩm có sẵn, chúng tôi giao hàng trong vòng 24h tại Tp.HCM và 2-3 ngày đối với các tỉnh thành khác. Đối với máy tính lắp ráp theo yêu cầu, thời gian là 3-5 ngày làm việc.",
      "có chính sách đổi trả không": "Chúng tôi có chính sách đổi trả trong vòng 7 ngày nếu sản phẩm gặp lỗi kỹ thuật từ nhà sản xuất. Đối với sản phẩm không lỗi, chúng tôi hỗ trợ đổi trả trong vòng 3 ngày với điều kiện sản phẩm còn nguyên seal, hộp.",
      "cảm ơn": "Rất vui được hỗ trợ bạn! Nếu bạn có thêm câu hỏi, đừng ngần ngại liên hệ với chúng tôi.",
      "default": "Xin lỗi, tôi chưa hiểu câu hỏi của bạn. Bạn có thể hỏi về chính sách bảo hành, giao hàng, thanh toán hoặc sản phẩm."
    };

    let cartCount = 0;
    let cart = [];
    let wishlist = [];
    let currentProduct = null;
    let compareList = [];
    let currentSlide = 0;
    let slideInterval;
    
    // Initialize countdown timer
    function initCountdown() {
      const countdownDate = new Date('2025-08-31T23:59:59').getTime();
      
      const updateCountdown = () => {
        const now = new Date().getTime();
        const distance = countdownDate - now;
        
        if (distance < 0) {
          clearInterval(countdownInterval);
          return;
        }
        
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        document.getElementById('days').textContent = days.toString().padStart(2, '0');
        document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
      };
      
      updateCountdown();
      const countdownInterval = setInterval(updateCountdown, 1000);
    }
    
    // Render Products
    function rendersanpham(list) {
      const grid = document.getElementById('sanpham-grid');
      grid.innerHTML = '';
      list.forEach((product, index) => {
        const card = document.createElement('div');
        card.className = 'product-card';
        card.style.animationDelay = `${index * 0.1}s`;
        const isWishlisted = wishlist.includes(product.id);
        
        card.innerHTML = `
          <div class="product-img">
            ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
            <img src="${product.img}" alt="${product.name}" loading="lazy">
          </div>
          <div class="product-info">
            <h4>${product.name}</h4>
            <div class="price">${product.price}</div>
            <div class="rating">
              <div class="rating-stars">${'★'.repeat(Math.floor(product.rating))}${'☆'.repeat(5 - Math.floor(product.rating))}</div>
              <span class="rating-count">(${product.rating})</span>
            </div>
            <div class="specs">
              ${product.specs.slice(0, 3).map(spec => `<span><i class="fas fa-microchip"></i>${spec}</span>`).join('')}
              <span><i class="fas fa-plus-circle"></i>${product.specs.length - 3} tính năng khác</span>
            </div>
            <div class="product-actions">
              <button class="btn btn-primary" onclick="showModal(${product.id})">Xem Chi Tiết</button>
              <button class="wishlist-btn ${isWishlisted ? 'active' : ''}" onclick="toggleWishlist(${product.id}, this)">
                <i class="${isWishlisted ? 'fas' : 'far'} fa-heart"></i>
              </button>
              <label class="compare-label">
                <input type="checkbox" class="compare-checkbox" data-id="${product.id}" onchange="toggleCompare(this)">
                So sánh
              </label>
            </div>
          </div>
        `;
        grid.appendChild(card);
      });
    }

    // Render Testimonials
    function renderphanhoi() {
      const track = document.getElementById('testimonial-track');
      const dots = document.getElementById('slider-dots');
      track.innerHTML = '';
      dots.innerHTML = '';
      phanhoi.forEach((testimonial, index) => {
        const item = document.createElement('div');
        item.className = 'testimonial-item';
        item.innerHTML = `
          <img src="${testimonial.avatar}" alt="${testimonial.author}" class="testimonial-avatar" loading="lazy">
          <p>"${testimonial.text}"</p>
          <h4>${testimonial.author}</h4>
          <div class="position">${testimonial.position}</div>
        `;
        track.appendChild(item);
        const dot = document.createElement('div');
        dot.className = `slider-dot ${index === 0 ? 'active' : ''}`;
        dot.addEventListener('click', () => goToSlide(index));
        dots.appendChild(dot);
      });
    }

    // Testimonial Slider
    function startSlider() {
      slideInterval = setInterval(() => {
        goToSlide((currentSlide + 1) % phanhoi.length);
      }, 5000);
    }

    function goToSlide(index) {
      if (index < 0) index = phanhoi.length - 1;
      if (index >= phanhoi.length) index = 0;
      const track = document.getElementById('testimonial-track');
      const dots = document.querySelectorAll('.slider-dot');
      currentSlide = index;
      track.style.transition = 'transform 0.5s ease';
      track.style.transform = `translateX(-${currentSlide * 100}%)`;
      dots.forEach((dot, i) => dot.classList.toggle('active', i === currentSlide));
      clearInterval(slideInterval);
      startSlider();
    }

    // Modal Functions
    function showModal(productId) {
      const product = sanpham.find(p => p.id === productId);
      if (!product) return;
      currentProduct = product;
      document.getElementById('modalTitle').textContent = product.name;
      document.getElementById('modalDescription').textContent = product.desc;
      document.getElementById('modalPrice').textContent = product.price;
      document.getElementById('modalImage').src = product.img;
      document.getElementById('modalRating').textContent = `(${product.rating})`;
      document.getElementById('modalSpecs').innerHTML = product.specs.map(spec => `<li><i class="fas fa-check"></i>${spec}</li>`).join('');
      document.getElementById('quantityInput').value = 1;
      const modal = document.getElementById('productModal');
      modal.style.display = 'flex';
      setTimeout(() => modal.classList.add('active'), 10);
      document.body.style.overflow = 'hidden';
    }

    function hideModal() {
      const modal = document.getElementById('productModal');
      modal.classList.remove('active');
      setTimeout(() => {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }, 300);
    }

    // Compare Functions
    function toggleCompare(checkbox) {
      const productId = parseInt(checkbox.dataset.id);
      if (checkbox.checked) {
        if (compareList.length < 3) {
          compareList.push(productId);
        } else {
          checkbox.checked = false;
          showToast('Bạn chỉ có thể so sánh tối đa 3 sản phẩm', 'error');
        }
      } else {
        compareList = compareList.filter(id => id !== productId);
      }
      updateCompareButton();
    }

    function updateCompareButton() {
      let compareBtn = document.getElementById('compareBtn');
      if (!compareBtn) {
        compareBtn = document.createElement('button');
        compareBtn.id = 'compareBtn';
        compareBtn.className = 'btn btn-secondary';
        compareBtn.textContent = `So sánh (${compareList.length})`;
        compareBtn.onclick = showCompareModal;
        document.querySelector('.filter-actions').appendChild(compareBtn);
      } else {
        compareBtn.textContent = `So sánh (${compareList.length})`;
      }
      compareBtn.disabled = compareList.length < 2;
    }

    function showCompareModal() {
      if (compareList.length < 2) {
        showToast('Vui lòng chọn ít nhất 2 sản phẩm để so sánh', 'error');
        return;
      }
      const modal = document.getElementById('compareModal');
      const grid = document.getElementById('compareGrid');
      grid.innerHTML = '';
      compareList.forEach(id => {
        const product = sanpham.find(p => p.id === id);
        if (product) {
          const card = document.createElement('div');
          card.className = 'compare-card';
          card.innerHTML = `
            <img src="${product.img}" alt="${product.name}" loading="lazy">
            <h4>${product.name}</h4>
            <div class="price">${product.price}</div>
            <ul class="compare-specs">
              ${product.specs.slice(0, 5).map(spec => `<li>${spec}</li>`).join('')}
            </ul>
          `;
          grid.appendChild(card);
        }
      });
      modal.style.display = 'flex';
      setTimeout(() => modal.classList.add('active'), 10);
      document.body.style.overflow = 'hidden';
    }

    function hideCompareModal() {
      const modal = document.getElementById('compareModal');
      modal.classList.remove('active');
      setTimeout(() => {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }, 300);
    }

    // Wishlist Functions
    function toggleWishlist(productId, button) {
      if (wishlist.includes(productId)) {
        wishlist = wishlist.filter(id => id !== productId);
        button.classList.remove('active');
        button.querySelector('i').classList.replace('fas', 'far');
        showToast('Đã xóa khỏi danh sách yêu thích', 'error');
      } else {
        wishlist.push(productId);
        button.classList.add('active');
        button.querySelector('i').classList.replace('far', 'fas');
        showToast('Đã thêm vào danh sách yêu thích', 'success');
      }
      document.querySelector('.wishlist-count').textContent = wishlist.length;
      renderWishlist();
    }

    function toggleWishlistModal() {
      if (!currentProduct) return;
      const isWishlisted = wishlist.includes(currentProduct.id);
      if (isWishlisted) {
        wishlist = wishlist.filter(id => id !== currentProduct.id);
        showToast('Đã xóa khỏi danh sách yêu thích', 'error');
      } else {
        wishlist.push(currentProduct.id);
        showToast('Đã thêm vào danh sách yêu thích', 'success');
      }
      document.querySelector('.wishlist-count').textContent = wishlist.length;
      const productCardButton = document.querySelector(`.wishlist-btn[onclick="toggleWishlist(${currentProduct.id}, this)"]`);
      if (productCardButton) {
        productCardButton.classList.toggle('active', !isWishlisted);
        productCardButton.querySelector('i').classList.replace(isWishlisted ? 'fas' : 'far', isWishlisted ? 'far' : 'fas');
      }
      renderWishlist();
    }

    function renderWishlist() {
      const wishlistItems = document.getElementById('wishlistItems');
      wishlistItems.innerHTML = '';
      if (wishlist.length === 0) {
        wishlistItems.innerHTML = '<p>Danh sách yêu thích của bạn đang trống.</p>';
        return;
      }
      wishlist.forEach(id => {
        const product = sanpham.find(p => p.id === id);
        if (product) {
          const item = document.createElement('div');
          item.style.display = 'flex';
          item.style.alignItems = 'center';
          item.style.marginBottom = '1rem';
          item.innerHTML = `
            <img src="${product.img}" alt="${product.name}" style="width: 100px; height: 100px; object-fit: cover; margin-right: 1rem; border-radius: var(--radius-sm);" loading="lazy">
            <div>
              <h4>${product.name}</h4>
              <div class="price">${product.price}</div>
              <button class="btn btn-primary" onclick="showModal(${product.id})">Xem Chi Tiết</button>
              <button class="btn btn-secondary" onclick="toggleWishlist(${product.id}, document.querySelector('.wishlist-btn[onclick=\\'toggleWishlist(${product.id}, this)\\']'))">Xóa</button>
            </div>
          `;
          wishlistItems.appendChild(item);
        }
      });
    }

    function handleWishlistClick() {
      const modal = document.getElementById('wishlistModal');
      renderWishlist();
      modal.style.display = 'flex';
      setTimeout(() => modal.classList.add('active'), 10);
      document.body.style.overflow = 'hidden';
    }

    function hideWishlistModal() {
      const modal = document.getElementById('wishlistModal');
      modal.classList.remove('active');
      setTimeout(() => {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }, 300);
    }

    // Cart Functions
    function addToCart() {
      if (!currentProduct) return;
      const quantity = parseInt(document.getElementById('quantityInput').value);
      const existingItem = cart.find(item => item.id === currentProduct.id);
      if (existingItem) {
        existingItem.quantity += quantity;
      } else {
        cart.push({ ...currentProduct, quantity });
      }
      cartCount += quantity;
      document.querySelector('.cart-count').textContent = cartCount;
      showToast(`Đã thêm ${quantity} ${currentProduct.name} vào giỏ hàng`, 'success');
      renderCart();
      hideModal();
    }

    function renderCart() {
      const cartItems = document.getElementById('cartItems');
      cartItems.innerHTML = '';
      if (cart.length === 0) {
        cartItems.innerHTML = '<p>Giỏ hàng của bạn đang trống.</p>';
        return;
      }
      
      let total = 0;
      
      cart.forEach(item => {
        const price = parseFloat(item.price.replace(/[^\d]/g, ''));
        const itemTotal = price * item.quantity;
        total += itemTotal;
        
        const cartItem = document.createElement('div');
        cartItem.style.display = 'flex';
        cartItem.style.alignItems = 'center';
        cartItem.style.marginBottom = '1rem';
        cartItem.style.paddingBottom = '1rem';
        cartItem.style.borderBottom = '1px solid var(--gray-light)';
        cartItem.innerHTML = `
          <img src="${item.img}" alt="${item.name}" style="width: 100px; height: 100px; object-fit: cover; margin-right: 1rem; border-radius: var(--radius-sm);" loading="lazy">
          <div style="flex-grow: 1;">
            <h4>${item.name}</h4>
            <div class="price">${item.price}</div>
            <p>Số lượng: ${item.quantity}</p>
          </div>
          <div>
            <button class="btn btn-secondary" onclick="removeFromCart(${item.id})">Xóa</button>
          </div>
        `;
        cartItems.appendChild(cartItem);
      });
      
      // Add total
      const totalElement = document.createElement('div');
      totalElement.style.marginTop = '1.5rem';
      totalElement.style.fontSize = '1.25rem';
      totalElement.style.fontWeight = 'bold';
      totalElement.style.textAlign = 'right';
      totalElement.innerHTML = `Tổng cộng: ${total.toLocaleString('vi-VN')}₫`;
      cartItems.appendChild(totalElement);
    }

    function removeFromCart(productId) {
      const item = cart.find(item => item.id === productId);
      if (item) {
        cartCount -= item.quantity;
        cart = cart.filter(item => item.id !== productId);
        document.querySelector('.cart-count').textContent = cartCount;
        showToast(`Đã xóa ${item.name} khỏi giỏ hàng`, 'error');
        renderCart();
      }
    }

    function buyFromCart() {
      if (cart.length === 0) {
        showToast('Giỏ hàng của bạn đang trống!', 'error');
        return;
      }
      const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
      showToast(`Đã mua ${totalItems} sản phẩm từ giỏ hàng!`, 'success');
      cart = [];
      cartCount = 0;
      document.querySelector('.cart-count').textContent = cartCount;
      renderCart();
      hideCartModal();
    }

    function buyNow() {
      if (!currentProduct) {
        showToast('Vui lòng chọn sản phẩm trước!', 'error');
        return;
      }
      const quantity = parseInt(document.getElementById('quantityInput').value);
      showToast(`Đã mua ${quantity} ${currentProduct.name} với giá ${currentProduct.price}!`, 'success');
      hideModal();
    }

    function handleCartClick() {
      const productModal = document.getElementById('productModal');
      if (currentProduct && productModal.style.display === 'flex') {
        buyNow();
      } else {
        const modal = document.getElementById('cartModal');
        renderCart();
        modal.style.display = 'flex';
        setTimeout(() => modal.classList.add('active'), 10);
        document.body.style.overflow = 'hidden';
      }
    }

    function hideCartModal() {
      const modal = document.getElementById('cartModal');
      modal.classList.remove('active');
      setTimeout(() => {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }, 300);
    }

    // Quantity Selector
    function updateQuantity(change) {
      const input = document.getElementById('quantityInput');
      let value = parseInt(input.value) + change;
      if (value < 1) value = 1;
      if (value > 10) value = 10;
      input.value = value;
    }

    // Toast Notification
    function showToast(message, type) {
      const toast = document.getElementById('toast');
      const toastIcon = document.getElementById('toastIcon');
      const toastMessage = document.getElementById('toastMessage');
      toastMessage.textContent = message;
      toast.className = `toast ${type} visible`;
      toastIcon.className = `fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}`;
      setTimeout(hideToast, 3000);
    }

    function hideToast() {
      const toast = document.getElementById('toast');
      toast.classList.remove('visible');
    }

    // Filter/Search/Sort
    function applyFilter() {
      const term = document.getElementById('search-box').value.toLowerCase();
      const cat = document.getElementById('filter-select').value;
      const sort = document.getElementById('sort-select').value;
      let filtered = sanpham.filter(p => 
        p.name.toLowerCase().includes(term) && 
        (cat === 'all' || p.category === cat)
      );
      if (sort === 'price-asc') {
        filtered.sort((a, b) => parseFloat(a.price.replace(/[^\d.]/g, '')) - parseFloat(b.price.replace(/[^\d.]/g, '')));
      } else if (sort === 'price-desc') {
        filtered.sort((a, b) => parseFloat(b.price.replace(/[^\d.]/g, '')) - parseFloat(a.price.replace(/[^\d.]/g, '')));
      } else if (sort === 'rating-desc') {
        filtered.sort((a, b) => b.rating - a.rating);
      }
      rendersanpham(filtered);
    }

    // FAQ Toggle
    function toggleFAQ() {
      document.querySelectorAll('.faq-item button').forEach(btn => {
        btn.addEventListener('click', () => {
          const faqItem = btn.parentElement;
          const isOpen = faqItem.classList.toggle('open');
          btn.setAttribute('aria-expanded', isOpen);
          document.querySelectorAll('.faq-item').forEach(otherItem => {
            if (otherItem !== faqItem && otherItem.classList.contains('open')) {
              otherItem.classList.remove('open');
              otherItem.querySelector('button').setAttribute('aria-expanded', false);
            }
          });
        });
      });
    }

    // Filter Buttons
    function toggleView() {
      document.querySelectorAll('.filter-btn[data-view]').forEach(btn => {
        btn.addEventListener('click', function() {
          document.querySelectorAll('.filter-btn[data-view]').forEach(b => b.classList.remove('active'));
          this.classList.add('active');
          const view = this.dataset.view;
          const grid = document.getElementById('sanpham-grid');
          
          if (view === 'list') {
            grid.classList.add('list-view');
          } else {
            grid.classList.remove('list-view');
          }
        });
      });
    }

    // Back to Top
    function handleScroll() {
      const backToTop = document.getElementById('back-to-top');
      if (window.scrollY > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
      
      // Update scroll progress
      const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrolled = (winScroll / height) * 100;
      document.getElementById('progressBar').style.width = scrolled + '%';
      
      // Header effect
      const header = document.getElementById('mainHeader');
      if (window.scrollY > 50) {
        header.classList.add('scrolled-header');
      } else {
        header.classList.remove('scrolled-header');
      }
    }

    // Email Validation
    function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }
    
    // Mobile menu toggle
    function initMobileMenu() {
      const mobileMenuBtn = document.getElementById('mobileMenuBtn');
      const navLinks = document.getElementById('navLinks');
      
      mobileMenuBtn.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        mobileMenuBtn.innerHTML = navLinks.classList.contains('active') ? 
          '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
      });
    }
    
    // Chatbot Functions
    function initChatbot() {
      const chatbotBtn = document.getElementById('chatbotBtn');
      const chatbotPopup = document.getElementById('chatbotPopup');
      const chatbotClose = document.getElementById('chatbotClose');
      const chatbotSend = document.getElementById('chatbotSend');
      const chatbotInput = document.getElementById('chatbotInput');
      const chatbotMessages = document.getElementById('chatbotMessages');
      
      chatbotBtn.addEventListener('click', () => {
        chatbotPopup.classList.toggle('active');
      });
      
      chatbotClose.addEventListener('click', () => {
        chatbotPopup.classList.remove('active');
      });
      
      chatbotSend.addEventListener('click', sendMessage);
      
      chatbotInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
          sendMessage();
        }
      });
      
      function sendMessage() {
        const message = chatbotInput.value.trim();
        if (message === '') return;
        
        // Add user message
        addMessage(message, 'user');
        chatbotInput.value = '';
        
        // Simulate typing
        setTimeout(() => {
          const response = getChatbotResponse(message);
          addMessage(response, 'bot');
        }, 1000);
      }
      
      function addMessage(text, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${sender}`;
        messageDiv.textContent = text;
        chatbotMessages.appendChild(messageDiv);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
      }
      
      function getChatbotResponse(message) {
        const lowerMessage = message.toLowerCase();
        
        if (lowerMessage.includes('hello') || lowerMessage.includes('hi') || lowerMessage.includes('chào')) {
          return chatbotResponses.hello;
        }
        
        if (lowerMessage.includes('bảo hành') || lowerMessage.includes('bảo hành')) {
          return chatbotResponses['bảo hành bao lâu'];
        }
        
        if (lowerMessage.includes('trả góp') || lowerMessage.includes('thanh toán')) {
          return chatbotResponses['tôi có thể trả góp không'];
        }
        
        if (lowerMessage.includes('giao hàng') || lowerMessage.includes('vận chuyển')) {
          return chatbotResponses['thời gian giao hàng'];
        }
        
        if (lowerMessage.includes('đổi trả') || lowerMessage.includes('trả hàng')) {
          return chatbotResponses['có chính sách đổi trả không'];
        }
        
        if (lowerMessage.includes('cảm ơn') || lowerMessage.includes('thanks')) {
          return chatbotResponses['cảm ơn'];
        }
        
        return chatbotResponses.default;
      }
    }
    
    function sendQuickQuestion(question) {
      const chatbotMessages = document.getElementById('chatbotMessages');
      const chatbotInput = document.getElementById('chatbotInput');
      
      // Add user message
      const messageDiv = document.createElement('div');
      messageDiv.className = 'message user';
      messageDiv.textContent = question;
      chatbotMessages.appendChild(messageDiv);
      chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
      
      // Simulate typing
      setTimeout(() => {
        const response = getChatbotResponse(question);
        const botMessage = document.createElement('div');
        botMessage.className = 'message bot';
        botMessage.textContent = response;
        chatbotMessages.appendChild(botMessage);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
      }, 1000);
    }
    
    function getChatbotResponse(message) {
      const lowerMessage = message.toLowerCase();
      
      if (lowerMessage.includes('hello') || lowerMessage.includes('hi') || lowerMessage.includes('chào')) {
        return chatbotResponses.hello;
      }
      
      if (lowerMessage.includes('bảo hành') || lowerMessage.includes('bảo hành')) {
        return chatbotResponses['bảo hành bao lâu'];
      }
      
      if (lowerMessage.includes('trả góp') || lowerMessage.includes('thanh toán')) {
        return chatbotResponses['tôi có thể trả góp không'];
      }
      
      if (lowerMessage.includes('giao hàng') || lowerMessage.includes('vận chuyển')) {
        return chatbotResponses['thời gian giao hàng'];
      }
      
      if (lowerMessage.includes('đổi trả') || lowerMessage.includes('trả hàng')) {
        return chatbotResponses['có chính sách đổi trả không'];
      }
      
      if (lowerMessage.includes('cảm ơn') || lowerMessage.includes('thanks')) {
        return chatbotResponses['cảm ơn'];
      }
      
      return chatbotResponses.default;
    }
    
    // Dark Mode Toggle
    function initDarkMode() {
      const themeToggle = document.getElementById('themeToggle');
      const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
      
      // Check local storage or system preference
      if (localStorage.getItem('darkMode') === 'enabled' || 
          (localStorage.getItem('darkMode') === null && prefersDarkScheme.matches)) {
        document.body.classList.add('dark-mode');
        themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
      }
      
      themeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        if (document.body.classList.contains('dark-mode')) {
          localStorage.setItem('darkMode', 'enabled');
          themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        } else {
          localStorage.setItem('darkMode', 'disabled');
          themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
        }
      });
    }

    // Event Listeners
    document.getElementById('search-box').addEventListener('input', applyFilter);
    document.getElementById('filter-select').addEventListener('change', applyFilter);
    document.getElementById('sort-select').addEventListener('change', applyFilter);
    document.getElementById('lienhe-form').addEventListener('submit', (e) => {
      e.preventDefault();
      const email = document.getElementById('email').value;
      if (!validateEmail(email)) {
        showToast('Vui lòng nhập địa chỉ email hợp lệ', 'error');
        return;
      }
      showToast('Tin nhắn của bạn đã được gửi thành công!', 'success');
      e.target.reset();
    });
    document.getElementById('newsletter-form').addEventListener('submit', (e) => {
      e.preventDefault();
      const email = e.target.querySelector('input[type="email"]').value;
      if (!validateEmail(email)) {
        showToast('Vui lòng nhập địa chỉ email hợp lệ', 'error');
        return;
      }
      showToast('Cảm ơn bạn đã đăng ký làm hội viên của chúng tôi!', 'success');
      e.target.reset();
    });
    document.getElementById('back-to-top').addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    document.getElementById('productModal').addEventListener('click', (e) => {
      if (e.target === document.getElementById('productModal')) hideModal();
    });
    document.getElementById('compareModal').addEventListener('click', (e) => {
      if (e.target === document.getElementById('compareModal')) hideCompareModal();
    });
    document.getElementById('cartModal').addEventListener('click', (e) => {
      if (e.target === document.getElementById('cartModal')) hideCartModal();
    });
    document.getElementById('wishlistModal').addEventListener('click', (e) => {
      if (e.target === document.getElementById('wishlistModal')) hideWishlistModal();
    });
    
    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function() {
      const term = this.value.toLowerCase();
      if (term.length > 2) {
        applyFilter();
      } else if (term.length === 0) {
        rendersanpham(sanpham);
      }
    });

    // Initialize
    document.addEventListener('DOMContentLoaded', () => {
      rendersanpham(sanpham);
      renderphanhoi();
      startSlider();
      toggleFAQ();
      toggleView();
      handleScroll();
      updateCompareButton();
      document.querySelector('.cart-count').textContent = cartCount;
      document.querySelector('.wishlist-count').textContent = wishlist.length;
      initMobileMenu();
      initCountdown();
      initChatbot();
      initDarkMode();
      
      // Update deal timers every minute
      setInterval(updateDealTimers, 60000);
    });
    window.addEventListener('scroll', handleScroll);
  </script>
</body>
</html>