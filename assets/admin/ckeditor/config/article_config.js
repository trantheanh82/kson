/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

  config.baseHref = '/assets/';
	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [

		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'tools' },
		{ name: 'clipboard',   groups: [ 'undo', 'clipboard' ] },
		{ name: 'links' },
		{ name: 'insert', groups: ['images']},
		/*{ name: 'forms' },*/
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks','align'] },
		{ name: 'styles' },
		{ name: 'colors', groups: ['colorbutton'] },
		{ name: 'about' }
	];

	config.width = '100%';

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	//config.removeDialogTabs = 'link:advanced;image:file;image:Upload';

	config.filebrowserBrowseUrl = '/filemanager/dialog.php?type=1&akey=abc&editor=ckeditor&relative_url=0&fldr=';
	config.filebrowserUploadUrl = '/filemanager/dialog.php?type=1&akey=abc&editor=ckeditor&relative_url=0&fldr=';
	config.filebrowserImageBrowseUrl = '/filemanager/dialog.php?type=1&akey=abc&editor=ckeditor&relative_url=0&fldr=';

  config.protectedSource.push(/<i[^>]*><\/i>/g);

    config.extraPlugins = 'colorbutton,colordialog,stylesheetparser,sourcedialog';
	//config styleset
	//config.stylesSet = 'my_styles';
	//config.allowedContent = 'div[*]{*} span{*} p{*}';
  config.allowedContent = true;
	//config.extraAllowedContent = 'div{*};span{*};p{*}';

  config.stylesheetParser_skipSelectors = /(^body\.|^caption\.|\.high|^\.)/i;
  config.stylesheetParser_validSelectors = /\^(div|p|span|h1|h2|h3|h4|h5|h6|i)\.\w+|^(\.w+\-\w+)/;

  config.stylesSet = [];
  config.contentsCss = ["/assets/dangtuyen/css/editor_style.css"];


  config.image_alignClasses = [ 'align-left', 'align-center', 'align-right' ];
  config['placeholder'] = "Enter Content Here";

	//config.options.fileRoot = '/assets/upload/';
};
