const gulp = require("gulp");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
const browserSync = require("browser-sync").create();

sass.compiler = require("node-sass");

const stylesDev = "./resources/sass/**/*.scss",
    stylesAll = [
        "./node_modules/slick-carousel/slick/slick.css",
        "./node_modules/ion-rangeslider/css/ion.rangeSlider.min.css",
        // "./node_modules/animate.css/animate.min.css",
        // './resources/sass/**/*.scss'
        "./resources/sass/**/*.scss",
    ],
    scriptsDev = "./resources/js/**/*.js",
    scriptsAll = [
        "./node_modules/jquery/dist/jquery.min.js",
        "./node_modules/slick-carousel/slick/slick.min.js",
        // "./node_modules/typed.js/lib/typed.min.js",
        // "./node_modules/wow.js/dist/wow.min.js",
        "./node_modules/jquery.maskedinput/src/jquery.maskedinput.js",
        "./node_modules/ion-rangeslider/js/ion.rangeSlider.min.js",
        // './node_modules/jquery.marquee/jquery.marquee.min.js',
        "./resources/js/**/*.js",
    ],
    stylesProdDir = "./app/css/",
    scriptsProdDir = "./app/js/";

gulp.task("browser-sync", function (done) {
    browserSync.init({
        server: {
            baseDir: "./app/",
            // directory: true,
            index: "index.html",
        },
        notify: false,
    });

    browserSync.watch("./app/**.html").on("change", browserSync.reload);

    done();
});

gulp.task("sass", function (done) {
    return gulp
        .src(stylesAll)
        .pipe(sass())
        .pipe(concat("styles.css"))
        .pipe(gulp.dest(stylesProdDir))
        .pipe(browserSync.reload({ stream: true }));

    done();
});

gulp.task("js", function (done) {
    return gulp
        .src(scriptsAll)
        .pipe(concat("scripts.js"))
        .pipe(gulp.dest(scriptsProdDir))
        .pipe(browserSync.reload({ stream: true }));

    done();
});

gulp.task(
    "watch",
    gulp.series("sass", "js", "browser-sync", function (done) {
        gulp.watch(
            [
                "./app/**.html",
                "./resources/sass/**/*.scss",
                "./resources/js/**/*.js",
            ],
            gulp.series("sass", "js")
        );

        done();
    })
);
