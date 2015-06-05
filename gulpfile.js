var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-sass');
var minifycss = require('gulp-minify-css');


gulp.task('sass', function() {
    return gulp.src('public/css/style.scss')
        .pipe(sass())
        .pipe(minifycss())
        .pipe(gulp.dest('css'));
});
gulp.task('watch', function () {
    gulp.watch('public/css/style.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);