# Fantastic Worlds

A static site reimagining of **Fantastic Worlds** — a catalogue of classic sci-fi and horror films from the 1950s–80s, originally built as a PHP/MySQL/Apache project for a TAFE assignment circa 2009.

This version preserves all original content and design but runs entirely as a Hugo static site on Netlify, with no database or server-side code.

🌐 **Live site:** https://fantastic-worlds.netlify.app/

---

## Stack

| | |
|---|---|
| **Generator** | [Hugo](https://gohugo.io/) v0.161.1 |
| **Hosting** | [Netlify](https://www.netlify.com/) |
| **Forms** | Netlify Forms |
| **Original stack** | PHP / MySQL / Apache |

---

## Local Development

```bash
# Install Hugo (macOS)
brew install hugo

# Start dev server with live reload
hugo server

# Build for production (outputs to public/)
hugo --minify

# Include draft content
hugo server --buildDrafts
```

> **Note:** The Netlify contact form does not work in local dev — test it on a deployed Netlify URL.

---

## Project Structure

```
├── content/
│   ├── movies/          # One .md file per film (YAML front matter + plot blurb)
│   └── *.md             # Static pages (about, contact, faq, gallery, links)
├── data/
│   ├── encodings.json   # PAL / NTSC / SECAM
│   ├── ratings.json     # E / G / PG / M / MA15+ / R18+ / X18+ / RC
│   └── regions.json     # DVD region codes
├── layouts/
│   ├── _default/        # baseof, faq, contact, gallery, single templates
│   ├── movies/          # list (paginated catalogue) + single (product detail)
│   └── partials/        # head, menu, breadcrumb, footer, analytics
├── static/
│   ├── resource/        # CSS and images (copied from original PHP project)
│   └── gallery/         # Lightbox gallery assets
├── hugo.toml            # Site config (baseURL, pagination, etc.)
└── netlify.toml         # Netlify build config
```

---

## Content

All MySQL data from the original site was migrated at build time into flat Markdown files. Foreign-key relationships (e.g. `RatingID: 3`) are resolved inline in the YAML front matter (e.g. `rating: "PG"`).

### Adding a New Movie

Create `content/movies/your-slug.md`:

```yaml
---
title: "Movie Title"
year: "1965"
director: "Director Name"
cast:
  - "Actor One"
  - "Actor Two"
length: 90
price: 14.99
image: "filename.jpg"        # must exist in static/resource/jpg/covers/
rating: "PG"                 # E / G / PG / M / MA15+ / R18+ / X18+ / RC
region_code: "4"
region_label: "Oceania; Central and South America; Caribbean; Mexico"
aspect: "1.85:1"
encoding: "PAL"
format: "16:9"
presentation: "Colour"
audio: "Mono"
distributor: "Anchor Bay"
aka:
  - lang: "fr"
    title: "French Title"
    note: "France"
---

Plot blurb goes here as Markdown body text.
```

Also add:
- Cover image → `static/resource/jpg/covers/filename.jpg`
- Thumbnail → `static/resource/jpg/covers/resized/filename-icon.jpg`

---

## Deployment

The site deploys automatically on Netlify when `main` is pushed. Build settings are in `netlify.toml`:

- **Build command:** `hugo --minify`
- **Publish directory:** `public`
- **Hugo version:** `0.161.1`

---

## Origin

The original PHP project lives in the parent directory. Key reference files:

- `../resource/ sql/fantastic.sql` — full MySQL dump
- `../CLAUDE.md` — context for the original PHP codebase

The migration to Hugo was performed in May 2026 using [Claude Code](https://claude.ai/code) (Anthropic), which analysed the legacy codebase, resolved MySQL foreign-key relationships into flat content files, and generated all Hugo templates.
