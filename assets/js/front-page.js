if(document.getElementsByClassName('bhero-backgroundImage').length) {
    const controller1 = document.getElementById("fpage-1")
    const controller2 = document.getElementById("fpage-2")
    const controller3 = document.getElementById("fpage-3")
    const controller4 = document.getElementById("fpage-4")
    const teamsGroup = document.querySelector(".fpage-teams")

    const controllers = [controller1, controller2, controller3, controller4];

    function clearActive() {
        controllers.forEach(controller => {
          controller.classList.remove("fpage-selected");
        });
      }

     

      controller1.onclick = () => {
        teamsGroup.scrollLeft = 0;

      };
      
      controller2.onclick = () => {
        teamsGroup.scrollLeft = 300;
      };
      
      controller3.onclick = () => {
        teamsGroup.scrollLeft = 600;
 
      };
      
      controller4.onclick = () => {
        teamsGroup.scrollLeft = 900;

      };
      
      // Listen for the scroll event
      teamsGroup.addEventListener('scroll', () => {
        if( teamsGroup.scrollLeft < 200) {
            clearActive();
            controller1.classList.add("fpage-selected")
        }
        else if (teamsGroup.scrollLeft > 200 && teamsGroup.scrollLeft < 500) {
            clearActive();
            controller2.classList.add("fpage-selected")
        } 
        else if (teamsGroup.scrollLeft > 500 && teamsGroup.scrollLeft < 800) {
            clearActive();
            controller3.classList.add("fpage-selected")
        } 
        else if (teamsGroup.scrollLeft > 800 ) {
            clearActive();
            controller4.classList.add("fpage-selected")
        } 
      });

}

