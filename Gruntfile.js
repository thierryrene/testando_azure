module.exports = function(grunt) {

    grunt.initConfig({

        imagemin: {
            png: {
                options: {
                    optimizationLevel: 7
                },
                files: [{
                    // Set to true to enable the following options…
                    expand: true,
                    // cwd is 'current working directory'
                    cwd: 'source/img/',
                    src: ['**/*.png'],
                    // Could also match cwd line above. i.e. project-directory/img/
                    dest: 'build/img/compressed/',
                    ext: '.png'
                }]
            },
            jpg: {
                options: {
                    progressive: true,
                },
                files: [{
                    // Set to true to enable the following options…
                    expand: true,
                    // cwd is 'current working directory'
                    cwd: 'source/img/',
                    src: ['**/*.jpg'],
                    // Could also match cwd. i.e. project-directory/img/
                    dest: 'build/img/compressed/',
                    ext: '.jpg'
                }]
            },
            gif: {
                options: {
                    interlaced: true
                },
                files: [{
                    // Set to true to enable the following options…
                    expand: true,
                    // cwd is 'current working directory'
                    cwd: 'source/img/',
                    src: ['**/*.gif'],
                    // Could also match cwd. i.e. project-directory/img/
                    dest: 'build/img/compressed/',
                    ext: '.gif'
                }]
            }
            
        },

        sass: {
            app: {
                files: [{
                    expand: true,
                    cwd: "source/sass/",
                    src: ["*.scss"],
                    dest: "build/",
                    ext: ".css"
                }]
            },
            options: {
                sourceMap: false,
                // outputStyle: "nested",
                imagePath: "source/sass/"
            }
        },

        //definindo configurações da task para o autoprefixer
        autoprefixer: {
            compile: {
                files: {
                    "build/purestyle.css": "build/purestyle.css"
                }
            }
        },

        cssmin: {
            clean: {
                files: {
                    "build/purestyle.css": "build/purestyle.css"
                }
            }
        },

        jade: {
            compile: {
                files: [{
                    expand: true,
                    cwd: "source/jade",
                    src: "*.jade",
                    dest: "build",
                    ext: ".html"
                }]
            }
        },

        uglify: {
            bower_js_files: {
                files: {
                    "build/output.min.js": [
                        "bower_components/jquery/dist/jquery.js",
                        "bower_components/modernizr.js",
                        "bower_components/bootstrap/dist/js/bootstrap.min.js"
                    ]
                }
            }
        },

        purifycss: {
            options: {},
            target: {
                src: ["build/*.html"],
                css: ["build/*.css"],
                dest: "build/purestyle.css"
            }
        },

        watch: {
            sass: {
                files: ["source/sass/{,*/}*.{scss,sass}"],
                tasks: ["sass", "purifycss", "autoprefixer", "cssmin", "uglify"]
            },
            jade: {
                files: ["source/jade/*.jade"],
                tasks: ["jade", "sass", "purifycss", "autoprefixer", "cssmin", "uglify", "imagemin"]
            }
        },

    });

    //carregando plugins do grunt
    grunt.loadNpmTasks("grunt-purifycss");
    grunt.loadNpmTasks("grunt-autoprefixer");
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks("grunt-contrib-jade");
    grunt.loadNpmTasks("grunt-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks('grunt-contrib-imagemin');
};