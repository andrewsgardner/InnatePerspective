var gulp = require('gulp');

// gulp packages
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// task - compile sass
gulp.task('sass', function() {
    return gulp.src('scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('/'));
});

// task - concatenate & minify js
gulp.task('scripts', function() {
    return gulp.src('js/src/*.js')
        .pipe(concat('common.js'))
        .pipe(gulp.dest('js/dist'))
        .pipe(rename('common.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/dist'));
});

// task - watch for changes
gulp.task('watch', function() {
    gulp.watch('js/**/*.js', ['scripts']);
    gulp.watch('scss/*.scss', ['sass']);
});

// perform all tasks with the command: gulp
gulp.task('default', ['sass', 'scripts', 'watch']);