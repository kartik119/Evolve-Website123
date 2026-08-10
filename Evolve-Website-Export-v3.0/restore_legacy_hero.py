import re

with open('style.css', 'r', encoding='utf-8') as f:
    css = f.read()

legacy_hero_css = """/* ==========================================================================
   1.5 Legacy Static Hero (About Page)
   ========================================================================== */
.hero {
  padding: 80px 0;
  background-color: var(--bg-cream);
}
.hero-inner {
  display: flex;
  align-items: center;
  gap: 60px;
}
.hero-content {
  flex: 1;
}
/* Re-added hero classes without conflicting with slider */
.static-hero-subtitle {
  color: var(--gold);
  font-size: 0.8rem;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-weight: 600;
  margin-bottom: 20px;
}
.hero-content h1 {
  font-size: 3.8rem;
  line-height: 1.1;
  margin-bottom: 25px;
  letter-spacing: -1px;
}
.hero-content p {
  font-size: 1.1rem;
  margin-bottom: 40px;
  max-width: 90%;
}
.static-hero-btns {
  display: flex;
  gap: 15px;
  margin-bottom: 50px;
}
.hero-trust-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}
.hero-trust-item {
  display: flex;
  align-items: center;
  gap: 15px;
}
.hero-trust-icon {
  width: 40px;
  height: 40px;
  background-color: var(--white);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--gold);
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}
.hero-trust-item span {
  font-size: 0.9rem;
  font-weight: 600;
  color: var(--navy);
}

/* Hero Masonry */
.hero-masonry {
  flex: 1.2;
  position: relative;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: auto auto;
  gap: 15px;
}
.hero-img-box {
  border-radius: 8px;
  overflow: hidden;
}
.hero-img-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.hero-img-1 { height: 350px; }
.hero-img-2 { height: 250px; }
.hero-img-3 { height: 250px; }
.hero-img-4 { height: 350px; margin-top: -100px; }

.hero-badge {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: var(--navy);
  color: var(--white);
  padding: 30px 20px;
  border-radius: 8px;
  text-align: center;
  border: 4px solid var(--white);
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  width: 160px;
}
.hero-badge .since {
  font-size: 0.8rem;
  letter-spacing: 2px;
  color: var(--gold);
  margin-bottom: 5px;
}
.hero-badge .year {
  font-size: 2.5rem;
  font-weight: 700;
  line-height: 1;
  margin-bottom: 10px;
}
.hero-badge .text {
  font-size: 0.7rem;
  letter-spacing: 1px;
}
"""

css = css + "\n" + legacy_hero_css

with open('style.css', 'w', encoding='utf-8') as f:
    f.write(css)

# Update about.html to change .hero-subtitle and .hero-btns to avoid slider conflicts
with open('about.html', 'r', encoding='utf-8') as f:
    html = f.read()
    
html = html.replace('class="hero-subtitle"', 'class="static-hero-subtitle"')
html = html.replace('class="hero-btns"', 'class="static-hero-btns"')

with open('about.html', 'w', encoding='utf-8') as f:
    f.write(html)
