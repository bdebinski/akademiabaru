# Instrukcja Konfiguracji Google Analytics 4

## Krok 1: Utwórz Konto Google Analytics

1. Przejdź do https://analytics.google.com
2. Zaloguj się swoim kontem Google
3. Kliknij "Rozpocznij pomiary" (lub "Start measuring")
4. Wypełnij formularz:
   - Nazwa konta: `Akademia Baru`
   - Kraj: `Polska`
   - Waluta: `Polish Zloty (zł)`

## Krok 2: Utwórz Właściwość (Property)

1. Nazwa właściwości: `Akademia Baru Website`
2. Strefa czasowa: `(GMT+01:00) Central European Time - Warsaw`
3. Waluta: `Polish Zloty (zł)`
4. Kliknij "Dalej"

## Krok 3: Skonfiguruj Szczegóły Firmy

1. Branża: `Education`
2. Wielkość firmy: wybierz odpowiednią opcję
3. Cel używania GA: zaznacz interesujące Cię opcje
4. Kliknij "Utwórz"
5. Zaakceptuj warunki korzystania z usługi

## Krok 4: Skonfiguruj Strumień Danych (Data Stream)

1. Wybierz platformę: `Web`
2. URL witryny: `https://akademiabaru.pl`
3. Nazwa strumienia: `Akademia Baru - Main Website`
4. Kliknij "Utwórz strumień"

## Krok 5: Skopiuj Identyfikator Pomiaru (Measurement ID)

Po utworzeniu strumienia danych zobaczysz:
- **MEASUREMENT ID**: `G-XXXXXXXXXX` (format: G- + 10 znaków)

**To jest Twój unikalny identyfikator!**

## Krok 6: Wklej ID do Wszystkich Stron

Otwórz następujące pliki i zamień `G-XXXXXXXXXX` na swój prawdziwy Measurement ID:

### Pliki do edycji:

1. **index.html** (linia ~48)
2. **courses.html** (linia ~46)
3. **offer.html** (linia ~48)
4. **gallery.php** (linia ~48)
5. **contact.php** (linia ~46)

### Przykład - przed:
```html
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
</script>
```

### Po zamianie (przykładowy ID):
```html
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ABC1234DEF"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-ABC1234DEF');
</script>
```

## Krok 7: Testowanie

1. Zapisz wszystkie zmiany
2. Wyślij pliki na serwer
3. Odwiedź swoją stronę: https://akademiabaru.pl
4. Wróć do Google Analytics
5. Przejdź do: **Raporty** → **Czas rzeczywisty** (Realtime)
6. W ciągu 30 sekund powinieneś zobaczyć swoją wizytę

## Krok 8: Weryfikacja (po 24-48 godzinach)

Po pełnym dniu działania sprawdź:
- **Raporty → Pozyskiwanie → Pozyskiwanie ruchu**
- **Raporty → Zaangażowanie → Strony i ekrany**
- **Raporty → Dane demograficzne → Przegląd**

## Dodatkowe Funkcje (Opcjonalne)

### 1. Śledzenie Konwersji

Możesz skonfigurować cele konwersji:
- Kliknięcie w numer telefonu
- Wypełnienie formularza kontaktowego
- Kliknięcie "Zapisz się na kurs"

**Jak dodać:**
1. W GA4: **Konfiguracja** → **Zdarzenia**
2. Kliknij **Utwórz zdarzenie**
3. Dodaj parametry dla śledzonych akcji

### 2. Łączenie z Google Search Console

1. W GA4: **Admin** → **Linki do Search Console**
2. Kliknij **Połącz**
3. Zaloguj się do Search Console
4. Potwierdź połączenie

### 3. Google Ads (jeśli prowadzisz kampanie)

1. W GA4: **Admin** → **Linki do Google Ads**
2. Połącz z kontem Google Ads
3. Importuj konwersje

## Pomoc i Wsparcie

- Centrum Pomocy GA4: https://support.google.com/analytics
- Akademia Skillshop (darmowe kursy): https://skillshop.withgoogle.com

## Ważne Informacje

- **RODO**: Google Analytics 4 jest zgodny z RODO, ale powinieneś dodać informację o cookies w polityce prywatności
- **Czas na dane**: Pierwsze raporty pojawią się po 24-48 godzinach
- **Backup ID**: Zapisz swój Measurement ID w bezpiecznym miejscu

---

**Pytania?** Skontaktuj się z webmasterem lub agencją zajmującą się stroną.
