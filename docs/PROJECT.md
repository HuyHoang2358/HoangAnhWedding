# Wedding Invitation Website - Trâm Anh & Huy Hoàng

## Tổng quan dự án

Website thiệp cưới mobile-first với giao diện sang trọng, lãng mạn cho đám cưới ngày **22.03.2026**.

## Thông tin cặp đôi

- **Cô dâu:** Trâm Anh
- **Chú rể:** Huy Hoàng
- **Ngày cưới:** 22/03/2026

## Tech Stack

- **Framework:** Laravel (existing)
- **CSS:** TailwindCSS
- **Fonts:** 
  - Playfair Display (tiêu đề)
  - Inter (nội dung)
  - Great Vibes (tên cặp đôi)
- **Animations:** CSS animations (fade-in, smooth scroll)

## Design Guidelines

### Target Device
- Mobile-first only (max-width: 420px)
- Vertical storytelling layout

### Color Palette
| Màu | Hex | Sử dụng |
|-----|-----|---------|
| Ivory | `#FFFFF0` | Background chính |
| Champagne Gold | `#D4AF37` | Accent, borders |
| Light Beige | `#F5F5DC` | Background phụ |
| Soft Gold | `#C9A961` | Text highlight |
| Dark Text | `#2D2D2D` | Body text |

### Typography
```css
/* Titles */
font-family: 'Playfair Display', serif;

/* Body */
font-family: 'Inter', sans-serif;

/* Couple Names */
font-family: 'Great Vibes', cursive;
```

### Design Elements
- Rounded corners (8-16px)
- Soft shadows
- Floral ornaments / thin gold dividers
- Generous white space

## Sections

### 1. Hero Section (Trang bìa)
- Full screen background photo với overlay
- Text: "Thiệp Mời Đám Cưới"
- Tên cặp đôi: "Cô dâu Trâm Anh & Chú rể Huy Hoàng"
- Ngày: "22.03.2026"
- Button: "Xem Thiệp"

### 2. Lời Mời
- Lời mời ngắn gọn, trang trọng
- Typography centered
- Decorative elements

### 3. Cô Dâu & Chú Rể
- 2 cards với ảnh và thông tin
- Layout cân đối, lãng mạn

### 4. Chuyện Tình Yêu (Timeline)
- Vertical timeline
- Các mốc:
  - Lần đầu gặp nhau
  - Bắt đầu hẹn hò
  - Lời cầu hôn
  - Ngày cưới

### 5. Thông Tin Lễ Cưới
- Ngày cưới
- Thời gian
- Địa điểm
- Button: "Xem Bản Đồ"

### 6. Đếm Ngược Ngày Cưới
- Countdown: Ngày / Giờ / Phút
- Design minimal

### 7. Album Ảnh
- Gallery 6-8 ảnh pre-wedding
- Grid/masonry layout
- Rounded corners

### 8. RSVP (Xác Nhận Tham Dự)
- Form fields:
  - Họ và tên
  - Có tham dự không (Yes/No)
  - Số người tham dự
- Button: "Xác nhận tham dự"

### 9. Lời Cảm Ơn & Mừng Cưới
- Lời cảm ơn
- QR code mừng cưới

## File Structure

```
resources/
├── views/
│   └── wedding/
│       └── index.blade.php
├── css/
│   └── app.css
└── js/
    └── app.js

public/
└── images/
    └── wedding/
        ├── hero.jpg
        ├── bride.jpg
        ├── groom.jpg
        ├── gallery/
        └── qr-code.png
```

## Animations

- Fade-in on scroll
- Smooth scrolling behavior
- Subtle hover effects on buttons
- Countdown timer animation

## Responsive Breakpoints

```css
/* Mobile only */
max-width: 420px
```

## Assets cần chuẩn bị

1. **Ảnh Hero:** 1 ảnh chất lượng cao (1080x1920px)
2. **Ảnh cô dâu:** Portrait (600x800px)
3. **Ảnh chú rể:** Portrait (600x800px)
4. **Album:** 6-8 ảnh pre-wedding
5. **QR Code:** Mã QR mừng cưới
6. **Thông tin địa điểm:** Địa chỉ + Google Maps link
