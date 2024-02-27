var productCounter = {
    count: 0,
    incrementCounter: function () {
      if (this.count < 100) {
        return (this.count = this.count + 1);
      } else {
        alert("maximum limit reached, you can buy only 10 items");
        return this.count;
      }
    },
    decrementCounter: function () {
      if (this.count > 0) {
        return (this.count = this.count - 1);
      } else {
        return (this.count = 0);
      }
    },
  };
  
  var displayCout = document.getElementById("displayCounter");
  displayCout.innerHTML = 1;
  document.getElementById("increment").onclick = function () {
    displayCout.innerHTML = productCounter.incrementCounter();
  };
  document.getElementById("decrement").onclick = function () {
    displayCout.innerHTML = productCounter.decrementCounter();
  };



  $(".you-may-interested-slider-area").slick({
    dots: true,
    autoplaySpeed: 2500,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1201,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });