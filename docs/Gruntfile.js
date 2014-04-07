module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('../package.json'),
    sass: {
      dist: {
        files: {
          // 'destination': 'source'
          'yuidoc-p5-theme/assets/css/main.css': 'yuidoc-p5-theme-src/sass/main.scss'
        }
      }
    },
    watch: {
      sass: {
        files: ['yuidoc-p5-theme-src/sass/**/*.scss'],
        tasks: ['sass']
      },
//      src: {
//        files: ['yuidoc-p5-theme/assets/js/**/*.js'],
//        tasks: ['requirejs']
//      },
      docs: {
        files: [
          'yuidoc-p5-theme/assets/js/**/*.js', 
          'yuidoc-p5-theme/partials/*.handlebars', 
          'yuidoc-p5-theme/layouts/*.handlebars',
          'yuidoc-p5-theme/assets/js/tpl/**/*'
        ],
        tasks: ['yuidoc']
      }
    },
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
//    ,
//    requirejs: {
//      unmin: {
//        options: {
//          baseUrl: '.',
//          findNestedDependencies: true,
//          include: ['src/p5'],
//          optimize: 'none',
//          out: 'dist/p5.js',
//          useStrict: true,
//          wrap: true
//        }
//      },
//      min: {
//        options: {
//          baseUrl: '.',
//          findNestedDependencies: true,
//          include: ['src/p5'],
//          optimize: 'uglify2',
//          out: 'dist/p5.min.js',
//          paths: '<%= requirejs.unmin.options.paths %>',
//          useStrict: true,
//          wrap: true
//        }
//      }
//    }

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
//  grunt.loadNpmTasks('grunt-contrib-requirejs');
  grunt.loadNpmTasks('grunt-contrib-yuidoc');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('yui', ['yuidoc']);
  //grunt.registerTask('default', ['sass', 'yuidoc']);

};