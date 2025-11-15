-- -----------------------------------------------------
-- SITE CONFIG
-- -----------------------------------------------------
CREATE TABLE landing_pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE site_config (
    id INT AUTO_INCREMENT PRIMARY KEY,
    site_name VARCHAR(255),
    logo_path VARCHAR(255),
    phone VARCHAR(30),
    copyright_year VARCHAR(10),
    landing_page_id INT
);

-- -----------------------------------------------------
-- HERO SECTION
-- -----------------------------------------------------
CREATE TABLE hero_section (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title TEXT,
    subtitle TEXT,
    landing_page_id INT
);

-- -----------------------------------------------------
-- VIDEO SECTION
-- -----------------------------------------------------
CREATE TABLE video_section (
    id INT AUTO_INCREMENT PRIMARY KEY,
    youtube_url VARCHAR(255),
    cta_text VARCHAR(255),
    cta_subtext VARCHAR(255),
    landing_page_id INT
);

-- -----------------------------------------------------
-- COUNTDOWN SECTION
-- -----------------------------------------------------
CREATE TABLE countdown_section (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    hours_label VARCHAR(50),
    minutes_label VARCHAR(50),
    seconds_label VARCHAR(50),
    landing_page_id INT
);

-- -----------------------------------------------------
-- BANNER SECTION
-- -----------------------------------------------------
CREATE TABLE banner_section (
    id INT AUTO_INCREMENT PRIMARY KEY,
    text TEXT,
    landing_page_id INT
);

-- -----------------------------------------------------
-- FEATURES SECTION
-- -----------------------------------------------------
CREATE TABLE features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    icon TEXT,
    landing_page_id INT
);

-- Features Call-To-Action
CREATE TABLE features_cta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    button_text VARCHAR(255),
    subtext VARCHAR(255),
    landing_page_id INT
);

-- -----------------------------------------------------
-- GALLERY SECTION
-- -----------------------------------------------------
CREATE TABLE gallery_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    image_src VARCHAR(255),
    alt_text VARCHAR(255),
    landing_page_id INT
);

-- -----------------------------------------------------
-- WHY CHOOSE US
-- -----------------------------------------------------
CREATE TABLE why_choose_us (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    image VARCHAR(255),
    landing_page_id INT
);

CREATE TABLE why_choose_points (
    id INT AUTO_INCREMENT PRIMARY KEY,
    why_id INT,
    point TEXT,
    FOREIGN KEY (why_id) REFERENCES why_choose_us(id) ON DELETE CASCADE,
    landing_page_id INT
);

-- -----------------------------------------------------
-- REVIEWS SECTION
-- -----------------------------------------------------
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    cta_button VARCHAR(255),
    cta_subtext VARCHAR(255),
    landing_page_id INT
);

CREATE TABLE review_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    review_id INT,
    src VARCHAR(255),
    alt_text VARCHAR(255),
    FOREIGN KEY (review_id) REFERENCES reviews(id) ON DELETE CASCADE,
    landing_page_id INT
);

-- -----------------------------------------------------
-- PRICING SECTION
-- -----------------------------------------------------
CREATE TABLE pricing_section (
    id INT AUTO_INCREMENT PRIMARY KEY,
    main_title VARCHAR(255),
    regular_price VARCHAR(50),
    offer_price VARCHAR(50),
    savings VARCHAR(50),
    regular_label VARCHAR(255),
    offer_label VARCHAR(255),
    savings_label VARCHAR(255),
    landing_page_id INT
);

-- -----------------------------------------------------
-- PRODUCTS
-- -----------------------------------------------------
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_key VARCHAR(50),
    value VARCHAR(50),
    name VARCHAR(255),
    price INT,
    regular_price INT,
    shipping INT,
    discount_text VARCHAR(255),
    save_text VARCHAR(255),
    badge VARCHAR(255),
    is_checked TINYINT(1),
    landing_page_id INT
);