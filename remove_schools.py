import os
import re
import glob

# A list of patterns to remove or replace
replacements = {
    # Home & Shared
    r"Brands, Schools & Businesses": "Brands & Businesses",
    r"Brands, Schools, & Businesses": "Brands & Businesses",
    r"brands, schools, corporates, and institutions": "brands, corporates, and institutions",
    r"for schools, retail brands": "for retail brands",
    r"Ideal for schools, retail brands": "Ideal for retail brands",
    r"for Schools, Corporates & Institutions": "for Corporates & Institutions",
    r"for schools, companies, hospitality": "for companies, hospitality",
    r"brands, schools and businesses": "brands and businesses",
    r'<div class="ind-item"><i class="fa-solid fa-school"></i><span>Schools &<br>Colleges</span></div>\n?': '',
    r'<div class="faq-item">\s*<div class="faq-question">Do you manufacture school uniforms\? <i class="fa-solid fa-plus faq-icon"></i></div>\s*<div class="faq-answer">Absolutely\. We provide end-to-end uniform manufacturing for schools, complete with customized sizing\.</div>\s*</div>\n?': '',
    r'<div class="uc-item">\s*<i class="fa-solid fa-graduation-cap"></i>\s*<span>School<br>Uniforms</span>\s*</div>\n?': '',

    # About
    r'<div class="ind-item"><i class="fa-solid fa-school"></i><span>Schools &<br>Colleges</span></div>': '',

    # Services
    r'corporates, schools, institutions': 'corporates, institutions',
    r'for schools, brands and retailers': 'for brands and retailers',
    r'School, corporate, hospitality & healthcare uniforms': 'Corporate, hospitality & healthcare uniforms',
    r'Ideal for schools, retailers & brands': 'Ideal for retailers & brands',
    r'<div class="service-detail-item" style="display: flex; gap: 20px; align-items: flex-start; padding: 25px; border: 1px solid var\(--border-color\); border-radius: 8px;">\s*<div style="flex-shrink: 0;">\s*<i class="fa-solid fa-school text-navy" style="font-size: 1\.8rem; margin-bottom: 10px;"></i>\s*<h4 style="font-size: 0\.85rem; margin: 0;">Schools & Colleges</h4>\s*</div>\s*<div style="flex: 1;">\s*<p style="margin: 0; font-size: 0\.9rem; color: var\(--text-light\); line-height: 1\.5;">End-to-end uniform production including trousers, skirts, blazers, PE kits, and custom logo embroidery with durable materials.</p>\s*</div>\s*</div>\n?': '',
    r'kidswear for brands and schools': 'kidswear for brands',
    r'uniform orders for schools or corporates': 'uniform orders for corporates',
    r'<div class="faq-item">\s*<div class="faq-question">\s*<h4 style="margin:0; font-size: 1rem; color: var\(--navy\);">Can you handle large uniform orders for schools or corporates\?</h4>\s*<i class="fa-solid fa-plus faq-icon"></i>\s*</div>\s*<div class="faq-answer" style="display: none; padding-top: 15px; font-size: 0\.9rem; color: var\(--text-color\); line-height: 1\.6;">\s*Yes, we have high-capacity production lines dedicated to bulk uniform manufacturing for institutions and large corporations.\s*</div>\s*</div>': '<div class="faq-item">\n                            <div class="faq-question">\n                                <h4 style="margin:0; font-size: 1rem; color: var(--navy);">Can you handle large uniform orders for corporates?</h4>\n                                <i class="fa-solid fa-plus faq-icon"></i>\n                            </div>\n                            <div class="faq-answer" style="display: none; padding-top: 15px; font-size: 0.9rem; color: var(--text-color); line-height: 1.6;">\n                                Yes, we have high-capacity production lines dedicated to bulk uniform manufacturing for large corporations.\n                            </div>\n                        </div>',
    
    # Kids
    r'for schools, retail brands, boutiques': 'for retail brands, boutiques',
    r'everyday wear to school uniforms and occasion outfits': 'everyday wear to occasion outfits',
    r'<div style="text-align: center; padding: 20px;">\s*<img src="images/cat_3\.jpg" alt="School Uniforms" style="width: 60px; height: 60px; border-radius: 50%;">\s*<h4 style="margin: 0 0 5px 0; font-size: 1rem; color: var\(--navy\);">School Uniforms</h4>\s*<p style="margin: 0; font-size: 0\.75rem; color: var\(--text-light\);">Smart, durable uniforms for schools\.</p>\s*</div>\n?': '',
    r'<button class="filter-btn" data-filter="uniforms" style="[^"]+">School Uniforms</button>\n?': '',
    r'<div class="faq-item" style="border-bottom: 1px solid var\(--border-color\); padding: 20px 0;">\s*<div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">\s*<h4 style="margin:0; font-size: 0\.95rem; color: var\(--navy\);">Do you manufacture school uniforms\?</h4>\s*<i class="fa-solid fa-plus faq-icon"></i>\s*</div>\s*<div class="faq-answer" style="display: none; padding-top: 15px; font-size: 0\.9rem; color: var\(--text-color\); line-height: 1\.6;">Yes, school uniforms are one of our core specialties\. We manufacture durable, comfortable, and smart uniforms including polos, trousers, skirts, blazers, and sports kits\.</div>\s*</div>\n?': '',

    # Gallery
    r'<div style="flex: 1 1 20%;"><img src="images/gal_hero_2\.jpg" alt="School Suit"></div>\n?': '',
    r'<button data-filter="school">School Uniforms</button>\n?': '',
    r'<div class="gal-item filter-item uniforms school">\s*<img src="images/gal_item_2\.jpg" alt="School Uniforms">\s*<div class="gal-overlay">\s*<h3 style="font-size: 1\.2rem; color: white; margin-bottom: 5px;">School Uniforms</h3>\s*<p style="font-size: 0\.85rem; color: rgba\(255,255,255,0\.8\);">\s*<i class="fa-regular fa-folder-open" style="color: var\(--gold\);"></i> School Uniforms\s*</p>\s*</div>\s*</div>\n?': '',
    r'<div style="margin-bottom: 30px;">\s*<img src="images/gal_cur_2\.jpg" alt="School" style="width: 100%; height: 180px; object-fit: cover; border-radius: 6px; margin-bottom: 15px;">\s*<h5 style="font-size: 0\.9rem; color: var\(--navy\); margin-bottom: 5px;">School Uniform Collection</h5>\s*<p style="font-size: 0\.8rem; color: var\(--text-light\); margin: 0;">Durable fabrics and comfort fits\.</p>\s*</div>\n?': '',
    r'School, corporate, industrial & hospitality uniforms\.': 'Corporate, industrial & hospitality uniforms.',
    r'<p>INTERNATIONAL SCHOOL</p>': '',

    # Quote
    r'<option value="school">School Uniforms</option>\n?': '',

    # Uniforms
    r'for school, corporate teams, hospitality': 'for corporate teams, hospitality',
    r'<div style="grid-column: 1/2; grid-row: 1/2;"><img src="images/uni_hero_1\.jpg" alt="School"></div>\n?': '',
    r'<div style="background: var\(--white\); border-radius: 8px; padding: 25px 20px; text-align: center; border: 1px solid var\(--border-color\); transition: all 0\.3s ease;" class="hover-shadow">\s*<img src="images/uni_cat_1\.jpg" alt="School" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; margin-bottom: 20px;">\s*<h4 style="margin: 0 0 8px 0; font-size: 1rem; color: var\(--navy\);">School Uniforms</h4>\s*<p style="margin: 0; font-size: 0\.85rem; color: var\(--text-light\); line-height: 1\.5;">Durable and comfortable daily wear uniforms and sports kits\.</p>\s*</div>\n?': '',
    r'<div class="container" style="display: flex; gap: 60px; align-items: center; margin-bottom: 100px;">\s*<div style="flex: 1;">\s*<h3 style="font-size: 1\.6rem; color: var\(--navy\); margin-bottom: 25px;">School Uniform Manufacturing</h3>\s*<ul style="list-style: none; padding: 0; margin: 0 0 30px 0; color: var\(--text-color\); font-size: 0\.95rem;">\s*<li style="margin-bottom: 15px; display: flex; gap: 10px;"><i class="fa-solid fa-circle-check text-gold" style="margin-top: 4px;"></i> Consistent colors to reflect school identity</li>\s*<li style="margin-bottom: 15px; display: flex; gap: 10px;"><i class="fa-solid fa-circle-check text-gold" style="margin-top: 4px;"></i> Comfortable & durable fabrics for active kids</li>\s*<li style="margin-bottom: 15px; display: flex; gap: 10px;"><i class="fa-solid fa-circle-check text-gold" style="margin-top: 4px;"></i> Available in all custom sizes</li>\s*</ul>\s*<a href="uniforms.html" class="btn btn-primary" style="font-size: 0\.85rem;">EXPLORE SCHOOL UNIFORMS <i class="fa-solid fa-arrow-right" style="margin-left:8px;"></i></a>\s*</div>\s*<div style="flex: 1;">\s*<img src="images/uni_feat_school\.jpg" alt="School Kids" style="width: 100%; height: 300px; object-fit: cover;">\s*</div>\s*</div>\n?': '',
    r'<div class="faq-item" style="border-bottom: 1px solid var\(--border-color\); padding: 20px 0;">\s*<div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer;">\s*<h4 style="margin:0; font-size: 0\.95rem; color: var\(--navy\);">Do you manufacture for both schools & corporates\?</h4>\s*<i class="fa-solid fa-plus faq-icon"></i>\s*</div>\s*<div class="faq-answer" style="display: none; padding-top: 15px; font-size: 0\.9rem; color: var\(--text-color\); line-height: 1\.6;">Yes, we have dedicated production lines for both durable school uniforms and high-end corporate/hospitality wear\.</div>\s*</div>\n?': '',
}

def remove_schools():
    files = glob.glob('*.html')
    for file in files:
        with open(file, 'r', encoding='utf-8') as f:
            content = f.read()
        
        for pattern, replacement in replacements.items():
            content = re.sub(pattern, replacement, content, flags=re.IGNORECASE)
            
        with open(file, 'w', encoding='utf-8') as f:
            f.write(content)
            
if __name__ == '__main__':
    remove_schools()
    print("Done removing schools from HTML.")
