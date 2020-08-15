let gulp        = require('gulp');
let sass        = require('gulp-sass');
let concat      = require('gulp-concat');
// let rename      = require('gulp-rename');
// let uglify      = require('gulp-uglify');
let concatCss = require('gulp-concat-css');
let browserSync = require('browser-sync').create();


// let async = require('async');
// let iconfont = require('gulp-iconfont');
// let iconfontCss = require('gulp-iconfont-css');
// let consolidate = require('gulp-consolidate');

sass.compiler   = require('node-sass');

let
    stylesDev = './resources/sass/**/*.scss',
    // stylesAll = [
    //     './resources/sass/**/*.scss',
    //     './node_modules/slick-carousel/slick/slick.css',
    //     './node_modules/animate.css/animate.min.css',
    //     './node_modules/jquery-form-styler/dist/jquery.formstyler.css',
    //     './node_modules/jquery-form-styler/dist/jquery.formstyler.theme.css',
    //     // './node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css'
    // ],
    stylesVendor = [
        // './resources/sass/**/*.scss',
        './node_modules/slick-carousel/slick/slick.css',
        './node_modules/animate.css/animate.min.css',
        './node_modules/jquery-form-styler/dist/jquery.formstyler.css',
        './node_modules/jquery-form-styler/dist/jquery.formstyler.theme.css',
        './node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css'
    ],
    scriptsDev = './resources/js/**/*.js',
    scriptsAll = [
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/slick-carousel/slick/slick.min.js',
        './node_modules/wowjs/dist/wow.min.js',
        './node_modules/masonry-layout/dist/masonry.pkgd.js',
        './node_modules/jquery-form-styler/dist/jquery.formstyler.min.js',
        './node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js',
        './resources/js/**/*.js'
    ],

    stylesProd = './app/css/',
    scriptsProd = './app/js/',
    
    tempFiles = './temp/'
    tempCss = tempFiles + '*.css';
    // console.log(stylesVendor);
    // console.log(stylesDev);
    // console.log(tempCss);

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
    return gulp.src(stylesDev)
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('app.css'))
        .pipe(gulp.dest(tempFiles))
        .pipe(browserSync.stream());
});

gulp.task('vendorCss', function () {
    return gulp.src(stylesVendor)
        .pipe(concatCss('vendor.css'))
        .pipe(gulp.dest(tempFiles));
});
gulp.task('mixCss', function () {
    return gulp.src(tempCss)
        .pipe(concatCss('styles.css'))
        .pipe(gulp.dest(stylesProd));
});

gulp.task('scripts', function() {
    return gulp.src(scriptsAll)
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(scriptsProd))
        .pipe(browserSync.stream());
});

gulp.task('default', ['browser-sync', 'sass', 'vendorCss', 'mixCss', 'scripts'], function () {
    gulp.watch(stylesDev, ['sass']);
    gulp.watch(stylesVendor, ['vendorCss']);
    gulp.watch(tempCss, ['mixCss']);
    gulp.watch(scriptsDev, ['scripts']);
    gulp.watch("./app/*.html").on('change', browserSync.reload);
});
