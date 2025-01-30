function calculateTotal(prices) {
  let total = 0;
  for (let i = 0; i < prices.length; i++) {
    total += prices[i];
  }
  return total;
}

let prices = [10, 20, 30, 40, 50];
let total = calculateTotal(prices);
console.log("Total: ", total); //This will correctly calculate the total

//This is where the problem starts when handling empty arrays
let emptyPrices = [];
let emptyTotal = calculateTotal(emptyPrices);
console.log("Total for empty array: ", emptyTotal); //This will return 0 which is expected

//However the unexpected behaviour occurs here
let pricesWithNull = [10, 20, null, 40, 50];
let nullTotal = calculateTotal(pricesWithNull);
console.log("Total with null value: ", nullTotal); //This will also return 0, which is not expected