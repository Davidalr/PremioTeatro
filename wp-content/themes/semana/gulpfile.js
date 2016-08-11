var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    minifyCss = require('gulp-minify-css');


gulp.task('styles', function() {
    gulp.src('assets/css/style.sass')
        .pipe(sass())
        .pipe(minifyCss())
        .pipe(gulp.dest('assets/css/'));
});

gulp.task('default', ['sass']);

gulp.task('sass', function () {
    gulp.watch('assets/css/style.sass',['styles']);
})