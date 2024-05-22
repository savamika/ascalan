 function closeContentBox() {
            document.querySelector('.content-box').style.display = 'none';
        }
        
        function closeChat() {
            // Directly hide the chat box
            document.querySelector('.chat-box').style.display = 'none';
            // Ensure the checkbox is unchecked when closing the chat
            document.getElementById('chat-toggle').checked = false;
        }
        
        function openChatBox() {
            // Directly show the chat box
            document.querySelector('.chat-box').style.display = 'block';
            // Ensure the checkbox is checked when opening the chat
            document.getElementById('chat-toggle').checked = true;
        }
  


        function openModal(userId) {
            // TODO: You would fetch user data based on userId and populate the form here.
          
            document.getElementById('modifyUserModal').style.display = 'block';
          }
          
          function closeModal() {
            document.getElementById('modifyUserModal').style.display = 'none';
          }
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            var modal = document.getElementById('modifyUserModal');
            if (event.target == modal) {
              closeModal();
            }
          }
          

          function toggleMenu() {
            var sideMenu = document.querySelector('.side-menu');
            sideMenu.classList.toggle('active');
        }


        

        




        function changeLanguage(select) {
          var language = select.value; // Get the selected language code
          var currentPage = window.location.pathname.split("/").pop(); // Extracts the current filename
      
          // Determine the base filename by removing any existing language suffix
          var basePage = currentPage.replace(/-de\.html$/, '.html');
      
          // Append the language suffix if German, else use the base name for English
          if (language === 'de') {
              window.location.href = basePage.replace('.html', '-de.html'); // For German
          } else {
              window.location.href = basePage; // For English, no suffix needed
          }
      }
      
      
      function goBack() {
        window.history.back();
    }