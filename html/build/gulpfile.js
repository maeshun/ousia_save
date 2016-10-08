// gulp
var gulp			= require('gulp');
// css関連
var compass 		= require('gulp-compass');
// var sass			= require('gulp-sass');
var autoPrefixer	= require('gulp-autoprefixer');
var cleanCss		= require('gulp-clean-css');
var plumber			= require('gulp-plumber');
// js関連
var uglify			= require('gulp-uglify');
// ブラウザ更新
var browser			= require('browser-sync');
// 同期処理
var runSequence		= require('run-sequence');

// ソースディレクトリ
var srcPath	= "../src";

// sass監視、compass
gulp.task('compass', function(){
	gulp.src(srcPath+'/sass/*scss')
		.pipe(plumber())
		.pipe(compass({
			config_file: 'config.rb',
			comments: false,
			css: '../src/assets/css/',
			sass: '../src/sass/'
		}));
		// .pipe(browser.reload());
}); 


// css監視、sassコンパイル
// gulp.task('sass', function() {
// 	gulp.src('htdocs/sass/*scss')
// 		.pipe(plumber())
// 		.pipe(sass())
// 		.pipe(autoPrefixer())
// 		.pipe(gulp.dest('htdocs/css'));
//		.pipe(browser.reload({stream: true}));
// });

// js監視、jsミニファイ
gulp.task('js', function() {
	gulp.src([srcPath+'/js/*.js', '!'+srcPath+'/js/*.min.js'])
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest('js/min/'))
		//.pipe(browser.reload({stream: true}));
});

// ローカルサーバ起動
gulp.task('server', function() {
	browser({
		server: {
			baseDir: srcPath,
			index	: 'index.html'
		}
	});
});

// ブラウザのリロード
gulp.task('reload', function(){
	browser.reload();
})

// default task
gulp.task('default', ['server'], function() {
	// gulp.watch(srcPath+'/*.html', ['html','reload']);
	gulp.watch(srcPath+'/sass/*.scss', ['compass','reload']);
	// gulp.watch(['./js/*.js', '!htdocs/js/min/*.js'], ['js']);
});



/*
 * ここから本番ビルド用のタスク
 *
 */
var buildDir = "./release/";
var del = require('del');

// リリースビルド
gulp.task('release', function(callback) {
	runSequence(
		'clean',
		'copy',
		['css-build', 'js-build'], 
		callback
	);
});

// css本番ビルド
gulp.task('css-build', function() {
	gulp.src(srcPath+'/css/*.css')
		.pipe(cleanCss())
		.pipe(gulp.dest(buildDir+'css/'))
});

// js本番ビルド
gulp.task('js-build', function() {
	return gulp.src(srcPath+'/js/*.js')
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest(buildDir+'js/'))
});

// buildディレクトリを削除
gulp.task('clean', function(cb) {
	return del([buildDir+"**"], cb);
});

// css,js以外のファイルコピー
gulp.task('copy', function() {
	return gulp.src(
		[srcPath+'/**','!'+srcPath+'/sass/**','!'+srcPath+'/js/**','!'+srcPath+'/css/**'],
		{base: 'src'}
	)
	.pipe(gulp.dest(buildDir));
});
