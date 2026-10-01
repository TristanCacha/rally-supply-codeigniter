from pathlib import Path
from zipfile import ZipFile, ZIP_DEFLATED
root = Path(r'C:\Users\tbcachapero\Documents\Codex\2026-09-26\using\outputs\pickleball-pos')
out = root.parent / 'Rally-Supply-CodeIgniter-Project.zip'
with ZipFile(out, 'w', ZIP_DEFLATED) as z:
    for path in root.rglob('*'):
        if not path.is_file():
            continue
        rel = path.relative_to(root)
        parts = rel.parts
        if '.env' in parts or 'vendor' in parts or (len(parts) > 1 and parts[0] == 'writable' and parts[1] in {'cache', 'logs'}):
            continue
        z.write(path, Path('pickleball-pos') / rel)
print(out, out.stat().st_size)
