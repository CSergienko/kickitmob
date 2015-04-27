var gulp = require('gulp'),
    del = require('del'),
    copy = require('gulp-copy'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    useref = require('gulp-useref'),
    runSequence = require('gulp-run-sequence'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    minifyCss = require('gulp-minify-css');

var paths = {
    dev: {
        root: '/'
    },
    dist: {
        root: '/dist/'
    }
};

gulp.task('default', function() {

});


gulp.task('default', function() {
    var assets = useref.assets();
    
    return gulp.src('*.html')
        .pipe(plumber())
        .pipe(assets)
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulpif('*.css', minifyCss()))
        .pipe(assets.restore())
        .pipe(useref())
        .pipe(gulp.dest('dist'));
});