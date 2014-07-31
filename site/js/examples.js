var examples = {
  init: function(file) {

    // Editor
    
    examples.editor = ace.edit('exampleEditor');
    //examples.editor.setTheme('ace/theme/monokai'); 
    examples.editor.getSession().setMode('ace/mode/javascript');
    examples.editor.getSession().setTabSize(2);

    // Button

    $('#runButton').click( function() { 
    examples.runExample();        
    });
    $('#resetButton').click( function() { 
    examples.resetExample();        
    });

    // Example Frame
    
    $('#exampleFrame').load(function() {
    var exampleCode = examples.editor.getSession().getValue();

      try {       

        if (exampleCode.indexOf('new p5') === -1) {
          exampleCode += ' new p5();';
        }

        var userScript = $('#exampleFrame')[0].contentWindow.document.createElement('script');
        userScript.type = 'text/javascript';
        userScript.text = exampleCode;
        userScript.async = false;
        $('#exampleFrame')[0].contentWindow.document.body.appendChild(userScript);

        //resize height of editor
        var rows = examples.editor.getSession().$rowLengthCache.length;
        var lineH = examples.editor.renderer.lineHeight;
        $('#exampleEditor').height(rows*lineH+'px');
      } catch (e) {
        console.log(e.message);
      }
    });

  // Capture clicks

  $.ajax({
      url: file,
      dataType: 'text'
    })
    .done(function (data) {
      $('#exampleSelector').hide();
      // strip description 
      var ind = data.indexOf('*/');
      data = data.substring(ind+3);
      examples.resetData = data;
      examples.showExample();
    })
  },
  showExample: function() {         
    examples.editor.getSession().setValue(examples.resetData); 
    examples.runExample();
    $('#exampleDisplay').show();
  },
  runExample: function() {
    $('#exampleFrame').attr('src', $('#exampleFrame').attr('src'));
  },
  resetExample: function() {
    examples.showExample();
  }
}