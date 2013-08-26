'use strict';

module.exports = function(grunt) {

  // Project configuration
  grunt.initConfig({

    // Read package.json
    pkg: grunt.file.readJSON('package.json'),

    // Define paths
    meta: {
      sassPath: 'sass/',
      cssPath: 'css/',
      jsPath: 'js/',
    },

    // $TASK = Sass
    sass: {
      dist: {
        // Grab the style.scss and make the style.css, simple
        files: {
          '<%= meta.cssPath %>style.css' : '<%= meta.sassPath %>style.scss'
        },
        // Minify FTW!
        options: {
          style: 'compressed'
        }
      }
    },

    // $TASK = Watch... watch the files dude, watch the files!
    watch: {
      sass: {
        files: ['<%= meta.sassPath %>*.scss'],
        tasks: ['sass'],
        options: {
          livereload: true,
        },
      },
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);

};