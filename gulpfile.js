<<<<<<< HEAD
var gulp = require('gulp')
=======
var gulp = require('gulp');
>>>>>>> b661c549cfe0a25a7c2b3672c6bf86b6c539ae3c
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

<<<<<<< HEAD
    gulp.watch('resources/**/*.php', ['reload']);
    gulp.watch('public/**/*.{js,css,php}', ['reload']);
    /*gulp.watch('public/css/!*.css', ['reload']);*/
});
gulp.task('default', ['serve']);
=======
     gulp.watch('resources/**/*.php', ['reload']);
     gulp.watch('public/**/*.{js,css,php}', ['reload']);
    /*gulp.watch('public/css/!*.css', ['reload']);*/
});
gulp.task('default', ['serve']);
>>>>>>> b661c549cfe0a25a7c2b3672c6bf86b6c539ae3c
