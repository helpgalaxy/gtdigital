<?php
	require('connect2.php');
	include('head.php');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
    color: #ffffff;
    overflow-x: hidden;
}

/* Header Styles */
.mobile_header {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(15, 15, 35, 0.95);
    backdrop-filter: blur(10px);
    padding: 15px 20px;
    z-index: 1000;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.mobile_header img {
    height: 40px;
}

.mobile_home_btn {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

.mhline1, .mhline2, .mhline3 {
    width: 25px;
    height: 3px;
    background: #00d4ff;
    margin: 5px 0;
    transition: 0.3s;
    border-radius: 2px;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(15, 15, 35, 0.95);
    backdrop-filter: blur(20px);
    padding: 15px 0;
    z-index: 1000;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
}

.head_cont {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
}

.head_logo img {
    height: 45px;
    filter: brightness(1.2);
}

.search_bar {
    position: relative;
    margin: 0 20px;
}

.search_bar input {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 25px;
    padding: 12px 50px 12px 20px;
    color: #ffffff;
    width: 300px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.search_bar input:focus {
    outline: none;
    border-color: #00d4ff;
    box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
}

.search_bar button {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #00d4ff;
    cursor: pointer;
    font-size: 16px;
}

.head_text {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    margin: 0 5px;
    border-radius: 25px;
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
}

.head_text:hover {
    background: rgba(0, 212, 255, 0.1);
    transform: translateY(-2px);
}

.head_text h3 {
    font-size: 14px;
    font-weight: 500;
    margin-left: 8px;
}

.head_text i {
    color: #00d4ff;
    font-size: 16px;
}

.drop_down {
    position: absolute;
    top: 100%;
    left: 0;
    background: rgba(15, 15, 35, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    min-width: 200px;
    display: none;
    z-index: 1001;
}

.drop_down li {
    list-style: none;
    padding: 12px 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
}

.drop_down li:hover {
    background: rgba(0, 212, 255, 0.1);
    color: #00d4ff;
}

/* Hero Section with Auto-Scrolling Banner */
.hero-banner {
    position: relative;
    height: 200px;
    overflow: hidden;
    margin-top: 80px;
    border-radius: 0 0 30px 30px;
}

.banner-slider {
    display: flex;
    width: 200%;
    height: 100%;
    animation: slide 8s infinite;
}

.banner-slide {
    width: 50%;
    height: 100%;
    position: relative;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    font-weight: 700;
    text-align: center;
    padding: 20px;
}

.banner-slide:nth-child(2) {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}

@keyframes slide {
    0%, 45% { transform: translateX(0); }
    50%, 95% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
}

/* Main Hero Section */
.hero {
    padding: 60px 0 100px;
    position: relative;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    opacity: 0.5;
}

.hero_text2 {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 2;
}

.ht_side1 h1 {
    font-size: 3.5rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 20px;
    background: linear-gradient(135deg, #00d4ff, #0099cc, #ffffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: fadeInUp 1s ease-out;
}

.ht_side1 h4 {
    font-size: 1.3rem;
    color: #b0b0b0;
    margin-bottom: 40px;
    font-weight: 400;
    animation: fadeInUp 1s ease-out 0.2s both;
}

.btn1 {
    display: inline-block;
    padding: 15px 30px;
    margin: 10px 10px 10px 0;
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    animation: fadeInUp 1s ease-out 0.4s both;
}

.btn1::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.btn1:hover::before {
    left: 100%;
}

.btn1:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
}

.ht_side2 {
    text-align: center;
    animation: fadeInRight 1s ease-out 0.6s both;
}

.ht_side2 img {
    max-width: 100%;
    height: auto;
    filter: drop-shadow(0 20px 40px rgba(0, 212, 255, 0.3));
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Visitors Counter */
.visitors_box {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 40px;
    z-index: 3;
}

.v_box {
    text-align: center;
    padding: 20px 30px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.v_box:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 212, 255, 0.2);
}

.visitors, .cards {
    display: block;
    font-size: 2rem;
    font-weight: 800;
    color: #00d4ff;
    margin-bottom: 5px;
}

.v_box h3 {
    font-size: 0.9rem;
    color: #b0b0b0;
    font-weight: 500;
}

/* WhatsApp Chat Button */
.wtsp_chat {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
    animation: pulse 2s infinite;
}

.wtsp_chat a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background: #25d366;
    border-radius: 50%;
    color: white;
    font-size: 24px;
    text-decoration: none;
    box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
    transition: all 0.3s ease;
}

.wtsp_chat a:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 30px rgba(37, 211, 102, 0.6);
}

@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(37, 211, 102, 0); }
    100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
}

/* Poster Maker Section */
.social_med_poster {
    padding: 80px 0;
    background: rgba(255, 255, 255, 0.02);
    margin: 40px 0;
}

.social_med_poster h2 {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 50px;
    color: #ffffff;
    position: relative;
}

.social_med_poster h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    border-radius: 2px;
}

.containerimg {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
}

.poster_img {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.poster_img:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 212, 255, 0.2);
}

.poster_img img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: all 0.3s ease;
}

.poster_img:hover img {
    transform: scale(1.05);
}

/* How It Works Section */
.row_backimg {
    padding: 100px 0;
    background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(0, 153, 204, 0.1));
    margin: 60px 0;
}

.row_backimg h1 {
    text-align: center;
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 60px;
    color: #ffffff;
}

.bc_bg {
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.flex_box {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.flex_boxin {
    text-align: center;
    padding: 40px 30px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.flex_boxin::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(0, 153, 204, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.flex_boxin:hover::before {
    opacity: 1;
}

.flex_boxin:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 212, 255, 0.2);
}

.flex_boxin i {
    font-size: 3rem;
    color: #00d4ff;
    margin-bottom: 20px;
    position: relative;
    z-index: 2;
}

.flex_boxin h1 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #ffffff;
    position: relative;
    z-index: 2;
}

.flex_boxin p {
    color: #b0b0b0;
    line-height: 1.6;
    position: relative;
    z-index: 2;
}

/* Pricing Section */
.row2 {
    padding: 100px 0;
    background: rgba(255, 255, 255, 0.02);
}

.flex_pricing {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
}

.flex_pricingin {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.flex_pricingin::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(0, 153, 204, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.flex_pricingin:hover::before {
    opacity: 1;
}

.flex_pricingin:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 212, 255, 0.2);
}

.flex_pricingin h3 {
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    color: white;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
    font-weight: 600;
    position: relative;
    z-index: 2;
}

.flex_pricingin h1 {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 30px;
    color: #ffffff;
    position: relative;
    z-index: 2;
}

.flex_pricingin ul {
    list-style: none;
    text-align: left;
    margin-bottom: 30px;
    position: relative;
    z-index: 2;
}

.flex_pricingin li {
    padding: 10px 0;
    color: #b0b0b0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    display: flex;
    align-items: center;
}

.flex_pricingin li i {
    color: #00d4ff;
    margin-right: 10px;
    font-size: 14px;
}

.btn_1 {
    display: inline-block;
    padding: 15px 30px;
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
}

.btn_1:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
}

/* Demo Section */
.title_sample {
    text-align: center;
    font-size: 3rem;
    font-weight: 800;
    margin: 80px 0 20px;
    color: #ffffff;
}

.sub_title {
    text-align: center;
    color: #b0b0b0;
    font-size: 1.1rem;
    margin-bottom: 50px;
}

.temp_preview {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
}

.demo_slider {
    margin-bottom: 60px;
}

.card_tag {
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    display: inline-block;
    font-weight: 600;
    margin-bottom: 20px;
}

.expander_slide {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}

.temp_pre {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.temp_pre:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 212, 255, 0.2);
}

.temp_pre img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: all 0.3s ease;
}

.temp_pre:hover img {
    transform: scale(1.05);
}

.slide_popup_btn {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 600;
    opacity: 0;
    transition: all 0.3s ease;
}

.temp_pre:hover .slide_popup_btn {
    opacity: 1;
    transform: translateX(-50%) translateY(-10px);
}

.new_lab, .new_lab2 {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #ff4757;
    color: white;
    padding: 5px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
}

/* Benefits Section */
.row33 {
    padding: 100px 0;
    background: rgba(255, 255, 255, 0.02);
}

.row33 h1 {
    text-align: center;
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 30px;
    color: #ffffff;
}

.row33 > p {
    text-align: center;
    color: #b0b0b0;
    font-size: 1.1rem;
    max-width: 800px;
    margin: 0 auto 60px;
    line-height: 1.6;
}

.benefit_box {
    display: inline-block;
    width: calc(33.333% - 20px);
    margin: 10px;
    padding: 40px 30px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    text-align: center;
    transition: all 0.3s ease;
    vertical-align: top;
}

.benefit_box:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 212, 255, 0.2);
    background: rgba(0, 212, 255, 0.1);
}

.benefit_box i {
    font-size: 3rem;
    color: #00d4ff;
    margin-bottom: 20px;
}

.benefit_box h3 {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #ffffff;
}

.benefit_box p {
    color: #b0b0b0;
    line-height: 1.6;
}

/* Features Section */
.row_features {
    padding: 100px 0;
    background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(0, 153, 204, 0.1));
}

.row_features h1 {
    text-align: center;
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 30px;
    color: #ffffff;
}

.row_features > p {
    text-align: center;
    color: #b0b0b0;
    font-size: 1.1rem;
    margin-bottom: 60px;
}

.cont_share_boxes {
    display: inline-block;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 50px;
    padding: 15px 25px;
    margin: 10px;
    color: #ffffff;
    font-weight: 500;
    transition: all 0.3s ease;
    cursor: pointer;
}

.cont_share_boxes:hover {
    background: rgba(0, 212, 255, 0.1);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 212, 255, 0.2);
}

.cont_share_boxes i {
    color: #00d4ff;
    margin-right: 8px;
}

/* Contact Section */
.row_bottom {
    padding: 80px 0;
    background: rgba(255, 255, 255, 0.02);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.display_flex {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.side1 h1 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 40px;
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.row_bt_p {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    color: #b0b0b0;
}

.row_bt_p i {
    color: #00d4ff;
    margin-right: 15px;
    font-size: 18px;
    width: 20px;
}

.row_bt_p h4 {
    font-weight: 500;
}

.side2 form {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 40px;
}

.side2 textarea {
    width: 100%;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    padding: 15px;
    color: #ffffff;
    font-family: inherit;
    resize: vertical;
    min-height: 120px;
    margin-bottom: 20px;
}

.side2 textarea:focus {
    outline: none;
    border-color: #00d4ff;
    box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
}

.side2 input[type="submit"] {
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.side2 input[type="submit"]:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
}

/* Footer */
footer {
    background: rgba(0, 0, 0, 0.3);
    padding: 30px 0;
    text-align: center;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

footer p {
    color: #b0b0b0;
    font-size: 14px;
}

footer a {
    color: #00d4ff;
    text-decoration: none;
    transition: all 0.3s ease;
}

footer a:hover {
    color: #ffffff;
}

/* Search Results */
.search_result {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: rgba(15, 15, 35, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    max-height: 300px;
    overflow-y: auto;
    display: none;
    z-index: 1001;
}

.alert_info {
    padding: 20px;
    text-align: center;
    color: #00d4ff;
}

/* Cookies Policy */
.cookies_policy {
    position: fixed;
    bottom: 20px;
    left: 20px;
    right: 20px;
    background: rgba(15, 15, 35, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 20px;
    z-index: 1000;
    max-width: 500px;
    margin: 0 auto;
}

.close_cookies {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    color: #00d4ff;
}

.cookies_policy h3 {
    color: #ffffff;
    margin-bottom: 10px;
}

.cookies_policy p {
    color: #b0b0b0;
    margin-bottom: 15px;
    line-height: 1.5;
}

.accept_btn, .close_btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.accept_btn {
    background: linear-gradient(135deg, #00d4ff, #0099cc);
    color: white;
}

.close_btn {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
}

.accept_btn:hover, .close_btn:hover {
    transform: translateY(-2px);
}

/* City Change */
.city_change {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(15, 15, 35, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 30px;
    z-index: 1001;
    display: none;
}

.city_change select, .city_change input {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    padding: 10px;
    color: #ffffff;
    margin: 10px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .mobile_header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .header {
        position: fixed;
        top: 0;
        left: -600px;
        width: 300px;
        height: 100vh;
        flex-direction: column;
        padding: 80px 0 20px;
        transition: left 0.3s ease;
    }
    
    .head_cont {
        flex-direction: column;
        width: 100%;
        padding: 10px 20px;
    }
    
    .search_bar input {
        width: 100%;
    }
    
    .hero_text2 {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .ht_side1 h1 {
        font-size: 2.5rem;
    }
    
    .visitors_box {
        position: relative;
        bottom: auto;
        left: auto;
        transform: none;
        justify-content: center;
        margin-top: 40px;
    }
    
    .flex_box {
        grid-template-columns: 1fr;
    }
    
    .flex_pricing {
        grid-template-columns: 1fr;
    }
    
    .benefit_box {
        width: calc(100% - 20px);
        margin: 10px;
    }
    
    .display_flex {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .expander_slide {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
    }
    
    .containerimg {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
    }
    
    .hero-banner {
        margin-top: 70px;
        height: 150px;
    }
    
    .banner-slide {
        font-size: 18px;
        padding: 15px;
    }
}

@media (max-width: 480px) {
    .ht_side1 h1 {
        font-size: 2rem;
    }
    
    .title_sample, .row_backimg h1, .row33 h1, .row_features h1 {
        font-size: 2rem;
    }
    
    .visitors_box {
        flex-direction: column;
        gap: 20px;
    }
    
    .btn1 {
        display: block;
        margin: 10px 0;
        text-align: center;
    }
}

.outside_click_close {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

.cross_menu_line .mhline1 {
    transform: rotate(45deg) translate(5px, 5px);
}

.cross_menu_line .mhline2 {
    transform: rotate(-45deg) translate(7px, -6px);
}
</style>

<body onload="closeLoader();" onscroll="cookiesFu(0)">
<!--------header ------------------>
	<div class="mobile_header">
		<img src="images/logo.png" loading="lazy">
			<div class="mobile_home_btn" >
				<span onclick="openMenu()" >
					<div class="mhline1"></div>
					<div class="mhline2"></div>
					<div class="mhline3"></div>
				</span>
			</div>
	</div>

	<div class="header" id="header">
		<div class="head_cont">
			<div class="head_logo"><img src="images/logo2.png" loading="lazy"></div>
			<div class="search_bar"><input type="search" id="search_val"  placeholder="Search..." autocomplete="off" onchange="searchMe()"><button class="fa fa-search" id="search_me" onclick="searchMe()"></button></div>
				<!--------search resulkt------->
					<div class="search_result" id="se_result"></div>
				<!--------search resulkt------->
				<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PL7NZ3WG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		</div>
		<div class="head_cont">
			<a href="index.php"><div class="head_text"><i class="fa fa-home"></i> <h3>Home</h3></div></a>
			<div class="head_text " id="toggle_btn"><h3><i class="fas fa-angle-down"></i>  Products </h3>
				<div class="drop_down">
					<a href="postermaker/index.php"><li>Digital Card</li></a>
					<a href="postermaker/index.php"><li>Poster Maker</li></a>
						<a href="/whats.php"><li>Whatsapp Marketing</li></a>
							<a href="https://webmaker.desicard.in/"><li>Website Maker</li></a>
				</div>
			</div>
			<a href="index.php#contact"><div class="head_text"><i class="fas fa-phone"></i> <h3>Contact</h3></div></a>
			<div class="head_text login_btn" id="toggle_btn2"><h3><i class="fas fa-user "></i>  Login/Register </h3>
				<div class="drop_down">
    				<a href="panel/login/login.php"><li>Customer Login</li></a>
				<a href="panel/franchisee-login/login.php"><li>Franchise Login</li></a>
				</div>
			</div>
			<div class="head_text" style=""><?php  require("g_translate.php");?></div>
			<div class="head_text" onclick="changeCity()" title="Click To Change" style="display:none;"> <h3> <i class="editable fas fa-map-marker "></i> <?php if(isset($city)){echo $city;}else {echo 'Select';} ?></h3> </div>
		</div>
		<div class="outside_click_close" onclick="closeMenu()"></div>
	</div>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16637940093"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-16637940093');
</script>

<!-------------Auto-Scrolling Banner--------------------->
<div class="hero-banner">
    <div class="banner-slider">
        <div class="banner-slide">
            <div>
                <i class="fas fa-rocket" style="font-size: 2rem; margin-bottom: 10px; display: block;"></i>
                <strong>Pocket-Sized Prices, Powerful AI Websites</strong><br>
                <span style="font-size: 18px;">Get Free Limited Time Offer Only</span>
            </div>
        </div>
        <div class="banner-slide">
            <div>
                <i class="fas fa-gift" style="font-size: 2rem; margin-bottom: 10px; display: block;"></i>
                <strong>Special Launch Offer</strong><br>
                <span style="font-size: 18px;">Create Your Professional Website Today!</span>
            </div>
        </div>
    </div>
</div>

<div class="wtsp_chat">
	<a href="https://api.whatsapp.com/send?phone=919765834383&text=I%20am%20Interested%20For%20Advance%20Digital%20Card.%20Please%20Share%20Me%20Demo&source=&data=&app_absent=" target="_blank"><i class="fab fa-whatsapp"></i></a>
</div>

<!-------------hero --------------------->
	<div class="hero">
		<div class="hero_text2">
			<div class="ht_side1">
			<h1><i class="fas fa-magic" style="color: #00d4ff; margin-right: 15px;"></i>A.I Based Websites – No Coding Needed</h1>
			<h4><i class="fas fa-chart-line" style="color: #00d4ff; margin-right: 10px;"></i>Affordable MARKETING for Your Brand</h4>
			<a href="panel/login/login.php">	<div class="btn1" style="background: linear-gradient(135deg, #1284df, #0066cc);"><i class="fas fa-play"></i> Start Your Trial Now <i class="fas fa-angle-right"></i></div></a>
			
			<br><a href="#card-demo"><div class="btn1"><i class="fas fa-eye"></i> See Demo <i class="fas fa-angle-down"></i></div></a>
			<a href="#business"><div class="btn1"><i class="fas fa-briefcase"></i> Start Your Business <i class="fas fa-angle-down"></i></div></a>
				<a href="https://api.whatsapp.com/send?phone=919765834383&text=I%20am%20Interested%20For%20Advance%20Digital%20Card.%20Please%20Share%20Me%20Demo&source=&data=&app_absent=">	<div class="btn1" style="background: linear-gradient(135deg, #008000, #006600);"><i class="fas fa-shopping-cart"></i> ReadyMade Website E-Commerce Rs.999/- Only</div></a>
				<a href="https://anchoractsrushti.com/" target="_blank"><div class="btn1" style="background: linear-gradient(135deg, #DAA520, #B8860B);"><i class="fas fa-external-link-alt"></i> Demo Click - Get Customized Website @2500/- Only</div></a>
				<div class="btn1" style="background: linear-gradient(135deg, #1284df, #0066cc);"><i class="fas fa-sms"></i> Auto TEXT SMS After Calls Rs.999/- Only</div>
				<a href="https://kart.galaxytribes.in/" target="_blank"><div class="btn1" style="background: linear-gradient(135deg, #FF0000, #CC0000);"><i class="fas fa-external-link-alt"></i> Demo Click - Instant Customizable Website Rs.1500/-</div></a>
				<a href="https://parcel.galaxytribes.in" target="_blank"><div class="btn1" style="background: linear-gradient(135deg, #3B82F6, #2563EB);"><i class="fas fa-external-link-alt"></i> Demo Click - A.I COURIER/LOGISTIC WEBSITE+APP RS. 5500/-</div></a>
			</div>
			
			<div class="ht_side2">
			<img src="images/model55.png" loading="lazy">
			</div>
		</div>
		
		<div class="visitors_box">
			<div class="v_box">
			<span class="visitors" ><i class="fas fa-users" style="display: block; font-size: 1.5rem; margin-bottom: 10px;"></i><?php 
				$queryct=mysqli_query($connect,'SELECT *  FROM visitors '); 
				 $value=number_format(mysqli_num_rows($queryct),0,'','');
					
				if(1000 > $value ){
					echo  $value.'+';
				}elseif(1000000 > $value && 1000 < $value){
					echo number_format($value/1000,0).'K';
				}elseif( 1000000000 > $value && 1000000 < $value){
					echo number_format($value/1000000,0).'M';
				}elseif(1000000000000 > $value && 1000000000 < $value){
					echo number_format($value/1000000000,0).'B';
				}
				?>
				</span>
				<h3>Visitors</h3>
			</div>
			
		<div class="v_box">
			<span class="cards"><i class="fas fa-project-diagram" style="display: block; font-size: 1.5rem; margin-bottom: 10px;"></i><?php 
				$queryct=mysqli_query($connect,'SELECT *  FROM customer_login '); 
				 echo '1K+';
				?></span>
				<h3>Projects</h3>
			</div>
		</div>
	</div>

<div class="social_med_poster">
	 <h2><i class="fas fa-palette" style="margin-right: 15px;"></i>POSTER MAKER</h2>
	<div class="containerimg">
	<?php 
		for($x=5;$x>0;$x--){
			echo '<div class="poster_img" >';
			echo '<a href="postermaker/index.php"><img src="postermaker/frames/f'.$x.'.png"  alt="Gallery Image" ></a>';
			echo '</div>';
		}
		?>
		</div>
		
		<h2><i class="fas fa-images" style="margin-right: 15px;"></i>Daily Social Media Image</h2>
	<div class="containerimg">
	<?php 
		for($x=5;$x>0;$x--){
			echo '<div class="poster_img" >';
			echo '<a href="postermaker/index.php"><img src="images/f'.$x.'.png"  alt="Gallery Image" ></a>';
			echo '</div>';
		}
		?>
		</div>
		
	 <h2><i class="fas fa-tag" style="margin-right: 15px;"></i>Images with your Offer/Product</h2>
		<div class="containerimg"> 
		 <?php 
		for($x=9;$x>5;$x--){
			echo '<div class="poster_img" >';
			echo '<a href="postermaker/index.php"><img src="postermaker/frames/f'.$x.'.png"  alt="Gallery Image" ></a>';
			echo '</div>';
		}
		?>
</div>
</div>

<div class="row row_backimg">
	<h1><i class="fas fa-cogs" style="margin-right: 15px;"></i><span class="bc_bg">Ho</span>w It Works?</h1>
	
	<div class="flex_box">
		<div class="flex_boxin">
		<i class="fa fa-edit"></i>
		<h1>1. Create your Card</h1>
		<p>Design your digital visiting card cum Mini Website in 2 minutes</p>
		</div>
		<div class="flex_boxin">
		<i class="fa fa-download"></i>
		<h1>2. Save to your Device</h1>
		<p>Digital Visiting Card is accessible anytime from anywhere</p>
		</div>
		<div class="flex_boxin">
		<i class="fa fa-share-alt"></i>
		<h1>3. Share with friends and colleagues</h1>
		<p>through a variety of channels</p>
		</div>
	</div>
</div>

<div class="row2" id="business">
	<div class="flex_pricing">
				<div class="flex_pricingin" >
						<h3><i class="fas fa-crown" style="margin-right: 10px;"></i>GOLD RESELLER MINI WEBSITE </h3>
						<h1>Start Business with us</h1>
						<ul>
		<h3 style="display:center"> <del>₹9,999/-</del> FREE </h3>
		<li><i class="fa fa-check"></i> Get Digital posters for Adz</li>
		<li><i class="fa fa-check"></i> Digital Platform Promotions</li>
		<li><i class="fa fa-check"></i> No Deposit </li>
		<li><i class="fa fa-check"></i> Business Training will be provide</li>
		<li><i class="fa fa-check"></i> Additional products Fix margin</li>
		<li><i class="fa fa-check"></i> Weekly Advertisement Activity </li>
		<li><i class="fa fa-check"></i> No Office space Required </li>
		<li><i class="fa fa-check"></i> Digital Work</li>
						</ul>
						<a href="/panel/franchisee-login/login.php"><div class="btn_1"><i class="fas fa-handshake"></i> JOIN WITH US <i class="fa fa-caret-right"></i></div></a>
			</div>
			
				<div class="flex_pricingin" >
						<h3><i class="fas fa-star" style="margin-right: 10px;"></i>ELITE PARTNER MINI WEB SITE </h3>
						<h1>Start Business with us</h1>
						<ul>
		<h3 style="display:center"> <del>₹19,999/-</del> ₹4,999/-</h3>
		<li><i class="fa fa-check"></i> Get Digital posters for Adz</li>
		<li><i class="fa fa-check"></i> Digital Platform Promotions</li>
		<li><i class="fa fa-check"></i> Deposit deduct as per Elite plan </li>
		<li><i class="fa fa-check"></i> Business plan Meet Weekly</li>
		<li><i class="fa fa-check"></i> Daily/Weekly Settlement</li>
		<li><i class="fa fa-check"></i> Additional Products High margin </li>
		<li><i class="fa fa-check"></i> Website leads will be forward</li>
		<li><i class="fa fa-check"></i> Daily Advertisement activity</li>
		<li><i class="fa fa-check"></i> Separate Admin Panel</li>
		<li><i class="fa fa-check"></i> Unlimited Data for B2b Calling</li>
		<li><i class="fa fa-check"></i> No Office space Required</li>
		<li><i class="fa fa-check"></i> No Refund Policy</li>
						</ul>
						<a href="/panel/franchisee-login/login.php"><div class="btn_1"><i class="fas fa-handshake"></i> JOIN WITH US <i class="fa fa-caret-right"></i></div></a>
			</div>
			
		<div class="flex_pricingin">
						<h3 style="background: linear-gradient(135deg, #ffa422, #ff8c00);"><i class="fas fa-gem" style="margin-right: 10px;"></i>Digital Card Website with Ecommerce (Premium)</h3>
						<h1><?php
			$querya=mysqli_query($connect,'SELECT * FROM admin_login');
			if(mysqli_num_rows($querya)>>0){
			$rowa=mysqli_fetch_array($querya);
				if(!empty($rowa['card_amount'])){
					echo '<del>₹ '.$rowa['card_amount_mrp'].'</del> Now @ just ₹'.$rowa['card_amount'];
				}else {echo '<del>₹ 0000</del> ₹ 000';}
			}
			?> / 1 Year<p> </p></h1>
						<ul>
							<li ><i class="fa fa-check"></i> Subdomain URL feature <div class="new_lab2">New Feature</div><div class="title_alert">?<div class="title_alert_box">To give your URL a better business look. we are offering this feature.</div></div></li>
							<li ><i class="fa fa-check"></i> NFC Smart Card  <br>(Company LOGO & BARCODE)  <div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> Custom NFC Smart Card  <br>(Rs. 199 Extra with Delivery)  <div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> Download Card as PDF (Offline Card)<div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> Show Location on Map <div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> Unlimited Theme <br>(Upload Custom Background Theme Image)  <div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> 40 Premium themes</li>
							<li ><i class="fa fa-check"></i> Share cards with anyone, Unlimited times</li>
							<li class=""><i class="fa fa-check"></i> One Click Save Button</li>
							<li ><i class="fa fa-check"></i> Upload 2 PDF Documents</li>
							<li ><i class="fa fa-check"></i> Update card Unlimited times.</li>
							<li  ><i class="fa fa-check"></i> Feedback option available.</li>
							<li ><i class="fa fa-check"></i>Manage Feedbacks </li>
							<li  ><i class="fa fa-check"></i>199 Products in E-commerce Store</li>
							<li ><i class="fa fa-check"></i>E-commerce Order Manager </li>
							<li ><i class="fa fa-check"></i> Profile Photo</li>
							<li><i class="fa fa-check"></i> Select design from available templates</li>
							<li ><i class="fa fa-check"></i> 99 Products or Services</li>
							<li><i class="fa fa-check"></i> 30 Photos in Gallery</li>
							<li > <i class="fa fa-check"></i> Social Media Links</li>
							<li > <i class="fa fa-check"></i> 10 Videos in Youtube Video Gallery</li>
							<li><i class="fa fa-check"></i> Payment Section</li>
							<li  ><i class="fa fa-check"></i> Contact Form Included</li>
							<li  ><i class="fa fa-check"></i> Change language</li>
						</ul>
						<a href="panel/login/login.php"><div class="btn_1"><i class="fas fa-rocket"></i> Create Now Online <i class="fa fa-caret-right"></i></div></a>
			</div>
	</div>
</div>

<h1 class="title_sample" id="card-demo"><i class="fas fa-desktop" style="margin-right: 15px;"></i><span class="bc_bg">D</span>emo Business Card/Mini Website </h1>
<p class="sub_title">Click on image to see demo</p>
<div class="temp_preview">
	<div class="demo_slider">
		<div class="card_tag">Premium</div>
		<div class="expander">
			<div class="expander_slide">
			<?php 
		for($x=36;$x<=40;$x++){ ?>
		<div class="temp_pre" id="tmp1"><a href="n.php?n=demo-card&demo=<?php echo $x; ?>" target="_blank"><img src="panel/images/template<?php echo $x; ?>.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a>
		</div>
		<?php } ?>
			<?php
		for($x=31;$x<=35;$x++){ ?>
		<div class="temp_pre" id="tmp1"><div class="new_lab">New</div><a href="n.php?n=demo-card&demo=<?php echo $x; ?>" target="_blank"><img src="panel/images/template<?php echo $x; ?>.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
		<?php } ?>
		</div>
		</div>
		<div class="card_tag">Classic</div>
		<div class="expander">
		<div class="expander_slide">
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=2" target="_blank"><img src="panel/images/template1.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=3" target="_blank"><img src="panel/images/template2.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=4" target="_blank"><img src="panel/images/template3.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=1" target="_blank"><img src="panel/images/template.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=5" target="_blank"><img src="panel/images/template4.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=6" target="_blank"><img src="panel/images/template5.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=7" target="_blank"><img src="panel/images/template7.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=8" target="_blank"><img src="panel/images/template8.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=9" target="_blank"><img src="panel/images/template9.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=10" target="_blank"><img src="panel/images/template10.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<?php
		for($x=26;$x<=30;$x++){ ?>
		<div class="temp_pre" id="tmp1"><a href="n.php?n=demo-card&demo=<?php echo $x; ?>" target="_blank"><img src="panel/images/template<?php echo $x; ?>.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
		<?php } ?>
			</div>
			</div>
			<div class="card_tag">Customer's Customize</div>
		<div class="expander">
		<div class="expander_slide">
		<?php 
		for($x=11;$x<=25;$x++){ ?>
			<div class="temp_pre" ><a href="n.php?n=demo-card&demo=<?php echo $x; ?>" target="_blank"><img src="panel/images/template<?php echo $x; ?>.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
		<?php }?>
		</div>	
		</div>	
	</div>
</div>

<!---------------beneficial for-------------------------->
<div class="row33">
	<h1><i class="fas fa-users" style="margin-right: 15px;"></i><span class="bc_bg">D</span>igital Card is Beneficial for</h1>
	<p>If you meet your prospective customers in person (one to one meeting) or atleast you do telephonic conversations to market and sell your products or services, then our Digital Business Card will help convey your message in a more strategic way.</p>
	
	<div class="benefit_box">
		<i class="fa fa-briefcase"></i>
		<h3>Business Owners</h3>
		<p>Business owners who call and/or meet prospects personally to get business.</p>
	</div>
	
	<div class="benefit_box">
		<i class="fa fa-handshake-o"></i>
		<h3>Sales Professionals</h3>
		<p>Independent Sales Professionals, Field Staff and Sales Executives.</p>
	</div>
	
	<div class="benefit_box">
		<i class="fas fa-chart-bar"></i>
		<h3>Software & IT</h3>
		<p>Web Designers, Digital and Social Media Marketers who call / meet business people.</p>
	</div>

	<div class="benefit_box">
		<i class="fa fa-bullhorn"></i>
		<h3>Marketing Agencies</h3>
		<p>Advertising, Branding, News Paper, Printing and Media Planning Houses.</p>
	</div>
	
	<div class="benefit_box">
		<i class="fas fa-business-time"></i>
		<h3>Consultants</h3>
		<p>Architect, Interior Designers, CA, Finance and other Consultants.</p>
	</div>

	<div class="benefit_box">
		<i class="fa fa-plane"></i>
		<h3>Events and Travels</h3>
		<p>Professionals from Event Management, Tours and Travel Companies.</p>
	</div>
	<div class="benefit_box">
		<i class="fa fa-bar-chart"></i>
		<h3>Finance & Realtors</h3>
		<p>People from Real Estate Brokers and Insurance Advisors.</p>
	</div>	
	<div class="benefit_box">
		<i class="fa fa-graduation-cap"></i>
		<h3>Education & Training</h3>
		<p>Corporate Trainers, Educational Workshops, HR Consultants and Teachers.</p>
	</div>
	<div class="benefit_box">
		<i class="fa fa-heartbeat"></i>
		<h3>Health and Beauty</h3>
		<p>Gym, Beautician, Salon, Dietician, Image Consultants Yoga & Dance Professionals.</p>
	</div>
</div>

<!---------------beneficial for--------------------->
<div class="row_features">
<h1><i class="fas fa-star" style="margin-right: 15px;"></i><span class="bc_bg">FE</span>ATURES</h1>
	<p>One business card, endless possibilities</p>
	
	<div class="cont_share_boxes"><i class="fa fa-link"></i>Subdomain Link</div>
	<div class="cont_share_boxes"><i class="fa fa-language"></i> Multiple Language</div>
	<div class="cont_share_boxes"><i class="fa fa-file"></i> PDF vCard</div>
	<div class="cont_share_boxes"><i class="fa fa-phone"></i> One Click Call</div>
	<div class="cont_share_boxes"><i class="fa fa-download"></i> One Click Save</div>
	<div class="cont_share_boxes"><i class="fa fa-file"></i> Upload 2 PDF Documents</div>
	<div class="cont_share_boxes"><i class="fab fa-whatsapp"></i> One Click WhatsApp</div>
	<div class="cont_share_boxes"><i class="fa fa-envelope"></i> One Click Email</div>
	<div class="cont_share_boxes"><i class="fa fa-star"></i> Get Customers Feedback</div>
	<div class="cont_share_boxes"><i class="fas fa-directions"></i> One Click Navigate</div>
	<div class="cont_share_boxes"><i class="fas fa-address-book"></i> Add to Contacts</div>
	<div class="cont_share_boxes"><i class="fab fa-facebook"></i> Website & Social Links</div>
	<div class="cont_share_boxes"><i class="fa fa-share-alt"></i> Share Unlimited</div>
	<div class="cont_share_boxes"><i class="fa fa-bank"></i> Online Store</div>
	<div class="cont_share_boxes"><i class="fa fa-edit"></i> Easy To Update</div>
	<div class="cont_share_boxes"><i class="fa fa-image"></i> Photo Gallery</div>
	<div class="cont_share_boxes"><i class="fab fa-youtube"></i> Youtube Video Gallery</div>
	<div class="cont_share_boxes"><i class="fa fa-rupee"></i> Payment Section</div>
	<div class="cont_share_boxes"><i class="fa fa-comment"></i> Enquiry Form</div>
</div>

<div class="row_bottom display_flex" id="contact">
	<div class="side1">
		<h1><i class="fas fa-rocket" style="margin-right: 15px;"></i>GalaxyTribes™Digital</h1>
		<div class="row_bt_p"><i class="fas fa-phone"></i> <h4>+91 9765834383</h4></div>
		<div class="row_bt_p"><i class="fa fa-envelope"></i><h4>support@galaxytribes.in</h4></div>
		<div class="row_bt_p"><i class="fa fa-map-marker"></i><h4>323 Vraj Life Space Mhasrul Nashik Maharashtra India</h4></div>
	
	<div class="row_bt_p">
		<h4><i class="fas fa-eye" style="margin-right: 10px;"></i>Visitors : <?php 
				$queryct=mysqli_query($connect,'SELECT *  FROM visitors '); 
				 echo $value=number_format(mysqli_num_rows($queryct),0,'',','); ?></h4>
	</div>
	</div>
	<div class="side2">
	<form action="https://api.whatsapp.com/send?" target="_blank">
			<input type="" name="phone" placeholder="Enter your name" value="919765834383" hidden required>
				<textarea name="text" placeholder="Enter your query" required></textarea>
			<input type="submit" value="Send" >
		</form>
	</div>
</div>

<?php if(isset($_SESSION["ip_cookie"])){  echo '<style> .cookies_policy {display:none;}</style>'; }?>
<div class="cookies_policy">
	<div class="close_cookies" onclick="cookiesFu()">&times;</div>
	<h3><i class="fas fa-cookie-bite" style="margin-right: 10px;"></i>This website uses cookies </h3>
	<p>
		this website uses cookies to improve your experience. by using our website to consent to all cookies in accordance with our cookies policy. <a href="tnc.php">Read More</a>
	</p>
	<center>
	<div class="accept_btn" onclick="cookiesFu()">Accept</div>
	<div class="close_btn" onclick="cookiesFu()">Close</div>
	</center>
</div>

<script>
	$("#toggle_btn,#toggle_btn2").on('click',function(){
		  $(this).children('.drop_down').toggle();
	});
	
function searchMe(){
	var search=$('#search_val').val();
	$('#se_result').show().html('<div class="alert_info"><i class="fa fa-refresh fa-spin"></i> Searching...</div>');
		$.ajax({
			url:'search.php',
			method:'POST',
			data:{search:search},
			dataType:'text',
			success:function(data){
				$('#se_result').html(data);
				}
			});
}

function closeSearch(){
	$('#se_result').hide();
}

	function openMenu() {
		$(".header").css({"left": "0px"});
		$(".outside_click_close").css({"display": "block"});
		$(".mobile_home_btn").html('<span onclick="closeMenu()" class="cross_menu_line">	<div class="mhline1"></div><div class="mhline2"></div></span>');
	}
	
	function closeMenu() {
		$(".header").css({"left": "-600px"});
		$(".outside_click_close").css({"display": "none"});
		$(".mobile_home_btn").html('<span onclick="openMenu()" >	<div class="mhline1"></div><div class="mhline2"></div><div class="mhline3"></div></span>');
	}

	function changeCity(){
		$(".city_change").slideToggle();
	}
	
	function cookiesFu(n){
		$('.cookies_policy').html("<center><h1 style='color: #8a8a8b; font-size: 20px;'>Thank You!</h1></center>").hide(2000);
	}
</script>

<div class="city_change"><h3 onclick="changeCity()">&times;</h3>
		<form action="" method="POST">
		<?php 
				echo '<select name="city">';
				if(isset($city)){
				echo '<option>'.$city.'</option>';}else {echo '<option value="">-Select-</option>';}
				require('panel/city.php');
				echo '</select>';
			?>
			<input type="submit" name="change_city" value="Change">
		</form>
	</div>

<?php
	$_SESSION["ip_cookie"]=$_SERVER['REMOTE_ADDR'];
?>

<footer class="">
<p><a href="tnc.php">Terms & Conditions | Privacy Policy </a>|| 2020-<?php echo date('Y'); ?>  ||  All Rights Reserved || Powered by <a href="https://www.gtai.in" target="_blank" style="color: #00d4ff; font-weight: 600;">GTAI.in</a> </p>
</footer>

</body>
</html>