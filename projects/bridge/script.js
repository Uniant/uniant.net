ityped.init('#typist', {
    strings: ['sudo shutdown', 'sudo rm -rf /'],
    typeSpeed: 100,
    backSpeed:  100,
    startDelay: 300,
    backDelay:  10000,
    loop: true,
    showCursor: true,
  });
  
  var commandlinux = document.getElementById('typist');
  var commandwin = document.getElementById('commandwindows');
  var commandresult = document.getElementById('commandresult');
  var i = 0;
  setInterval( function() {
      if (i == 0) {
          i = 1;
      } else {
          i = 0;
      }
  }, 12500);
  setInterval( function() {
      switch (i) {
          case 0:
              commandwin.innerHTML = "C:\\WINDOWS\\system32>  shutdown /s";
              commandresult.innerHTML = "Windows will shut down in 60 minutes.";
              if (commandlinux.textContent == "sudo shutdown") {
                  commandwin.classList.remove('cannotview');
                  commandresult.classList.remove('cannotview');
              } else if (commandwin.classList.contains('cannotview') == false) {
                  commandwin.classList.add('cannotview');
                  commandresult.classList.add('cannotview');
              }
          break;
  
          case 1:
              commandwin.innerHTML = "C:\\WINDOWS\\system32> rd /s /q c:\\";
              commandresult.innerHTML = "We trust you have received the usual lecture from the local System Administrator. It usually boils down to these three things:<br><br>    #1) Respect the privacy of others.<br>    #2) Think before you type.<br>    #3) With great power comes great responsibility.<br><br>Password:";
              if (commandlinux.textContent == "sudo rm -rf /") {
                  commandwin.classList.remove('cannotview');
                  commandresult.classList.remove('cannotview');
              } else if (commandwin.classList.contains('cannotview') == false) {
                  commandwin.classList.add('cannotview');
                  commandresult.classList.add('cannotview');
              }
          break;
      }
  }, 200);