var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})

var exampleModalExperience = document.getElementById('exampleModalExperience')
exampleModalExperience.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModalExperience.querySelector('.modal-title')
  var modalBodyInput = exampleModalExperience.querySelector('.modal-body input')

  modalTitle.textContent = recipient
  modalBodyInput.value = recipient
})


var exampleModalCursus = document.getElementById('exampleModalCursus')
exampleModalCursus.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModalCursus.querySelector('.modal-title')
  var modalBodyInput = exampleModalCursus.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})



var exampleModalCompetence = document.getElementById('exampleModalCompetence')
exampleModalCompetence.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModalCompetence.querySelector('.modal-title')
  var modalBodyInput = exampleModalCompetence.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})

var download = document.getElementById('download')
download.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = download.querySelector('.modal-title')
 

  modalTitle.textContent = 'New message to ' + recipient
 
})

function showButton() {
    var maDiv = document.getElementById('group-buttons');

    //get the current value of div's  diasplay property
    var displaySetting = maDiv.style.display;

    //get the id of button that will display our div's button
    var monButton = document.getElementById('button-click');

    if(displaySetting == 'block'){
        maDiv.style.display = 'none';
        monButton.innerHTML = "<img src=\'../IMAGES/sent.png'  class =\'imageblanche\'>"
    }

    else{
        maDiv.style.display = 'block';
        monButton.innerHTML = "<img src=\'../IMAGES/multiply.png'  height=30 ; width=30>";
    }

    // document.getElementById('group-buttons').style.display = "block";
    
}

// function ConfirmSend(){
//     $(document).ready(function(){
//         $('#alertbox').click(function(){
//           $("#error").html("You Clicked on Click here Button");
//             $('#myModal').modal("show");
//           });
//         });  
// }

function confirm(){
	alert("Email envoyé!");

}
// function convertHTMLToPDF() {
//   const { jsPDF } = window.jspdf;

//   var doc = new jsPDF('l', 'mm', [1200, 1810]);
//   var pdfjs = document.querySelector('#html-template');

//   doc.html(pdfjs, {
//       callback: function(doc) {
//           doc.save("output.pdf");
//       },
//       x: 10,
//       y: 10
//   });

//   doc.output('dataurlnewwindow');
// }


// $(function() {
//     $("form[name='username']").validate({
//       rules: {
        
//         username: {
//           required: true,
//           username: true
//         },
//         passwords: {
//           required: true,
          
//         }
//       },
//        messages: {
//         username: "Please enter a valid username",
       
//         passwords: {
//           required: "Please enter password",
         
//         }
        
//       },
//       submitHandler: function(form) {
//         form.submit();
//       }
//     });
//   });
  

  $(document).ready(function() {

    $('#download').click((e)=>{
            e.preventDefault()
            console.log("click")
            ExportPdf()
        })
    
        function ExportPdf(){
            kendo.drawing
                .drawDOM("#myCanvas")
                .then(function(group) {
                    // Render the result as a PDF file
                    return kendo.drawing.exportPDF(group, {
                        paperSize: "auto",
                        margin: { left: "1cm", top: "1cm", right: "1cm", bottom: "1cm" }
                    });
                })
                .done(function(data) {
                    // Save the PDF file
                    kendo.saveAs({
                        dataURI: data,
                        fileName: "cv.pdf",
                        proxyURL: "https://demos.telerik.com/kendo-ui/service/export"
                    });
                });
        
      }
    
    });