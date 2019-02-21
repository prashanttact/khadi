/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';


	config.toolbar = [
        { name: 'basicstyles', items: [ 'Bold', 'Italic','Underline' ] },
      	//{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent' ] },
      	{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList' ] },
     //   { name: 'insert', items: [ 'HorizontalRule' ] },
        //{ name: 'styles', items: [ 'Font', 'FontSize' ] },
        //{ name: 'font', items: [ 'Font', 'FontSize' ] },
        { name: 'colors', items: [ 'TextColor'] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: ['Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
        { name: 'links', items: [ 'Link' ] },
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
    ];


    config.format_tags = 'p;h1;h2;h3;pre';



	// Simplify the dialog windows.
	//	config.removeDialogTabs = 'image:advanced;link:advanced';
	//config.extraPlugins = 'button';
	//config.extraPlugins = 'panelbutton';
	config.extraPlugins = 'colorbutton';
	CKEDITOR.config.allowedContent = true;
  CKEDITOR.config.autoParagraph = false;
  config.protectedSource.push(/<i[^>]*><\/i>/g);

};
