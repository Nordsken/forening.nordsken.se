var gulp = require('gulp');
var elixir = require('laravel-elixir');
var livereload = require('gulp-livereload');

elixir(function (mix) {
    mix
        .sass(
        'app.scss',
        null,
        {
            includePaths: [
                './node_modules/foundation-sites/scss',
                './node_modules/font-awesome/scss'
            ]
        }
    )
    .browserify('app.js')
});

/**
 * Logic for LiveReload to work properly on watch task.
 */
gulp.on('task_start', function (e) {
    // only start LiveReload server if task is 'watch'
    if (e.task === 'watch') {
        livereload.listen();
    }
});
gulp.task('watch-lr-css', function () {
    // notify a CSS change, so that livereload can update it without a page refresh
    livereload.changed('app.css');
});
gulp.task('watch-lr', function () {
    // notify any other changes, so that livereload can refresh the page
    livereload.changed('app.js');
});