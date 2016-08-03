var gulp = require('gulp');
var contact = require('gulp-concat');
var sass = require('gulp-sass');
var del = require('del');

var paths = {
    scripts: [
        'bower_components/material-design-lite/material.min.js'
    ],
    styles: [
        'bower_components/material-design-lite/material.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/github-markdown-css/github-markdown.css',
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
gulp.task('contact', ['sass'], function () {
    gulp.src(paths.scripts)
        .pipe(contact('main.js'))
        .pipe(gulp.dest('./dist/'));

    return gulp.src(paths.styles)
        .pipe(contact('main.css'))
        .pipe(gulp.dest('./dist/'));
});

gulp.task('default', ['clean', 'contact'], function () {
    
});