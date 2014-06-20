 
// now load the modules we need
var ejs = require('ejs'),       // library for turning .ejs templates into .html files
    fs = require('fs'),         // node.js library for reading and writing files
    rimraf = require('rimraf'); // rm -rf helper
 
// make sure EJS is configured to use curly braces for templates
ejs.open = '{{';
ejs.close = '}}';
 
// grab the file names from the command arguments array
// and give them more convenient names
var inputRoot = 'examples_src/';
var inputFiles = fs.readdirSync(inputRoot);
var templateFile = "template.ejs";
var outputRoot = "examples/";
 
// make sure we use the correct line-endings on Windows
var EOL = (process.platform === 'win32' ? '\r\n' : '\n')
 
// build the template
var template = ejs.compile(fs.readFileSync(templateFile, 'utf8'))
 
rimraf('examples', function() {
	fs.mkdirSync('examples');
	inputFiles.forEach(function(f) {
		if (f.indexOf('js') !== -1) {
			fs.readFile(inputRoot+f, 'utf8', function (err,data) {
			  if (err) {
			    return console.log(err);
			  }

				// make an array to store our output
				var outLines = [];

			  var startName = data.indexOf("@name")+6;
			  var endName = data.indexOf("\n", startName);

			  var startDesc = data.indexOf("@description")+13;
			  var endDesc = data.indexOf("\n", startDesc);

			  var endMeta = data.indexOf("*/");

			  var name = startName !== 5 ? data.substring(startName, endName) : '';
			  var desc = startDesc !== 12 ? data.substring(startDesc, endDesc) : '';

			  var code = data.substring(endMeta+2);


			  outLines.push(template({'name':name, 'desc':desc, 'js':code}));
			  var outputFile = outputRoot+name.replace(' ', '_')+'.php';

			  //console.log(name, desc, outputFile);
			  fs.writeFile(outputFile, outLines.join(EOL + EOL), 'utf8');
			});
		}
	});
});