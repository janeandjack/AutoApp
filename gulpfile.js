var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
  .pipe(sass({outputStyle : 'compressed'}).on('error', sass.logError))
  .pipe(gulp.dest('./css'));
});

// var gulp = require('gulp'),
//     cssFormat = require('gulp-css-format');

// gulp.task('css-format', function() {
//     gulp.src('css/main.css')
//     .pipe(cssFormat({indent: 1, hasSpace: true}))
//     .pipe(gulp.dest('dist/'));
// })

gulp.task('sass:watch', function()
{
gulp.watch('.sass/**/*.scss', ['sass']);
});