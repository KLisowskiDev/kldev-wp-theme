const { watch, src, dest, series, parallel } = require('gulp'),
    browsersync = require('browser-sync'),
    sass = require('gulp-sass')(require('sass')),
    postcss = require('gulp-postcss'),
    babel = require('gulp-babel'),
    autoprefixer = require('autoprefixer');

const config = {
    app: {
        scss: './src/scss/**/*.scss',
        js: './src/js/**/*.js',
        css: './src/css/*.css',
        php: './**/*.php'
    },
    dist: {
        css: './assets/css',
        js: './assets/js',
    },
    proxy: "http://localhost/kldev/",
}

function compileJs(done) {
    src(config.app.js)
        .pipe(babel({ 
            presets: ["@babel/preset-env"]
        }))
        .pipe(dest(config.dist.js)).on('error', function (e) { console.log(e) })
    done();
}

function compileStyles(done) {
    src(config.app.scss)
        .pipe(sass({ outputStyle: 'expanded', includePaths: ['node_modules'] }).on('error', sass.logError))
        .pipe(postcss([autoprefixer()])).on('error', function (e) { console.log(e) })
        .pipe(dest(config.dist.css)).on('error', function (e) { console.log(e) })
    done();
}

function watchFiles() {
    watch(config.app.js, series(compileJs, browserSyncReload))
    watch(config.app.scss, series(compileStyles, browserSyncReload))
    watch(config.app.php, series(browserSyncReload));
}

function connectsync() {
    browsersync.init({
        proxy: config.proxy
    });
}

function browserSyncReload(done) {
    browsersync.reload();
    done();
}

exports.dev = parallel(compileJs, compileStyles, connectsync, watchFiles);
exports.install = parallel(compileJs, compileStyles);
