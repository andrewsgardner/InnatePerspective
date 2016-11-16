# InnatePerspective

When finished, InnatePerspective will be a responsive WordPress theme ideal for musicians or journalists. Its charm lies in having a partially translucent header that displays page content as users scroll or swipe up.

This theme will help facilitate the promotion and presentation of digital media assets. Its design is still under development and the current release shouldn't be used in production environments.

Live Demo: [https://www.andrewsgardner.com/code/innate-perspective/](https://www.andrewsgardner.com/code/innate-perspective/)

# Changelog

### Version 0.1.0
- **Added:**   Support added for automatically injecting header comments into JS files with Gulp (via gulp-header pkg).
- **Updated:** Replaced $htmlLayout[''] elements with openGridContainer(), closeGridContainer(), openContent(), and closeContent() functions.
- **Updated:** Converted all pre-processed units in SCSS from em to px.
- **Updated:** Changed the query string parameter for jQuery to v1.12.4.
- **Updated:** Changed the styling/positioning of the search box, buttons, and copyright info in the footer.
- **Added:**   Added input::-moz-focus-inner pseudo element to reduce the size of all input elements in FF.
- **Removed:** Deleted the icons image folder.
- **Added:**   Added get_admin_url() to the a tag with .active-user in footer.php.

### Version 0.0.1
- **Added:**   AdaptiveNav first pre-release code for testing purposes.
