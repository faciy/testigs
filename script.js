/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
  

// vars
'use strict'
var	testim = document.getElementById("testim"),
	testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })

		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})

		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;

				touchPosDiff = touchStartPos - touchEndPos;

				console.log(touchPosDiff);
				console.log(touchStartPos);
				console.log(touchEndPos);


				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}

		})
}

/*formulaire*/
/*Un code js pour afficher dans un input la valeur du prix lorsqu'on fait un choix dans un menu deroulant
// function verif() {
//     with (document.form) {
//       champs1.value = sujet.value;
//     }
//     }
*/
    
   

    function ret(){
        var test = document.getElementById("select").value;
        if (test == 1){
            pu1 = 8000;
            document.getElementById("champs1").value = pu1;
            qte = document.getElementById("exemplaire").value;
            montant = qte*pu1;
            document.getElementById("prix").value = montant;
        }
        

        else if (test == 2){
            pu1 = 4575 ;
            document.getElementById("champs1").value = pu1;
            qte = document.getElementById("exemplaire").value;
            montant = qte*pu1;
            document.getElementById("prix").value = montant;
        }

        else if (test == 3){
            pu1 = 9651 ;
            document.getElementById("champs1").value = pu1;
            qte = document.getElementById("exemplaire").value;
            montant = qte*pu1;
            document.getElementById("prix").value = montant;
        }

        else if (test == 4){
            pu1 = 6000 ;
            document.getElementById("champs1").value = pu1;
            qte = document.getElementById("exemplaire").value;
            montant = qte*pu1;
            document.getElementById("prix").value = montant;
        }

        else if (test == 5){
            pu1 =  8505 ;
            document.getElementById("champs1").value = pu1;
            qte = document.getElementById("exemplaire").value;
            montant = qte*pu1;
            document.getElementById("prix").value = montant;
        }
        else if (test == 6){
            pu1 = 7800;
            document.getElementById("champs1").value = pu1;
            qte = document.getElementById("exemplaire").value;
            montant = qte*pu1;
            document.getElementById("prix").value = montant;
        }
    }



/*pushbar*/
//autre menu
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
  
