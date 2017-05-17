var gulp = require('gulp'),
		plumber = require('gulp-plumber'),
		rename = require('gulp-rename'),
		autoprefixer = require('gulp-autoprefixer'),
		concat = require('gulp-concat'),
		uglify = require('gulp-uglify'),
		minifycss = require('gulp-minify-css'),
		stylus = require('gulp-stylus'),
		browserSync = require('browser-sync'),
		rupture = require('rupture'),
		nib = require('nib'),
		cleanCSS = require('gulp-clean-css'),
		CleanCSS = require('clean-css'),
		criticalcss = require("criticalcss"),
		fs = require("fs"),
		//penthouse = require('penthouse'),
		uncss = require('gulp-uncss'),
		Uncss = require('uncss');
		//critical = require('critical');

var criticalPages = [{
	url : 'http://local.xoximilco.com/en/',
	name : 'index',
	parent : 'home'
},
{
	url : 'http://local.xoximilco.com/en/xoximilco-tour/',
	name : 'entrada',
	parent : 'xoximilco'
}
// {
// 	url : 'http://local.xoximilco.com/en/how-to-get-to-xoximilco/',
// 	name : 'como-llegar'
// },
// {
// 	url : 'http://local.xoximilco.com/en/xoximilco-facilities/',
// 	name : 'instalaciones'
// },
// {
// 	url : 'http://local.xoximilco.com/en/xoximilco-tour/',
// 	name : 'entrada'
// }
];

var paths = {
	scripts: [
	'../assets/input/js/ender.min.js',
	'../assets/input/js/bootstrap-native.js',
	'../assets/input/js/response.min.js',
	//'../assets/input/js/velocity.min.js',
	//'../assets/input/js/velocity.ui.js',
	//'../assets/input/js/basket.min.js',
	//'../assets/input/js/hammer.min.js',
	],
	reqHome : [
		'input/js/reqConfig.js',
		//'input/js/reqS.js',
		//'input/js/reqP.js',
		'input/js/reqJS.js',
		//'mail'
	],
	reqXplor : [
		'input/js/reqConfigXplor.js',
		//'input/js/reqS.js',
		//'input/js/reqP.js',
		'input/js/reqJS.js', // CUSTOM FUNCTIONS
		//'mail'
	],
	reqXplorF : [
		'input/js/reqConfigXplorF.js',
		//'input/js/reqS.js',
		//'input/js/reqP.js',
		'input/js/reqJS.js',
		//'mail'
	],
	faqs : [
		'../assets/input/js/faqs.js',
	]
};

// gulp.task('browser-sync', function() {
// 	browserSync({
// 		// server: {
// 		//    baseDir: "local.test"
// 		// }
// 		proxy: "local.sitios2017.experienciasxcaret.mx/parques"
// 	});
// });

gulp.task('bs-reload', function () {
	browserSync.reload();
});


gulp.task('styles', function(){

	gulp.src(['../assets/input/stylus/init.styl'])
		.pipe(plumber({
			errorHandler: function (error) {
				console.log(error.message);
				this.emit('end');
		}}))
		.pipe(stylus({'include css': true, use: [nib()]}))
		//.pipe(gulp.dest('../assets/output/css/'))
		.pipe(rename({basename:'main',suffix: '.min',extname: ".css"}))
		.pipe(cleanCSS())
		.pipe(gulp.dest('../assets/output/css/'))
		.pipe(browserSync.reload({stream:true}))

});

// gulp.task('critical', function(){
	
// 	criticalPages.map(function(pages) {
	// 	gulp.src(['../assets/output/css/main.min.css'], { overwrite : true })
	// 	.pipe( uncss({ 
	// 		html : [ pages.url ],
	// 		ignore : ['/body/']
	// 	}))
	// 	.pipe(gulp.dest('../app/texts/'+ pages.parent + '/' + pages.name + '/' ,{ overwrite : true }))
	// 	require('fs').writeFile('../app/texts/' + pages.parent + '/' + pages.name +'/' + pages.name + '.css', minified);

// 		penthouse({
// 			url: pages.url,
// 			css : '../assets/output/css/main.min.css',
// 		 	width: 767,
// 		 	height: 768,
// 		 	blockJSRequests : true,
// 		 	forceInclude : [
// 		 		'.backdrop',
// 		 		'.header--item .button',
// 		 		'.carousel-indicators',
// 		 		'.booking'
// 		 	]
// 		},
// 		function(err, criticalCss) {
// 			if( err ){

// 			}
			
// 			var source = criticalCss;
// 			var minified = new CleanCSS().minify(source).styles;
// 			fs.writeFile('../app/texts/' + pages.parent + '/' + pages.name + '/' + pages.name + '.volt', minified);
// 		});

// 	});
// });


gulp.task('faqs', function(){
	return gulp.src(paths.faqs)
		.pipe(plumber({
			errorHandler: function (error) {
				console.log(error.message);
				this.emit('end');
		}}))
		.pipe(concat('faqs.min.js'))
		//.pipe(gulp.dest('../assets/output/js/'))
		//.pipe(rename({suffix: '.min',extname: ".js"}))
		.pipe(uglify())
		.pipe(gulp.dest('../assets/output/js/'))
		.pipe(browserSync.reload({stream:true}))
});

gulp.task('scripts', function(){
	return gulp.src(paths.scripts)
		.pipe(plumber({
			errorHandler: function (error) {
				console.log(error.message);
				this.emit('end');
		}}))
		.pipe(concat('libs.min.js'))
		//.pipe(gulp.dest('../assets/output/js/'))
		//.pipe(rename({suffix: '.min',extname: ".js"}))
		.pipe(uglify())
		.pipe(gulp.dest('../assets/output/js/'))
		.pipe(browserSync.reload({stream:true}))
});

gulp.task('requireHome', function(){
  return gulp.src(paths.reqHome) // declarar rutas en variable "paths"
    .pipe(concat('mainHome.js'))
    .pipe(uglify())
    .pipe(gulp.dest('../assets/output/js/'))
    .pipe(browserSync.reload({stream:true, once: true}));
});

// gulp.task('requireXplor', function(){
//   return gulp.src(paths.reqXplor) // declarar rutas en variable "paths"
//     .pipe(concat('mainXplor.js'))
//     .pipe(uglify())
//     .pipe(gulp.dest('../assets/output/js/'))
//     .pipe(browserSync.reload({stream:true, once: true}));
// });

// gulp.task('requireXplorF', function(){
//   return gulp.src(paths.reqXplorF) // declarar rutas en variable "paths"
//     .pipe(concat('mainXplorF.js'))
//     .pipe(uglify())
//     .pipe(gulp.dest('../assets/output/js/'))
//     .pipe(browserSync.reload({stream:true, once: true}));
// });

gulp.task('default', function(){
	gulp.watch("../assets/input/stylus/**/*.styl", ['styles']);
	gulp.watch("../assets/input/js/**/*.js", ['scripts','faqs','requireHome']);
	gulp.watch(["../*.html","../*.php","../templates/**/*.php","../app/views/**/*.volt","../app/views/**/*.volt.php"], ['bs-reload']);
});