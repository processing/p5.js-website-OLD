YUI.add("yuidoc-meta", function(Y) {
   Y.YUIDoc = { meta: {
    "classes": [
        "p5",
        "p5.Amplitude",
        "p5.AudioIn",
        "p5.Color",
        "p5.Convolver",
        "p5.Delay",
        "p5.Element",
        "p5.Env",
        "p5.FFT",
        "p5.Filter",
        "p5.Graphics",
        "p5.Image",
        "p5.MediaElement",
        "p5.Noise",
        "p5.Oscillator",
        "p5.Pulse",
        "p5.Reverb",
        "p5.Signal",
        "p5.SoundFile",
        "p5.SoundRecorder",
        "p5.Table",
        "p5.TableRow",
        "p5.Vector",
        "p5.dom",
        "p5.sound"
    ],
    "modules": [
        "2D Primitives",
        "Array Functions",
        "Attributes",
        "Calculation",
        "Color",
        "Constants",
        "Creating & Reading",
        "Curves",
        "DOM",
        "Data",
        "Environment",
        "Files",
        "Image",
        "Input",
        "Keyboard",
        "Loading & Displaying",
        "Math",
        "Mouse",
        "Noise",
        "Output",
        "Pixels",
        "Random",
        "Rendering",
        "Setting",
        "Shape",
        "String Functions",
        "Structure",
        "Table",
        "Time & Date",
        "Touch",
        "Transform",
        "Trigonometry",
        "Typography",
        "Vertex",
        "p5.dom",
        "p5.sound"
    ],
    "allModules": [
        {
            "displayName": "2D Primitives",
            "name": "2D Primitives"
        },
        {
            "displayName": "Array Functions",
            "name": "Array Functions"
        },
        {
            "displayName": "Attributes",
            "name": "Attributes"
        },
        {
            "displayName": "Calculation",
            "name": "Calculation"
        },
        {
            "displayName": "Color",
            "name": "Color"
        },
        {
            "displayName": "Constants",
            "name": "Constants"
        },
        {
            "displayName": "Creating & Reading",
            "name": "Creating & Reading"
        },
        {
            "displayName": "Curves",
            "name": "Curves"
        },
        {
            "displayName": "Data",
            "name": "Data"
        },
        {
            "displayName": "DOM",
            "name": "DOM",
            "description": "Base class for all elements added to a sketch, including canvas,\ngraphics buffers, and other HTML elements. Methods in blue are\nincluded in the core functionality, methods in brown are added\nwith the <a href=\"http://p5js.org/libraries/\">p5.dom library</a>. \nIt is not called directly, but p5.Element\nobjects are created by calling createCanvas, createGraphics,\nor in the p5.dom library, createDiv, createImg, createInput, etc."
        },
        {
            "displayName": "Environment",
            "name": "Environment"
        },
        {
            "displayName": "Files",
            "name": "Files"
        },
        {
            "displayName": "Image",
            "name": "Image",
            "description": "Creates a new p5.Image. A p5.Image is a canvas backed representation of an\nimage. p5 can display .gif, .jpg and .png images. Images may be displayed\nin 2D and 3D space. Before an image is used, it must be loaded with the\nloadImage() function. The p5.Image class contains fields for the width and\nheight of the image, as well as an array called pixels[] that contains the\nvalues for every pixel in the image. The methods described below allow\neasy access to the image's pixels and alpha channel and simplify the\nprocess of compositing.\n\nBefore using the pixels[] array, be sure to use the loadPixels() method on\nthe image to make sure that the pixel data is properly loaded."
        },
        {
            "displayName": "Input",
            "name": "Input"
        },
        {
            "displayName": "Keyboard",
            "name": "Keyboard"
        },
        {
            "displayName": "Loading & Displaying",
            "name": "Loading & Displaying"
        },
        {
            "displayName": "Math",
            "name": "Math",
            "description": "A class to describe a two or three dimensional vector, specifically\na Euclidean (also known as geometric) vector. A vector is an entity\nthat has both magnitude and direction. The datatype, however, stores\nthe components of the vector (x,y for 2D, and x,y,z for 3D). The magnitude\nand direction can be accessed via the methods mag() and heading(). In many\nof the p5.js examples, you will see p5.Vector used to describe a position,\nvelocity, or acceleration. For example, if you consider a rectangle moving\nacross the screen, at any given instant it has a position (a vector that\npoints from the origin to its location), a velocity (the rate at which the\nobject's position changes per time unit, expressed as a vector), and\nacceleration (the rate at which the object's velocity changes per time\nunit, expressed as a vector). Since vectors represent groupings of values,\nwe cannot simply use traditional addition/multiplication/etc. Instead,\nwe'll need to do some \"vector\" math, which is made easy by the methods\ninside the p5.Vector class."
        },
        {
            "displayName": "Mouse",
            "name": "Mouse"
        },
        {
            "displayName": "Noise",
            "name": "Noise"
        },
        {
            "displayName": "Output",
            "name": "Output"
        },
        {
            "displayName": "p5.dom",
            "name": "p5.dom",
            "description": "<p>The web is much more than just canvas and p5.dom makes it easy to interact \nwith other HTML5 objects, including text, hyperlink, image, input, video, \naudio, and webcam.</p>\n<p>There are a set of creation methods, and some other stuff... @TODO.</p>\n\n<p>Methods and properties shown in black are part of the p5.js core, items in\nblue are part of the p5.dom library. See the\n<a href=\"http://p5js.org/libraries/#using-a-library\">using a library</a>\nsection for information on how to include this library. p5.dom comes with\n<a href=\"http://p5js.org/download\">p5 complete</a> or you can download the single file\n<a href=\"https://raw.githubusercontent.com/lmccart/p5.js/master/lib/addons/p5.dom.js\">\nhere</a>.</p>\n<p>See <a href=\"https://github.com/lmccart/p5.js/wiki/Beyond-the-canvas\">tutorial: beyond the canvas]</a>\nfor more info on how to use this libary.</a>"
        },
        {
            "displayName": "p5.sound",
            "name": "p5.sound",
            "description": "p5.sound extends p5 with <a href=\"http://caniuse.com/audio-api\"\ntarget=\"_blank\">Web Audio</a> functionality including audio input,\nplayback, analysis and synthesis.\n<br/><br/>\n<a href=\"#/p5.SoundFile\"><b>p5.SoundFile</b></a>: Load and play sound files.<br/>\n<a href=\"#/p5.Amplitude\"><b>p5.Amplitude</b></a>: Get the current volume of a sound.<br/>\n<a href=\"#/p5.AudioIn\"><b>p5.AudioIn</b></a>: Get sound from an input source, typically\n  a computer microphone.<br/>\n<a href=\"#/p5.FFT\"><b>p5.FFT</b></a>: Analyze the frequency of sound. Returns\n  results from the frequency spectrum or time domain (waveform).<br/>\n<a href=\"#/p5.Oscillator\"><b>p5.Oscillator</b></a>: Generate Sine,\n  Triangle, Square and Sawtooth waveforms. Base class of\n  <a href=\"#/p5.Noise\">p5.Noise</a> and <a href=\"#/p5.Pulse\">p5.Pulse</a>.\n  <br/>\n<a href=\"#/p5.Env\"><b>p5.Env</b></a>: An Envelope is a series\n  of fades over time. Often used to control an object's\n  output gain level as an \"ADSR Envelope\" (Attack, Decay,\n  Sustain, Release). Can also modulate other parameters.<br/>\n<a href=\"#/p5.Delay\"><b>p5.Delay</b></a>: A delay effect with\n  parameters for feedback, delayTime, and lowpass filter.<br/>\n<a href=\"#/p5.Filter\"><b>p5.Filter</b></a>: Filter the frequency range of a\n  sound.\n<br/>\n<a href=\"#/p5.Reverb\"><b>p5.Reverb</b></a>: Add reverb to a sound by specifying\n  duration and decay. <br/>\n<b><a href=\"#/p5.Convolver\">p5.Convolver:</a></b> Extends\n<a href=\"#/p5.Reverb\">p5.Reverb</a> to simulate the sound of real\n  physical spaces through convolution.<br/>\n<b><a href=\"#/p5.SoundRecorder\">p5.SoundRecorder</a></b>: Record sound for playback \n  / save the .wav file.\n<br/><br/>\np5.sound is on <a href=\"https://github.com/therewasaguy/p5.sound/\">GitHub</a>.\nDownload the latest version \n<a href=\"https://github.com/therewasaguy/p5.sound/blob/master/lib/p5.sound.js\">here</a>."
        },
        {
            "displayName": "Pixels",
            "name": "Pixels"
        },
        {
            "displayName": "Random",
            "name": "Random"
        },
        {
            "displayName": "Rendering",
            "name": "Rendering",
            "description": "Main graphics and rendering context, as well as the base API \nimplementation for p5.js \"core\". Use this class if you need to draw into \nan off-screen graphics buffer. A p5.Graphics object can be constructed \nwith the <code>createGraphics()</code> function. The fields and methods \nfor this class are extensive, but mirror the normal drawing API for p5."
        },
        {
            "displayName": "Setting",
            "name": "Setting"
        },
        {
            "displayName": "Shape",
            "name": "Shape"
        },
        {
            "displayName": "String Functions",
            "name": "String Functions"
        },
        {
            "displayName": "Structure",
            "name": "Structure"
        },
        {
            "displayName": "Table",
            "name": "Table",
            "description": "Table objects store data with multiple rows and columns, much\nlike in a traditional spreadsheet. Tables can be generated from\nscratch, dynamically, or using data from an existing file."
        },
        {
            "displayName": "Text Area",
            "name": "Text Area"
        },
        {
            "displayName": "Time & Date",
            "name": "Time & Date"
        },
        {
            "displayName": "Touch",
            "name": "Touch"
        },
        {
            "displayName": "Transform",
            "name": "Transform"
        },
        {
            "displayName": "Trigonometry",
            "name": "Trigonometry"
        },
        {
            "displayName": "Typography",
            "name": "Typography"
        },
        {
            "displayName": "Vertex",
            "name": "Vertex"
        }
    ]
} };
});