"use strict";

import gulp from "gulp";
import concat from "gulp-concat";
import cleanCSS from "gulp-clean-css";
import sourcemaps from "gulp-sourcemaps";

const paths = {
  css: [
    "./src/css/fonts.css",
    "./src/css/animations.css",
    "./src/css/base.css",
    "./src/css/layout.css",
    "./src/css/module.css",
    "./src/css/theme.css"
  ],
  scriptsHead: [
    "./src/js/head/*"
  ],
  scriptsFooter: [
    "./src/js/footer/scripts-footer.js"
  ]
}

const dirs = {
  dest: "./dist"
}

export const buildStyles = () => gulp.src(paths.css)
  .pipe(sourcemaps.init())
  .pipe(concat("core.min.css"))
  .pipe(cleanCSS({ compatibility: "*"}))
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest(dirs.dest))

export const buildJSFooter = () => gulp.src(paths.scriptsFooter)
  .pipe(concat("core-footer.min.js"))
  .pipe(gulp.dest(dirs.dest))

exports.default = gulp.series(buildStyles, buildJSFooter)