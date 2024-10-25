  var links = document.querySelectorAll(".userlink");
  var closelinks = document.querySelectorAll(".userclose");
  var popupsection = document.querySelector(".volunteer-popup");
  var defaultsection = document.querySelector(".volunteeropened");

  function handleClick(event) {

    var id = event.target.id;

    var display2 = window.getComputedStyle(popupsection).display;

    if (display2 === "none") {
        $.ajax({
            url: 'hakkimizda.php',
            method: 'POST',
            data: { selectedId : id},
            success: function(response) {
    
              console.log(JSON.parse(response))
              var result = JSON.parse(response)
    
              document.getElementById("userisim").innerText = result.userName.toLocaleUpperCase("tr-TR");
              document.getElementById("userimage").src = result.userPhoto;
              document.getElementById("userinfo").innerHTML = result.userInfo;
              document.getElementById("userlinkedin").href = result.userLinkedIn;

              defaultsection.style.display = "none";
              popupsection.style.display = "block"
            },
            error: function(xhr, status, error) {
              console.log(error); 

              defaultsection.style.display = "block";
              popupsection.style.display = "none"
            }          
        });
    }

    console.log("Tıklanan ID: ", id);


  }


  links.forEach(function(link) {
    link.addEventListener("click", handleClick);
  });


  function closeClick(event) {


    var display = window.getComputedStyle(defaultsection).display;

    if (display === "none") {
        popupsection.style.display = "none"
        defaultsection.style.display = "block";
    }
  }


  closelinks.forEach(function(link) {
    link.addEventListener("click", closeClick);
  });
