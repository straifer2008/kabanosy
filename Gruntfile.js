module.exports = function(grunt) {

    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "dev/css/main.min.css": ["dev/less/main.less"]
                }
            }
        },
        cssmin: {
            options: {
                mergeIntoShorthands: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    'app/css/main.min.css': ['node_modules/fullpage.js/dist/jquery.fullpage.min.css', 'dev/css/main.min.css', 'dev/css/style.css']
                }
            }
        },
        uglify: {
            my_target: {
                files: {
                    'dev/js/main.min.js': ['dev/js/main.js']
                }
            }
        },
        concat: {
            dist: {
                src: ['dev/js/jquery-3.3.1.min.js', 'node_modules/parallax-js/dist/parallax.min.js', 'node_modules/fullpage.js/dist/jquery.fullpage.min.js', 'dev/js/main.min.js'],
                dest: 'app/js/all.min.js'
            }
        },
        watch: {
            scripts: {
                files: ['dev/less/*.*', "dev/js/*.*", "*.html"],
                tasks: ['less', 'cssmin', 'uglify', 'concat'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['less', 'cssmin', 'uglify', 'concat', 'watch']);

};