
module.exports = function(grunt) {
 //
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    // Tasks
    sass: { // Begin Sass Plugin
      dist: {
        files: [{
          expand: true,
          cwd: 'webroot/scss',
          src: ['**/*.scss'],
          dest: 'webroot/css',
          ext: '.css'
      }]
      }
    },
    postcss: { // Begin Post CSS Plugin
      options: {
        map: false,
        processors: [
      require('autoprefixer')({
            browsers: ['last 2 versions']
          })
    ]
      },
      dist: {
        src: 'webroot/css/style.css'
      }
    },
    cssmin: { // Begin CSS Minify Plugin
      target: {
        files: [{
          expand: true,
          cwd: 'webroot/css',
          src: ['*.css', '!*.min.css'],
          dest: 'webroot/css',
          ext: '.min.css'
    }]
      }
    },
    uglify: { // Begin JS Uglify Plugin
      build: {
        src: ['webroot/js/main.js'],
        dest: 'webroot/js/main.min.js'
      }
    },
    watch: { // Compile everything into one task with Watch Plugin
      css: {
        files: 'webroot/scss/*.scss',
        tasks: ['sass', 'postcss', 'cssmin']
      },
      js: {
        files: 'webroot/js/*.js',
        tasks: ['uglify']
      }
    }
  });

  // Load the plugin that provides the "uglify" task.

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};

