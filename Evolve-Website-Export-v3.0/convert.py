import os
import re

html_files = [
    ('uniforms.html', 'template-uniforms.php', 'Template Name: Uniforms'),
    ('gallery.html', 'template-gallery.php', 'Template Name: Gallery'),
    ('manufacturing.html', 'template-manufacturing.php', 'Template Name: Manufacturing'),
    ('contact.html', 'template-contact.php', 'Template Name: Contact'),
    ('quote.html', 'template-quote.php', 'Template Name: Quote'),
    ('privacy.html', 'template-privacy.php', 'Template Name: Privacy'),
    ('terms.html', 'template-terms.php', 'Template Name: Terms')
]

for html_file, php_file, template_name in html_files:
    if not os.path.exists(html_file):
        continue
        
    with open(html_file, 'r', encoding='utf-8') as f:
        content = f.read()
        
    # Extract between </header> and <footer
    match = re.search(r'</header>\s*(.*?)\s*<footer', content, re.DOTALL | re.IGNORECASE)
    if not match:
        print(f"Skipping {html_file}, no header/footer tags found.")
        continue
        
    main_content = match.group(1)
    
    # Replace images/ with get_template_directory_uri()
    main_content = main_content.replace('images/', '<?php echo get_template_directory_uri(); ?>/images/')
    
    # Replace .html links with home_url
    main_content = re.sub(r'href="([^"]+)\.html"', r'href="<?php echo esc_url( home_url( \'/\1\' ) ); ?>"', main_content)
    
    header = '<?php\n'
    if template_name:
        header += f'/* {template_name} */\n'
    header += 'get_header();\n?>\n\n'
    
    footer = '\n\n<?php\nget_footer();\n?>'
    
    final_php = header + main_content + footer
    
    with open(f'evolve-theme/{php_file}', 'w', encoding='utf-8') as f:
        f.write(final_php)
        
    print(f"Successfully converted {html_file} to {php_file}")
