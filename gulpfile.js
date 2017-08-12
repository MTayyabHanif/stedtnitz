/*
*
*
*  This is an automation of CSS HTML starter Pack
*
* When you download it or find it as it is, you need to install by typing cmd:
* CMD: npm install
* 
*After installing all dependencies you can run it by typing cmd:
*CMD: gulp
*
* Images will be minified, CSS will be minified and prefixes will be added,  
* JS will be uglified andall JS files will be combined into ONE file and
* HTML files and all other minified & uglified files will be transferred into your
*  distribution folder. when you build your project for distribution.
* 
* When you are ready for distribution or want to build, you have to type cmd:
*CMD: gulp build
*
* If you want RTL support in your CSS, you have to type this cmd after building your project:
* CMD: gulp rtl-css
* 
* 
*/




// 
// ALL Variables
// 
var gulp 		= require('gulp'),
gutil		 	= require('gulp-util'),
rename   		= require('gulp-rename'),

scss 			= require('gulp-ruby-sass'),
sourcemaps 	= require('gulp-sourcemaps'),
postcss 		= require('gulp-postcss'),
autoprefixer 	= require('autoprefixer'),
rtlcss 			= require('rtlcss'),
cleanCSS       	= require('gulp-clean-css'),

jshint 		= require('gulp-jshint'),
uglify         		= require('gulp-uglify'),
concat 		= require('gulp-concat'),

cache          		= require('gulp-cache'),
imagemin       	= require('gulp-imagemin'),

livereload    	= require('gulp-livereload'),

rootDir 		= './',
source 		= 'assets/',

destination 	= 'assets/distribution/';




//	JS files are linting by an linter and combining into one file
gulp.task('js', function() {
	gulp.src([
	         '!assets/js/scripts/jquery.js', // ignoring Jquery - call it in WP by using function or make <script> tag of it
	         source + 'js/scripts/*.js'
	         ])
	.pipe(jshint('./.jshintrc'))
	.pipe(jshint.reporter('jshint-stylish'))
	.pipe(concat('scripts.min.js'))
	.pipe(gulp.dest(source + 'js/'))
	.pipe(livereload());
	cache.clearAll();
});






// SCSS is being converted into CSS
gulp.task('scss-to-css',function () {
	return scss(source + 'scss/style.scss', {
		sourcemap: false
		// style: 'compressed'
	})
	.on('error', function (err) {
		console.error('Error!', err.message);
	})
	.pipe(sourcemaps.write())
	.pipe(gulp.dest(rootDir))
	.pipe(livereload());
	cache.clearAll();
});







/*
*
*  Adding RTL support in separate CSS
*  DO NOT RUN THIS CMD BEFORE BUILDING YOUR PROJECT! ("gulp build")
* 
*/
gulp.task('rtl-css', function() {
	console.log('[ RTL ] 	Converting CSS to RTL-CSS...');
	gulp.src(destination + 'css/style.css')
	.pipe(postcss([
	              rtlcss(),
	              ]))
	.on('error', function (err) {
		console.error('Error!', err.message);
	})
	.pipe(rename({ extname: '-rtl.css' }))
	.pipe(gulp.dest(rootDir));
	console.log('[ RTL ] 	RTL-CSS task completed!');
	console.log('[ RTL ] 	Saved to /rtl/style.css');
	console.log(' ');
});






// When you are ready to distribute your project.. use this CMD: gulp build
gulp.task('build', function() {

	/*
	*
	*  Minifying images
	* 
	*/
	console.log(' ');
	console.log('[ ============================================ ]');
	console.log('[ ============================================ ]');

	console.log(' ');
	console.log('[ IMG ] 	Minifying images...');
	gulp.src(source + 'img/*')
	.pipe(cache(
	            imagemin({
	            	interlaced: true,
	            	progressive: true,
	            	optimizationLevel: 8
	            })
	            ))
	.pipe(gulp.dest(destination + 'img')); 
	console.log('[ IMG ] 	Images minified successfully! ');
	console.log(' ');


	/*
	*
	*  Minifying and combining all JS files
	* 
	*/
	console.log('[ JS ] 		Minifying and Combining all JS files...');
	gulp.src([
	         source + 'js/scripts.min.js',
	         ])
	.pipe(uglify())
	.pipe(gulp.dest(destination + 'js/'));
	console.log('[ JS ] 		Minifying and combining completed!');
	console.log(' ');


	/*
	*
	*  Minifying and adding prefixes in CSS
	* 
	*/
	console.log('[ CSS ] 	Adding prefixes...');
	console.log('[ CSS ] 	Minifying CSS...');
	gulp.src(source + 'css/style.css')
	.pipe(postcss([
	              autoprefixer(),
	              ]))
	.on('error', function (err) {
		console.error('Error!', err.message);
	})
	.pipe(cleanCSS())
	.pipe(rename({ extname: '.min.css' }))
	.pipe(gulp.dest(destination + 'css'));
	console.log('[ CSS ] 	Prefixes & Minifying completed!');


	/*
	*
	*  Clearing all cache of minified images
	* 
	*/
	console.log('[ X ] 	 	Clearing all Cache(s) ');
	cache.clearAll();
	console.log(' ');

	console.log('[ ============================================ ]');
	console.log('[ ============================================ ]');
	console.log(' ');

});





// Files that are being watched for Live-Reload
gulp.task('watch', function() {
	livereload.listen(35729);
	gulp.watch('**/*.php').on('change', function(file) {
		livereload.changed(file.path);
	});
	gulp.watch(source + 'js/scripts/*', ['js']);
	gulp.watch(source + 'scss/**/*', ['scss-to-css']);
	gulp.watch(source + 'css/*');
});



// tasks to perform for first time when you type CMD (gulp)
gulp.task('default', ['scss-to-css', 'js', 'watch']);
