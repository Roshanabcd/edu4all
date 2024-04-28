// Header mobile menu Code
function myFunction() {
  var menuX = document.getElementById("myTopnav");
  if (menuX.className === "topnav header-nav") {
    menuX.className += " responsive";
  } else {
    menuX.className = "topnav header-nav";
  }
}


// Bubbles Code
IconText(['You can learn Web Development.', 'You can learn Application Development', 'You can learn Hacking'], 'text',['#fff','#fff','#fff']);

function IconText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var conn = document.getElementById('underscoreID');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      conn.className = 'underscoreIcon hidden'
      visible = false;

    } else {
      conn.className = 'underscoreIcon'

      visible = true;
    }
  }, 400)
}// Header mobile menu Code
function myFunction() {
  var menuX = document.getElementById("myTopnav");
  if (menuX.className === "topnav header-nav") {
    menuX.className += " responsive";
  } else {
    menuX.className = "topnav header-nav";
  }
}


// Bubbles Code
IconText(['You can learn Web Development.', 'You can learn Application Development', 'You can learn Hacking'], 'text',['#fff','#fff','#fff']);

function IconText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var conn = document.getElementById('underscoreID');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      conn.className = 'underscoreIcon hidden'
      visible = false;

    } else {
      conn.className = 'underscoreIcon'

      visible = true;
    }
  }, 400)
}