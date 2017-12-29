'use strict';

/**
 * raum3 gulpfile - Version Dec 2017 - Bootstrap4 ready -
 */

var gulp          = require('gulp');
var sass          = require('gulp-sass');
var watch         = require('gulp-watch');
var concat        = require('gulp-concat');
var autoprefixer  = require('autoprefixer');
var postcss       = require('gulp-postcss');
var flexbugsfixes = require('postcss-flexbugs-fixes');
var cleanCss      = require('gulp-clean-css');
var livereload    = require('gulp-livereload');
var uglify        = require('gulp-uglify');
var browserSync   = require('browser-sync').create();


var processors = [
    flexbugsfixes,
    autoprefixer({
        browsers: ['last 2 versions','> 0.1%']
    })
];

var paths = {
    scss: 'assets/scss/**/*.scss',
    php: '**/*.php',
    scripts: ['assets/js/*.js'],
    plugins: [
        'bower_components/jquery/dist/jquery.js',
        'bower_components/slick-carousel/slick/slick.min.js'
    ],
    css : []
};


gulp.task('serve',function() {

    browserSync.init({
        proxy  : 'cwo',
        notify : false
    });

    gulp.watch(paths.scss,['sass']);
    gulp.watch(paths.scripts, ['compress']);
    gulp.watch(paths.php).on('change',browserSync.reload);
    gulp.watch('assets/css/styles.css').on('change',browserSync.reload);
    gulp.watch('assets/js/build/*.js').on('change',browserSync.reload);
});

gulp.task('sass',function(){
    gulp.src('assets/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('styles.css'))
        .pipe(postcss(processors))
        .pipe(cleanCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'))
});

gulp.task('compress', function () {
    gulp.src(paths.scripts)
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/build'))
});


gulp.task('plugins', function(){
    gulp.src(paths.plugins)
        .pipe(concat('plugins.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/build'));
    gulp.src(paths.css)
        .pipe(concat('plugins.css'))
        .pipe(postcss(processors))
        .pipe(cleanCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'));
});




gulp.task('watch', function () {
    livereload({start: true});
    gulp.watch(paths.scss, ['sass']);
    gulp.watch(paths.scripts, ['compress']);
    gulp.src(paths.php).pipe(watch(paths.php)).pipe(livereload());
    gulp.src('assets/js/build/*.js').pipe(watch('assets/js/build/*.js')).pipe(livereload());
    gulp.src('assets/css/*.css').pipe(watch('assets/css/*.css')).pipe(livereload());
});

gulp.task('default', ['sass', 'compress', 'plugins']);
