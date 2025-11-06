# Przewodnik optymalizacji strony Akademia Baru

## 🖼️ Optymalizacja obrazów (PILNE!)

### Problem
Obecne loga w footer są zbyt duże i spowalniają stronę:
- `logo.png` - 158 KB
- `longtables.png` - 163 KB
- `longtable.png` - 69 KB
- `lodowe.png` - 62 KB

### Rozwiązanie

#### 1. Konwersja do WebP
WebP to nowoczesny format obrazów, który redukuje rozmiar pliku o 25-35% bez utraty jakości.

**Narzędzia online:**
- https://squoosh.app/ (zalecane - Google)
- https://tinypng.com/
- https://imagecompressor.com/

**Instalacja narzędzi wiersza poleceń:**
```bash
# Ubuntu/Debian
sudo apt install webp

# macOS
brew install webp

# Windows - pobierz z: https://developers.google.com/speed/webp/download
```

**Konwersja obrazów:**
```bash
# Pojedynczy obraz
cwebp -q 80 images/logo.png -o images/logo.webp

# Wszystkie PNG w katalogu
for file in images/*.png; do
    cwebp -q 80 "$file" -o "${file%.png}.webp"
done
```

#### 2. Implementacja w HTML

Po konwersji, zaktualizuj footer we wszystkich plikach HTML:

**Zamiast:**
```html
<img class="img-fluid" src="images/logo.png" alt="Akademia Baru logo">
```

**Użyj picture z fallback:**
```html
<picture>
    <source srcset="images/logo.webp" type="image/webp">
    <img class="img-fluid" src="images/logo.png" alt="Akademia Baru logo" loading="lazy">
</picture>
```

#### 3. Optymalne rozmiary
Loga w footer nie powinny być większe niż:
- Szerokość: 300px
- Rozmiar pliku: max 20-30 KB

**Przeskalowanie obrazów:**
```bash
# ImageMagick (zainstaluj: apt install imagemagick)
convert images/logo.png -resize 300x images/logo_optimized.png
```

## 📱 Dalsze usprawnienia

### 1. Dodaj favicon w różnych rozmiarach

Utwórz plik `site.webmanifest`:
```json
{
  "name": "Akademia Baru",
  "short_name": "Akademia Baru",
  "icons": [
    {
      "src": "/images/android-chrome-192x192.png",
      "sizes": "192x192",
      "type": "image/png"
    },
    {
      "src": "/images/android-chrome-512x512.png",
      "sizes": "512x512",
      "type": "image/png"
    }
  ],
  "theme_color": "#dea000",
  "background_color": "#3C3939",
  "display": "standalone"
}
```

Dodaj do `<head>`:
```html
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
```

Narzędzie do generowania: https://realfavicongenerator.net/

### 2. Backend dla formularza kontaktowego

Utwórz `contact_handler.php`:
```php
<?php
// Konfiguracja
$to_email = "office@long-table.com.pl";
$subject_prefix = "[Akademia Baru] ";

// Walidacja
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanityzacja danych
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Walidacja email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Nieprawidłowy adres email");
    }

    // Przygotowanie wiadomości
    $email_subject = $subject_prefix . $subject;
    $email_body = "Nowa wiadomość z formularza kontaktowego\n\n";
    $email_body .= "Imię: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Telefon: $phone\n";
    $email_body .= "Temat: $subject\n\n";
    $email_body .= "Wiadomość:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Wysyłka
    if (mail($to_email, $email_subject, $email_body, $headers)) {
        header("Location: contact.php?success=1");
    } else {
        header("Location: contact.php?error=1");
    }
    exit;
}
?>
```

### 3. Google Analytics / Google Tag Manager

Dodaj do `<head>` wszystkich stron:
```html
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXXXX');
</script>
```

Zarejestruj się: https://analytics.google.com/

### 4. Social Media Integration

Dodaj do footer:
```html
<div class="social-media-icons text-center mt-4">
    <a href="https://facebook.com/akademiabaru" target="_blank" rel="noopener" aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://instagram.com/akademiabaru" target="_blank" rel="noopener" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <!-- Dodaj w <head>: -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
</div>
```

### 5. WhatsApp Button

Dodaj sticky button:
```html
<a href="https://wa.me/48501494787" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Napisz na WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>
```

CSS:
```css
.whatsapp-float {
    position: fixed;
    bottom: 100px;
    right: 30px;
    width: 60px;
    height: 60px;
    background-color: #25D366;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    z-index: 100;
    transition: all 0.3s ease;
}

.whatsapp-float:hover {
    background-color: #128C7E;
    transform: scale(1.1);
}
```

## 🔍 SEO - Następne kroki

1. **Zarejestruj stronę w Google Search Console**
   - https://search.google.com/search-console
   - Prześlij sitemap.xml

2. **Zarejestruj w Google Moja Firma**
   - https://business.google.com/
   - Dodaj zdjęcia, godziny otwarcia, opinie

3. **Dodaj FAQ na stronie**
   - Zwiększa widoczność w Google
   - Odpowiada na najczęstsze pytania

4. **Blog z aktualnościami**
   - "Nowy termin kursu barmańskiego"
   - "5 najlepszych drinków na wesele"
   - Pomaga w SEO

## 📊 Monitoring

### PageSpeed Insights
Sprawdź wydajność: https://pagespeed.web.dev/
- Wprowadź: https://akademiabaru.pl
- Cel: 90+ na mobile i desktop

### GTmetrix
https://gtmetrix.com/
- Sprawdza czas ładowania
- Daje konkretne rekomendacje

## ✅ Checklist implementacji

- [ ] Zoptymalizuj wszystkie obrazy (WebP)
- [ ] Dodaj favicon w różnych rozmiarach
- [ ] Skonfiguruj contact_handler.php
- [ ] Dodaj Google Analytics
- [ ] Dodaj social media icons
- [ ] Dodaj WhatsApp button
- [ ] Zarejestruj w Google Search Console
- [ ] Prześlij sitemap.xml
- [ ] Zarejestruj Google Moja Firma
- [ ] Przetestuj wydajność (PageSpeed)

## 🆘 Pomoc

W razie pytań:
- Email: office@long-table.com.pl
- Tel: +48 501 494 787

---

**Data utworzenia:** 6 listopada 2025
**Autor:** Claude AI Assistant
