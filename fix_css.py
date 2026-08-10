import re

with open('style.css', 'r', encoding='utf-8') as f:
    css = f.read()

new_hero_css = """/* ==========================================================================
   1. HERO SLIDER
   ========================================================================== */
.hero-slider-section {
  position: relative;
  width: 100%;
  height: 90vh;
  min-height: 600px;
  overflow: hidden;
  background-color: var(--navy);
}

.hero-slider {
  width: 100%;
  height: 100%;
  position: relative;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  opacity: 0;
  transition: opacity 0.8s ease-in-out, transform 4s linear;
  z-index: 1;
  display: flex;
  align-items: center;
  transform: scale(1.05);
}

.slide.active {
  opacity: 1;
  z-index: 2;
  transform: scale(1);
}

.slide-inner {
  position: relative;
  z-index: 3;
  max-width: 800px;
  margin-left: 0;
  padding-left: 20px;
}

.slide .hero-subtitle {
  color: var(--gold);
  font-weight: 700;
  font-size: 0.9rem;
  letter-spacing: 2px;
  margin-bottom: 20px;
  text-transform: uppercase;
  transform: translateY(20px);
  opacity: 0;
  transition: all 0.8s ease 0.3s;
}

.slide h1 {
  font-size: 4.5rem;
  font-family: var(--font-serif);
  color: var(--white);
  line-height: 1.1;
  margin-bottom: 25px;
  transform: translateY(20px);
  opacity: 0;
  transition: all 0.8s ease 0.5s;
  text-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.slide p {
  font-size: 1.1rem;
  color: #e2e8f0;
  line-height: 1.6;
  margin-bottom: 40px;
  max-width: 600px;
  transform: translateY(20px);
  opacity: 0;
  transition: all 0.8s ease 0.7s;
}

.slide .hero-btns {
  display: flex;
  gap: 20px;
  transform: translateY(20px);
  opacity: 0;
  transition: all 0.8s ease 0.9s;
}

.slide.active .hero-subtitle,
.slide.active h1,
.slide.active p,
.slide.active .hero-btns {
  transform: translateY(0);
  opacity: 1;
}

.btn-gold {
  background-color: var(--gold);
  color: var(--navy);
  padding: 15px 30px;
  border-radius: 4px;
  font-weight: 600;
  font-size: 0.9rem;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  transition: all 0.3s ease;
}
.btn-gold:hover {
  background-color: #d4a017;
  color: var(--navy);
  transform: translateY(-2px);
}
.btn-outline {
  border: 2px solid var(--white);
  color: var(--white);
  padding: 15px 30px;
  border-radius: 4px;
  font-weight: 600;
  font-size: 0.9rem;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  transition: all 0.3s ease;
}
.btn-outline:hover {
  background-color: var(--white);
  color: var(--navy);
}

/* Slider Controls */
.slider-controls {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  transform: translateY(-50%);
  display: flex;
  justify-content: space-between;
  padding: 0 40px;
  z-index: 10;
  pointer-events: none;
}
.slider-arrow {
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.3);
  color: var(--white);
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  cursor: pointer;
  pointer-events: auto;
  transition: all 0.3s ease;
  backdrop-filter: blur(5px);
}
.slider-arrow:hover {
  background: var(--gold);
  color: var(--navy);
  border-color: var(--gold);
  transform: scale(1.1);
}
.slider-dots {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 12px;
  z-index: 10;
}
.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
  cursor: pointer;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}
.dot:hover {
  background: rgba(255, 255, 255, 0.6);
}
.dot.active {
  background: transparent;
  border-color: var(--gold);
  transform: scale(1.3);
}

@media (max-width: 991px) {
  .slide h1 {
    font-size: 3rem;
  }
}
@media (max-width: 768px) {
  .slide-inner { padding: 0 20px; text-align: center; margin: 0 auto; }
  .slide .hero-btns { justify-content: center; flex-direction: column; }
  .slide p { margin: 0 auto 30px; }
  .slider-controls { display: none; }
}

/* 2. Trust Bar */"""

css = re.sub(r'/\* 1\. Hero Section \*/.*?/\* 2\. Trust Bar \*/', new_hero_css, css, flags=re.DOTALL)

with open('style.css', 'w', encoding='utf-8') as f:
    f.write(css)

print("CSS injected successfully.")
