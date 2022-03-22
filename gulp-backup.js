const gulp = require("gulp");
var sass = require('gulp-sass');
var webp = require('gulp-webp');
var php = require("gulp-connect-php");
var cleanCSS = require("gulp-clean-css");
var rename = require("gulp-rename");
// var uglify = require('gulp-uglify');
// var changed = require('gulp-changed');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
// var SCSS_SRC = './public/assets/scss/*.scss';
// var SCSS_DEST = './public/assets/css';

// function handleError(err){
//     console.log(err.toString());
//     process.exit(-1);
// }

// function sassCss(){
//     return gulp.src('app/scss/style.scss')
//       .pipe(sass()) // Converts Sass to CSS with gulp-sass
//       .pipe(sass().on('error', sass.logError))
//       .pipe(gulp.dest('app/css'))
//       .on('error', handleError);
//     //   console.log('got here');
// }

gulp.task('default', function () {
    // gulp.start('sassCss');
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

    gulp.src('app/css/tailwind.css')
        .pipe(cleanCSS({
            compatibility: 'ie8'
        }))
        .pipe(rename('tailwind.min.css'))
        .pipe(gulp.dest('app/css/'));

    // gulp.start('minify-css');
    gulp.src('img/**/*.{png,svg,jpg}', {
        base: 'img'
    })
        .pipe(webp())
        .pipe(gulp.dest('app/img'));
    // gulp.watch('gulpfile.js').on('change', reload);
    gulp.watch('./*.php').on('change', reload);
    gulp.watch('./app/scss/*.scss').on('change', reload);
    gulp.watch('./app/css/*.css').on('change', reload);
    gulp.watch('./app/css/tailwind.css').on('change', function () {
        gulp.src('app/css/tailwind.css')
            .pipe(cleanCSS({
                compatibility: 'ie8'
            }))
            .pipe(rename('tailwind.min.css'))
            .pipe(gulp.dest('app/css/'));
    });
    gulp.watch('./app/js/*.js').on('change', reload);
});