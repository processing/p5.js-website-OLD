var sketch2 = function(p) {
  var angle = 360.0;
  var x1 =200;
  var y1 =350;
  var d = 180;

  var x2 =350;
  var y2 =200;

  var cx=200;
  var cy=200;

  var f=1;
  var f2 = 2;

  var p=0;
  //axis margins
  var ax = 80;
  var ay = 80;

  var play = 1;


  p.setup= function() {

    var myCanvas = p.createCanvas(800, 600);
    myCanvas.parent('sincoscurves');
    p.textFont("Georgia");
    p.smooth();
    p.noFill();
    p.rect(0, 0, width-1, height-1);
  }

  p.draw=function() {
    p.background(255);
    p.stroke(220);
    //guide lines
    p.line(cx-d/2,cy,cx-d/2,cy+360);
    p.line(cx+d/2,cy,cx+d/2,cy+360);

    p.line(cx,cy,cx,cy+360);
    p.line(cx,cy-d/2,cx+450,cy-d/2);
    p.line(cx,cy+d/2,cx+450,cy+d/2);
    p.line(cx,cy,cx+450,cy);

    //angle lines
    //cos

    p.line(cx-d/2,cy+d,cx+d/2,cy+d);
    p.line(cx-d/2,cy+2*d,cx+d/2,cy+2*d);
    //sin
    p.line(cx+d*0.5,cy-d/2,cx+d*0.5,cy+d/2);
    p.line(cx+d*1.5,cy-d/2,cx+d*1.5,cy+d/2);
    p.line(cx+d*2.5,cy-d/2,cx+d*2.5,cy+d/2);


    p.stroke(237,34,93);
    p.line(cx,cy,x1,y1);




    //axis
    p.stroke(0);
    p.line(cx-d/2,cy,cx+d/2,cy);
    p.line(cx,cy-d/2,cx,cy+d/2);
    p.noFill();
    //big circle
    p.ellipse(cx,cy,d,d);
    //line 1
    p.stroke(237,34,93);
    p.fill(237,34,93);

    //axis
    p.stroke(0);




    //calculate x1
    x1=d/2*p.cos(p.radians(angle))+cx;
    //calculate y1
    y1=d/2*p.sin(p.radians(angle))+cy;

    p.stroke(0);


    p.fill(0);
    p.stroke(200);

    p.line(x1,y1,cx + d/2+p, y1);//sin tracker
    p.line(x1,y1,x1,cy+p);//cos tracker

    p.fill(237,34,93);
    p.stroke(0);
    //circle ellipse
    p.ellipse(cx,cy,5,5);
    p.ellipse(x1,y1,5,5);

    //curve
    p.noFill();

    p.stroke(0);
    //labels
    p.stroke(237,34,93);
    p.fill(237,34,93);

    //bouncing ellipses

    p.ellipse(cx + d/2+p, y1, 5,5); // sin ball
    p.ellipse(x1,cy+p, 5,5); // cos ball


    angle2=0;
    p.stroke(237,34,93);
    for(var i=0;i<p;i++){


      px2 = cx + p.cos(p.radians(angle2))*(d/2);
      py2 = cy + p.sin(p.radians(angle2))*(d/2);

      point(cx+d/2+i, py2);
      point(px2,cy+i);
      angle2 =angle2- f2;


    }


    p=180-(angle/2);


    //button
    p.fill(237,34,93);
    p.ellipse(50,50,30,30);
    p.ellipse(50,90,30,30);
    p.stroke(255);
    p.fill(255);
    p.text("II",46,94);
    p.text(">",47,53);
    if(play===1){
      angle=angle-f;

    }else{

      p.stroke(255);

    }




    if(angle<-360){

      angle=360.0;
    }


    p.stroke(0);


    //labels
    p.text("90",cx-5,cy-d/2-20);
    p.text("\u03C0"+" / 2",cx-10,cy-d/2-40);
    p.text("0",cx+d/2+20,cy+5);
    p.text("0",cx+d/2+5,cy+5);
    p.text("270",cx-10,cy+d/2+20);
    p.text("3 / 2 "+"\u03C0",cx-15,cy+d/2+40);
    p.text("180",cx-d/2-30,cy+5);
    p.text("\u03C0",cx-d/2-45,cy+5);


    p.stroke(200);
    //1 and -1 for cos
    p.text("1",cx+d/2-3,cy+360+15);
    p.text("0",cx-3,cy+360+15);
    p.text("-1",cx-d/2-3,cy+360+15);

    //1 and -1 for sin
    p.text("-1",cx+450+15,cy+d/2-3);
    p.text("0",cx+450+15,cy-3);
    p.text("1",cx+450+15,cy-d/2+5);

    //axis labels sine
    p.stroke(200);
    p.text("angle",d/2+370,80);
    p.text("0",d/2+200,100);
    p.text("\u03C0",d/2+380,100);
    p.text("2"+"\u03C0",d/2+550,100);

    //axis labels cos
    p.text("angle",50,400);

    p.text("\u03C0",90,d/2+300);
    p.text("2"+"\u03C0",90,d/2+470);


    p.text("cos(angle)",170,cy+360+30);
    p.text("sin(angle)",cy+360+130,200);

    p.stroke(237,34,93);
    p.fill(237,34,93);
    p.textSize(14);
    //key
    p.text("angle = "+round(360-angle) + " degrees",width-350,height-210);
    p.text("angle = "+radians(360-angle).toFixed(2) + " radians",width-350,height-180);
    p.text("cos(angle) = "+((x1-cx)/(d/2)).toFixed(2),width-350,height-150);
    p.text("sin(angle) = "+(-(y1-cy)/(d/2)).toFixed(2) ,width-350,height-120);

    console.log("p="+p);
    console.log("angle="+angle);
  };

  function mousePressed() {
    if(p.dist(mouseX,mouseY,50,50)<30){
      play=1;
    }
    if(p.dist(mouseX,mouseY,50,90)<30){
      play=0;
    }
  }
};
var myp5 = new p5(sketch2);
