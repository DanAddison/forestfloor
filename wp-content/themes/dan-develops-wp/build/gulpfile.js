var gulp = require("gulp"),
	sass = require("gulp-sass")(require('sass')),
	sassGlob = require("gulp-sass-glob"),
	postcss = require("gulp-postcss"),
	autoprefixer = require("autoprefixer"),
	cssnano = require("cssnano"),
	concat = require("gulp-concat"),
	uglify = require("gulp-uglify");

var browserSync = require("browser-sync").create();

const sassOpts = { outputStyle: 'compressed', errLogToConsole: true };

// paths
var paths = {
	frontendStyles: {
		watchDirs: [
			"../sass/**/*",
			"../blocks/**/block.scss"
		],
		src: "index-frontend.scss",
		dest: "./gulp-output"
	},
	editorStyles: {
		watchDirs: [
			"../sass/editor-only.scss",
			"../blocks/**/editor.scss"
		],
		src: "index-backend.scss",
		dest: "./gulp-output"
	},
	scripts: {
		src: "../js/*.js",
		dest: "./gulp-output"
	},
	php: {
		watchDirs: [
			"../*.php",
			"../blocks/**/*.php",
			"../functions/**/*",
			"../template-pages/*",
			"../template-template-parts/*"
		]
	}
};

// error handling
function handleError(err) {
	console.log(err.toString());
	this.emit("end");
}

// JS compilation process
function compileScripts() {
	return gulp
		.src(paths.scripts.src)
		.pipe(concat("frontend.build.js"))
		.pipe(uglify())
		.on("error", handleError)
		.pipe(gulp.dest(paths.scripts.dest))
		.pipe(browserSync.stream());
}

// SASS compilation process
function compileSass(srcFile, outputFilename) {
	return gulp
		.src(srcFile)
		.pipe(concat(outputFilename))
		.pipe(sassGlob())
		.on("error", handleError)
		.pipe(sass(sassOpts))
		.on("error", handleError)
		.pipe(postcss([autoprefixer("last 2 versions", "ie >= 9"), cssnano()]))
		.pipe(gulp.dest(paths.frontendStyles.dest))
		.pipe(browserSync.stream());
}

function compileFrontendSass() {
	return compileSass(paths.frontendStyles.src, 'frontend.build.css');
}

function compileEditorSass() {
	return compileSass(editorStyles.src, 'editor.build.css');
}

// declare gulp tasks
gulp.task('scripts', function(){
	console.log(`Finished: frontend JS`);
	return compileScripts();
});

gulp.task('frontendCss', () => {
	console.log(`Finished: general CSS`);
	return compileFrontendSass();
});

gulp.task('editorCss', () => {
	console.log(`Finished: editor-specific CSS`);
	return compileEditorSass();
});

// watch task
function watch() {
	browserSync.init({
		proxy: "localhost:10010",
		notify: false
	});

	gulp.watch(paths.php.watchDirs).on("change", browserSync.reload);
	gulp.watch(paths.frontendStyles.watchDirs, gulp.series('frontendCss'));
	gulp.watch(paths.editorStyles.watchDirs, gulp.series('editorCss'));
	gulp.watch(paths.scripts.src, gulp.series('scripts'));
}

gulp.task('default', gulp.series(watch));
