WIP Wordpress-Theme-for-Silent-Comics
=================================

Still rough — Working on it

![screenshot]

Coding is the *learning by doing* side of the project for me. Code review needed. Developers, designers and lovers of comics are welcome to write any finding to: hoa // @ // silent-comics.com

# Silent Comics Wordpress Theme

This is SilentComics — a simple Wordpress theme, designed for the upcoming [SILENT COMICS site](http://silent-comics.com). The theme, still in development, is free for everyone to use and adapt.

## Features:

Not much: white, light, one-column, fixed-layout, responsive-layout, custom-background, custom-colors, custom-header, custom-menu, featured-images, flexible-header, post-formats, editor-style.
Minimal look, custom posts format for comics, no sidebar, infinite scroll, large images. Custom login page. Large text set in [Fenix](http://j.mp/Fenix-MyFonts). The theme is light and works fine with the latest WordPress version (4.2.1).  

## Tested with these plugins:
Not part of the theme but suggested to display comics:

### For Image Slideshow:
- [Portfolio Slideshow Pro](http://momnt.co/downloads/portfolio-slideshow-pro) by [Momnt](http://momnt.co).

- [tiled-gallery-carousel-without-jetpack](https://wordpress.org/plugins/tiled-gallery-carousel-without-jetpack/) by RAJA CRN — a mirror of the Jetpack galleries options. As its name implies, it doesn’t require your site to connect with Jetpack. 

### Disqus comments

### Passes Theme-check
Although still not completed.

***

## Getting started

1. Download SilentComics file from GitHub

2. Zip SilentComics and upload as new theme into your WorPress dashboard

3. Create you menus 

3. Edit header.php to use your own logo
You can replace this bit with your site link:

`<h1 class="site-title"><a href="http://silent-comics.com" class="logo">
 <object type="image/svg+xml" data="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjQgNjIuODI2IiA+PHN0eWxlPi5zdHlsZTB7ZmlsbDogIzAwMDt9OmhvdmVyIHtmaWxsOiAjZmY1ZTVlO306dmlzaXRlZCB7ZmlsbDogI2ZmZjt9PC9zdHlsZT48cGF0aCBkPSJNOS42NzQgMjguMDczYy0yLjU2NCAwLTQuNDM1LTIuMDAxLTQuNzgyLTQuNDQ5bC0yLjYgMC43MzFjMC43NjMgMy43IDMuNiA2LjIgNy40IDYuMiA0LjIgMCA3LjUwOS0zLjIxMSA3LjUwOS03LjQwNCAwLTMuODEzLTIuNjI5LTUuMzcxLTUuNzM0LTYuNzM2TDkuOTMgMTUuNzE0Yy0xLjYxNy0wLjczMS0zLjc0LTEuNjg1LTMuNzQtMy43NSAwLTIuMTkzIDEuODM2LTMuNzE3IDMuOTYxLTMuNzE3IDIgMCAzLjIgMSA0LjEgMi42MDRsMi4xMjMtMS4zNjVjLTEuMjY4LTIuMzUzLTMuNTE4LTMuNzE4LTYuMTc5LTMuNzE4IC0zLjUgMC02LjY4NSAyLjM4Mi02LjY4NSA2LjEgMCAzLjQgMi40IDQuOSA1LjIgNi4xMzFsMS40NTggMC42MzVjMi4yMTkgMSA0LjQgMiA0LjQgNC43NjZDMTQuNTg2IDI2LjEgMTIuMiAyOC4xIDkuNyAyOC4wNzN6Ii8+PHJlY3QgeD0iMjYuNiIgeT0iNi4yIiB3aWR0aD0iMi43IiBoZWlnaHQ9IjI0Ii8+PHBvbHlnb24gcG9pbnRzPSIzOS44LDYuMiAzOS44LDMwLjEgNDkuMSwzMC4xIDQ5LjEsMjcuNyA0Mi41LDI3LjcgNDIuNSw2LjIiLz48cG9seWdvbiBwb2ludHM9IjY5LjgsOC43IDY5LjgsNi4yIDU3LjQsNi4yIDU3LjQsMzAuMSA2OS44LDMwLjEgNjkuOCwyNy43IDYwLjEsMjcuNyA2MC4xLDE4LjMgNjkuNSwxOC4zIDY5LjUsMTUuOCA2MC4xLDE1LjggNjAuMSw4LjciLz48cG9seWdvbiBwb2ludHM9Ijk4LjUsMjQuNyA3OS45LDUuMiA3OS45LDMwLjEgODIuNSwzMC4xIDgyLjUsMTEuNyAxMDEuMiwzMS4yIDEwMS4yLDYuMiA5OC41LDYuMiIvPjxwb2x5Z29uIHBvaW50cz0iMTA5LjcsOC43IDExNS41LDguNyAxMTUuNSwzMC4xIDExOC4yLDMwLjEgMTE4LjIsOC43IDEyNCw4LjcgMTI0LDYuMiAxMDkuNyw2LjIiLz48cGF0aCBkPSJNMTIuNDU0IDU3LjAyNmMyLjUzNCAwIDUuMDY3LTAuODU3IDcuMTI4LTIuMzV2LTMuMzA1Yy0xLjkgMS45MDYtNC41MjkgMy4xNzctNy4yMjMgMy4yIC01LjQgMC05LjY5NS00LjY0LTkuNjk1LTkuOTE0IDAtNS4yNzIgNC4zMDgtOS45MTIgOS42MjktOS45MTIgMi44IDAgNS40IDEuMiA3LjMgMy4xNzd2LTMuMzA0Yy0yLjEyNC0xLjU4OC00LjQ2Ny0yLjM1MS03LjEyOC0yLjM1MSAtNi44IDAtMTIuNDUyIDUuNjIzLTEyLjQ1MiAxMi40ODZDMC4wMDIgNTEuNSA1LjcgNTcgMTIuNSA1Ny4wMjZ6Ii8+PHBhdGggZD0iTTIyLjg3NiA0NC42NjdjMCA2LjkgNS42IDEyLjQgMTIuNSAxMi4zNThTNDcuNzggNTEuNiA0Ny44IDQ0LjY2N2MwLTYuODYyLTUuNjQtMTIuNDIzLTEyLjQ1Mi0xMi40MjNTMjIuODc2IDM3LjggMjIuOSA0NC42Njd6TTM1LjMyOCAzNC43MjJjNS40ODEgMCA5LjggNC41IDkuOCA5LjkgMCA1LjQwMi00LjM3NSA5LjkxNC05Ljc5MSA5LjkgLTUuNCAwLTkuNzkxLTQuNTEyLTkuNzkxLTkuOTE0QzI1LjUzNyAzOS4yIDI5LjggMzQuNyAzNS4zIDM0LjcyMnoiLz48cG9seWdvbiBwb2ludHM9IjQ5LjYsNTYuNiA1Mi40LDU2LjYgNTUuNCw0MC40IDU1LjUsNDAuNCA2My4yLDU3LjYgNzAuOSw0MC40IDcwLjksNDAuNCA3NCw1Ni42IDc2LjcsNTYuNiA3MS45LDMxLjMgNjMuMiw1MS40IDU0LjUsMzEuMyIvPjxyZWN0IHg9Ijc5LjgiIHk9IjMyLjciIHdpZHRoPSIyLjciIGhlaWdodD0iMjQiLz48cGF0aCBkPSJNOTguMjgxIDM0LjcyMmMyLjc1OCAwIDUuNCAxLjIgNy4zIDMuMTc3di0zLjMwNGMtMi4xMjEtMS41ODgtNC40NjUtMi4zNTEtNy4xMjctMi4zNTEgLTYuOCAwLTEyLjQ1MyA1LjYyMy0xMi40NTMgMTIuNSAwIDYuOCA1LjcgMTIuMyAxMi41IDEyLjMgMi41IDAgNS4wNjgtMC44NTcgNy4xMjctMi4zNXYtMy4zMDVjLTEuODk4IDEuOTA2LTQuNTI5IDMuMTc3LTcuMjI1IDMuMiAtNS40IDAtOS42OTUtNC42NC05LjY5NS05LjkxNEM4OC42NDggMzkuNCA5MyAzNC43IDk4LjMgMzQuNzIyeiIvPjxwYXRoIGQ9Ik0xMTYuMzA5IDU0LjU0OGMtMi41NjYgMC00LjQzNi0yLjAwMS00Ljc4My00LjQ0N2wtMi42IDAuNzI5YzAuNzYgMy43IDMuNiA2LjIgNy40IDYuMiA0LjIgMCA3LjUxMi0zLjIwOCA3LjUxMi03LjQwMSAwLTMuODE0LTIuNjMxLTUuMzctNS43MzYtNi43MzdsLTEuNTgyLTAuNjk3Yy0xLjYxNS0wLjczMi0zLjc0Mi0xLjY4Ni0zLjc0Mi0zLjc1IDAtMi4xOTEgMS44NC0zLjcxOCAzLjk2My0zLjcxOCAyIDAgMy4yIDEgNC4xIDIuNjA1bDIuMTIzLTEuMzY1Yy0xLjI2OC0yLjM1My0zLjUxNi0zLjcxOC02LjE4LTMuNzE4IC0zLjYgMC02LjY4NiAyLjM4NC02LjY4NiA2LjEgMCAzLjQgMi40IDQuOSA1LjIgNi4xMzRsMS40NTcgMC42MzVjMi4yMTkgMSA0LjQgMiA0LjQgNC43NjVDMTIxLjIyMSA1Mi42IDExOC45IDU0LjUgMTE2LjMgNTQuNTQ4eiIvPjxyZWN0IHk9IjYyLjEiIHdpZHRoPSIxMjQiIGhlaWdodD0iMC44Ii8+PHJlY3QgeT0iLTAuMSIgd2lkdGg9IjEyNCIgaGVpZ2h0PSIwLjgiLz48cmVjdCB4PSItMTI5LjIiIHk9Ii04OC40IiB3aWR0aD0iMC4yIiBoZWlnaHQ9IjAiLz48L3N2Zz4="></object></a></h1><div class="philactery"><object type="image/svg+xml" data="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PHBvbHlnb24gcG9pbnRzPSIxLC0wIDEwLDIwIDE5LC0wIi8+PC9zdmc+"></object></div>
<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2></div>`

and replace it with your own logo — you could use [Mobilefish's Base64 Encoder](http://www.mobilefish.com/services/base64/base64.php "Mobilefish's Base64 Encoder") to encode a SVG file.

## To do:

*	modify navigation to show first, previous, next, last ✓
*	fix said navigation icons — as svg symbols 
* design a minimal, custom post type for comics ✓
* Re-design the category archive page(s) with custom categories
* reverse WP default order for comics archive ✓
*	Page grid to display books / episodes if not in archive
*	Add columns for extra large images ✓
*	Fix 3 columns footer widget media queries ✓
*	style the sidebars properly
* Markup clean-up
* add / enable multiple stories by category ✓ 
* Redesign header.php 
* Improve header on mobile 
*	Fix comments JS, PHP & CSS 
*	Trim unused code
* style sticky post, pagelink and various post formats classes
*	Lots of small css tweaks and fixes
*	Redesign the whole theme from scratch using *Less* or *Sass* to ease future maintenance
*	Third parties integration (e-commerce, social media, etc.)
*	Add `<picture>`element support for responsive images. See [picturefill.js + WP](http://www.taupecat.com/2014/05/picturefill-js-wordpress/)
*	Improve 404 page
*	…

## Code review needed

Please test and suggest improvements, send your findings over to

hoa // @ // silent-comics.com

[screenshot]: http://silentcomics.com/images/screenshot.png
