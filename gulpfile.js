const gulp = require('gulp');
const browserSync = require('browser-sync');
const purgecss = require("gulp-purgecss");
const cleanCSS = require('gulp-clean-css');
const postcss = require('gulp-postcss');
const tailwindcss = require('tailwindcss');
const sass = require('gulp-sass');
const del = require('del');
var package = require('./package.json');


sass.compiler = require('node-sass');


class TailwindExtractor {
    static extract(content) {
        return content.match(/[A-z0-9-:\/]+/g) || [];
    }
}

// compiling tailwind CSS
gulp.task('css', function () {
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([
            tailwindcss('./tailwind.js'),
            require('autoprefixer'),
        ]))
        .pipe(
            purgecss({
                content: ["*.php"],
                extractors: [{
                    extractor: TailwindExtractor,
                    extensions: ["html", "php", "js", "sass", "scss", "css"]
                }]
            })
        )
        .pipe(cleanCSS())
        .pipe(gulp.dest('./'));
});

// browser-sync task for starting the server.
gulp.task('browser-sync', function () {
    let files = ['./*.php', '*.css', './sass/**/*.scss']; // watch files
    gulp.watch('./sass/**/*.scss', ['css']);

    // initialize browsersync
    browserSync.init(files, {
        proxy: "http://localhost:8888/",
        notify: true
    });
});

// Default task to be run with `gulp`
gulp.task('default', ['css', 'browser-sync'], function () {
    gulp.watch('sass/**/*.scss', ['css']);
});

// Delete theme folder
gulp.task('clean', function (done) {
    return del(package.name, done);
});

// Files and folder to move to final theme folder
gulp.task('copy', function () {
    return gulp.src([
        "**/*",
        "!.vscode",
        "!node_modules{,/**}",
        "!src{,/**}",
        "!.babelrc",
        "!.gitignore",
        "!gulpfile.babel.js",
        "!package.json",
        "!package-lock.json",
        "!sass",
        "!tailwind.js",
        "!gulpfile.js"
    ]).pipe(gulp.dest(package.name));
});

// Build theme
gulp.task('build', ['clean'], function () {
    gulp.start('copy');
});