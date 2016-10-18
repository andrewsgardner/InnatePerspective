var gulp = require('gulp');

// gulp packages
var sass = require('gulp-sass');
var header = require('gulp-header');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// banner properties
var pkg = require('./package.json');
var banner = ['/**',
  ' * Theme Name: <%= pkg.name %>',
  ' * @author     <%= pkg.author %>',
  ' * @link       <%= pkg.homepage %>',            
  ' * @version    v<%= pkg.version %>',
  ' * @license    <%= pkg.license %>',
  ' */',
  ''].join('\n');

// task - compile sass
gulp.task('sass', function() {
    return gulp.src('./scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        // .pipe(header(banner, { pkg : pkg } ))
        .pipe(gulp.dest('./'));
});

// task - concatenate & minify js
gulp.task('scripts', function() {
    return gulp.src('js/src/*.js')
        .pipe(concat('common.js'))
        .pipe(header(banner, { pkg : pkg } ))
        .pipe(gulp.dest('js/dist'))
        .pipe(rename('common.min.js'))
        .pipe(uglify())
        .pipe(header(banner, { pkg : pkg } ))
        .pipe(gulp.dest('js/dist'));
});

// task - watch for changes
gulp.task('watch', function() {
    gulp.watch('js/**/*.js', ['scripts']);
    gulp.watch('scss/**/*.scss', ['sass']);
});

// perform all tasks with the command: gulp
gulp.task('default', ['sass', 'watch', 'scripts']);