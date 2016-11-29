# Hosting

- [Introduction](#intro)
- [Providers](#providers)
  - [Github Pages](#github)

{#intro}
## [](#intro) Introduction
Sereno generates plain HTML website. So, you can host your website from any
hosting service provider.

{#providers}
## [](#providers) Providers

{#github}
#### Github Pages
Github Pages offers free of cost hosting for static websites. So, it was
natural to provide builtin support for hosting on Github Pages. Use following
command to deploy your code to Github Pages:

    php sereno deploy

By default, Sereno pushes your project code to current branch and website code
to `master` branch. You can override this behavior by setting `branch` value
under `github` option in `config.php`.


<br><br><br>
- - - - - - - - - -
[Edit this page on Github](https://github.com/znck/sereno.in/edit/master/content/_docs/hosting.md)
