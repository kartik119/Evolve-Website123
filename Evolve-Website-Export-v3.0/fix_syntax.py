import os
import re
import glob

# Process all .php files in evolve-theme to remove the backslash before quotes
for php_file in glob.glob('evolve-theme/*.php'):
    with open(php_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Fix the PHP syntax error: \' -> '
    fixed_content = content.replace("\\'", "'")
    
    with open(php_file, 'w', encoding='utf-8') as f:
        f.write(fixed_content)
        
print("Fixed PHP syntax errors.")
