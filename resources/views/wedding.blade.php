<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Huy Hoàng ♡ Trâm Anh | Thiệp Cưới</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@400;500&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full max-w-mobile mx-auto overflow-x-hidden bg-white">

    <!-- ========== PHẦN 1: TRANG BÌA ========== -->
    <section id="trang-bia" class="relative min-h-screen flex flex-col items-center justify-between px-6 py-8 overflow-hidden">

        <!-- Trang trí hoa -->
        <img src="{{ asset('images/wedding/flower1.jpg') }}" alt="Hoa trang trí" class="absolute top-0 left-0 w-32 pointer-events-none z-0">
        <img src="{{ asset('images/wedding/flower2.jpg') }}" alt="Hoa trang trí" class="absolute bottom-0 right-0 w-32 pointer-events-none z-0">

        <!-- Dòng chữ header -->
        <div class="grid grid-cols-3 w-full max-w-xs text-center mb-4 z-10">
            <span class="text-[10px] tracking-[0.2em] text-stone-700 font-semibold uppercase">YOU ARE</span>
            <span class="text-[10px] tracking-[0.2em] text-stone-700 font-semibold uppercase">THE LOVE OF</span>
            <span class="text-[10px] tracking-[0.2em] text-stone-700 font-semibold uppercase">MY LIFE</span>
        </div>

        <!-- Tiêu đề chính -->
        <h1 class="font-script text-6xl text-stone-800 mb-8 animate-fade-in-up">Thiệp Mời</h1>

        <!-- Phong bì thư -->
        <div class="envelope-wrapper animate-fade-in-up delay-200" id="envelope">
            <!-- Nắp sau (hiện khi mở) -->
            <div class="envelope-flap-back"></div>

            <!-- Phong bì -->
            <div class="envelope">
                <!-- Ảnh cưới (ẩn ban đầu) -->
                <div class="envelope-photo shadow-2xl">
                    <img src="{{ asset('images/wedding/anh-cuoi-rong.JPG') }}" alt="Cô dâu và Chú rể">
                </div>

                <div class="envelope-top"></div>
                <div class="envelope-left"></div>
                <div class="envelope-right"></div>
                <div class="envelope-bottom"></div>
                <div class="envelope-seal">
                    <span class="font-script text-amber-100 text-xs">H&A</span>
                </div>
            </div>

            <!-- Text hướng dẫn -->
            <p class="envelope-hint">Chạm để mở thiệp</p>

        </div>

        <!-- Bóng đổ -->
        <div class="envelope-shadow"></div>

    </section>



    <script>
        document.getElementById('envelope').addEventListener('click', function() {
            this.classList.toggle('open');
        });
    </script>
</body>
</html>
