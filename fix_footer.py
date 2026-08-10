import os
import glob

html_files = glob.glob('*.html')

target_block = """            </a>
        </div>
            </div>
            <p style="font-size: 0.75rem; color: rgba(255,255,255,0.7); line-height: 1.6; margin-bottom: 20px;">We develop & deliver modern textiles with precision manufacturing, sustainable practices, and a passion for creating excellence.</p>"""

replacement_block = """            </a>
        </div>
            <p style="font-size: 0.75rem; color: rgba(255,255,255,0.7); line-height: 1.6; margin-bottom: 20px;">We develop & deliver modern textiles with precision manufacturing, sustainable practices, and a passion for creating excellence.</p>"""

for file in html_files:
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    if target_block in content:
        new_content = content.replace(target_block, replacement_block)
        with open(file, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Fixed {file}")
    else:
        print(f"Target block not found in {file}")
