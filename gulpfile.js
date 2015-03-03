var gulp = require('gulp'),
	sass = require('gulp-sass');

gulp.task('styles', function(){
	gulp.src('wp-content/themes/theme-hackeryou/style.scss')
		.pipe(sass())
		.pipe(gulp.dest('wp-content/themes/theme-hackeryou/'))
});

gulp.task('watch', function(){
	gulp.watch('wp-content/themes/theme-hackeryou/style.scss', ['styles'])
});