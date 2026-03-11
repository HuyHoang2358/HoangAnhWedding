# UI/UX Specifications

## Design Philosophy

Elegant • Romantic • Minimal • Premium

## Layout

### Container
```css
.container {
  max-width: 420px;
  margin: 0 auto;
  padding: 0 20px;
}
```

### Spacing System
| Size | Value | Usage |
|------|-------|-------|
| xs | 8px | Inline elements |
| sm | 16px | Card padding |
| md | 24px | Section gaps |
| lg | 48px | Between sections |
| xl | 80px | Major sections |

## Components

### Buttons
```css
/* Primary Button */
.btn-primary {
  background: linear-gradient(135deg, #D4AF37, #C9A961);
  color: #fff;
  padding: 14px 32px;
  border-radius: 50px;
  font-family: 'Inter', sans-serif;
  font-weight: 500;
  box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
}

/* Secondary Button */
.btn-secondary {
  background: transparent;
  border: 1px solid #D4AF37;
  color: #D4AF37;
  padding: 12px 28px;
  border-radius: 50px;
}
```

### Cards
```css
.card {
  background: #FFFFF0;
  border-radius: 16px;
  padding: 24px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}
```

### Dividers
```css
/* Gold line divider */
.divider {
  width: 60px;
  height: 1px;
  background: #D4AF37;
  margin: 24px auto;
}

/* Floral ornament */
.ornament {
  width: 120px;
  height: 40px;
  background-image: url('/images/ornament.svg');
  background-size: contain;
  margin: 32px auto;
}
```

## Typography Scale

| Element | Font | Size | Weight | Color |
|---------|------|------|--------|-------|
| Hero Title | Playfair Display | 24px | 600 | #2D2D2D |
| Couple Names | Great Vibes | 42px | 400 | #D4AF37 |
| Section Title | Playfair Display | 28px | 600 | #2D2D2D |
| Body | Inter | 16px | 400 | #4A4A4A |
| Caption | Inter | 14px | 400 | #6B6B6B |
| Button | Inter | 16px | 500 | #FFFFFF |

## Section Specifications

### 1. Hero Section
- Height: 100vh
- Background: Full bleed image với overlay gradient
- Overlay: `rgba(0,0,0,0.3)`
- Text alignment: Center
- Animation: Fade-in 1s

### 2. Lời Mời
- Padding: 80px 20px
- Background: Ivory
- Text: Centered, italic style

### 3. Cô Dâu & Chú Rể
- Layout: 2 cards stacked vertically
- Image: Circle crop, 180px diameter
- Border: 3px solid gold
- Gap between cards: 32px

### 4. Timeline
- Line: 2px solid #D4AF37
- Dots: 12px circle, gold fill
- Card offset: alternating left/right (mobile: all left)

### 5. Thông Tin Lễ Cưới
- Card style với icons
- Icon size: 32px
- Icon color: Gold

### 6. Countdown
- Display: Flex, 3 boxes
- Box size: 80px x 80px
- Border: 1px solid gold
- Number: 36px, Playfair Display
- Label: 12px, Inter

### 7. Album
- Grid: 2 columns
- Gap: 8px
- Border-radius: 12px
- Aspect ratio: Mixed (masonry feel)

### 8. RSVP Form
- Input style: Bottom border only
- Border color: #D4AF37
- Focus: Gold glow
- Radio buttons: Custom gold style

### 9. Footer
- QR code: 150px x 150px
- Background: Light beige
- Padding: 60px 20px

## Animations

```css
/* Fade in on scroll */
.fade-in {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}

.fade-in.visible {
  opacity: 1;
  transform: translateY(0);
}

/* Smooth scroll */
html {
  scroll-behavior: smooth;
}

/* Button hover */
.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
}
```

## Image Guidelines

| Image | Dimensions | Format | Notes |
|-------|------------|--------|-------|
| Hero | 1080x1920 | JPG | Compress < 300KB |
| Portrait | 600x800 | JPG | Face centered |
| Gallery | 600x800 | JPG | Consistent style |
| QR Code | 300x300 | PNG | High contrast |
