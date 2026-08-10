import os

def replace_in_file(filename, start_line, end_line, replacement=""):
    with open(filename, 'r', encoding='utf-8') as f:
        lines = f.readlines()
    
    # 0-indexed
    del lines[start_line-1:end_line]
    if replacement:
        lines.insert(start_line-1, replacement + "\n")
        
    with open(filename, 'w', encoding='utf-8') as f:
        f.writelines(lines)

# gallery.html alt="School" -> alt="Uniform"
with open("gallery.html", "r", encoding="utf-8") as f:
    content = f.read()
content = content.replace('alt="School"', 'alt="Uniform"')
with open("gallery.html", "w", encoding="utf-8") as f:
    f.write(content)

# services.html block
replace_in_file("services.html", 340, 349)

# uniforms.html blocks
# Wait, because we delete lines, the line numbers will shift!
# We must delete from bottom to top so line numbers stay accurate for the upper ones.

replace_in_file("uniforms.html", 478, 484)
replace_in_file("uniforms.html", 272, 285)
replace_in_file("uniforms.html", 144, 149)

print("Final clean up done.")
