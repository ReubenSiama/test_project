//== Class definition

var DropzoneDemo = function () {    
    //== Private functions
    var demos = function () {
        // single file upload
        Dropzone.options.mDropzoneOne = {
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 5, // MB
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else { 
                    done(); 
                }
            }   
        };

        // multiple file upload
        Dropzone.options.mDropzoneTwo = {
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else { 
                    done(); 
                }
            }   
        };

        // file type validation
        Dropzone.options.mDropzoneThree = {
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            acceptedFiles: "image/*,application/pdf",
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done();
                } else { 
                    done(); 
                }
            }   
        };
    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();

DropzoneDemo.init();