let navbar = document.querySelector('nav');
document.querySelector('.menu').onclick =() => {
    navbar.classList.toggle('active');
}

var images = document.getElementsByClassName("image");

for (var i = 0; i < images.length; i++) {
    images[i].addEventListener("mouseenter", function (event) {
        event.target.classList.add("centered");
    });

    images[i].addEventListener("mouseleave", function (event) {
        event.target.classList.remove("centered");
    });
}


  // Define an array of coffee objects with name and price properties
  var coffees = [
    { name: "Espresso", price: 2.99 },
    { name: "Cappuccino", price: 3.49 },
    { name: "Latte", price: 3.99 },
    { name: "Mocha", price: 4.29 },
    { name: "Americano", price: 2.79 },
    { name: "Macchiato", price: 3.79 },
    { name: "Affogato", price: 4.99 },
    { name: "Flat White", price: 3.99 },
    { name: "Iced Coffee", price: 3.99 },
    { name: "Cold Brew", price: 4.49 },
    { name: "Nitro Cold Brew", price: 4.99 },
    { name: "Pour Over", price: 3.99 },
    { name: "French Press", price: 4.29 },
    { name: "Drip Coffee", price: 2.49 },
    { name: "Turkish Coffee", price: 3.99 },
    { name: "Vienna Coffee", price: 4.49 },
    { name: "Irish Coffee", price: 4.99 },
    { name: "Mexican Coffee", price: 3.99 },
    { name: "Colombian Coffee", price: 4.29 },
    { name: "Brazilian Coffee", price: 3.99 },
    { name: "Ethiopian Coffee", price: 4.49 },
    { name: "Guatemalan Coffee", price: 3.99 },
    { name: "Costa Rican Coffee", price: 4.29 },
    { name: "Honduran Coffee", price: 3.99 },
    { name: "Nicaraguan Coffee", price: 4.49 },
    { name: "Jamaican Coffee", price: 4.99 },
    { name: "Hawaiian Coffee", price: 3.99 },
    { name: "Kenyan Coffee", price: 4.29 },
    { name: "Tanzanian Coffee", price: 3.99 },
    { name: "Yemeni Coffee", price: 4.49 },
    { name: "Indonesian Coffee", price: 3.99 },
    { name: "Vietnamese Coffee", price: 4.29 },
    { name: "Thai Coffee", price: 3.99 },
    { name: "Indian Coffee", price: 4.49 },
    { name: "Mexican Mocha", price: 4.99 },
    { name: "Caramel Macchiato", price: 3.99 },
    { name: "Pumpkin Spice Latte", price: 4.49 },
    { name: "Peppermint Mocha", price: 4.99 },
    { name: "Vanilla Latte", price: 3.99 },
    { name: "Hazelnut Coffee", price: 4.29 },
    { name: "Coconut Mocha", price: 3.99 },
    { name: "Almond Latte", price: 4.49 }
  ];

  var teas = [
    { name: "Earl Grey", price: 2.99 },
    { name: "English Breakfast", price: 2.99 },
    { name: "Green Tea", price: 2.99 },
    { name: "Jasmine Tea", price: 2.99 },
    { name: "Chamomile", price: 2.99 },
    { name: "Peppermint", price: 2.99 },
    { name: "Hibiscus", price: 2.99 },
    { name: "Lemon Ginger", price: 2.99 },
    { name: "Rooibos", price: 2.99 },
    { name: "Matcha", price: 3.49 },
    { name: "Oolong Tea", price: 3.49 },
    { name: "White Tea", price: 3.49 },
    { name: "Darjeeling Tea", price: 3.49 },
    { name: "Assam Tea", price: 3.49 },
    { name: "Pu-erh Tea", price: 3.49 },
    { name: "Sencha", price: 2.99 },
    { name: "Genmaicha", price: 2.99 },
    { name: "Mint Tea", price: 2.99 },
    { name: "Lavender Tea", price: 2.99 },
    { name: "Ginseng Tea", price: 2.99 },
    { name: "Chai Tea", price: 3.49 },
    { name: "Lemon Verbena", price: 2.99 },
    { name: "Lemongrass", price: 2.99 },
    { name: "Berry Blend", price: 2.99 },
    { name: "Vanilla Chai", price: 3.49 }
  ];

  var cakes = [
    { name: "Chocolate Cake", price: 4.99 },
    { name: "Vanilla Cake", price: 4.99 },
    { name: "Red Velvet Cake", price: 4.99 },
    { name: "Carrot Cake", price: 4.99 },
    { name: "Lemon Cake", price: 4.99 },
    { name: "Strawberry Cake", price: 4.99 },
    { name: "Coconut Cake", price: 4.99 },
    { name: "Banana Cake", price: 4.99 },
    { name: "Caramel Cake", price: 4.99 },
    { name: "Peanut Butter Cake", price: 4.99 },
    { name: "Marble Cake", price: 4.99 },
    { name: "Coffee Cake", price: 4.99 },
    { name: "Almond Cake", price: 4.99 },
    { name: "Orange Cake", price: 4.99 },
    { name: "Raspberry Cake", price: 4.99 },
    { name: "Blueberry Cake", price: 4.99 },
    { name: "Mango Cake", price: 4.99 },
    { name: "Pineapple Cake", price: 4.99 },
    { name: "Coconut Lime Cake", price: 4.99 },
    { name: "Hazelnut Cake", price: 4.99 },
    { name: "Salted Caramel Cake", price: 4.99 },
    { name: "Mint Chocolate Cake", price: 4.99 },
    { name: "Black Forest Cake", price: 4.99 },
    { name: "Oreo Cake", price: 4.99 },
    { name: "Strawberry Shortcake", price: 4.99 }
  ];
  var others = [
    { name: "Croissant", price: 2.49 },
    { name: "Muffin", price: 2.99 },
    { name: "Bagel", price: 2.99 },
    { name: "Scone", price: 2.99 },
    { name: "Cookie", price: 1.99 },
    { name: "Brownie", price: 2.49 },
    { name: "Donut", price: 1.99 },
    { name: "Pancake", price: 3.49 },
    { name: "Waffle", price: 3.99 },
    { name: "Yogurt Parfait", price: 3.99 },
    { name: "Granola Bar", price: 1.99 },
    { name: "Fruit Cup", price: 2.99 },
    { name: "Breakfast Burrito", price: 4.99 },
    { name: "Quiche", price: 4.49 },
    { name: "Salad", price: 4.99 },
    { name: "Sandwich", price: 4.99 },
    { name: "Wrap", price: 4.99 },
    { name: "Panini", price: 4.99 },
    { name: "Soup", price: 3.99 },
    { name: "Chips", price: 1.99 },
    { name: "Hummus", price: 2.49 },
    { name: "Guacamole", price: 2.99 },
    { name: "Cheese Plate", price: 4.99 },
    { name: "Charcuterie Board", price: 5.99 },
    { name: "Nachos", price: 4.99 },
    { name: "Pretzel", price: 2.99 }
  ];
  
  
  

  var coffeeDiv = document.querySelector('.coffee');
  var teaDiv = document.querySelector('.rest-products .tea');
  var cakesDiv = document.querySelector('.rest-products .cakes');
  var othersDiv = document.querySelector('.rest-products .others')
  
  coffees.forEach(function(coffee) {
    var coffeeElement = document.createElement('p');
    

    coffeeElement.textContent = coffee.name + " - $" + coffee.price.toFixed(2);
    coffeeDiv.appendChild(coffeeElement);
  });

  teas.forEach(function(tea) {
    var teaElement = document.createElement('p');


    teaElement.textContent = tea.name + " - $" + tea.price.toFixed(2);
    teaDiv.appendChild(teaElement);
  });
  
  cakes.forEach(function(cake) {
    var cakeElement = document.createElement('p');


    cakeElement.textContent = cake.name + " - $" + cake.price.toFixed(2);
    cakesDiv.appendChild(cakeElement);
  });

  others.forEach(function(other) {
    var otherElement = document.createElement('p');


    otherElement.textContent = other.name + " - $" + other.price.toFixed(2);
    othersDiv.appendChild(otherElement);
  });


  function submitForm() {
    // Validate the form fields here
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var englishLevel = document.querySelector('input[name="english-level"]:checked');
    var cvFile = document.querySelector('input[name="cv"]').files[0];

    // Perform additional validation if needed

    // Check if all required fields are filled and CV file is selected
    if (fname && lname && email && englishLevel && cvFile) {
      alert("Form submitted successfully!");
      return true; // Allow the form to submit
    } else {
      alert("Please fill in all required fields and select the CV file.");
      return false; // Prevent the form from submitting
    }
  }
  