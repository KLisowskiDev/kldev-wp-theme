# Motyw startowy kldev

Stworzony na własne potrzeby motyw startowy dla Wordpress-a, kompatybilny z ACF PRO i Boostrap 5

# Instalacja

```bash
npm i
```

# Wymagania - pluginy

- ACF PRO

Opcjonalnie
- Bootstrap Blocks (w Gutenberg-u możemy korzystać z Bootstrap-owych: container, row, columns)

# Live Reload i Watch na modyfikowane pliki

```bash
npm run start
```

W pliku gulpfile.js zmieniamy w configu wartość proxy dla naszego folderu z instalacją worpress-a.

# ACF-JSON

W folderze /acf-json zapisywane są ustawienia pól, które możemy importować i sychronizować między projektami. 