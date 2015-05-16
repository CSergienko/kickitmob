var gulp = require('gulp'),
    del = require('del'),
    copy = require('gulp-copy'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    useref = require('gulp-useref'),
    runSequence = require('gulp-run-sequence'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    minifyCss = require('gulp-minify-css'),
    iconify = require('gulp-iconify');


var paths = {
    dev: {
        root: '/',
        stylesheets: 'assets/stylesheets/',
        scripts: 'assets/scripts/',
        images: 'assets/images/'
    },
    dist: {
        root: 'dist/',
        stylesheets: 'dist/assets/stylesheets/',
        scripts: 'dist/assets/scripts/',
        images: 'dist/assets/images/'
    }
};

gulp.task('default', function() {

});


gulp.task('default', function() {
    
});

gulp.task('iconify', function() {
    iconify({
        src: paths.dev.images + 'icons/*.svg',
        pngOutput: paths.dev.images + 'icons/png',
        scssOutput: paths.dev.stylesheets + 'scss/utils/iconify',
        cssOutput: paths.dev.stylesheets + 'css/utils/iconify',
        styleTemplate: paths.dev.images + 'icons/_icon_gen.scss.mustache'
    });
});