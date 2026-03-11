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

    <!-- ========== PHẦN 2: LỜI MỜI ========== -->
    <section id="loi-moi" class="relative bg-stone-100 py-8 px-3 flex justify-center">
        <!-- Card thiệp -->
        <div class="w-full bg-white shadow-xl rounded-sm p-6 text-center relative">
            <p class="uppercase tracking-widest text-base text-stone-700 mb-4 font-times font-bold">Trân Trọng Kính Mời</p>
            <div class="border-t border-dashed border-stone-300 my-4"></div>
            <p class="text-stone-700 text-sm leading-relaxed font-times">
                Tới dự bữa cơm thân mật<br>mừng lễ thành hôn của hai chúng tôi
            </p>

            <!-- Tên cô dâu chú rể -->
            <div class="mt-6 space-y-2">
                <h2 class="text-4xl font-script text-stone-800">Huy Hoàng</h2>
                <div class="flex items-center justify-center gap-2 text-stone-400">
                    <span class="w-8 border-t border-stone-300"></span>
                    <span class="text-2xl -mr-2">💍</span><span class="text-2xl -ml-4">💍</span>
                    <span class="w-8 border-t border-stone-300"></span>
                </div>
                <h2 class="text-4xl font-script text-stone-800">Trâm Anh</h2>
            </div>

            <!-- Thời gian -->
            <p class="mt-8 text-sm text-stone-700 font-times">
                Vào hồi <span class="font-semibold">16 giờ 30</span>, Chủ Nhật
            </p>

            <!-- Khung thời gian & địa điểm -->
            <div class="mt-4 border-2 border-stone-300 rounded-lg p-4">
                <div class="flex gap-4">
                    <!-- Thời gian (nhỏ) -->
                    <div class="text-center border-r border-stone-300 pr-4 flex flex-col justify-center">
                        <p class="text-sm text-stone-600 font-times">Tháng 03</p>
                        <p class="text-5xl font-bold text-stone-800 my-2">22</p>
                        <p class="text-sm text-stone-600 font-times">Năm 2026</p>
                    </div>
                    <!-- Địa điểm (lớn) -->
                    <div class="text-center flex-1 flex flex-col justify-center">
                        <p class="font-script text-2xl text-stone-600 mb-2">Tại</p>
                        <p class="font-semibold text-base uppercase text-stone-800 font-times tracking-wide">Khách Sạn Dầu Khí</p>
                        <p class="text-xs text-stone-600 mt-2 leading-relaxed font-times">
                            Số 458 Lý Bôn - Phường Trần Hưng Đạo,<br>Tỉnh Hưng Yên
                        </p>
                    </div>
                </div>
            </div>

            <!-- Button xem đường đi -->
            <a href="https://maps.google.com/?q=Khách+Sạn+Dầu+Khí+Hưng+Yên" target="_blank"
               class="inline-block mt-4 px-6 py-2 border border-stone-400 rounded-full text-sm text-stone-700 hover:bg-stone-100 transition font-times">
                📍 Xem đường đi
            </a>

            <!-- Âm lịch -->
            <p class="text-xs text-stone-500 mt-4 font-times">(Nhằm ngày 04 tháng 2 năm Bính Ngọ)</p>

            <!-- Thông tin nhà trai & nhà gái -->
            <div class="grid grid-cols-2 gap-4 mt-6 pt-6 border-t border-dashed border-stone-300">
                <!-- Nhà trai -->
                <div class="text-center">
                    <p class="font-semibold text-stone-800 font-times mb-2">Nhà Trai</p>
                    <p class="text-sm text-stone-600 font-times">Bố: Trần Mạnh Loanh</p>
                    <p class="text-sm text-stone-600 font-times">Mẹ: Nguyễn Thị Lên</p>
                    <p class="text-xs text-stone-500 font-times mt-1">Số 220 Đường Lê Quý Đôn, Phường Thái Bình - Tỉnh Hưng Yên</p>
                </div>
                <!-- Nhà gái -->
                <div class="text-center">
                    <p class="font-semibold text-stone-800 font-times mb-2">Nhà Gái</p>
                    <p class="text-sm text-stone-600 font-times">Bố: Nguyễn Bá Quyến</p>
                    <p class="text-sm text-stone-600 font-times">Mẹ: Đỗ Thị Rậu</p>
                    <p class="text-xs text-stone-500 font-times mt-1">Xóm Trường Thành, Xã Giao Hưng - Tỉnh Ninh Bình</p>
                </div>
            </div>

            <!-- Lời chào -->
            <p class="mt-6 italic text-base text-stone-700 font-times">SỰ HIỆN DIỆN CỦA QUÝ VỤ LÀ NIỀM VINH HẠNH CHO GIA ĐÌNH CHÚNG TÔI!</p>
        </div>
    </section>



    <script>
        document.getElementById('envelope').addEventListener('click', function() {
            this.classList.toggle('open');
        });
    </script>
</body>
</html>
