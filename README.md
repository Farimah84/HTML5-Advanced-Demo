# HTML5 Advanced Demo

> A comprehensive demo showcasing 5 advanced HTML5 features — combining academic excellence with real-world web development skills.

## Features Demonstrated

| # | Feature | Technology | What It Does |
|---|---------|-------------|---------------|
| 1 | Offline Browsing | Application Cache | Saves web pages on user's computer for offline access |
| 2 | Background Processing | Web Worker | Runs heavy JavaScript without freezing the page |
| 3 | Real-time Updates | Server-Sent Events (SSE) | Receives automatic messages from server |
| 4 | Interactive Button | CSS3 (Hover/Active) | Modern button with smooth animations, no JavaScript |
| 5 | Dropdown Menu | CSS3 Positioning | Professional navigation menu with submenus |

## Project Structure
HTML5-Advanced-Demo/
│
├── index.html # Main page — Only HTML structure
├── style.css # All CSS styles
├── demo.appcache # Manifest file for offline storage
├── worker.js # Web Worker script (background counter)
├── sse.php # Server-side script for SSE
└── README.md # Project documentation


## How to Run Locally

### Quick Start (without SSE)

1. Open `index.html` directly in your browser
2. Test offline mode:
   - First load the page with internet
   - Disconnect Wi-Fi
   - Refresh — page still works!

### Full Demo (with SSE)

1. Install XAMPP (or any PHP server)
2. Copy all files to `htdocs/HTML5-Advanced-Demo/`
3. Start Apache server
4. Visit `http://localhost/HTML5-Advanced-Demo/index.html`

## Technical Deep Dive

### 1. Application Cache
- `manifest="demo.appcache"` in `<html>` tag activates offline storage
- Browser caches files after first visit
- Page won't update until manifest file changes

### 2. Web Worker
- Runs JavaScript in separate background thread
- Communication via `postMessage()` and `onmessage`
- No DOM access
- Must call `terminate()` to stop

### 3. Server-Sent Events (SSE)
- Persistent one-way connection (Server → Browser)
- Content-Type must be `text/event-stream`
- Auto-reconnection built-in

### 4. CSS Button
- `:hover` — Mouse over effect
- `:active` — Click moment effect
- `transform: scale()` — Size animation
- No JavaScript required

### 5. CSS Dropdown Menu
- `position: relative` on `<li>` (anchor point)
- `position: absolute` on `.dropdown` (position relative to anchor)
- `top: 100%` (places below parent)
- `z-index: 1000` (appears above everything)

## Browser Support

| Feature | Chrome | Firefox | Edge | IE |
|---------|--------|---------|------|-----|
| Application Cache | ✅ | ✅ | ✅ | 10+ |
| Web Worker | ✅ | ✅ | ✅ | 10+ |
| SSE | ✅ | ✅ | ✅ | ❌ |
| CSS3 | ✅ | ✅ | ✅ | 10+ |

## License

MIT License — Free to use, copy, modify, and distribute.

## Author

[Farimah Nourpanah]
- [Email](farimahnourpanah@gmail.com)
- [LinkedIn](https://www.linkedin.com/in/farimah-nourpanah)
---

**Built with HTML5, CSS3, JavaScript, and PHP**
