/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.

/*	config.toolbar = [
	{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic'] },
	//{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
	{ name: 'colors', groups: [ 'TextColor', 'BGColor' ] },
	//{ name: 'styles', items: [ 'Font', 'FontSize' ] },
	'/',
//	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
//	{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
//	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
//	{ name: 'insert', items: [ 'Table', 'HorizontalRule', 'SpecialChar', 'Smiley', 'PageBreak' ] },
//	{ name: 'page', items: [ 'Borders' ] },
//	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Scayt' ] },
//	{ name: 'tools', items: [ 'ShowBlocks' ] },
//	{ name: 'others', items: [ '-' ] },
	'/',
//	{ name: 'damaaas', items: [ 'Signature', 'InsertFieldCombo', 'Field', 'Libraryimage' ] },
	'/'
];*/


    config.toolbar = [
        { name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
      	//{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent' ] },
      	{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList' ] },
     //   { name: 'links', items: [ 'Link', 'Unlink' ] },
     //   { name: 'insert', items: [ 'HorizontalRule' ] },
        //{ name: 'styles', items: [ 'Font', 'FontSize' ] },
        //{ name: 'font', items: [ 'Font', 'FontSize' ] },
        { name: 'colors', items: [ 'TextColor'] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
    ];




	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.

	//config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';



	// Simplify the dialog windows.
	//	config.removeDialogTabs = 'image:advanced;link:advanced';
	//config.extraPlugins = 'button';
	//config.extraPlugins = 'panelbutton';
	config.extraPlugins = 'colorbutton';
	CKEDITOR.config.allowedContent = true;
};



