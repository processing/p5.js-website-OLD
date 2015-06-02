(function() {
  var logoSketch = function(p) {
    var logoJSON, logoPaths;
    var snapDistance, snapStrength, snapX, snapY, increment;

    p.preload = function() {
      logoJSON = p.loadJSON('./img/p5js.json');
    };

    p.setup = function() {
      p.createCanvas(200, 120);
      snapX = 0;
      snapY = 0;
      snapDistance = 1;
      snapStrength = 100;
      increment = 1;
      p.frameRate(30);
      p.noCursor();
      p.noStroke();
      p.fill(237, 34, 93);
      logoPaths = toAbsoluteSVG(logoJSON, 0.78);
    };

    p.draw = function() {
      p.clear();
      if (p.mouseX < p.width && p.mouseX > 0 && p.mouseY < p.height && p.mouseY > 0) {
        if (snapDistance == 1)
          snapDistance = p.int(p.random(12.5, 18.5));
        if (p.pmouseX < p.mouseX) {
          increment = -1;
        } else if (p.pmouseX > p.mouseX) {
          increment = 1;
        }
      } else {
        if (snapDistance > 3) {
          snapDistance -= 3;
        } else {
          snapDistance = 1;
        }
      }

      snapX += increment;

      if (snapDistance == 1) {
        drawSVG(logoPaths);
      } else {
        var drawData = doSnap(logoPaths, snapDistance, snapX, snapY);
        drawSVG(drawData);
      }
    };

    function doSnap(data, value, x, y) {
      var i, j, results = [];
      var strength = snapStrength / 100.0;
      // -4 eliminating the word 'BETA'
      for (i = 0; i < data.length - 4; i++) {
        var path = [];
        for (j = 0; j < data[i].length; j++) {
          var command = {};
          var one = data[i][j];
          command.code = one.code;
          if (one.code !== 'Z') {
            command.x = snap(one.x + x, value, strength) - x;
            command.y = snap(one.y + y, value, strength) - y;
          }
          if (one.code === 'Q' || one.code === 'C') {
            command.x1 = snap(one.x1 + x, value, strength) - x;
            command.y1 = snap(one.y1 + y, value, strength) - y;
          }
          if (one.code === 'C') {
            command.x2 = snap(one.x2 + x, value, strength) - x;
            command.y2 = snap(one.y2 + y, value, strength) - y;
          }
          path.push(command);
        }
        results.push(path);
      }
      return results;
    }

    // Round a value to the nearest "step".
    function snap(v, distance, strength) {
      return (v * (1.0 - strength)) + (strength * Math.round(v / distance) * distance);
    }

    /**
     *
     *
     *  Convert & Draw SVG based on preparsed JSON file
     *
     *
     */

    function toAbsoluteSVG(data, scale) {
      var results = [];
      for (var i = 0; i < data.length; i++) {
        var letter = [];
        var curX, curY, ctrX, ctrY;
        for (var j = 0; j < data[i].length; j++) {
          var command = {};
          var one = data[i][j];
          switch (one.code) {
            case 'M':
              command.code = 'M';
              command.x = curX = one.x * scale;
              command.y = curY = one.y * scale;
              break;
            case 'l':
              command.code = 'L';
              command.x = curX += one.x * scale;
              command.y = curY += one.y * scale;
              break;
            case 'L':
              command.code = 'L';
              command.x = curX = one.x * scale;
              command.y = curY = one.y * scale;
              break;
            case 'v':
              command.code = 'L';
              command.x = curX;
              command.y = curY += one.y * scale;
              break;
            case 'V':
              command.code = 'L';
              command.x = curX;
              command.y = curY = one.y * scale;
              break;
            case 'h':
              command.code = 'L';
              command.x = curX += one.x * scale;
              command.y = curY;
              break;
            case 'H':
              command.code = 'L';
              command.x = curX = one.x * scale;
              command.y = curY;
              break;
            case 'c':
              command.code = 'C';
              command.x1 = curX + one.x1 * scale;
              command.y1 = curY + one.y1 * scale;
              command.x2 = ctrX = curX + one.x2 * scale;
              command.y2 = ctrY = curY + one.y2 * scale;
              command.x = curX += one.x * scale;
              command.y = curY += one.y * scale;
              break;
            case 'C':
              command.code = 'C';
              command.x1 = one.x1 * scale;
              command.y1 = one.y1 * scale;
              command.x2 = ctrX = one.x2 * scale;
              command.y2 = ctrY = one.y2 * scale;
              command.x = curX = one.x * scale;
              command.y = curY = one.y * scale;
              break;
            case 's':
              command.code = 'C';
              command.x1 = curX * 2 - ctrX;
              command.y1 = curY * 2 - ctrY;
              command.x2 = ctrX = curX + one.x2 * scale;
              command.y2 = ctrY = curY + one.y2 * scale;
              command.x = curX += one.x * scale;
              command.y = curY += one.y * scale;
              break;
            case 'Z':
              command.code = 'Z';
              break;
            default:
              print(one.code);
          }
          letter.push(command);
        }
        results.push(letter);
      }
      return results;
    }

    function drawSVG(data) {
      for (var i = 0; i < data.length; i++) {
        var clipStart = false;
        for (var j = 0; j < data[i].length; j++) {
          var one = data[i][j];
          switch (one.code) {
            case 'M':
              if (j == 0) {
                p.beginShape();
              }
              p.vertex(one.x, one.y);
              break;
            case 'L':
              p.vertex(one.x, one.y);
              break;
            case 'C':
              p.bezierVertex(one.x1, one.y1, one.x2, one.y2, one.x, one.y);
              break;
            case 'Z':
              if (j != data[i].length - 1) {
                if (clipStart) {
                  p.endContour();
                }
                p.beginContour();
                clipStart = true;
              } else {
                if (clipStart) {
                  p.endContour();
                }
                p.endShape(p.CLOSE);
              }
              break;
            default:
              break;
          }
        }
      }
    }
  }
  new p5(logoSketch, 'p5_logo');
})();
