function calculateTotal(prices) {
  let total = 0;
  for (let i = 0; i < prices.length; i++) {
    if (prices[i] !== null && typeof prices[i] === 'number') {
      total += prices[i];
    } else {
        //Handle the error, you can choose to throw an error or assign a default value
        //For this example we will assign 0 as a default value
        console.warn('Invalid value encountered in array. Assigning 0');
    }
  }
  return total;
}

let prices = [10, 20, 30, 40, 50];
let total = calculateTotal(prices);
console.log("Total: ", total); 

let emptyPrices = [];
let emptyTotal = calculateTotal(emptyPrices);
console.log("Total for empty array: ", emptyTotal);

let pricesWithNull = [10, 20, null, 40, 50];
let nullTotal = calculateTotal(pricesWithNull);
console.log("Total with null value: ", nullTotal); 

let pricesWithInvalid = [10, 20, 'abc', 40, 50];
let invalidTotal = calculateTotal(pricesWithInvalid);
console.log("Total with invalid value: ", invalidTotal); 