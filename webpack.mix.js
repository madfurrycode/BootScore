let mix = require( 'laravel-mix' );

mix.browserSync({
	proxy: 'http://wp.co.za/',
	files: [
		'**/*.php',
		'css/**/*.css',
		'js/**/*.js'
	],
	injectChanges: true,
	open: false
});

mix.autoload({
	jquery: ['$', 'window.jQuery', 'jQuery'],
});

mix.sass( 'sass/style.scss', 'style.css' );

if ( mix.inProduction() ) {
	mix.version();
}
