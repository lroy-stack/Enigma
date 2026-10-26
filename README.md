# Enigma — my first hand-made website

**Live demo:** https://lroy-stack.github.io/Enigma/

This is the first website I built and delivered for a real client: the Enigma restaurant in Calpe (Spain), in 2024.
It predates AI coding tools: I adapted the free Grecko Bootstrap template by hand (MIT, © 2019 Marios Sofokleous,
see `LICENSE`) and wrote the restaurant's pages, menu, gallery and animations myself. It stays public as the starting
point of my work as a developer.

## What it is

A single-page restaurant site:

- Digital menu for food and drinks, with custom SVG icons.
- Photo gallery with lazy loading and scroll animations.
- Booking form.
- Installable as a PWA (`manifest.json`).
- Mobile-first layout.

## Built with

HTML5, CSS3 with Bootstrap and Animate.css, vanilla JavaScript (one animation module per section), a custom
typeface (Calathea) and Grunt for the production build.

## Run it locally

```bash
git clone https://github.com/lroy-stack/Enigma.git
cd Enigma
npx serve .
```

## Layout

```
index.html      single page
css/            site styles and Bootstrap
js/             site logic and per-section animations
media/          brand assets, menu icons and photos
manifest.json   PWA manifest
```

## Related

- [`enigma.rest`](https://github.com/lroy-stack/enigma.rest): the first working copy, with a Grunt build pipeline.

---

Versión en español: es la primera web que hice y entregué para un cliente real, el restaurante Enigma de Calpe, en
2024, antes de las herramientas de IA: partí de la plantilla libre Grecko (MIT) y la adapté a mano. Puedes verla en
https://lroy-stack.github.io/Enigma/.
