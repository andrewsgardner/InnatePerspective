Theme Name: InnatePerspective

Author:     Andrew S. Gardner
Author URI: https://www.andrewsgardner.com
Version:    v0.1.0

-----------------------------------------------------------------------------
	Copyright & Licenses
-----------------------------------------------------------------------------

InnatePerspective WordPress Theme, Copyright 2016 Andrew S. Gardner
InnatePerspective is distributed under the terms of the GNU GPL

The following frameworks libraries, graphics, fonts or other files as listed have been used in developing this theme.

    [1] Item:        jQuery
        Item URL:    http://jquery.com/
        License:     MIT
        License URL: https://opensource.org/licenses/MIT
    
    [2] Item:        Della Respira Font
        Item URL:    https://www.google.com/fonts/specimen/Della+Respira
        License:     SIL Open Font License 1.1
        License URL: http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL

-----------------------------------------------------------------------------
	Changelog
-----------------------------------------------------------------------------

Version 0.0.1
- Added:   AdaptiveNav first pre-release code for testing purposes.

Version 0.1.0
- Added:   Support added for automatically injecting header comments into JS files with Gulp (via gulp-header pkg).
- Updated: Replaced $htmlLayout[''] elements with openGridContainer(), closeGridContainer(), openContent(), and closeContent() functions.
- Updated: Converted all pre-processed units in SCSS from em to px.
- Updated: Changed the query string parameter for jQuery to v1.12.4.
- Updated: Changed the styling/positioning of the search box, buttons, and copyright info in the footer.
- Added:   Added input::-moz-focus-inner pseudo element to reduce the size of all input elements in FF.