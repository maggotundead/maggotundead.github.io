var gulp        = require('gulp');
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
// var rename      = require('gulp-rename');
// var uglify      = require('gulp-uglify');
var browserSync = require('browser-sync').create();

// var async = require('async');
// var iconfont = require('gulp-iconfont');
// var iconfontCss = require('gulp-iconfont-css');
// var consolidate = require('gulp-consolidate');

sass.compiler   = require('node-sass');

var
    stylesDev = './resources/sass/**/*.scss',
    stylesAll = [
        './resources/sass/**/*.scss',
        './node_modules/slick-carousel/slick/slick.min.css'
    ],
    scriptsDev = './resources/js/**/*.js',
    scriptsAll = [
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/slick-carousel/slick/slick.min.js',
        './resources/js/**/*.js'
    ],

    stylesProd = './app/css/',
    scriptsProd = './app/js/';

gulp.task('browser-sync', ['sass', 'scripts'], function() {
    browserSync.init({
        injectChanges: true,
        server: {
            baseDir: "./app/",
            // directory: true,
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

// gulp.task('icon-font', function(){
//   gulp.src(['./app/img/icons/*.svg'])
//     .pipe(
//       iconfontCss({
//         fontName: 'iconfont',
//         // path: './app/css/iconfont.css',
//         targetPath: '../../resources/sass/_iconfont.scss',
//         fontPath: '../fonts/',
//         cssClass: 'icon'
//       })
//     )
//     .pipe(iconfont({
//       fontName: 'iconfont',
//       formats: ['svg', 'ttf', 'eot', 'woff', 'woff2'],
//       normalize: true,
//       fontHeight: 1001,
//       prependUnicode: true,
//       appendCodepoints: true,
//       ignoreExt: false,
//       fixedWidth: false,
//       descent: 0 
//      }))
//     .pipe(gulp.dest('./app/fonts/'));
// });

// gulp.task('default', ['browser-sync', 'sass', 'scripts', 'icon-font'], function () {
gulp.task('default', ['browser-sync', 'sass', 'scripts'], function () {
    gulp.watch(stylesDev, ['sass']);
    gulp.watch(scriptsDev, ['scripts']);
    gulp.watch("./app/*.html").on('change', browserSync.reload);
});
