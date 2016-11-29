# Website

- [Introduction](#intro)
- [Pages](#pages)
  - [Pretty URLs](#pretty)
  - [Index Page](#index)
  - [404 Page](#404)
  - [Navigation](#nav)

{#intro}
## [](#intro) Introduction
Sereno provides a beautiful template for your website out of the box. You have
to write your content in Markdown files and Sereno will take care of rest.

{#pages}
## [](#pages) Pages
In `content` directory, you would found two files `index.md` and `about.md`,
these files would render to most important pages (namely the home page `/` and
the about page `/about`) of your website.

Pages are simple Markdown. For example: `about.md` file.
``` markdown
# About Me

This is an about me page.
```

You can customize using YAML at the front of the page.

``` markdown
---
pageTitle: About Me -
---

# About Me

This is an about me page.
```

{#pretty}
####  Pretty URLs
Sereno creates pretty URLs for your website.

For example:
- `foo.md` generates `/foo`
- `foo/bar.md` generates `/foo/bar`

{#index}
#### Index Page
Files named `index.md` or `index.blade.php` generate an index page which is
creates `/` link instead of `/index`.

Also, there is special design for `content/index.md` to generate your home page.

{#404}
#### 404 Page
If `404.html` is present in public directory then most web server present it as
a custom 404 (Page Not Found Error) page. Sereno is smart enough generate
`404.html` from `404.md`.

{#nav}
#### Navigation
Sereno has a responsive navigation bar out of the box. You can customize it
form `content/_includes/base.blade.php`.


<br><br><br>
- - - - - - - - - -
[Edit this page on Github](https://github.com/znck/sereno.in/edit/master/docs/website.md)
