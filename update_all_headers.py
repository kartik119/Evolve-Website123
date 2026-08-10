import os
import re

HEADER_TEMPLATE = """<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <i class="fa-solid fa-shirt text-gold" style="font-size:1.8rem; margin-right:10px;"></i>
            <span style="font-family: var(--font-serif); font-size:1.3rem; font-weight:700; color:var(--navy); letter-spacing:1px;">EVOLVE<br><span style="font-size:0.5rem; letter-spacing:3px; font-family:var(--font-sans); color:var(--text-light); display:block; margin-top:2px;">CLOTHING CO.</span></span>
        </div>
        <nav class="main-nav">
            <ul style="display: flex; gap: 30px; list-style: none; margin: 0; padding: 0; align-items: center;">
                <li><a href="index.html"{INDEX_ACTIVE}>Home</a></li>
                <li><a href="about.html"{ABOUT_ACTIVE}>About Us</a></li>
                <li class="has-dropdown"><a href="services.html"{SERVICES_ACTIVE}>Our Services <i class="fa-solid fa-chevron-down" style="font-size:0.6rem; margin-left:2px;"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="services.html"{SERVICES_SUB_ACTIVE}>White-Label Manufacturing</a></li>
                        <li><a href="kids.html"{KIDS_SUB_ACTIVE}>Kidswear Manufacturing</a></li>
                        <li><a href="uniforms.html"{UNIFORMS_SUB_ACTIVE}>Uniform Manufacturing</a></li>
                    </ul>
                </li>
                <li><a href="gallery.html"{GALLERY_ACTIVE}>Gallery</a></li>
                <li><a href="manufacturing.html"{MFG_ACTIVE}>Research & Manufacturing</a></li>
                <li><a href="contact.html"{CONTACT_ACTIVE}>Contact</a></li>
            </ul>
        </nav>
        <div class="header-actions">
            <a href="#" class="icon-link"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="contact.html" class="icon-link"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="quote.html" class="btn btn-navy" style="padding: 12px 24px; font-size:0.75rem;">REQUEST QUOTE</a>
        </div>
    </div>
</header>"""

pages = {
    "index.html": {"INDEX_ACTIVE": ' class="active" style="color: var(--gold);"'},
    "about.html": {"ABOUT_ACTIVE": ' class="active" style="color: var(--gold);"'},
    "services.html": {"SERVICES_ACTIVE": ' class="active" style="color: var(--gold);"', "SERVICES_SUB_ACTIVE": ' class="active" style="color: var(--gold);"'},
    "kids.html": {"SERVICES_ACTIVE": ' class="active" style="color: var(--gold);"', "KIDS_SUB_ACTIVE": ' class="active" style="color: var(--gold);"'},
    "uniforms.html": {"SERVICES_ACTIVE": ' class="active" style="color: var(--gold);"', "UNIFORMS_SUB_ACTIVE": ' class="active" style="color: var(--gold);"'},
    "gallery.html": {"GALLERY_ACTIVE": ' class="active" style="color: var(--gold);"'},
    "manufacturing.html": {"MFG_ACTIVE": ' class="active" style="color: var(--gold);"'},
    "contact.html": {"CONTACT_ACTIVE": ' class="active" style="color: var(--gold);"'},
    "quote.html": {},
    "blogs.html": {},
    "blog-post.html": {},
    "privacy.html": {},
    "terms.html": {}
}

base_dir = "c:\\Users\\Kartik\\Desktop\\Evolve-Website-Export"

for filename, active_dict in pages.items():
    filepath = os.path.join(base_dir, filename)
    if not os.path.exists(filepath):
        continue
    
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()
    
    # Replace placeholders in header
    header_html = HEADER_TEMPLATE
    for key in ["INDEX_ACTIVE", "ABOUT_ACTIVE", "SERVICES_ACTIVE", "SERVICES_SUB_ACTIVE", "KIDS_SUB_ACTIVE", "UNIFORMS_SUB_ACTIVE", "GALLERY_ACTIVE", "MFG_ACTIVE", "CONTACT_ACTIVE"]:
        val = active_dict.get(key, "")
        header_html = header_html.replace("{" + key + "}", val)
    
    # Regex replace <header...> ... </header>
    new_content = re.sub(r'<header[^>]*>[\s\S]*?</header>', header_html, content, count=1)
    
    with open(filepath, "w", encoding="utf-8") as f:
        f.write(new_content)
    print(f"Updated header in {filename}")

print("All headers updated successfully!")
