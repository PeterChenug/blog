var gulp = require('gulp');
var contact = require('gulp-concat');
var sass = require('gulp-sass');
var del = require('del');

var paths = {
    scripts: [
        'bower_components/jquery/dist/jquery.min.js',
        'bower_components/material-design-lite/material.min.js',
        'vendor/require.js'
    ],
    styles: [
        'bower_components/material-design-lite/material.min.css',
        'dist/main.css'
    ]
};
gulp.task('clean', function () {
    del(['dist']);
});

gulp.task('sass', function () {
    return gulp.src(['style/*.sass', 'style/**/*.sass'])
        .pipe(sass())
        .pipe(gulp.dest('./dist/'));
});
gulp.task('contact', function () {
    gulp.src(paths.scripts)
        .pipe(contact('main.js'))
        .pipe(gulp.dest('./dist/'));

    return gulp.src(paths.styles)
        .pipe(contact('main.css'))
        .pipe(gulp.dest('./dist/'));
});

gulp.task('default', ['clean', 'sass', 'contact'], function () {
    
});