# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What This Is

A Hugo static site — a reimagining of **Fantastic Worlds**, a PHP/MySQL/Apache project originally built as a TAFE assignment circa 2009. The original site catalogued classic sci-fi and horror films from the 1950s–80s. This version preserves all content and design but runs entirely as a static site on Netlify with no database or server-side code.

The migration from PHP to Hugo was performed in May 2026 with Claude (Anthropic), which analysed the legacy codebase, resolved the MySQL foreign-key relationships into flat content files, and generated all Hugo templates.

## Commands

```bash
# Local dev server (live reload)
hugo server

# Production build (output to public/)
hugo --minify

# Build with drafts visible
hugo server --buildDrafts
```

## Architecture

### Content → Data flow

There is no runtime database. All MySQL data was migrated at build time:

- **`content/movies/*.md`** — one file per film. YAML front matter holds all metadata (year, director, cast, price, rating, aspect ratio, encoding, region, distributor, aka titles, etc.). The body is the plot blurb. FK relationships from the original DB are resolved inline — e.g. `RatingID: 3` became `rating: "PG"`.
- **`data/*.json`** — lookup tables from the original MySQL schema (ratings, regions, encodings). Hugo templates loop over these just as the PHP code looped over `mysql_fetch_array()`. The FAQ page is the primary consumer.

### Layouts

| Template | Renders |
|---|---|
| `layouts/_default/baseof.html` | Shared HTML shell: banner → breadcrumb → menu → content block → footer |
| `layouts/index.html` | Home page with recent-movie thumbnails |
| `layouts/movies/list.html` | Paginated catalogue (5/page, sorted by year ascending) |
| `layouts/movies/single.html` | Product detail: specs table, blurb, cast, aka list |
| `layouts/_default/faq.html` | Loops over `hugo.Data.ratings`, `hugo.Data.regions`, `hugo.Data.encodings` |
| `layouts/_default/contact.html` | Netlify Form (`data-netlify="true"`) — no server code needed |
| `layouts/_default/gallery.html` | Lightbox gallery, reads thumbnails via `readDir` |
| `layouts/partials/` | head (CSS links), menu, breadcrumb, footer, analytics |

### Static assets

All CSS and images are copied unchanged from the original PHP project into `static/resource/`. The original PHP site used absolute URLs with a `$SUBDIR` variable; Hugo serves everything from `/resource/` root-relative paths. An additional `static/resource/css/product-layout.css` was added for the product page two-column layout and catalogue `.productbox` styles.

### Pagination

Configured in `hugo.toml` as `pagerSize = 5`. With 6 movies currently, page 1 has 5 films and page 2 has 1.

### Contact form

Uses Netlify Forms. The `data-netlify="true"` attribute on the `<form>` tag is all that's needed — Netlify intercepts submissions at the CDN edge. **Forms do not work in local dev** (`hugo server`) — test only on a deployed Netlify URL.

## Adding a New Movie

Create a new file in `content/movies/your-slug.md`:

```yaml
---
title: "Movie Title"
year: "1965"
director: "Director Name"
cast:
  - "Actor One"
  - "Actor Two"
length: 90          # minutes
price: 14.99
image: "filename.jpg"          # must exist in static/resource/jpg/covers/
rating: "PG"                   # E / G / PG / M / MA15+ / R18+ / X18+ / RC
region_code: "4"
region_label: "Oceania; Central and South America; Caribbean; Mexico"
aspect: "1.85:1"               # 1:33.1 / 1.77:1 / 1.85:1 / 2.35:1
encoding: "PAL"                # NTSC / SECAM / PAL
format: "16:9"                 # 4:3 / 16:9
presentation: "Colour"         # Colour / Black & White
audio: "Mono"                  # Mono / Stereo
distributor: "Anchor Bay"
aka:
  - lang: "fr"
    title: "French Title"
    note: "France"
---

Plot blurb goes here as Markdown body text.
```

Also add a cover image to `static/resource/jpg/covers/` and a thumbnail to `static/resource/jpg/covers/resized/` (naming convention: `filename-icon.jpg`).

## Deployment

Connect the `hugo/` directory to a Netlify site. Netlify config is in `netlify.toml`:

- Build command: `hugo --minify`
- Publish directory: `public`
- Hugo version: pinned to `0.161.1`

The `baseURL` in `hugo.toml` is set to `https://fantastic-worlds.netlify.app/` — update this to the actual Netlify URL after first deploy.

## Origin

The original PHP project lives in the parent directory (`../`). Key reference files:
- `../resource/ sql/fantastic.sql` — full MySQL dump (note: space in folder name)
- `../CLAUDE.md` — context for the original PHP codebase
