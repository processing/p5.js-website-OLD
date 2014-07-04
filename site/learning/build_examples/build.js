 
// now load the modules we need
var ejs = require('ejs'),       // library for turning .ejs templates into .html files
    fs = require('fs'),         // node.js library for reading and writing files
    rimraf = require('rimraf'), // rm -rf helper
    async = require('async');   // async module
 
// make sure EJS is configured to use curly braces for templates
ejs.open = '{{';
ejs.close = '}}';
 
// grab the file names from the command arguments array
// and give them more convenient names
var inputRoot = '../examples_src/';
var inputFolders = fs.readdirSync(inputRoot);
var outputRoot = "../examples/";

var metaReg = new RegExp('\\* ', 'g');
var spaceReg = new RegExp(' ', 'g');
 
// make sure we use the correct line-endings on Windows
var EOL = (process.platform === 'win32' ? '\r\n' : '\n')
 
// build the templates
var example_template = ejs.compile(fs.readFileSync("example_template.ejs", 'utf8'));
var learning_template = ejs.compile(fs.readFileSync("learning_template.ejs", 'utf8'));
 
var all = {};

var f = fs.readdirSync(outputRoot);
f.forEach(function(file) {
  console.log(file)
  if (file.indexOf('.php') !== -1) {
    fs.unlinkSync(outputRoot+file);
  }
});

async.forEachSeries(inputFolders, function(folder, cb0) {
  if (fs.statSync(inputRoot+folder).isDirectory()) {

    folderName = folder.substring(3);
    all[folderName] = [];

    var inputFiles = fs.readdirSync(inputRoot+folder);
    
    async.forEachSeries(inputFiles, function(file, cb1) {
      if (file.indexOf('.js') !== -1) {
        fs.readFile(inputRoot+folder+'/'+file, 'utf8', function (err,data) {
          if (err) {
            return console.log(err);
          }

          // make an array to store our output

          var startName = data.indexOf("@name")+6;
          var endName = data.indexOf("\n", startName);

          var startDesc = data.indexOf("@description")+13;
          var endDesc = data.indexOf("*/", startDesc);

          var name = startName !== 5 ? data.substring(startName, endName) : '';
          var desc = startDesc !== 12 ? data.substring(startDesc, endDesc) : '';
          desc = desc.replace(metaReg, '');

          var code = data.substring(endDesc+2);

          var content = example_template({'name':name, 'desc':desc, 'js':code});
          var outputFile = outputRoot+name.replace(spaceReg, '_')+'.php';
          console.log(outputFile);

          all[folderName].push([name, outputFile.substring(3)]);

          fs.writeFile(outputFile, content, 'utf8');

          console.log('d')
          cb1();

        });
      } else {
        cb1();
      }
    }, function(callback) {
      console.log('all done')
      cb0();
    });
  } else {
    cb0();
  }
}, function(callback) {
  console.log(all);
  // write main page
  fs.writeFile('../index.php', learning_template({'all':all}), 'utf8');

});

