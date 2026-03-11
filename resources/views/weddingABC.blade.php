<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Huy Hoàng ♡ Trâm Anh | Thiệp Cưới Nhà Gái - 21/03/2026</title>
    <meta name="description" content="Thiệp cưới online Huy Hoàng & Trâm Anh. Lễ thành hôn diễn ra lúc 17h00 Thứ Bảy ngày 21/03/2026 tại Tư Gia Nhà Gái, Xã Giao Hưng, Ninh Bình.">
    <meta name="keywords" content="thiệp cưới, wedding, Huy Hoàng, Trâm Anh, đám cưới 2026, Ninh Bình">
    <meta name="author" content="Huy Hoàng & Trâm Anh">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/tram-anh') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/tram-anh') }}">
    <meta property="og:title" content="Huy Hoàng ♡ Trâm Anh | Thiệp Cưới Nhà Gái">
    <meta property="og:description" content="Trân trọng kính mời bạn đến dự lễ thành hôn của chúng tôi vào ngày 21/03/2026.">
    <meta property="og:image" content="{{ asset('images/wedding/anh-cuoi.JPG') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Huy Hoàng ♡ Trâm Anh | Thiệp Cưới Nhà Gái">
    <meta name="twitter:description" content="Trân trọng kính mời bạn đến dự lễ thành hôn của chúng tôi vào ngày 21/03/2026.">
    <meta name="twitter:image" content="{{ asset('images/wedding/anh-cuoi.JPG') }}">

    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>❤️</text></svg>">
    <link rel="apple-touch-icon" href="{{ asset('images/wedding/favicon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@400;500&family=Meow+Script&family=Playfair+Display:wght@500;600&family=Quicksand:wght@400;500;600;700&family=The+Nautigal:wght@400;700&family=Story+Script&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full max-w-mobile mx-auto overflow-x-hidden bg-white relative">

    <!-- Music Button -->
    <button id="music-btn" class="fixed top-4 right-4 z-50 w-10 h-10 bg-[#baa58a]/50 rounded-full flex items-center justify-center text-white shadow-lg">
        <i class="fa-solid fa-music"></i>
    </button>
    <audio id="bg-music" src="{{ asset('/images/wedding/young-and-beautiful.mp3') }}" loop autoplay></audio>

    <!-- ========== PHẦN 1: TRANG BÌA ========== -->
    <section id="trang-bia" class="relative min-h-screen flex flex-col items-center justify-between px-6 py-8 overflow-hidden">

        <!-- Trang trí hoa -->
        <img src="{{ asset('images/wedding/flower1.jpg') }}" alt="Hoa trang trí" class="absolute top-0 left-0 w-32 pointer-events-none z-0">
        <img src="{{ asset('images/wedding/flower2.png') }}" alt="Hoa trang trí" class="absolute bottom-0 right-0 w-32 pointer-events-none z-0">

        <!-- Dòng chữ header -->
        <div class="grid grid-cols-3 w-full max-w-xs text-center mb-4 z-10">
            <span class="text-[10px] tracking-[0.2em] text-stone-700 font-semibold uppercase">YOU ARE</span>
            <span class="text-[10px] tracking-[0.2em] text-stone-700 font-semibold uppercase">THE LOVE OF</span>
            <span class="text-[10px] tracking-[0.2em] text-stone-700 font-semibold uppercase">MY LIFE</span>
        </div>

        <!-- Tiêu đề chính -->
        <h1 class="font-script text-6xl text-primary mb-8 animate-fade-in-up">Thiệp Mời</h1>

        <!-- Phong bì thư -->
        <div class="envelope-wrapper animate-fade-in-up delay-200" id="envelope">
            <!-- Container trái tim -->
            <div class="hearts-container" id="hearts-container"></div>

            <!-- Nắp sau (hiện khi mở) -->
            <div class="envelope-flap-back"></div>

            <!-- Phong bì -->
            <div class="envelope">
                <!-- Ảnh cưới (ẩn ban đầu) -->
                <div class="envelope-photo shadow-2xl">
                    <img src="{{ asset('images/wedding/anh-cuoi.JPG') }}" alt="Cô dâu và Chú rể">
                </div>

                <div class="envelope-top"></div>
                <div class="envelope-left"></div>
                <div class="envelope-right"></div>
                <div class="envelope-bottom"></div>
                <div class="envelope-seal">
                    <img src="{{ asset('images/wedding/seal.png') }}" alt="Cô dâu và Chú rể"/>
                </div>
            </div>

            <!-- Text hướng dẫn -->
            <p class="envelope-hint font-script">Chạm để mở thiệp</p>

        </div>

        <!-- Bóng đổ -->
        <div class="envelope-shadow"></div>

    </section>

    <!-- ========== PHẦN 2: LỜI MỜI ========== -->
    <section id="loi-moi" class="relative bg-[#baa58a]/50 py-3 px-3 flex justify-center rounded-lg">
        <!-- Card thiệp -->
        <div class="w-full bg-white shadow-xl rounded-sm p-6 text-center relative">
            <p class="uppercase tracking-widest text-base text-stone-700 mb-4 font-quicksand font-bold">Trân Trọng Kính Mời</p>
            <div class="border-t border-dashed border-stone-300 my-4"></div>
            <p class="text-stone-700 text-sm leading-relaxed font-quicksand">
                Tới dự bữa cơm thân mật<br>mừng lễ vu quy của hai chúng tôi
            </p>

            <!-- Tên cô dâu chú rể -->
            <div class="mt-6 space-y-2">
                <h2 class="text-4xl font-nautigal text-primary">Trâm Anh</h2>
                <div class="flex items-center justify-center gap-2 text-stone-400">
                    <img src="{{asset('images/wedding/ring.png')}}" alt="ring" class="h-6"/>
                </div>
                <h2 class="text-4xl font-nautigal text-primary">Huy Hoàng</h2>
            </div>

            <!-- Thời gian -->
            <p class="mt-8 text-sm text-stone-700 font-quicksand">
                Vào hồi <span class="font-semibold">17 giờ 00</span>, Thứ Bảy
            </p>

            <!-- Khung thời gian & địa điểm -->
            <div class="mt-4 border-2 border-stone-300 rounded-lg p-4">
                <div class="flex gap-4">
                    <!-- Thời gian (nhỏ) -->
                    <div class="text-center border-r border-stone-300 pr-4 flex flex-col justify-center">
                        <p class="text-sm text-stone-600 font-quicksand">Tháng 03</p>
                        <p class="text-5xl font-bold text-primary my-2">21</p>
                        <p class="text-sm text-stone-600 font-quicksand">Năm 2026</p>
                    </div>
                    <!-- Địa điểm (lớn) -->
                    <div class="text-center flex-1 flex flex-col justify-center">
                        <p class="font-script text-2xl text-stone-600 mb-2">Tại</p>
                        <p class="font-semibold text-base uppercase text-primary font-quicksand tracking-wide">Tư Gia Nhà Gái</p>
                        <p class="text-xs text-stone-600 mt-2 leading-relaxed font-quicksand">
                            Xóm Trường Thành, Xã Giao Hưng,<br>Tỉnh Ninh Bình
                        </p>
                    </div>
                </div>
            </div>

            <!-- Âm lịch -->
            <p class="text-xs text-stone-500 mt-2 font-quicksand">(Nhằm ngày 03 tháng 2 năm Bính Ngọ)</p>
            <!-- Button xem đường đi -->
            <a href="https://maps.app.goo.gl/GU1prJSnpayNdMLz7" target="_blank"
               class="inline-block mt-4 px-6 py-2 border border-stone-400 rounded-full text-sm text-stone-700 hover:bg-stone-100 transition font-quicksand">
                📍 Xem đường đi
            </a>
            <!-- Thông tin nhà trai & nhà gái -->
            <div class="grid grid-cols-2 gap-4 mt-6 pt-6 border-t border-dashed border-stone-300">
                <!-- Nhà gái -->
                <div class="text-center">
                    <p class="font-semibold text-primary font-quicksand mb-2">Nhà Gái</p>
                    <p class="text-sm text-stone-600 font-quicksand font-medium">Bố: Nguyễn Bá Quyến</p>
                    <p class="text-sm text-stone-600 font-quicksand font-medium">Mẹ: Đỗ Thị Rậu</p>
                    <p class="text-xs text-stone-500 font-quicksand mt-1">Xóm Trường Thành, Xã Giao Hưng - Tỉnh Ninh Bình</p>
                </div>
                <!-- Nhà trai -->
                <div class="text-center">
                    <p class="font-semibold text-primary font-quicksand mb-2">Nhà Trai</p>
                    <p class="text-sm text-stone-600 font-quicksand font-medium">Bố: Trần Mạnh Loanh</p>
                    <p class="text-sm text-stone-600 font-quicksand font-medium">Mẹ: Nguyễn Thị Lên</p>
                    <p class="text-xs text-stone-500 font-quicksand mt-1">Số 220 Đường Lê Quý Đôn, Phường Thái Bình - Tỉnh Hưng Yên</p>
                </div>

            </div>

            <!-- Lời chào -->
            <p class="mt-8 text-base text-stone-700 font-story-script">SỰ HIỆN DIỆN CỦA QUÝ VỊ <br>LÀ NIỀM VINH HẠNH CHO GIA ĐÌNH CHÚNG TÔI!</p>
        </div>
    </section>

    <!-- ========== PHẦN 2.5: STORY ========== -->
    <section id="story" class="relative mt-12">
        <div class="w-full text-center mb-4 z-10 px-8">
            <span class="text-lg tracking-[0.2em] text-stone-700 font-normal uppercase">WELCOME TO MY WEDDING</span>
        </div>

        <div class="relative">
            <img src="{{ asset('images/wedding/story-backgroud.png') }}" alt="Story Background" class="w-full">
            <!-- Ảnh 1 -->
            <div class="absolute top-[3%] left-1/2 -translate-x-1/2 w-[81%]">
                <img src="{{ asset('images/wedding/gallery/IMG_1.JPG') }}" alt="Story 1" class="w-full z-40">
                <p class="text-white text-center mt-2 font-nautigal text-xl z-50 absolute bottom-2 right-0 w-full">I love three things in this world.</p>
            </div>
            <!-- Ảnh 2 -->
            <div class="absolute top-[35%] left-1/2 -translate-x-1/2 w-[81%]">
                <img src="{{ asset('images/wedding/gallery/IMG_22.JPG') }}" alt="Story 2" class="w-full z-40">
                <p class="text-white text-center mt-2 font-nautigal text-xl z-50 absolute bottom-2 right-0 w-full">Sun, moon and you.</p>
            </div>
            <!-- Ảnh 3 -->
            <div class="absolute top-[66.9%] left-1/2 -translate-x-1/2 w-[81%]">
                <img src="{{ asset('images/wedding/gallery/IMG_33.JPG') }}" alt="Story 3" class="w-full">
                <p class="text-white text-center mt-2 font-nautigal text-xl z-50 absolute bottom-2 right-0 w-full">Sun for morning, moon for night, and you forever.</p>
            </div>
        </div>
        <!-- Countdown -->
        <div class="bg-black py-8">
            <p class="text-white text-center uppercase tracking-widest text-base mb-4 font-sans">Đếm ngược đến ngày cưới</p>
            <div id="story-countdown" class="flex justify-between gap-2 px-[15%]">
                <div class="text-center">
                    <span class="story-days block text-3xl font-bold text-white">00</span>
                    <span class="text-xs text-stone-300 font-quicksand">Ngày</span>
                </div>
                <div class="text-center">
                    <span class="story-hours block text-3xl font-bold text-white">00</span>
                    <span class="text-xs text-stone-300 font-quicksand">Giờ</span>
                </div>
                <div class="text-center">
                    <span class="story-minutes block text-3xl font-bold text-white">00</span>
                    <span class="text-xs text-stone-300 font-quicksand">Phút</span>
                </div>
                <div class="text-center">
                    <span class="story-seconds block text-3xl font-bold text-white">00</span>
                    <span class="text-xs text-stone-300 font-quicksand">Giây</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PHẦN 3: Calendar ========== -->
    <section>
        <div class="flex justify-center items-center mt-8">
            <i class="fa-solid fa-heart text-[#baa58a] text-4xl animate-pulse"></i>
        </div>
        <div class="flex justify-center items-center my-4">
            <img src="{{asset('images/wedding/save-the-date.png')}}" alt="Save the Date" class="w-[80%] h-auto object-cover mt-4">
        </div>
        <p class="text-lg text-center my-8 font-quicksand">Đi một vòng lớn rồi vẫn gặp anh,<br>Từ đó, thế gian bỗng hóa dịu dàng.</p>
        <div class="relative">
            <img src="{{asset('images/wedding/calendar.JPG')}}" alt="Ảnh cưới 2" class="w-full h-full object-cover border-24 border-[#baa58a]/70 rounded-xl">
            <!-- Lịch tháng 3 overlay -->
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 w-[80%] bg-[#baa58a]/30 flex flex-col items-center py-4 rounded">
                <p class="text-white font-times font-bold text-lg mb-2">THÁNG 3 - 2026</p>
                <table class="text-center text-sm font-times w-full">
                    <thead>
                    <tr class="text-white">
                        <th class="p-1">T2</th><th class="p-1">T3</th><th class="p-1">T4</th><th class="p-1">T5</th><th class="p-1">T6</th><th class="p-1">T7</th><th class="p-1">CN</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="p-1 text-red-400">1</td></tr>
                    <tr><td class="p-1">2</td><td class="p-1">3</td><td class="p-1">4</td><td class="p-1">5</td><td class="p-1">6</td><td class="p-1">7</td><td class="p-1 text-red-400">8</td></tr>
                    <tr><td class="p-1">9</td><td class="p-1">10</td><td class="p-1">11</td><td class="p-1">12</td><td class="p-1">13</td><td class="p-1">14</td><td class="p-1 text-red-400">15</td></tr>
                    <tr><td class="p-1">16</td><td class="p-1">17</td><td class="p-1">18</td><td class="p-1">19</td><td class="p-1">20</td><td class="p-1 relative"><span class="relative z-10 text-white">21</span><i class="fa-solid fa-heart absolute inset-0 text-red-500 text-2xl flex items-center justify-center mt-0.5"></i></td><td class="p-1 text-red-400">22</td></tr>
                    <tr><td class="p-1">23</td><td class="p-1">24</td><td class="p-1">25</td><td class="p-1">26</td><td class="p-1">27</td><td class="p-1">28</td><td class="p-1 text-red-400">29</td></tr>
                    <tr><td class="p-1">30</td><td class="p-1">31</td><td></td><td></td><td></td><td></td><td></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <p class="text-lg text-center my-8 font-quicksand">Hạnh phúc lớn nhất chính là được nắm tay anh, <br>
            Cùng nhau đi hết cuộc đời lãng mạn này</p>
    </section>

    <!-- ========== PHẦN 4:  Sweet wedding invitation========== -->
    <section class="relative w-full">
        <div class="absolute top-2 right-0 flex justify-between items-center w-full px-4">
            <span class="text-base tracking-[0.2em] text-white font-normal uppercase">SWEET</span>
            <span class="text-base tracking-[0.2em] text-white font-normal uppercase">WEDDING</span>
            <span class="text-base tracking-[0.2em] text-white font-normal uppercase">INVITATION</span>
        </div>

        <img src="{{asset('images/wedding/IMG_0559.JPG')}}" alt="sweet-wedding-invitation" class="w-full object-cover mt-4">

        <p class="text-lg text-center my-8 font-quicksand px-12">"Hết lần này đến lần khác, đem chuyện tình riêng khoe với thế gian,
            Chỉ vì mỗi lần nhìn em, anh lại thấy đó là điều đáng tự hào nhất."</p>
        <div class="flex justify-center items-center mt-8">
            <i class="fa-solid fa-heart text-[#baa58a] text-4xl animate-pulse"></i>
        </div>
    </section>



    <!-- ========== PHẦN 4: MỪNG CƯỚI ========== -->
    <section id="mung-cuoi" class="relative py-12 px-4 mt-8">
        <img src="{{asset('images/wedding/IMG_0583.JPG')}}" alt="Background" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative z-10 text-center">
            <p class="font-script text-4xl text-white mb-2 mt-60">Hộp Mừng Cưới</p>
            <p class="text-sm text-stone-300 font-times italic mb-6">"Thay cho tấm lòng chúc phúc"</p>

            <!-- Icon hộp quà -->
            <div id="gift-box" class="w-24 h-24 mx-auto bg-[#f87e7e] rounded-full flex items-center justify-center cursor-pointer shadow-lg hover:scale-110 transition-transform animate-wiggle">
                <i class="fa-solid fa-gift text-4xl text-white"></i>
            </div>
            <p class="text-xs text-stone-300 mt-3 font-times">Nhấn để mở</p>
        </div>

        <!-- Modal QR -->
        <div id="qr-modal" class="fixed inset-0 bg-black/80 z-50 hidden items-center justify-center p-4">
            <div class="bg-white rounded-2xl p-6 w-full max-w-sm relative">
                <button id="close-modal" class="absolute top-3 right-3 text-stone-400 hover:text-stone-600">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
                <p class="font-nautigal text-4xl font-normal text-primary text-center mb-4">Mừng Cưới</p>

                <div class="space-y-4">
                    <!-- Cô dâu -->
                    <div class="flex items-center gap-3 p-3 bg-stone-50 rounded-xl">
                        <img src="{{asset('images/wedding/tram-anh-qr.png')}}" alt="QR Cô dâu" class="w-20 h-20">
                        <div>
                            <p class="text-xs text-stone-400 font-times">Cô dâu</p>
                            <p class="font-semibold text-primary font-times">Nguyễn Trâm Anh</p>
                            <p class="text-xs text-stone-500 font-times">TPB - 20915112358</p>
                            <a href="{{asset('images/wedding/tram-anh-qr.png')}}" download="QR-Co-Dau.png" class="inline-block mt-1 text-xs text-primary hover:underline"><i class="fa-solid fa-download mr-1"></i>Tải QR</a>
                        </div>
                    </div>
                </div>

                <p class="text-center text-xs text-stone-400 font-times mt-4 italic">
                    <i class="fa-solid fa-heart text-red-400"></i> Xin chân thành cảm ơn!
                </p>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-white py-8 px-4 text-center">
        <img src="{{asset('images/wedding/icon-wedding.jpg')}}" alt="Wedding Icon" class="w-32 mx-auto mb-4">
        <p class="font-script text-3xl text-stone-700 mb-4">Thanks you!</p>
        <p class="text-sm text-stone-600 font-times leading-relaxed px-2 pb-12">
            Chúng mình chân thành mời những người thân yêu,<br>
            những người đã đồng hành qua bao năm tháng,<br>
            cùng chứng kiến và sẻ chia khoảnh khắc ý nghĩa này.<br><br>
            Nếu bạn ở xa hoặc bận rộn không thể đến,<br>
            đừng lo, chúng mình đã nhận được lời chúc của bạn rồi!<br>
            Chúc bạn mọi điều tốt đẹp.<br><br>
            Còn nếu bạn có thời gian, thật tuyệt,<br>
            hãy mang theo tâm trạng vui vẻ và chiếc bụng thật đói,<br>
            đến chung vui cùng chúng mình nhé!<br>
            Rất mong được gặp bạn! 💕
        </p>
    </footer>



    <script>
        document.getElementById('envelope').addEventListener('click', function() {
            this.classList.toggle('open');
            if (this.classList.contains('open')) {
                createHearts();
            }
        });

        function createHearts() {
            const container = document.getElementById('hearts-container');
            container.innerHTML = '';
            for (let i = 0; i < 16; i++) {
                const heart = document.createElement('div');
                heart.className = 'floating-heart ' + (i % 2 === 0 ? 'left' : 'right');
                heart.innerHTML = '❤';
                heart.style.setProperty('--spread', (30 + Math.random() * 100) + 'px');
                heart.style.animationDelay = (Math.random() * 0.6) + 's';
                heart.style.fontSize = (10 + Math.random() * 8) + 'px';
                container.appendChild(heart);
            }
        }

        // Gift box modal
        document.getElementById('gift-box').addEventListener('click', function() {
            document.getElementById('qr-modal').classList.remove('hidden');
            document.getElementById('qr-modal').classList.add('flex');
        });
        document.getElementById('close-modal').addEventListener('click', function() {
            document.getElementById('qr-modal').classList.add('hidden');
            document.getElementById('qr-modal').classList.remove('flex');
        });
        document.getElementById('qr-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
                this.classList.remove('flex');
            }
        });

        // Countdown
        const weddingDate = new Date('2026-03-21T17:00:00').getTime();
        const updateCountdown = () => {
            const now = new Date().getTime();
            const diff = weddingDate - now;
            if (diff > 0) {
                const days = String(Math.floor(diff / (1000 * 60 * 60 * 24))).padStart(2, '0');
                const hours = String(Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
                const minutes = String(Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
                const seconds = String(Math.floor((diff % (1000 * 60)) / 1000)).padStart(2, '0');
                // Story countdown
                document.querySelector('.story-days').textContent = days;
                document.querySelector('.story-hours').textContent = hours;
                document.querySelector('.story-minutes').textContent = minutes;
                document.querySelector('.story-seconds').textContent = seconds;
            }
        };
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // Music
        const music = document.getElementById('bg-music');
        const musicBtn = document.getElementById('music-btn');

        const playMusic = () => {
            music.play().then(() => musicBtn.classList.add('animate-pulse')).catch(() => {});
        };

        playMusic();
        ['click', 'touchstart', 'scroll'].forEach(evt => {
            document.addEventListener(evt, playMusic, { once: true });
        });

        musicBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (music.paused) {
                music.play();
                musicBtn.classList.add('animate-pulse');
            } else {
                music.pause();
                musicBtn.classList.remove('animate-pulse');
            }
        });
    </script>
</body>
</html>
