"use strict";

var gulp = require("gulp");
const newer = require("gulp-newer");
const imagemin = require("gulp-imagemin");
const sass = require("gulp-sass")(require('sass'));
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const npmdist = require('gulp-npm-dist');
const lodash = require("lodash");
const rtlcss = require('gulp-rtlcss');
const browsersync = require("browser-sync");
const fileinclude = require('gulp-file-include');

var folder = {
    src: "public/source/", // source files
    dist: "public/source/", // build files
    node: {
        dir: './node_modules'
    },
    libs: {
        dir: './public/libs'
    },
    dist_assets: "public/" //build assets files
};

/*
Copy assets/vendors from their node_module package to scss & js folder
Read More: https://florian.ec/articles/frontend-dependencies-npm/
*/

function copyAssets(done) {

    var pageAssets = {
        js: [
            folder.src + "js/pages/*.js",
        ],
        scss: [
        ],
    };

    // var pluginCss = {
    //     js: [
    //         folder.src + "plugins/dragula/dragula.min.css",
    //         folder.src + "plugins/animate/animate.min.css",
    //     ],
    //     scss: [
    //     ],
    // };



    gulp.src([
        folder.src + "plugins/**",
    ])
        .pipe(gulp.dest(folder.dist_assets + "plugins/"));


    //copying required assets
    lodash(pageAssets).forEach(function (assets, type) {
        if (assets && assets.length > 0) {
            if (type == "scss") {
                gulp
                    .src(assets)
                    .pipe(
                        rename({
                            // rename aaa.css to _aaa.scss
                            prefix: "_",
                            extname: ".scss"
                        })
                    )
                    .pipe(gulp.dest(folder.dist_assets + "scss/pages"));
            } else {
                gulp.src(assets).pipe(gulp.dest(folder.dist_assets + "pages"));
            }
        }
    });


    done();
}

// image processing
function imageMin() {
    var out = folder.dist_assets + "images";
    return gulp
        .src(folder.src + "images/**/*")
        .pipe(newer(out))
        .pipe(imagemin())
        .pipe(gulp.dest(out));
}


// copy fonts from src folder to dist folder
function fonts() {
    var out = folder.dist_assets + "fonts/";
    return gulp.src([folder.src + "fonts/**/*"]).pipe(gulp.dest(out));
}

// copy html files from src folder to dist folder, also copy favicons
function html() {
    var out = folder.dist;

    return gulp
        .src([
            folder.src + "html/*.html",
            folder.src + "html/*.ico", // favicons
            folder.src + "html/*.png",
            // folder.src + "html/**",
        ])
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file',
            indent: true
        }))
        .pipe(gulp.dest(out));
}

// compile & minify sass
function css() {
    gulp
        .src([
            folder.src + "scss/app.scss",
            folder.src + "scss/bootstrap.scss",
            folder.src + "scss/icons.scss",
            folder.src + "scss/app-dark.scss",
            folder.src + "scss/bootstrap-dark.scss"
        ])
        .pipe(sourcemaps.init())
        .pipe(sass()) // scss to css
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"]
            })
        )
        .pipe(gulp.dest(folder.dist_assets + "css/"))
        .pipe(cleanCSS())
        .pipe(
            rename({
                // rename app.css to app.min.css
                suffix: ".min"
            })
        )
        .pipe(sourcemaps.write("./")) // source maps for app-dark.min.css
        .pipe(gulp.dest(folder.dist_assets + "css/"));


    gulp
        .src([
            folder.src + "scss/app.scss",
            folder.src + "scss/bootstrap.scss",
            folder.src + "scss/app-dark.scss",
            folder.src + "scss/bootstrap-dark.scss"
        ])
        .pipe(sourcemaps.init())
        .pipe(sass()) // scss to css
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"]
            })
        )
        .pipe(gulp.dest(folder.dist_assets + "css/"))
        .pipe(rtlcss())
        .pipe(cleanCSS())
        .pipe(
            rename({
                // rename app.css to app.min.css
                suffix: "-rtl.min"
            })
        )
        .pipe(sourcemaps.write("./")) // source maps for app-dark.min.css
        .pipe(gulp.dest(folder.dist_assets + "css/"));

    return gulp
        .src([
            folder.src + "scss/app.scss",
            folder.src + "scss/bootstrap.scss",
            folder.src + "scss/app-material.scss",
            folder.src + "scss/bootstrap-material.scss"
        ])
        .pipe(sourcemaps.init())
        .pipe(sass()) // scss to css
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 3 versions"]
            })
        )
        .pipe(gulp.dest(folder.dist_assets + "css/"))
        .pipe(cleanCSS())
        .pipe(
            rename({
                // rename app.css to app.min.css
                suffix: ".min"
            })
        )
        .pipe(sourcemaps.write("./")) // source maps for app-dark.min.css
        .pipe(gulp.dest(folder.dist_assets + "css/"));

}

// js
function javascript() {
    var out = folder.dist_assets + "js/";

    //copying demo pages related assets
    var app_pages_assets = {
        js: []
    };

    lodash(app_pages_assets).forEach(function (assets, type) {
        if (assets && assets.length > 0) {
            gulp.src(assets)
                .pipe(uglify())
                .on("error", function (err) {
                    console.log(err.toString());
                })
                .pipe(gulp.dest(out + "pages"));
        }
    });

    // optional components
    var components_assets = {
        js: []
    };

    lodash(components_assets).forEach(function (assets, type) {
        if (assets && assets.length > 0) {
            gulp.src(assets)
                .pipe(uglify())
                .on("error", function (err) {
                    console.log(err.toString());
                })
                .pipe(gulp.dest(out + "ui"));
        }
    });

    // It's important to keep files at this order
    // so that `app.min.js` can be executed properly
    return gulp
        .src([
            // folder.src + "js/jquery.min.js",
            // folder.src + "js/moment.js",
            folder.src + "js/simplebar.min.js",
            folder.src + "js/bootstrap.bundle.min.js",
            folder.src + "js/feather.min.js",
            folder.src + "js/app.js"
        ])
        .pipe(sourcemaps.init())
        .pipe(concat("app.js"))
        .pipe(gulp.dest(out))
        .pipe(
            rename({
                // rename app.js to app.min.js
                suffix: ".min"
            })
        )
        // .pipe(uglify())
        .on("error", function (err) {
            console.log(err.toString());
        })
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest(out));
}

// live browser loading
function browserSync(done) {
    browsersync.init({
        server: {
            baseDir: folder.dist,
            index: '/index.html',
            middleware: [
                function (req, res, next) {
                    req.method = 'GET';
                    next();
                }
            ]
        }
    });
    done();
}

gulp.task('libs', function () {
    return gulp
        .src(npmdist(), { base: folder.node.dir })
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(gulp.dest(folder.libs.dir));
});


function reloadBrowserSync(done) {
    browsersync.reload();
    done();
}

function watchFiles() {
    gulp.watch(folder.src + "public/images/**/*", gulp.series(imageMin, reloadBrowserSync));
    gulp.watch(folder.src + "public/fonts/**/*", gulp.series(fonts, reloadBrowserSync));
    gulp.watch(folder.src + "scss/**/*", gulp.series(css, reloadBrowserSync));
    gulp.watch(folder.src + "js/**/*", gulp.series(javascript, reloadBrowserSync));
    gulp.watch(folder.src + "pages/**/*", gulp.series(copyAssets, reloadBrowserSync));
}

// watch all changes
gulp.task("watch", gulp.parallel(watchFiles));

// default task
gulp.task(
    "default",
    gulp.series(
        'libs',
        copyAssets,
        html,
        imageMin,
        fonts,
        css,
        javascript,
        'watch'
    ),
    function (done) { done(); }
);

// build
gulp.task(
    "build",
    gulp.series(
        'libs',
        copyAssets,
        html,
        imageMin,
        fonts,
        css,
        javascript)
);
