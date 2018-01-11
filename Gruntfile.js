module.exports = function(grunt) { // the general grunt function that is run

    grunt.initConfig({ // here we setup our config object with package.json and all the tasks

        pkg: grunt.file.readJSON('package.json'),

        sass: { // sass tasks
            dist: {
                options: {
                    'sourcemap=none': false
                },
                files: {
                    'style.css': 'scss/sass.scss', // this is our main scss file
                    'admin.css': 'scss/admin/main.scss' // this is our main scss file
                }
            }
        },

        cssmin: { // minifying css task
            dist: {
                files: {
                    'style.min.css': 'style.css',
                    'admin.min.css': 'admin.css'
                }
            }
        },

        watch: { // watch task for general work
            sass: {
                files: ['sass/**/*.scss'],
                tasks: ['sass']
            },
            styles: {
                files: ['style.css'],
                tasks: ['cssmin']
            }
        }
    });

    // all the plugins that is needed for above tasks
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // registering the default task that we're going to use along with watch
    grunt.registerTask('default',['sass', 'cssmin']);
};

