/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	var locale = document.getElementsByTagName("html")[0].getAttribute("lang");
	 config.language =  locale;
	// config.uiColor = '#AADC6E';
	 // Default language direction
	 config.contentsLangDirection = 'rtl';  
};

    
 