// var gulp = require('gulp');
// var sass = require('gulp-sass');
// var browserSync = require('browser-sync').create();

// sass.compiler = require('node-sass');

// var concat = require('gulp-concat');
// var rename = require('gulp-rename');
// var uglify = require('gulp-uglify');

// var jsDev = './resources/js/**/*.js',
//     jsProd = './app/js/';


// gulp.task('browser-sync', ['sass', 'scripts'], function() {
//     browserSync.init({
//         injectChanges: true,
//         server: {
//             baseDir: "./app/",
//             // directory: true,
//             index: 'feedback.html'
//         }
//     });
// });



// gulp.task('sass', function () {
//   return gulp.src('./resources/sass/**/*.scss')
//     .pipe(sass().on('error', sass.logError))
//     .pipe(gulp.dest('./app/css/'))
//     .pipe(browserSync.stream());
// });

// gulp.task('scripts', function() {
//     return gulp.src(jsDev)
//         .pipe(concat('scripts.js'))
//         .pipe(gulp.dest(jsProd))
//         .pipe(browserSync.stream());
// });

// gulp.task('default', ['browser-sync', 'sass', 'scripts'], function () {
//     gulp.watch('resources/sass/**/*.scss', ['sass']);
//     gulp.watch('resources/js/**/*.js', ['scripts']);
//     gulp.watch("./app/*.html").on('change', browserSync.reload);
// });
var gulp        = require('gulp');
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var rename      = require('gulp-rename');
var uglify      = require('gulp-uglify');
var browserSync = require('browser-sync').create();

sass.compiler   = require('node-sass');

var
    stylesDev = './resources/sass/**/*.scss',
    stylesAll = [
        './resources/sass/**/*.scss',
        './node_modules/slick-carousel/slick/slick.min.css',
        './node_modules/jquery-datetimepicker/build/jquery.datetimepicker.min.css'
    ],
    scriptsDev = './resources/js/**/*.js',
    scriptsAll = [
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/slick-carousel/slick/slick.min.js',
        './node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.js',
        './resources/js/**/*.js'
    ],

    stylesProd = './app/css/',
    scriptsProd = './app/js/';

gulp.task('browser-sync', ['sass', 'scripts'], function() {
    browserSync.init({
        injectChanges: true,
        server: {
            baseDir: "./app/",
            directory: true,
            index: 'index.html'
        }
    });
});



gulp.task('sass', function () {
  return gulp.src(stylesAll)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(stylesProd))
    .pipe(browserSync.stream());
});

gulp.task('scripts', function() {
    return gulp.src(scriptsAll)
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(scriptsProd))
        .pipe(browserSync.stream());
});

gulp.task('default', ['browser-sync', 'sass', 'scripts'], function () {
    gulp.watch(stylesDev, ['sass']);
    gulp.watch(scriptsDev, ['scripts']);
    gulp.watch("./app/*.html").on('change', browserSync.reload);
});
