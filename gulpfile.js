const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const concat = require('gulp-concat');

// Sass Task - Vendors
function scssTaskVendors(){
    return src(['assets/vendors/**/*.scss', 'assets/vendors/**/*.css'], { sourcemaps: true })
        .pipe(concat('vendors.css'))
        .pipe(sass())
        .pipe(postcss([cssnano()]))
        .pipe(dest('build/css', { sourcemaps: '.' }));
}
// Sass Task - Main
function scssTaskMain(){
    return src('assets/sass/main.scss', { sourcemaps: true })
    .pipe(sass())
    .pipe(postcss([cssnano()]))
    .pipe(dest('build/css', { sourcemaps: '.' }));
}
// JavaScript Task - Vendors
function jsTaskVendors(){
    return src('assets/vendors/**/*.js', { sourcemaps: true })
        .pipe(concat('vendors.js'))
        .pipe(terser())
        .pipe(dest('build/js/', { sourcemaps: '.' }));
}
// JavaScript Task - Main
function jsTaskMain(){
    return src('assets/js/**/*.js', { sourcemaps: true })
        .pipe(concat('main.js'))
        .pipe(terser())
        .pipe(dest('build/js', { sourcemaps: '.' }));
}
// Watch Task
function watchTask(){
    watch(['assets/sass/**/*.scss', 'assets/js/**/*.js', 'assets/vendors/**/*.scss', 'assets/vendors/**/*.css', 'assets/vendors/**/*.js'], series(scssTaskVendors, scssTaskMain, jsTaskMain, jsTaskVendors));
}
// Default Gulp task
exports.default = series(
    scssTaskVendors,
    scssTaskMain,
    jsTaskVendors,
    jsTaskMain,
    watchTask
);

// ##### TO-DO: The ability to update packages (automatically copy files from "node_modules" to "assets/vendor" folder)