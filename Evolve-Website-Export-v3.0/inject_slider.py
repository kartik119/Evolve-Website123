import os
import re

# 1. Update index.html
with open('index.html', 'r', encoding='utf-8') as f:
    html = f.read()

new_hero_html = """    <!-- 1. Hero Slider Section -->
    <section class="hero-slider-section">
        <div class="hero-slider">
            
            <!-- Slide 1 -->
            <div class="slide active" style="background-image: linear-gradient(rgba(15, 23, 42, 0.5), rgba(15, 23, 42, 0.7)), url('images/manufacturing_floor_1779783507422.png');">
                <div class="container slide-inner">
                    <div class="hero-subtitle">CUSTOM CLOTHING MANUFACTURING SINCE 2007</div>
                    <h1>Premium Clothing<br>Manufacturing for<br><span class="text-gold">Brands & Businesses</span></h1>
                    <p>Evolve Clothing specializes in custom shirts, uniforms, kidswear, white-label production, fabric sourcing, sampling, and bulk apparel manufacturing.</p>
                    <div class="hero-btns">
                        <a href="quote.html" class="btn btn-gold">REQUEST A QUOTE <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="manufacturing.html" class="btn btn-outline">OUR PROCESS</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide" style="background-image: linear-gradient(rgba(15, 23, 42, 0.5), rgba(15, 23, 42, 0.7)), url('images/team_hero_1779782609210.png');">
                <div class="container slide-inner">
                    <div class="hero-subtitle">PROFESSIONAL & DURABLE</div>
                    <h1>Corporate &<br>Institution <span class="text-gold">Uniforms</span></h1>
                    <p>High-quality, durable, and comfortable uniforms designed to reflect your brand's identity. From schools and hospitals to corporate and hospitality sectors.</p>
                    <div class="hero-btns">
                        <a href="uniforms.html" class="btn btn-gold">EXPLORE UNIFORMS <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide" style="background-image: linear-gradient(rgba(15, 23, 42, 0.5), rgba(15, 23, 42, 0.7)), url('images/fabric_sourcing_1779777197767.png');">
                <div class="container slide-inner">
                    <div class="hero-subtitle">END-TO-END SUPPORT</div>
                    <h1>Complete White-Label<br><span class="text-gold">Production Setup</span></h1>
                    <p>Launch your own clothing brand with our comprehensive white-label services, including fabric sourcing, custom tags, labeling, and premium packaging.</p>
                    <div class="hero-btns">
                        <a href="services.html" class="btn btn-gold">WHITE-LABEL SERVICES <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="slider-controls">
                <button class="slider-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="slider-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            
            <div class="slider-dots">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
            </div>

        </div>
    </section>"""

# Use regex to replace the old <section class="hero"> to </section>
html = re.sub(r'<!-- 1\. Hero Section -->.*?</section>', new_hero_html, html, flags=re.DOTALL)
with open('index.html', 'w', encoding='utf-8') as f:
    f.write(html)


# 2. Update style.css
with open('style.css', 'r', encoding='utf-8') as f:
    css = f.read()

new_hero_css = """/* ==========================================================================
   NEW HERO SLIDER
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

/* ==========================================================================
   2. Trust Bar """

css = re.sub(r'/\* ==========================================================================\n   2\. Trust Bar.*?(?=/\* ==========================================================================)', new_hero_css, css, flags=re.DOTALL)

with open('style.css', 'w', encoding='utf-8') as f:
    f.write(css)

# 3. Update script.js
with open('script.js', 'r', encoding='utf-8') as f:
    js = f.read()

new_js = """
    // Hero Slider Logic
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    let currentSlide = 0;
    let slideInterval;

    if (slides.length > 0) {
        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            let index = currentSlide + 1;
            if (index >= slides.length) index = 0;
            showSlide(index);
        }

        function prevSlide() {
            let index = currentSlide - 1;
            if (index < 0) index = slides.length - 1;
            showSlide(index);
        }

        function startSlider() {
            slideInterval = setInterval(nextSlide, 5000);
        }

        function resetSlider() {
            clearInterval(slideInterval);
            startSlider();
        }

        if (nextArrow) {
            nextArrow.addEventListener('click', () => {
                nextSlide();
                resetSlider();
            });
        }
        
        if (prevArrow) {
            prevArrow.addEventListener('click', () => {
                prevSlide();
                resetSlider();
            });
        }

        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                showSlide(index);
                resetSlider();
            });
        });

        startSlider();
    }
"""

js += new_js

with open('script.js', 'w', encoding='utf-8') as f:
    f.write(js)

print("Slider injected successfully.")
