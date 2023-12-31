var gulp = require("gulp");
var browserSync = require("browser-sync").create();

// Static Server + watching scss/html files
gulp.task("serve", function () {
  browserSync.init({
    proxy: "localhost/dano-custom-mvc",
  });

  gulp.watch("app/**/*.php").on("change", browserSync.reload);
});

gulp.task("default", gulp.series("serve"));
