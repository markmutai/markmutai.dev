const gulp = require("gulp");
const sass = require("gulp-sass")(require('sass'));
const webp = require("gulp-webp");
const php = require("gulp-connect-php");
const minifyCSS = require("gulp-clean-css");
// const cleanCSS = require("gulp-clean-css");
// const run = require('gulp-run');
const rename = require("gulp-rename");
const changed = require("gulp-changed");
const browserSync = require("browser-sync");
const reload = browserSync.reload;
const SCSS_SRC = "app/sass/*.scss";
const SCSS_DEST = "app/css";

gulp.task("compile_scss", async function () {
    gulp
        .src(SCSS_SRC)
        .pipe(sass().on("error", sass.logError))
        .pipe(minifyCSS())
        .pipe(rename({ suffix: ".min" }))
        .pipe(changed(SCSS_DEST))
        .pipe(gulp.dest(SCSS_DEST));
    gulp.watch("app/tailwind.min.css").on("change", reload);
});

gulp.task("watchMeDoMyTing", function () {
    gulp.watch(SCSS_SRC, gulp.series("compile_scss"));
    gulp.watch("./*.php").on("change", reload);
    gulp.watch("app/sass/*.scss").on("change", reload);
    gulp.watch("app/css/*.css").on("change", reload);
    gulp.watch("app/js/*.js").on("change", reload);
    // gulp.watch("tailwind.config.js").on("change", function () {
    //     return run('npm run tw'.exec())
    // });
    gulp.watch("app/css/tailwind.css").on("change", function () {
        gulp.src('app/css/tailwind.css')
            .pipe(minifyCSS({
                compatibility: 'ie8'
            }))
            .pipe(rename('tailwind.min.css'))
            .pipe(gulp.dest('app/css/'));
    });
    // gulp.watch("./src/tailwind.min.css").on("change", reload);
});

gulp.task("tw", async function () {
    gulp
        .src("app/css/tailwind.css")
        .pipe(minifyCSS({
            compatibility: 'ie8'
        }))
        .pipe(rename('tailwind.min.css'))
        .pipe(gulp.dest('app/css/'));
});

gulp.task("styl", async function () {
    gulp
        .src("img/**/*.{png,svg,jpg}", {
            // .public("./public/assets/img/*.{png,svg,jpg}", {
            base: "img",
        })
        .pipe(webp())
        .pipe(gulp.dest("app/img/"));
});

gulp.task("phpServer", async function () {
    php.server({
        // a standalone PHP server that browsersync connects to via proxy
        port: 8000,
        keepalive: true,
        base: "./"
    }, function () {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
});


gulp.task("default", gulp.series("styl", "tw", "compile_scss", "phpServer", "watchMeDoMyTing"));
