# 🍽️ Enigma Restaurant — Official Website

**[ES]** Sitio web oficial del restaurante Enigma en Calpe, España. Plataforma digital completa con menú interactivo, galería fotográfica, sistema de reservas y soporte PWA.

**[EN]** Official website for Enigma restaurant in Calpe, Spain. Full digital platform featuring an interactive menu, animated gallery, reservation system, and PWA support.

---

## ✨ Features / Características

- 🍷 **Interactive digital menu** — Full drinks & food catalog with custom SVG icons
- - 📸 **Animated gallery** — Photo gallery with lazy loading and scroll animations
  - - 📅 **Reservation system** — Booking form with contact integration
    - - 📱 **PWA ready** — Installable as a progressive web app (manifest.json)
      - - 🎨 **Custom animations** — Modular JS animation system per section
        - - 🌐 **Responsive design** — Mobile-first layout with Bootstrap
         
          - ---

          ## 🛠️ Tech Stack

          | Layer | Technology |
          |-------|-----------|
          | Markup | HTML5 |
          | Styles | CSS3 · Bootstrap · Animate.css |
          | Scripts | Vanilla JavaScript (ES6+) |
          | Fonts | Calathea (custom typeface) |
          | Build | Grunt |
          | Assets | Custom SVG icon system |

          ---

          ## 📁 Project Structure / Estructura

          ```
          Enigma/
          ├── index.html              # Main entry point
          ├── css/
          │   ├── main.css            # Custom styles
          │   └── bootstrap.css       # Bootstrap framework
          ├── js/
          │   ├── site.js             # Core logic
          │   ├── menu-animations.js
          │   ├── gallery-animations.js
          │   └── ...                 # Per-section animation modules
          ├── media/
          │   ├── brand/              # Logos SVG + PNG
          │   └── menu/               # Menu icons & food images
          └── manifest.json           # PWA manifest
          ```

          ---

          ## 🚀 Getting Started / Instalación

          ```bash
          git clone https://github.com/lroy-stack/Enigma.git
          cd Enigma
          open index.html
          # or use a local server:
          npx serve .
          ```

          ---

          ## 👨‍💻 Author

          **Leroy** · [lroy-stack](https://github.com/lroy-stack)
          Full-stack developer specialized in hospitality digital solutions · Calpe, España 🇪🇸

          ---

          *Part of Proyecto Enigma — complete digital transformation for restaurant management.*
