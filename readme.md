# SEMBILAN ORGANIZER WP THEME


## Kontribusi 
Ketika ingin membuat branch baru, ada convention aturan menggunakan branch, harus menggunakan prefix dan menggunakan snake case style seperti dibawah ini: 
`tambah_konfig_tema`
dengan ini akan membuat nama branch lebih intuitif.

Ketika membuat branch baru, gunakan slash notation dengan prefix seperti `fitur/tambah_konfig_tema`, berikut list prefix yang harus ada: 

| Prefix            | Description                               |
| ----------------- | ----------------------------------------- |
| fix               | bug fixes                                 |
| feature           | new implementations                       |
| chore             | maintain, updates                         |
| refactor          | improvements / optimizations              |
| hotfix            | workarounds (need to be merged to master) |
| docs              | documentation                             |
| style             | formatting styles                         |

**Kegunaan**



**`git`** akan membuat folder terpisah di dalam `.git/refs/heads/` pada remote direktori repositori anda. Sepanjang anda menggunakan proyek pada repositori ini, dan menggunakan naming convention diatas, anda akan meliat setiap perubahan berdasarkan sub-folder dari setiap fitur yang anda buat

```
|- .git/refs/heads
  |- feature
    |- csv-downloader
    |- landing-page
      |- parallax
      |- carousel
      |- explainer-video
  |- refactor
     |- csv-downloader
     |- landing-page
      |- parallax
      |- carousel
      |- explainer-video
  |- fix
    |- csv-downloader
    |- landing-page
      |- parallax
      |- carousel
      |- explainer-video
```

Selama ada memperhatikan list diatas, anda bisa menggunakan kembali nama branch atau dengan prefix yg berbeda. Misal anda memulai dengan `feature/csv_downloader` lalu `refactor/csv-downloader` dengan melakukan ini anda dapat dengan depat mengetahui cabang mana yang telah mencapai stage yang berbeda, dan anda bisa mengelompokannya dengan mudah dengan menggunakan `git pattern matching options`.

``` bash
$ git branch --list "feature/*"

feature/csv-downloader
feature/landing-page

$ git branch --list "*/csv-downloader"

feature/csv-downloader
fix/csv-downloader
refactor/csv-downloader
```