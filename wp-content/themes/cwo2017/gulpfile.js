'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');
var livereload = require('gulp-livereload');
var uglify = require('gulp-uglify');


var paths = {
    scss: 'assets/scss/**/*.scss',
    php: '**/*.php',
    scripts: ['assets/js/*.js'],
    plugins: [
        'bower_components/jquery/dist/jquery.js',
        'bower_components/fullpage.js/jquery.fullPage.js'
    ],
    css : ['bower_components/fullpage.js/jquery.fullPage.css']
};

gulp.task('sass', function () {
    gulp.src('assets/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('styles.css'))
        .pipe(autoprefixer({
            browsers: '> 5%'
        }))
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'))
        .pipe(livereload())
});

gulp.task('compress', function () {
    gulp.src(paths.scripts)
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/build'))
        .pipe(livereload())
});

gulp.task('plugins', function(){
    gulp.src(paths.plugins)
        .pipe(concat('plugins.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/build'));
    gulp.src(paths.css)
        .pipe(concat('plugins.css'))
        .pipe(autoprefixer({
            browsers: '> 5%'
        }))
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function () {
    livereload({start: true});
    gulp.watch(paths.scss, ['sass']);
    gulp.watch(paths.scripts, ['compress']);
    gulp.src(paths.php).pipe(watch(paths.php)).pipe(livereload())
});

gulp.task('default', ['sass', 'compress', 'plugins']);