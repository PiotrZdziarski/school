var gulp = require('gulp');
var browserSync = require('browser-sync');
gulp.task('reload', function(){
    browserSync.reload();
});

gulp.task('serve', function () {
    browserSync.init({
        proxy: 'localhost/school/public'
    });
    browserSync({
        server: 'public',
    });

    gulp.watch('resources/**/*.php', ['reload']);
    gulp.watch('public/**/*.{js,css,php}', ['reload']);
    /*gulp.watch('public/css/!*.css', ['reload']);*/
});
gulp.task('default', ['serve']);
