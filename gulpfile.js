'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify'),
    browserSync = require('browser-sync').create(),
    autoprefixer = require('autoprefixer');

gulp.task('sass', function () {
    return gulp.src('web/css/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('web'));
});

gulp.task('scripts', function() {
    return gulp.src('web/js/*.js')
        .pipe(concat('main.js'))
        .pipe(minify({
            conditionals: false,
            drop_debugger: false,
            mangle: false,
            join_vars: false,
            comments: false,
            compact: true,
            minified: true
        }))
        .pipe(gulp.dest('web'))
        .pipe(browserSync.stream());
});

gulp.task('browserSync', function() {
    browserSync.init({
      server: {
          baseDir: "./"
      }
    });
});

gulp.task('bs-reload', function (){
    browserSync.reload();
});

gulp.task('watch', ['browserSync'], function() {
    gulp.watch("web/css/**/*.scss", ['sass']);
    gulp.watch("web/js/*.js", ['scripts']);
    gulp.watch("./index.phtml", ['bs-reload']);
});

gulp.task('default', ['watch']);
