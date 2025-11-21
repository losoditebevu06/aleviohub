<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlevioHub - Women's Fashion & Clothing Store | Trendy Outfits for Every Occasion</title>
    <meta name="description" content="Discover the latest women's fashion trends at AlevioHub. Shop stylish dresses, tops, bottoms, and accessories. Quality clothing for modern women who love to express their unique style through fashion.">
    <meta name="keywords" content="women's clothing, fashion, dresses, tops, bottoms, accessories, trendy outfits, women's fashion store">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .header-nav-container-9x7k {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-4m8n {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-2k5j {
            font-size: 2rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }

        .navigation-menu-8p3q {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-item-7r9s {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .nav-link-item-7r9s:hover {
            color: #ffd700;
        }

        .main-content-wrapper-5t8u {
            margin-top: 80px;
        }

        .hero-section-banner-3w6y {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content-block-9m4n {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-main-6k2p {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-text-8j7l {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-primary-4x9z {
            background: #ff6b6b;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        .cta-button-primary-4x9z:hover {
            background: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255,107,107,0.4);
        }

        .about-section-container-2v5h {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            margin-top: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .section-title-heading-7n3k {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #2c3e50;
            position: relative;
        }

        .section-title-heading-7n3k::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #667eea;
        }

        .about-content-grid-8w4j {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-block-5q9r {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .about-image-wrapper-3p7m {
            text-align: center;
        }

        .about-feature-image-9k6n {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .collections-showcase-1x8v {
            padding: 4rem 2rem;
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .collections-grid-layout-4m2n {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .collection-card-item-7k5p {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .collection-card-item-7k5p:hover {
            transform: translateY(-10px);
        }

        .collection-image-display-2w9j {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .collection-title-name-6r4s {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .collection-description-text-8n7m {
            opacity: 0.9;
            line-height: 1.6;
        }

        .history-timeline-section-5j8k {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            margin-top: 2rem;
            border-radius: 15px;
        }

        .timeline-container-9p3x {
            position: relative;
            margin-top: 3rem;
        }

        .timeline-item-block-4w7n {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .timeline-year-marker-2k9j {
            background: #667eea;
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 100px;
            text-align: center;
        }

        .timeline-content-box-6m4p {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            flex: 1;
            border-left: 4px solid #667eea;
        }

        .timeline-event-title-8r5s {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .timeline-event-description-3n8k {
            color: #666;
            line-height: 1.6;
        }

        .features-benefits-area-7x2m {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .features-grid-system-9k4j {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card-element-5p8w {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .feature-icon-symbol-2m7n {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-title-header-6k9r {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .feature-description-detail-4j5s {
            opacity: 0.9;
            line-height: 1.6;
        }

        .testimonials-reviews-section-8w3p {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            margin-top: 2rem;
            border-radius: 15px;
        }

        .reviews-grid-layout-7n4k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card-container-5m8j {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            border-left: 4px solid #ff6b6b;
            position: relative;
        }

        .review-text-content-9p2x {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
            color: #555;
        }

        .reviewer-info-block-3k7w {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .reviewer-avatar-image-6r9s {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .reviewer-details-info-4n5m {
            flex: 1;
        }

        .reviewer-name-title-8j3p {
            font-weight: bold;
            color: #2c3e50;
        }

        .reviewer-location-text-2w7k {
            color: #666;
            font-size: 0.9rem;
        }

        .star-rating-display-5x9n {
            color: #ffd700;
            margin-top: 0.5rem;
        }

        .company-values-mission-7k2j {
            padding: 4rem 2rem;
            background: linear-gradient(45deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
        }

        .values-content-wrapper-9m5p {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .values-grid-system-3w8k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .value-item-card-6n4r {
            background: rgba(255,255,255,0.8);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .value-icon-graphic-8p7s {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #667eea;
        }

        .value-title-name-4k9m {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .value-description-text-7j2n {
            color: #555;
            line-height: 1.6;
        }

        .sustainability-eco-section-5w8p {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            margin-top: 2rem;
            border-radius: 15px;
        }

        .sustainability-content-grid-9k3j {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            margin-top: 3rem;
        }

        .sustainability-text-block-2m7r {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .sustainability-image-wrapper-6p4s {
            text-align: center;
        }

        .eco-friendly-image-display-8n9k {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .size-guide-helper-section-4j7m {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        }

        .size-guide-content-area-7w5n {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .size-chart-table-wrapper-3k8p {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            margin-top: 2rem;
            overflow-x: auto;
        }

        .size-measurement-table-9r4j {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        .table-header-cell-6m2s {
            background: #667eea;
            color: white;
            padding: 1rem;
            text-align: center;
            font-weight: bold;
        }

        .table-data-cell-8p9k {
            padding: 0.8rem;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .care-instructions-guide-5n7w {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            margin-top: 2rem;
            border-radius: 15px;
        }

        .care-tips-grid-layout-2k4j {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .care-tip-card-item-9m6p {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            border-top: 4px solid #ff6b6b;
        }

        .care-icon-symbol-7r3s {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #667eea;
        }

        .care-tip-title-header-4w8n {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .care-instruction-text-6k5m {
            color: #555;
            line-height: 1.6;
        }

        .shipping-delivery-info-8j9p {
            padding: 4rem 2rem;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .shipping-content-wrapper-3n7k {
            max-width: 1200px;
            margin: 0 auto;
        }

        .shipping-options-grid-5w2j {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .shipping-option-card-9p4s {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .shipping-icon-graphic-7m8n {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .shipping-method-title-6r5k {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .shipping-description-detail-4j9w {
            opacity: 0.9;
            line-height: 1.6;
        }

        .newsletter-signup-area-2k7m {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            margin-top: 2rem;
            border-radius: 15px;
            text-align: center;
        }

        .newsletter-form-container-8p3j {
            max-width: 500px;
            margin: 2rem auto;
        }

        .email-input-field-5w9n {
            width: 70%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 50px 0 0 50px;
            font-size: 1rem;
            outline: none;
        }

        .subscribe-button-submit-7k4r {
            width: 30%;
            padding: 15px;
            background: #ff6b6b;
            color: white;
            border: none;
            border-radius: 0 50px 50px 0;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .subscribe-button-submit-7k4r:hover {
            background: #ff5252;
        }

        .footer-main-container-9m6k {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
            margin-top: 2rem;
        }

        .footer-content-grid-4j8p {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-block-7w3n {
            margin-bottom: 2rem;
        }

        .footer-title-heading-5k9r {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #ffd700;
        }

        .footer-link-item-8p2s {
            color: #bdc3c7;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-link-item-8p2s:hover {
            color: #ffd700;
        }

        .contact-phone-number-6m4j {
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }

        .footer-bottom-bar-3n7k {
            border-top: 1px solid #34495e;
            margin-top: 2rem;
            padding-top: 1rem;
            text-align: center;
            color: #bdc3c7;
        }

        .modal-overlay-background-9k5p {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content-container-7j8w {
            background-color: white;
            margin: 5% auto;
            padding: 2rem;
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
        }

        .modal-close-button-4m9n {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            right: 1rem;
            top: 1rem;
        }

        .modal-close-button-4m9n:hover {
            color: #000;
        }

        .modal-title-header-6r3k {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .modal-text-content-8w5j {
            line-height: 1.6;
            color: #555;
            margin-bottom: 1rem;
        }

        .continue-button-action-2p7s {
            background: #28a745;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            font-weight: bold;
        }

        .continue-button-action-2p7s:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40,167,69,0.4);
        }

        .highlight-box-special-5k8m {
            background: linear-gradient(45deg, #ffeaa7, #fab1a0);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            text-align: center;
            border-left: 5px solid #e17055;
        }

        .highlight-text-emphasis-9j4n {
            font-size: 1.2rem;
            font-weight: bold;
            color: #2d3436;
            margin-bottom: 1rem;
        }

        .brand-story-narrative-7w2p {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        }

        .story-content-wrapper-3k9j {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .story-text-block-6m5r {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-top: 2rem;
            text-align: left;
        }

        .quality-assurance-section-8p4k {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            margin-top: 2rem;
            border-radius: 15px;
        }

        .quality-points-grid-5w7n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .quality-point-card-9r3j {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            border-top: 4px solid #667eea;
        }

        .quality-icon-symbol-4k8m {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #667eea;
        }

        .quality-point-title-7j5p {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .quality-description-text-2w9s {
            color: #555;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .navigation-menu-8p3q {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-title-main-6k2p {
                font-size: 2.5rem;
            }

            .about-content-grid-8w4j,
            .sustainability-content-grid-9k3j {
                grid-template-columns: 1fr;
            }

            .timeline-item-block-4w7n {
                flex-direction: column;
                text-align: center;
            }

            .timeline-year-marker-2k9j {
                margin-right: 0;
                margin-bottom: 1rem;
            }

            .email-input-field-5w9n,
            .subscribe-button-submit-7k4r {
                width: 100%;
                border-radius: 25px;
                margin-bottom: 1rem;
            }
        }

        .seasonal-trends-showcase-6k9m {
            padding: 4rem 2rem;
            background: linear-gradient(45deg, #a8edea 0%, #fed6e3 100%);
        }

        .trends-content-wrapper-3j7p {
            max-width: 1200px;
            margin: 0 auto;
        }

        .trends-grid-layout-8w4n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .trend-card-container-5r9k {
            background: rgba(255,255,255,0.9);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .trend-card-container-5r9k:hover {
            transform: translateY(-5px);
        }

        .trend-image-display-7m2s {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .trend-title-header-4p8j {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .trend-description-detail-9k6w {
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header class="header-nav-container-9x7k">
        <nav class="nav-wrapper-4m8n">
            <a href="#home" class="logo-brand-2k5j">AlevioHub</a>
            <ul class="navigation-menu-8p3q">
                <li><a href="#about" class="nav-link-item-7r9s">About Us</a></li>
                <li><a href="#collections" class="nav-link-item-7r9s">Collections</a></li>
                <li><a href="#history" class="nav-link-item-7r9s">Our Story</a></li>
                <li><a href="#features" class="nav-link-item-7r9s">Features</a></li>
                <li><a href="#reviews" class="nav-link-item-7r9s">Reviews</a></li>
                <li><a href="#values" class="nav-link-item-7r9s">Values</a></li>
                <li><a href="#sustainability" class="nav-link-item-7r9s">Sustainability</a></li>
                <li><a href="#size-guide" class="nav-link-item-7r9s">Size Guide</a></li>
                <li><a href="#care" class="nav-link-item-7r9s">Care Tips</a></li>
                <li><a href="#shipping" class="nav-link-item-7r9s">Shipping</a></li>
                <li><a href="#newsletter" class="nav-link-item-7r9s">Newsletter</a></li>
                <li><a href="#trends" class="nav-link-item-7r9s">Trends</a></li>
                <li><a href="#quality" class="nav-link-item-7r9s">Quality</a></li>
                <li><a href="#story" class="nav-link-item-7r9s">Brand Story</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content-wrapper-5t8u">
        <section id="home" class="hero-section-banner-3w6y">
            <div class="hero-content-block-9m4n">
                <h1 class="hero-title-main-6k2p">Welcome to AlevioHub</h1>
                <p class="hero-subtitle-text-8j7l">Discover amazing women's fashion that celebrates your unique style and personality. From casual everyday wear to special occasion outfits, we have everything you need to look and feel confident. <a href="#about" class="continue-button-action-2p7s">Click here to continue</a> exploring our world of fashion.</p>
                <a href="#collections" class="cta-button-primary-4x9z">Explore Our Collections</a>
                                <div class="care-icon-symbol-7r3s">🌡️</div>
                    <h3 class="care-tip-title-header-4w8n">Temperature Control</h3>
                    <p class="care-instruction-text-6k5m">Hot water can damage fibers and cause colors to bleed. Stick to cold or lukewarm water for most fabrics. Only use hot water when specifically indicated on the care label.</p>
                </div>

                <div class="care-tip-card-item-9m6p">
                    <div class="care-icon-symbol-7r3s">🧴</div>
                    <h3 class="care-tip-title-header-4w8n">Detergent Selection</h3>
                    <p class="care-instruction-text-6k5m">Use mild, color-safe detergents to preserve fabric integrity. Avoid bleach unless specifically recommended. For delicate fabrics, consider using specialized gentle detergents.</p>
                </div>

                <div class="care-tip-card-item-9m6p">
                    <div class="care-icon-symbol-7r3s">☀️</div>
                    <h3 class="care-tip-title-header-4w8n">Drying Methods</h3>
                    <p class="care-instruction-text-6k5m">Air drying is gentlest on fabrics. If using a dryer, use low heat settings. Hang delicate items to dry and reshape while damp to maintain their original form.</p>
                </div>

                <div class="care-tip-card-item-9m6p">
                    <div class="care-icon-symbol-7r3s">👗</div>
                    <h3 class="care-tip-title-header-4w8n">Storage Tips</h3>
                    <p class="care-instruction-text-6k5m">Store garments in a cool, dry place. Use padded hangers for structured pieces and fold knits to prevent stretching. Cedar blocks help protect against moths naturally.</p>
                </div>

                <div class="care-tip-card-item-9m6p">
                    <div class="care-icon-symbol-7r3s">🔧</div>
                    <h3 class="care-tip-title-header-4w8n">Stain Removal</h3>
                    <p class="care-instruction-text-6k5m">Treat stains immediately for best results. Blot, don't rub, to avoid spreading. Test any stain remover on an inconspicuous area first before applying to the visible stain.</p>
                </div>
            </div>
        </section>

        <section id="newsletter" class="newsletter-signup-area-8j4k">
            <div class="newsletter-content-wrapper-5m9p">
                <h2 class="section-title-heading-7n3k" style="color: white;">Stay in Style</h2>
                <p class="newsletter-description-text-7w3n">Join our fashion community and be the first to know about new arrivals, exclusive sales, and styling tips from our fashion experts.</p>
                
                <form class="newsletter-form-container-2k6j">
                    <div class="form-input-group-9r4s">
                        <input type="email" placeholder="Enter your email address" class="email-input-field-3p8m" required>
                        <button type="submit" class="subscribe-button-action-6n7k">Subscribe Now</button>
                    </div>
                    <p class="privacy-notice-text-4j9w">We respect your privacy. Unsubscribe at any time. No spam, just fashion!</p>
                </form>

                <div class="newsletter-benefits-list-8k5r">
                    <div class="benefit-item-element-7m2p">
                        <span class="benefit-icon-mark-9j4s">✨</span>
                        <span class="benefit-text-label-3w6n">Exclusive early access to sales</span>
                    </div>
                    <div class="benefit-item-element-7m2p">
                        <span class="benefit-icon-mark-9j4s">👗</span>
                        <span class="benefit-text-label-3w6n">New arrival notifications</span>
                    </div>
                    <div class="benefit-item-element-7m2p">
                        <span class="benefit-icon-mark-9j4s">💡</span>
                        <span class="benefit-text-label-3w6n">Personal styling tips</span>
                    </div>
                    <div class="benefit-item-element-7m2p">
                        <span class="benefit-icon-mark-9j4s">🎁</span>
                        <span class="benefit-text-label-3w6n">Birthday surprises</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-information-section-6w8j">
            <h2 class="section-title-heading-7n3k" style="color: #2c3e50;">Get in Touch</h2>
            <div class="contact-content-grid-4k7m">
                <div class="contact-info-block-9p5r">
                    <h3 style="color: #2c3e50; margin-bottom: 1.5rem;">We'd Love to Hear From You</h3>
                    <p style="margin-bottom: 2rem; color: #555;">Have questions about sizing, need styling advice, or want to share feedback? Our friendly customer service team is here to help make your AlevioHub experience exceptional.</p>
                    
                    <div class="contact-method-item-2j8k">
                        <div class="contact-icon-symbol-5w9r">📧</div>
                        <div class="contact-details-info-7n3p">
                            <strong>Email Us</strong>
                            <p>hello@aleviohub.com</p>
                            <p>We respond within 24 hours</p>
                        </div>
                    </div>

                    <div class="contact-method-item-2j8k">
                        <div class="contact-icon-symbol-5w9r">📞</div>
                        <div class="contact-details-info-7n3p">
                            <strong>Call Us</strong>
                            <p>1-800-ALEVIO (253-8466)</p>
                            <p>Mon-Fri: 9AM-7PM EST</p>
                        </div>
                    </div>

                    <div class="contact-method-item-2j8k">
                        <div class="contact-icon-symbol-5w9r">💬</div>
                        <div class="contact-details-info-7n3p">
                            <strong>Live Chat</strong>
                            <p>Available on our website</p>
                            <p>Mon-Sat: 10AM-6PM EST</p>
                        </div>
                    </div>

                    <div class="contact-method-item-2j8k">
                        <div class="contact-icon-symbol-5w9r">📍</div>
                        <div class="contact-details-info-7n3p">
                            <strong>Visit Our Showroom</strong>
                            <p>123 Fashion Avenue</p>
                            <p>New York, NY 10001</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container-8m4j">
                    <form class="customer-contact-form-3k9p">
                        <div class="form-field-group-7w2n">
                            <label for="name" class="form-label-text-5j8r">Full Name</label>
                            <input type="text" id="name" name="name" class="form-input-element-9k4s" required>
                        </div>

                        <div class="form-field-group-7w2n">
                            <label for="email" class="form-label-text-5j8r">Email Address</label>
                            <input type="email" id="email" name="email" class="form-input-element-9k4s" required>
                        </div>

                        <div class="form-field-group-7w2n">
                            <label for="subject" class="form-label-text-5j8r">Subject</label>
                            <select id="subject" name="subject" class="form-select-dropdown-6p7m" required>
                                <option value="">Select a topic</option>
                                <option value="sizing">Sizing Help</option>
                                <option value="order">Order Inquiry</option>
                                <option value="styling">Styling Advice</option>
                                <option value="return">Returns & Exchanges</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-field-group-7w2n">
                            <label for="message" class="form-label-text-5j8r">Message</label>
                            <textarea id="message" name="message" rows="5" class="form-textarea-field-4n8k" placeholder="Tell us how we can help you..." required></textarea>
                        </div>

                        <button type="submit" class="form-submit-button-2m9j">Send Message</button>
                    </form>
                </div>
            </div>
        </section>

        <section id="social" class="social-media-connect-7k3w">
            <div class="social-content-wrapper-9m5j">
                <h2 class="section-title-heading-7n3k" style="color: white;">Connect With Us</h2>
                <p class="social-description-text-4w8p">Follow us on social media for daily style inspiration, behind-the-scenes content, and exclusive community perks!</p>
                
                <div class="social-links-grid-6r2n">
                    <a href="#" class="social-link-button-8j5k">
                        <div class="social-icon-wrapper-3p9m">📘</div>
                        <div class="social-platform-info-7k4r">
                            <strong>Facebook</strong>
                            <span>Daily style posts & community</span>
                        </div>
                    </a>

                    <a href="#" class="social-link-button-8j5k">
                        <div class="social-icon-wrapper-3p9m">📷</div>
                        <div class="social-platform-info-7k4r">
                            <strong>Instagram</strong>
                            <span>Outfit inspiration & lookbooks</span>
                        </div>
                    </a>

                    <a href="#" class="social-link-button-8j5k">
                        <div class="social-icon-wrapper-3p9m">🐦</div>
                        <div class="social-platform-info-7k4r">
                            <strong>Twitter</strong>
                            <span>Fashion news & quick updates</span>
                        </div>
                    </a>

                    <a href="#" class="social-link-button-8j5k">
                        <div class="social-icon-wrapper-3p9m">📌</div>
                        <div class="social-platform-info-7k4r">
                            <strong>Pinterest</strong>
                            <span>Style boards & fashion ideas</span>
                        </div>
                    </a>

                    <a href="#" class="social-link-button-8j5k">
                        <div class="social-icon-wrapper-3p9m">🎵</div>
                        <div class="social-platform-info-7k4r">
                            <strong>TikTok</strong>
                            <span>Fashion tips & styling videos</span>
                        </div>
                    </a>

                    <a href="#" class="social-link-button-8j5k">
                        <div class="social-icon-wrapper-3p9m">💼</div>
                        <div class="social-platform-info-7k4r">
                            <strong>LinkedIn</strong>
                            <span>Professional fashion insights</span>
                        </div>
                    </a>
                </div>

                <div class="hashtag-section-area-5w9k">
                    <p style="color: white; margin-bottom: 1rem;">Share your AlevioHub looks with:</p>
                    <div class="hashtag-list-display-2j7m">
                        <span class="hashtag-tag-item-8k4p">#AlevioHub</span>
                        <span class="hashtag-tag-item-8k4p">#MyAlevioStyle</span>
                        <span class="hashtag-tag-item-8k4p">#FashionForward</span>
                        <span class="hashtag-tag-item-8k4p">#StyleConfidence</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="faq-questions-section-4m7j">
            <h2 class="section-title-heading-7n3k" style="color: #2c3e50;">Frequently Asked Questions</h2>
            <div class="faq-content-container-9k5w">
                <div class="faq-item-block-3j8r">
                    <h3 class="faq-question-title-6p4n">What is your return policy?</h3>
                    <p class="faq-answer-text-7m2k">We offer a 30-day return policy for all unworn items with original tags. Items must be in original condition. We provide free return shipping labels for exchanges, and returns are processed within 5-7 business days of receipt.</p>
                </div>

                <div class="faq-item-block-3j8r">
                    <h3 class="faq-question-title-6p4n">How do I know what size to order?</h3>
                    <p class="faq-answer-text-7m2k">We provide detailed size charts for each item, including bust, waist, hip, and length measurements. Our customer service team is also available to provide personalized sizing recommendations based on your measurements and fit preferences.</p>
                </div>

                <div class="faq-item-block-3j8r">
                    <h3 class="faq-question-title-6p4n">How long does shipping take?</h3>
                    <p class="faq-answer-text-7m2k">Standard shipping takes 3-5 business days within the continental US. Express shipping (1-2 business days) and overnight shipping options are available. International shipping takes 7-14 business days depending on location.</p>
                </div>

                <div class="faq-item-block-3j8r">
                    <h3 class="faq-question-title-6p4n">Do you offer international shipping?</h3>
                    <p class="faq-answer-text-7m2k">Yes! We ship to over 50 countries worldwide. International shipping costs and delivery times vary by destination. Customers are responsible for any customs duties or taxes imposed by their country.</p>
                </div>

                <div class="faq-item-block-3j8r">
                    <h3 class="faq-question-title-6p4n">Are your clothes true to size?</h3>
                    <p class="faq-answer-text-7m2k">Our clothes are designed to fit true to size according to our size charts. However, fit can vary by style and personal preference. We recommend checking the specific measurements for each item and reading customer reviews for fit feedback.</p>
                </div>

                <div class="faq-item-block-3j8r">
                    <h3 class="faq-question-title-6p4n">What payment methods do you accept?</h3>
                    <p class="faq-answer-text-7m2k">We accept all major credit cards (Visa, MasterCard, American Express, Discover), PayPal, Apple Pay, Google Pay, and Klarna for buy-now-pay-later options. All transactions are secure and encrypted.</p>
                </div>

                <div class="faq-item-block-3j8r">
                    <h3 class="faq-question-title-6p4n">How can I track my order?</h3>
                    <p class="faq-answer-text-7m2k">Once your order ships, you'll receive a tracking number via email. You can track your package on our website or directly through the carrier's website. Orders typically process within 24 hours of placement.</p>
                </div>

                <div class="faq-item-block-3j8r">
                    <h3 class="faq-question-title-6p4n">Do you have a loyalty program?</h3>
                    <p class="faq-answer-text-7m2k">Yes! Our AlevioHub Rewards program offers points for every purchase, exclusive member discounts, early access to sales, and special birthday perks. Sign up is free and you start earning points immediately.</p>
                </div>
            </div>
        </section>

        <footer class="main-footer-section-8k9j">
            <div class="footer-content-wrapper-5m7p">
                <div class="footer-grid-layout-3w6n">
                    <div class="footer-brand-column-9r4k">
                        <h3 class="footer-brand-title-2j8m">AlevioHub</h3>
                        <p class="footer-brand-description-7k5w">Empowering women through fashion. Quality, style, and confidence in every piece.</p>
                        <div class="footer-social-links-6p3r">
                            <a href="#" class="footer-social-icon-4m9j">📘</a>
                            <a href="#" class="footer-social-icon-4m9j">📷</a>
                            <a href="#" class="footer-social-icon-4m9j">🐦</a>
                            <a href="#" class="footer-social-icon-4m9j">📌</a>
                        </div>
                    </div>

                    <div class="footer-links-column-8n2k">
                        <h4 class="footer-column-title-5j7r">Quick Links</h4>
                        <ul class="footer-link-list-9w4p">
                            <li><a href="#home" class="footer-nav-link-3k8m">Home</a></li>
                            <li><a href="#about" class="footer-nav-link-3k8m">About Us</a></li>
                            <li><a href="#collections" class="footer-nav-link-3k8m">Collections</a></li>
                            <li><a href="#size-guide" class="footer-nav-link-3k8m">Size Guide</a></li>
                            <li><a href="#contact" class="footer-nav-link-3k8m">Contact</a></li>
                        </ul>
                    </div>

                    <div class="footer-links-column-8n2k">
                        <h4 class="footer-column-title-5j7r">Customer Care</h4>
                        <ul class="footer-link-list-9w4p">
                            <li><a href="#faq" class="footer-nav-link-3k8m">FAQ</a></li>
                            <li><a href="#" class="footer-nav-link-3k8m">Shipping Info</a></li>
                            <li><a href="#" class="footer-nav-link-3k8m">Returns</a></li>
                            <li><a href="#care" class="footer-nav-link-3k8m">Care Instructions</a></li>
                            <li><a href="#" class="footer-nav-link-3k8m">Track Order</a></li>
                        </ul>
                    </div>

                    <div class="footer-links-column-8n2k">
                        <h4 class="footer-column-title-5j7r">Company</h4>
                        <ul class="footer-link-list-9w4p">
                            <li><a href="#values" class="footer-nav-link-3k8m">Our Values</a></li>
                            <li><a href="#sustainability" class="footer-nav-link-3k8m">Sustainability</a></li>
                            <li><a href="#" class="footer-nav-link-3k8m">Careers</a></li>
                            <li><a href="#" class="footer-nav-link-3k8m">Press</a></li>
                            <li><a href="#" class="footer-nav-link-3k8m">Wholesale</a></li>
                        </ul>
                    </div>

                    <div class="footer-newsletter-column-7p5k">
                        <h4 class="footer-column-title-5j7r">Stay Connected</h4>
                        <p class="footer-newsletter-text-2w9j">Subscribe for exclusive offers and style updates</p>
                        <form class="footer-newsletter-form-4k6m">
                            <input type="email" placeholder="Your email" class="footer-email-input-8r3n">
                            <button type="submit" class="footer-subscribe-btn-9j5p">Subscribe</button>
                        </form>
                    </div>
                </div>

                <div class="footer-bottom-section-6k4r">
                    <div class="footer-legal-links-7m9w">
                        <a href="#" class="footer-legal-link-2p8k">Privacy Policy</a>
                        <a href="#" class="footer-legal-link-2p8k">Terms of Service</a>
                        <a href="#" class="footer-legal-link-2p8k">Cookie Policy</a>
                        <a href="#" class="footer-legal-link-2p8k">Accessibility</a>
                    </div>
                    <p class="footer-copyright-text-5n7j">© 2024 AlevioHub. All rights reserved. Designed with ❤️ for fashion-forward women.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-toggle-4k7j');
        const navMenu = document.querySelector('.nav-menu-list-8w2p');
        
        if (mobileMenuBtn && navMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                this.classList.toggle('active');
            });
        }

        // Newsletter form submission
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                
                // Show success message
                const successMsg = document.createElement('div');
                successMsg.style.cssText = `
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background: #27ae60;
                    color: white;
                    padding: 15px 25px;
                    border-radius: 5px;
                    z-index: 1000;
                    font-weight: 500;
                `;
                successMsg.textContent = 'Thank you! Your message has been sent successfully.';
                document.body.appendChild(successMsg);
                
                // Remove success message after 3 seconds
                setTimeout(() => {
                    successMsg.remove();
                }, 3000);
                
                // Reset form
                this.reset();
            });
        });

        // Scroll-triggered animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.feature-card-element-5p8w, .collection-card-item-7k5p, .review-card-container-5m8j, .timeline-item-block-4w7n').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // FAQ accordion functionality
        document.querySelectorAll('.faq-question-title-6p4n').forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const isOpen = answer.style.display === 'block';
                
                // Close all other answers
                document.querySelectorAll('.faq-answer-text-7m2k').forEach(ans => {
                    ans.style.display = 'none';
                });
                
                // Toggle current answer
                answer.style.display = isOpen ? 'none' : 'block';
                
                // Add visual indicator
                this.style.color = isOpen ? '#2c3e50' : '#e74c3c';
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.main-header-navigation-3k8j');
            if (header) {
                if (window.scrollY > 100) {
                    header.style.background = 'rgba(44, 62, 80, 0.95)';
                    header.style.backdropFilter = 'blur(10px)';
                } else {
                    header.style.background = 'rgba(44, 62, 80, 0.9)';
                    header.style.backdropFilter = 'none';
                }
            }
        });

        // Image lazy loading
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.style.opacity = '1';
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img').forEach(img => {
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
            img.addEventListener('load', () => {
                img.style.opacity = '1';
            });
            imageObserver.observe(img);
        });
    </script>
</body>
</html>

