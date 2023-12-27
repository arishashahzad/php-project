//navbar js//
function myFunction() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}


function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
  //home page top js//
  

//product page js//





window.onload = function () {

  //// SLIDER
  var slider = document.getElementsByClassName("sliderBlock_items");
  var slides = document.getElementsByClassName("sliderBlock_items__itemPhoto");
  var next = document.getElementsByClassName("sliderBlock_controls__arrowForward")[0];
  var previous = document.getElementsByClassName("sliderBlock_controls__arrowBackward")[0];
  var items = document.getElementsByClassName("sliderBlock_positionControls")[0];
  var currentSlideItem = document.getElementsByClassName("sliderBlock_positionControls__paginatorItem");

  var currentSlide = 0;
  var slideInterval = setInterval(nextSlide, 5000);  /// Delay time of slides

  function nextSlide() {
      goToSlide(currentSlide + 1);
  }

  function previousSlide() {
      goToSlide(currentSlide - 1);
  }


  function goToSlide(n) {
      slides[currentSlide].className = 'sliderBlock_items__itemPhoto';
      items.children[currentSlide].className = 'sliderBlock_positionControls__paginatorItem';
      currentSlide = (n + slides.length) % slides.length;
      slides[currentSlide].className = 'sliderBlock_items__itemPhoto sliderBlock_items__showing';
      items.children[currentSlide].className = 'sliderBlock_positionControls__paginatorItem sliderBlock_positionControls__active';
  }


  next.onclick = function () {
      nextSlide();
  };
  previous.onclick = function () {
      previousSlide();
  };


  function goToSlideAfterPushTheMiniBlock() {
      for (var i = 0; i < currentSlideItem.length; i++) {
          currentSlideItem[i].onclick = function (i) {
              var index = Array.prototype.indexOf.call(currentSlideItem, this);
              goToSlide(index);
          }
      }
  }

  goToSlideAfterPushTheMiniBlock();


/////////////////////////////////////////////////////////

///// Specification Field


  var buttonFullSpecification = document.getElementsByClassName("block_specification")[0];
  var buttonSpecification = document.getElementsByClassName("block_specification__specificationShow")[0];
  var buttonInformation = document.getElementsByClassName("block_specification__informationShow")[0];

  var blockCharacteristiic = document.querySelector(".block_descriptionCharacteristic");
  var activeCharacteristic = document.querySelector(".block_descriptionCharacteristic__active");


  buttonFullSpecification.onclick = function () {

      console.log("OK");


      buttonSpecification.classList.toggle("hide");
      buttonInformation.classList.toggle("hide");


      blockCharacteristiic.classList.toggle("block_descriptionCharacteristic__active");


  };


/////  QUANTITY ITEMS

  var up = document.getElementsByClassName('block_quantity__up')[0],
      down = document.getElementsByClassName('block_quantity__down')[0],
      input = document.getElementsByClassName('block_quantity__number')[0];

  function getValue() {
      return parseInt(input.value);
  }

  up.onclick = function (event) {
      input.value = getValue() + 1;
  };
  down.onclick = function (event) {
      if (input.value <= 1) {
          return 1;
      } else {
          input.value = getValue() - 1;
      }

  }


};


//end of product page js//




// add to cart js
