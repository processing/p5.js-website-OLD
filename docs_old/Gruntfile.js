module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    yuidoc: {
      compile: {
        name: '<%= pkg.name %>',
        description: '<%= pkg.description %>',
        version: '<%= pkg.version %>',
        url: '<%= pkg.homepage %>',
        options: {
          paths: '../src/',
          themedir: 'yuidoc-p5-theme/',
          //helpers: [],
          outdir: 'api/'
        }
      }
    }

  });

//  grunt.loadNpmTasks('grunt-contrib-watch');
//  grunt.loadNpmTasks('grunt-contrib-requirejs');
  grunt.loadNpmTasks('grunt-contrib-yuidoc');
//  grunt.loadNpmTasks('grunt-contrib-sass');

 // grunt.registerTask('yui', ['yuidoc']);
  grunt.registerTask('default', [ 'yuidoc']);

};