<button type="submit">

</button>

<button type="submit">
    
</button>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><img src="IMAGES/download.png" alt="" srcset=""></button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><img src="IMAGES/gmail.png" alt="" srcset=""></button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<div class="group-button" id="group-buttons">
            <button class="btn-envoyer" id = "btn-email" onclick="retieveEmail();">
                <img src="../img/mail_filled_30px.png" alt="" class="icon">
            </button>

          

            <button class="btn-envoyer" id = "btn-send">
                <img src="../img/paper_plane_filled_50px.png" alt="" class="icon">
            </button>
        </div>

        <button class="btn-envoyer" onclick="showDiv();"  id="button-click">
            <img src="../img/share_30px.png" alt="" class="icon">
        </button>

        <script>
            function showDiv() {
                var maDiv = document.getElementById('group-buttons');

                //get the current value of div's  diasplay property
                var displaySetting = maDiv.style.display;

                //get the id of button that will display our div's button
                var monButton = document.getElementById('button-click');

                if(displaySetting == 'block'){
                    maDiv.style.display = 'none';
                    monButton.innerHTML = "<img src=\'../img/share_30px.png'  class =\'icon\'>"
                }

                else{
                    maDiv.style.display = 'block';
                    monButton.innerHTML = "<img src=\'../img/multiply_24px.png'  class =\'icon\'>";
                }

                // document.getElementById('group-buttons').style.display = "block";
                
            }
        </script>